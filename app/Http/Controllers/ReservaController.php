<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class ReservaController extends Controller
{
    private const MAX_RESERVAS_POR_DIA = 70;

    public function store(Request $request)
    {   
        // Validar los datos recibidos del formulario
        $request->validate($this->validationRules());

        // Verificar límite de reservas para la fecha seleccionada
        if ($this->reservasExcedidas($request->input('date'))) {
            return redirect()->route('cupo_completo')->with('message', 'Estamos llenos');
        }

        // Generar código de cancelación
        $codigo = $this->generarCodigoCancelacion();

        // Crear la reserva
        $reserva = $this->crearReserva($request, $codigo);

        // Enviar el código de cancelación por correo
        $this->enviarCodigoPorCorreo($request->mail, $codigo);

        return redirect()->route('reserve_correcta')->with('message', 'Reserva creada correctamente');
    }

    public function cancelar(Request $request)
    {
        // Validar el código de reserva ingresado
        $request->validate([
            'codigo' => 'required|string',
        ]);

        // Buscar y cancelar la reserva
        if ($this->cancelarReserva($request->codigo)) {
            return redirect()->route('reserve_cancel_correcta')->with('message', 'Reserva cancelada correctamente');
        } else {
            return redirect()->route('cod_no_existe')->with('message', 'El código no existe');
        }
    }

    private function validationRules(): array
    {
        return [
            'name' => 'required|string',
            'mail' => 'required|string',
            'telf' => 'required|string',
            'adultos' => 'required|integer',
            'niños' => 'required|integer',
            'trona' => 'required|integer',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'alergias' => 'required|string'
        ];
    }

    private function reservasExcedidas(string $fecha): bool
    {
        $reservasEnFecha = Reserva::whereDate('fecha', $fecha)->count();
        return $reservasEnFecha >= self::MAX_RESERVAS_POR_DIA;
    }

    private function generarCodigoCancelacion(): string
    {
        $codigoAleatorio = mt_rand(0, 999999);
        $date = now()->format('Ymd');
        return "C-{$date}-{$codigoAleatorio}";
    }

    private function crearReserva(Request $request, string $codigo): Reserva
    {
        return Reserva::create([
            'nombre' => $request->name,
            'mail' => $request->mail,
            'telf' => $request->telf,
            'num_adultos' => $request->adultos,
            'num_niños' => $request->niños,
            'trona' => $request->trona,
            'fecha' => $request->date,
            'hora' => $request->time,
            'alergias' => $request->alergias,
            'estado' => 'reservado',
            'codigo' => $codigo,
        ]);
    }

    private function enviarCodigoPorCorreo(string $email, string $codigo): void
    {
        Mail::raw('Tu código para la cancelación de reserva es: ' . $codigo . ' caduca en un día', function ($message) use ($email) {
            $message->to($email)->subject('Código de reserva');
        });
    }

    private function cancelarReserva(string $codigo): bool
    {
        $reserva = Reserva::where('codigo', $codigo)->first();

        if ($reserva) {
            $reserva->estado = 'cancelado';
            $reserva->save();

            Mail::raw('Tu reserva ha sido cancelada.', function ($message) use ($reserva) {
                $message->to($reserva->mail)->subject('Cancelación de Reserva');
            });

            return true;
        }

        return false;
    }
}

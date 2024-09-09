<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Database\QueryException; // Importa QueryException

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Throwable $exception)
    {
        // Verifica si es una excepción de la base de datos por violación de clave única
        if ($exception instanceof QueryException && $exception->errorInfo[1] == 1062) {
            return response()->json([
                'message' => 'Este dato ya existe en nuestra base de datos',  // Mensaje personalizado
            ], 409);  // Código de estado HTTP 409: Conflict
        }

        // Delega las demás excepciones al controlador predeterminado
        return parent::render($request, $exception);
    }
}

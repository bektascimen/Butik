<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param Throwable $e
     * @return void
     * @throws Throwable
     */
    public function report(Throwable $e)
    {
        parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param Request $request
     * @param Throwable $e
     * @return Response
     * @throws Throwable
     */
    public function render($request, Throwable $e)
    {
        if ($e instanceof NotFoundHttpException)
            {
                return response()->view('errors.404', compact('exception'), 404);
            }

        if ($e instanceof ModelNotFoundException)
            {
                return response()->view('errors.404', compact('exception'), 404);
            }

        return parent::render($request, $e);
    }

    protected function unauthenticated($request, AuthenticationException $exception)
    {
      return $request->expectsJson()
          ? response()->json(['message' => 'Unauthenticated.'], 401)
          : redirect()->guest(route('anasayfa'));
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\Facades\View; 
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth; // <--- ¡ESTA ES LA QUE TE FALTA!
use App\Models\VentaCabecera;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
{
    View::composer('*', function ($view) {
        $cantidad = 0;

        if (Auth::check()) {
            $carrito = VentaCabecera::where('user_id', Auth::id())
                ->where('estado', 'carrito') 
                ->first();

            if ($carrito) {
                $cantidad = $carrito->detalles()->sum('cantidad');
            }
        }

        $view->with('cantidadCarrito', $cantidad);
    });
}
}

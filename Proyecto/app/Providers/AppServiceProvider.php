<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider; 
use GuzzleHttp\Client; //ayuda a la comunicacion con la Api //

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        /**
* Conexion a la API, base uri es la ruta base
* y verify false es para evitar problemas con el certificado.
* @retorna el objeto cliente con la conexion configurada.
*/
    $this->app->singleton('GuzzleHttp\Client', function(){
    return new Client([
    'base_uri' =>
     'https://noestudiosolo.inf.uct.cl/', //enlace de api para obtener los datos de client
    'verify' => false
         ]);
      });
    }
}

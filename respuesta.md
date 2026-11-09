RA5_2--Estructura de un proyecto, configuración y Artisan
-------1------
¿En qué fichero está la vista de la página de bienvenida? En resources/views/welcome.blade.php

¿En qué fichero se define la ruta que la muestra? Copia sus líneas. routes/web.php
Route::get('/', function () {
    return view('welcome');
});

¿Qué hay en storage/logs/? alli se guardan el archivo de  registro de fallos y errores que se genera en la aplicacion a la hora de ejecucion.

¿Y en storage/framework/sessions/? alli se guarda los archivos del valor de las variables de sesion que se ejecuta cada vez.

¿Por qué esta última está vacía? (Pista: el SESSION_DRIVER de tu .env.)
porque las variables de  sesiones las iremos guardando en la base de datos, ya que de esta manera es mas sencillo el 
manejo de esas variables a la hora de trabajar en grupo. Laravel busca la tabla sessions en la base de datos en lugar de crear archivos de texto en storage/framework/sessions/ porque lo hemos configurado asi en el archivo .env

------6---------
Abre vendor/composer/autoload_psr4.php. ¿Qué línea corresponde al espacio de nombres App\? ¿Quién ha generado ese fichero?
'App\\' => array($baseDir . '/app', $vendorDir . '/laravel/pint/app'),
Ese fichero es generado por la herramienta composer al ejecutar el comando 'composer install', 'composer update' o 'composer dump-autoload', y se guarda concretamente dentro de la carpeta vendor.
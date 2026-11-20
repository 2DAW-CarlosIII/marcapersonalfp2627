<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('marcapersonalfp:centro', function () {
    $this->info(config('marcapersonalfp.centro'));
})->purpose('Muestra el nombre del centro');

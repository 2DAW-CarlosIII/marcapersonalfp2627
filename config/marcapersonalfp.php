<?php

return [

    // Nombre del centro que se muestra en la aplicación.
    'centro' => env('NOMBRE_CENTRO', 'CIFP Carlos III'),

    "proyectos" => [
        ['docente_id' => 1, 'nombre' => 'Tecnologías de la Información', 'dominio' => 'TecnologiaInformacion',
            'metadatos' => ['fecha_inicio' => '2023-01-15', 'fecha_fin' => '2023-05-30', 'calificacion' => 9.5]],
        ['docente_id' => 1, 'nombre' => 'Diseño Gráfico', 'dominio' => 'DisenyoGrafico',
            'metadatos' => ['fecha_inicio' => '2023-02-10', 'fecha_fin' => '2023-06-20', 'calificacion' => 4.0]],
        ['docente_id' => 2, 'nombre' => 'Electrónica', 'dominio' => 'Electronica',
      'metadatos' => ['fecha_inicio' => '2023-03-05', 'fecha_fin' => '2023-07-15', 'calificacion' => 9.2]],
 ],
];



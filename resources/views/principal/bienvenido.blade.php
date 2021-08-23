<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body style="background-color:grey">
<div class="grid grid-cols-3 text-center">
            <div class="bg-red-700 "> .</div>
            <div class="bg-yellow-500 "> </div>
            <div class="bg-green-700"> </div>
</div>  
    
    <h1 class="text-6xl mb-10 text-center text-blue-800"><u> Sistema Dental</u></h1>
    <h2 class="text-4xl mb-10 text-green-900"><u>Bienvenido {{ $nombre }}</u></h2>
    <p>
    La dentición ha sido durante mucho tiempo una de las estructuras biológicas
mejor estudiadas, esta singularidad radica en su resistencia al paso del tiempo.
El sistema dental ofrece una posibilidad incomparable para comprender mejor el
origen y filogénesis de los vertebrados, entre ellos el hombre. Esta investigación,
a través de una revisión bibliográfica, explora cuatro aspectos del sistema dental,
como son: Su origen, el aspecto biológico, la utilidad de los rasgos dentales en
los análisis poblacionales, y finalmente, intenta precisar las bases genéticas de
los dientes. Con respecto a este último, lo fundamental no estaría sólo en la descripción morfológica del diente, sino el porqué de su morfología, es decir, porqué
son lo que son. Por lo tanto, se puede indagar: ¿porqué se producen diferentes
variedades morfológicas dentro de nuestra especie?, entre otras interrogantes
    </p>
    <div class="grid grid-cols-1 text-center mt-20  ">
    <a class="text-3xl bg-green-500 py-2 rounded w-full py-1 px-2 text-white" href="{{ route('pacientes.index') }}">Ir al Menu Pacientes</a>
</body>
</html>
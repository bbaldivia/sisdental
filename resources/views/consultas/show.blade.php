<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles de consulta</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>
<body style="background-color:grey">
<div class="grid grid-cols-3 text-center">
            <div class="bg-green-700 text-4xl text-red-500 text text-left py-6" ><A HREF="https://sisdental.test/bienvenido/Boris"><b>SisDental</b></A></div>
            <div class="bg-green-700 text-4xl text-red-600 text"></div>
            <div class="bg-green-700 text-4xl text-red-500 text text-right py-6"><b> Consultas</b></div>
    </div> 
    <div class="grid grid-cols-1 text-center gap-4  "> 
    <h1 class="text-blue-900 text-4xl my-4"><b>Detalles de consulta</b></h1>
</div>
    <table>
        <tr style="background-color: rgb(155, 252, 142); ">
            <th class="text-left">ID</th>
            <td>{{ $consulta->id }}</td>
        </tr>
        <tr style="background-color: rgb(255, 255, 255); ">
            <th class="text-left">Paciente</th>
            <td>{{ $consulta->paciente->nombre }}</td>
        </tr>
        <tr style="background-color: rgb(155, 252, 142); ">
            <th class="text-left">Edad</th>
            <td>{{ $consulta->paciente->edad }}</td>
        </tr>
        <tr style="background-color: rgb(255, 255, 255); ">
            <th class="text-left">Diagnóstico</th>
            <td>{{ $consulta->diagnostico }}</td>
        </tr>
        <tr style="background-color: rgb(155, 252, 142); ">
            <th class="text-left">Receta</th>
            <td>{{ $consulta->receta }}</td>
        </tr>
        <tr style="background-color: rgb(255, 255, 255); ">
            <th class="text-left">Fecha y hora de creación</th>
            <td>{{ $consulta->created_at }}</td>
        </tr>
    </table>
    <div class="grid grid-cols-12 text-center gap-6 mt-10 ">
    <a class="bg-green-500 py-2 rounded w-full py-1 px-1 text-white"  href="{{ route('consultas.index') }}">Volver</a>
</body>
</html>
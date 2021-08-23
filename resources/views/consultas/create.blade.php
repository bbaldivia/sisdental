<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar consulta</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body style="background-color:grey"> 
<div class="grid grid-cols-3 text-center">
                <div class="bg-green-700 text-4xl text-red-500 text text-left py-6" ><A HREF="https://sisdental.test/bienvenido/Boris"><b>SisDental</b></A></div>
            <div class="bg-green-700 text-4xl text-red-600 text"></div>
            <div class="bg-green-700 text-4xl text-red-500 text text-right py-6"><b> Registrar Consulta</b></div>
    </div>    
    <div class="container mx-left">
    <div class="grid grid-cols-1 text-left gap-6 mt-10   ">
        <form action="{{ route('consultas.store') }}" method="post">
            @csrf


            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                <label class="block text-white font-bold md:text-right mb-1 md:mb-0 pr-4" for="paciente_id">
                    Paciente
                </label>
                </div>
                <div class="md:w-2/3">
                <select class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                    id="paciente_id" name="paciente_id">
                    @foreach ($pacientes as $paciente)
                        <option value="{{ $paciente->id }}">{{ $paciente->nombre }} (CI: {{ $paciente->ci }})</option>
                    @endforeach
                </select>
                </div>
            </div>

            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                <label class="block text-white font-bold md:text-right mb-1 md:mb-0 pr-4" for="diagnostico">
                    Diagnóstico
                </label>
                </div>
                <div class="md:w-2/3">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                    id="diagnostico" name="diagnostico" type="text" value="">
                </div>
            </div>

            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                <label class="block text-white font-bold md:text-right mb-1 md:mb-0 pr-4" for="receta">
                    Receta
                </label>
                </div>
                <div class="md:w-2/3">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                    id="receta" name="receta" type="text" value="">
                </div>
            </div>
            
            <div class="text-center">
                <button class="bg-blue-600 text-white py-2 px-5 rounded hover:bg-blue-800">Guardar consulta</button>
            </div>
        </form>
    </div>
</body>
</html>
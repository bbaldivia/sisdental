<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de pacientes</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    
</head>
<body style="background-color:grey">
    <div>
    <div class="grid grid-cols-3 text-center">
            <div class="bg-green-700 text-4xl text-red-500 text text-left py-6" ><A HREF="https://sisdental.test/bienvenido/Boris"><b>SisDental</b></A></div>
            <div class="bg-green-700 text-4xl text-red-600 text"></div>
            <div class="bg-green-700 text-4xl text-red-500 text text-right py-6"><b> Pacientes</b></div>
    </div>         
        <ul>
            <div class="grid grid-cols-3 text-center    ">
            <div class="bg-green-500 mb-10 " <li><a class="bg-gray-200 border-2 border-gray-200 rounded w-full py-1 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" style="color:blue" href="{{ route('pacientes.index') }}">Pacientes</a></li> </div>
            <div class="bg-green-500 mb-10" <li><a class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-1 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" style="color:blue" href="{{ route('consultas.index') }}">Consultas</a></li></div>
            <div class="bg-green-500 appearance-none py-6 rounded w-full py-1 px-1 text-blue-800 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" <p><b>Búsqueda:</b><input type="search" name="busqueda" placeholder="Nombre..."><input type="submit" value="Buscar"></p></div>
</div>  
            <div class="grid grid-cols-12 grid-fils-2 text-center">
            <a href="{{ route('pacientes.create') }}" class="bg-green-500 py-2 rounded w-full py-1 px-1 text-white">Registrar Paciente</a>
            <form action="../../form-result.php" method="post" target="_blank">
</form>
        </ul>
    </div>
    <div class="grid grid-cols-1 text-center gap-4  ">
    <h1 class="text-red-900 text-4xl my-4"><u><b>Lista de Pacientes</b></u></h1>
    <table>
        <thead>
            <tr >
                <th style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid; border-right: thin solid; background-color:#008080 ">Id</th>
                <th style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid; border-right: thin solid; background-color:#008080">Nombre</th>
                <th style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid; border-right: thin solid; background-color:#008080">CI</th>
                <th style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid; border-right: thin solid; background-color:#008080">Whatsapp</th>
                <th style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid; border-right: thin solid; background-color:#008080">Fecha de nacimiento</th>
                <th style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid; border-right: thin solid; background-color:#008080">Fecha de creación</th>
                <th style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid; border-right: thin solid; background-color:#008080">Acciones</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($pacientes as $paciente)    
            <tr style="background-color: rgb(155, 252, 142); ">
                <td style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid; border-right: thin solid; background-color:#008080 ">{{ $paciente->id }}</td>
                <td style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid; border-right: thin solid; background-color:rgb(155, 252, 142); ">{{ $paciente->nombre }}</td>
                <td style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid; border-right: thin solid; background-color:rgb(155, 252, 142); ">{{ $paciente->ci }}</td>
                <td style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid; border-right: thin solid; background-color:rgb(155, 252, 142); ">
                    <a href="https://wa.me/591{{ $paciente->whatsapp }}/?text=Bienvenido%20a%20consultorio%20dental%20Dientes%20de%20sable" target="_blank" rel="noopener noreferrer">
                        {{ $paciente->whatsapp }}
                    </a>
                </td>
                <td style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid; border-right: thin solid; background-color:rgb(155, 252, 142); ">{{ $paciente->fecha_nac }}</td>
                <td style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid; border-right: thin solid; background-color:rgb(155, 252, 142); ">{{ $paciente->created_at }}</td>
                <td style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid; border-right: thin solid; background-color:rgb(155, 252, 142); ">
                    <a class="bg-green-500 rounded w-full py-1 px-1 text-white" href=" {{ route('pacientes.show', $paciente->id) }}">Ver detalles</a>
                    <a class="bg-green-500 rounded w-full py-1 px-1 text-white" href="{{ route('pacientes.edit', $paciente->id) }}">Editar</a>
                    <form onsubmit="return confirmarBorrado()" class="form-borrar text-red-700" action="{{ route('pacientes.destroy', $paciente->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <div align='center'>
                        <button type="submit"><b>Eliminar</b></button>
                        </div>
                    </form>
                    
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    
    <script>
// Aquí viene el código Javascript
// elems = document.getElementsByTagName("form");
// console.log(elems);
function confirmarBorrado() {
    var confirmacion = confirm("Está seguro de borrar este registro?");
    if (confirmacion) {
        return true;
    }
    else {
        return false;
    }
}

    </script>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <h1>Personas</h1>

        @foreach ($personas as $persona)
            <div>
                {{ $persona->nombre }} - {{ $persona->apellido }} - {{ $persona->telefono }}
            </div>
        @endforeach
    </body>
</html>
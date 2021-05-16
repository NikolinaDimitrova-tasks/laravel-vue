<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
            <div> Name | Date | Time </div>
            @foreach($appointments as $key=> $appointment)
            <div> {{$appointment->name}}  | {{$appointment->time}}   | {{$appointment->date}}  </div>
            @endforeach
</body>

</html>
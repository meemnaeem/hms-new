<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <livewire:counter />
    <p>Welcome to my website...</p>


    @livewireScripts
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>

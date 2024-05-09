<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
    @livewireStyles
</head>
<body>
    <div class="">
        @livewire('header')
    </div>

    <div class="">
        @livewire('sidebar')
    </div>
      
    <main>
        {{ $slot }}
    </main>
    
    @livewireScripts
</body>
</html>
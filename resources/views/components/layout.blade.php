<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        <x-nav-link href=" ">Home</x-nav-link>
        <x-nav-link>Stundenplan</x-nav-link>
        <x-nav-link>Geburtstage</x-nav-link>
    </header>

    {{ $slot }}
</body>

</html>

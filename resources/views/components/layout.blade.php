<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="mt-2 align-middle">
    <header>
        <nav class="flex justify-between items-center px-4 py-2 bg-gray-400 ">
            <div class="space-x-2">
                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                <x-nav-link href="/birthdays" :active="request()->is('birthdays')">Birthdays</x-nav-link>
                <x-nav-link href="/friends" :active="request()->is('friends')">Friends</x-nav-link>
            </div>
            <div class="space-x-2">
                @guest
                    <x-nav-link href="/login" :active="request()->is('login')">Log In</x-nav-link>
                    <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link>
                @endguest

                @auth
                    <form action="/logout" method="POST">
                        @csrf
                        <x-form-button>logout</x-form-button>
                    </form>
                @endauth
            </div>
        </nav>
    </header>
    <main class="mt-10 max-w-[986px] mx-auto">
        {{ $slot }}
    </main>

</body>

</html>

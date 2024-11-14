<x-layout>
    @auth
        <div class="text-right">
            <p>{{ $userName }}</p>
        </div>
    @endauth

    <section class="text-center pt-6">
        <h1 class="font-bold text-4xl">Dashboard</h1>
    </section>

    @guest
        <x-section-wrapper class="bg-gray-200 rounded-lg p-2 mt-2">
            <a href="/login" class="underline">Please Log in </a>
        </x-section-wrapper>
    @endguest

    @auth
        <x-section-wrapper class="bg-gray-200 rounded-lg p-2 mt-2">

            <h3 class="font-bold mb-1">Anstehende Geburtstage</h3>
            <div class="py-1">
                @foreach ($birthdays as $birthday)
                    <x-birthday-upcoming :$birthday />
                @endforeach
            </div>

            <div class="mt-1">
                <a href="/birthdays" class="underline font-bold">Mehr</a>
            </div>
        </x-section-wrapper>
    @endauth
</x-layout>

<x-layout>

    <section class="text-center pt-6">
        <h1 class="font-bold text-4xl">Dashboard</h1>
    </section>

    <x-section-wrapper class="bg-gray-200 rounded-lg p-2 mt-2">

        <h3 class="font-bold">Anstehende Geburtstage</h3>
        <div class="py-1">
            @foreach ($birthdays as $birthday)
                <x-birthday-upcomming :$birthday />
            @endforeach
        </div>
    </x-section-wrapper>

    <section class="bg-gray-200 rounded-lg p-2 mt-2">
        <div class="flex justify-between">
            <h3 class="font-bold">Stundenplan</h3>
            <div class="flex justify-between">
                <button class="px-3 after:">Sascha</button>
                <button>Rene</button>
            </div>
        </div>

        <div class="py-1">
            <p>uni abc</p>
            <p>uni abc</p>
            <p>uni abc</p>
            <p>uni abc</p>
            <p>uni abc</p>
        </div>
        <a href="" class="underline">Mehr lesen</a>
    </section>

</x-layout>

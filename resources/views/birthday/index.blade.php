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

    <x-section-wrapper class="bg-gray-300 rounded-lg p-2 mt-2">
        <div class="text-center">
            <a href="create-birthday" class="font-bold">Geburtstag Hinzufügen </a>
        </div>
    </x-section-wrapper>


</x-layout>

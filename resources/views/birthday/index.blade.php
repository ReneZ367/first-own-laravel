<x-layout>

    <section class="text-center pt-6">
        <h1 class="font-bold text-4xl">Dashboard</h1>
    </section>

    <x-section-wrapper>

        <h3 class="font-bold">Anstehende Geburtstage</h3>
        <div class="py-1">
            @foreach ($birthdays as $birthday)
                <x-birthday-upcoming :$birthday />
            @endforeach
        </div>
    </x-section-wrapper>

    <x-section-wrapper class="bg-gray-400 text-center">
        <a href="create-birthday" class="font-bold w-full inline-block ">Add Birhtday</a>
    </x-section-wrapper>


</x-layout>

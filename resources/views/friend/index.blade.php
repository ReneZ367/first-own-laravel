<x-layout>

    <section class="text-center pt-6">
        <h1 class="font-bold text-4xl">Friends</h1>
    </section>

    <x-section-wrapper>

        <h3 class="font-bold"></h3>
        <div class="py-1">
            {{--             @foreach ($birthdays as $birthday)
                <x-birthday-upcomming :$birthday />
            @endforeach --}}
        </div>
    </x-section-wrapper>

    <x-section-wrapper class="bg-gray-400 text-center">
        <a href="create-birthday" class="font-bold w-full inline-block ">Add Friend</a>
    </x-section-wrapper>


</x-layout>

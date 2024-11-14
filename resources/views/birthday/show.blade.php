<x-layout>
    <h1 class="text-center font-bold text-2xl mb-4">Birhtday</h1>

    <x-section-wrapper>
        <div class="">
            <p class="p-1">{{ $birthday['name'] }}</p>
            <p class="p-1">{{ $birthday['birth_date'] }}</p>
            <p class="p-1">{{ $birthday['present-idea'] }}</p>
            <p class="p-1">{{ $birthday['relationship'] }}</p>
            <hr>
        </div>

        <div class="text-end mt-2">
            <a href="/birthday/{{ $birthday['id'] }}/edit"
                class="text-sm font-semibold leading-6 text-gray-900 px-2 py-1  bg-gray-100 rounded-lg">Edit</a>
            <a href="{{ url()->previous() }}"
                class="text-sm font-semibold leading-6 text-gray-900 px-2
                py-1 bg-gray-100 rounded-lg">Back</a>
        </div>

        </x-section-warpper>


</x-layout>

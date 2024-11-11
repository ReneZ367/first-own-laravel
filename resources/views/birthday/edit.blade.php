<x-layout>
    <h1 class="text-center font-bold text-2xl mb-4">Geburtstag</h1>

    <x-section-wrapper>
        <form method="POST" action="/birthday/{{ $birthday['id'] }}">
            @csrf
            @method('PATCH')

            <div class="space-y-12">
                <div class="mt-4 border-b border-gray-900/10 pb-12">

                    <x-form-field>
                        <x-form-label for="name">Name</x-form-label>

                        <div>
                            <x-form-input name="name" id="name" value="{{ $birthday['name'] }}" />
                            <x-form-error name="name" />
                        </div>

                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="name">Datum</x-form-label>

                        <div>
                            <x-form-input name="date" id="date" value="{{ $birthday['date'] }}" />
                            <x-form-error name="date" />
                        </div>

                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="name">Geschenk Idee</x-form-label>

                        <div>
                            <x-form-input name="present-idea" id="present-idea"
                                value="{{ $birthday['present-idea'] }}" />
                            <x-form-error name="presentIdea" />
                        </div>

                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="name">Freunde oder Fam?</x-form-label>

                        <div>
                            <x-form-input name="relationship" id="relationship"
                                value="{{ $birthday['relationship'] }}" />
                            <x-form-error name="relationship" />
                        </div>

                    </x-form-field>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <x-form-button form="delete-form" class="bg-red-500">Delete</x-form-button>
                <a href="/birthdays" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <x-form-button>Save</x-form-button>
            </div>

        </form>
    </x-section-wrapper>

    <form method="POST" action="/birthday/{{ $birthday['id'] }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')

    </form>

</x-layout>

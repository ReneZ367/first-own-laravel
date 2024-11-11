<x-layout>

    <section class="text-center pt-6">
        <h1 class="font-bold text-4xl">Add Birthday</h1>
    </section>

    <x-section-wrapper class="bg-gray-200 rounded-lg p-2 mt-2">


        <form method="POST" action="/create-birthday">
            @csrf


            <div class="space-y-12">
                <div class="mt-4 border-b border-gray-900/10 pb-12">

                    <x-form-field>
                        <x-form-label for="name">Name</x-form-label>

                        <div>
                            <x-form-input name="name" id="name" placeholder="Anegret Bergen" required />
                            <x-form-error name="name" />
                        </div>

                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="date">Datum</x-form-label>

                        <div>
                            <x-form-input name="date" id="date" placeholder="19.07.2015" required />
                            <x-form-error name="date" />
                        </div>

                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="name">Geschenk Idee</x-form-label>

                        <div>
                            <x-form-input name="present-idea" id="present-idea" placeholder="Kaffee Tassen" />
                            <x-form-error name="presentIdea" />
                        </div>

                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="name">Freunde oder Fam?</x-form-label>

                        <div>
                            <x-form-input name="relationship" id="relationship" placeholder="Familie" required />
                            <x-form-error name="relationship" />
                        </div>

                    </x-form-field>
                </div>

            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/birthdays" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <x-form-button>Save</x-form-button>
            </div>

        </form>
    </x-section-wrapper>

</x-layout>

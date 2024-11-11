<x-layout>

    <section class="text-center pt-6">
        <h1 class="font-bold text-4xl">Login</h1>
    </section>

    <x-section-wrapper class="bg-gray-200 rounded-lg p-2 mt-2">


        <form method="POST" action="/login">
            @csrf


            <div class="space-y-12">
                <div class=" mt-4 border-b border-gray-900/10 pb-12">
                    <x-form-field>
                        <x-form-label for="email">E-Mail</x-form-label>

                        <div>
                            <x-form-input type="email" name="email" id="email" placeholder="exam@ple.com"
                                :value="old('email')" />
                            <x-form-error name="email" />
                        </div>

                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>

                        <div>
                            <x-form-input tpye="password" name="password" id="password" />
                            <x-form-error name="password" />
                        </div>
                    </x-form-field>

                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <x-form-button>Login</x-form-button>
            </div>

        </form>
    </x-section-wrapper>

</x-layout>

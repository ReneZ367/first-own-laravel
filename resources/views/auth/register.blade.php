<x-layout>

    <section class="text-center pt-6">
        <h1 class="font-bold text-4xl">Register</h1>
    </section>

    <x-section-wrapper class="bg-gray-200 rounded-lg p-2 mt-2">


        <form method="POST" action="/register">
            @csrf


            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="mt-4 ">

                        <x-form-field>
                            <x-form-label for="first_name">First Name</x-form-label>

                            <div>
                                <x-form-input name="first_name" id="first_name" placeholder="Thomas" :value="old('first_name')"
                                    required />
                                <x-form-error name="first_name" />
                            </div>

                        </x-form-field>

                        <x-form-field>
                            <x-form-label for="last_name">Last Name</x-form-label>

                            <div>
                                <x-form-input name="last_name" id="last_name" placeholder="Müller" :value="old('last_name')"
                                    required />
                                <x-form-error name="last_name" />
                            </div>

                        </x-form-field>

                        <x-form-field>
                            <x-form-label for="email">E-Mail</x-form-label>

                            <div>
                                <x-form-input type="email" name="email" id="email" placeholder="exam@ple.com"
                                    required />
                                <x-form-error name="email" />
                            </div>

                        </x-form-field>

                        <x-form-field>
                            <x-form-label for="password">Password</x-form-label>

                            <div>
                                <x-form-input tpye="password" name="password" id="password" required />
                                <x-form-error name="password" />
                            </div>

                        </x-form-field>

                        <x-form-field>
                            <x-form-label for="password_confirmation">Confirm Password</x-form-label>

                            <div>
                                <x-form-input type="password" name="password_confirmation" id="password_confirmation"
                                    required />
                                <x-form-error name="password_confirmation" />
                            </div>

                        </x-form-field>
                    </div>

                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <x-form-button>Register</x-form-button>
            </div>

        </form>
    </x-section-wrapper>

</x-layout>

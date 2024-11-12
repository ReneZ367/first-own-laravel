<x-layout>

    <section class="text-center pt-6">
        <h1 class="font-bold text-4xl">Add Friend</h1>
    </section>

    <x-section-wrapper class="bg-gray-200 rounded-lg p-2 mt-2">


        <form method="POST" action="/create-friend">
            @csrf
            <div class="space-y-12">
                <div class=" mt-4 border-b border-gray-900/10 pb-12">
                    <x-form-field>
                        <x-form-label for="friend_id">Friend-ID</x-form-label>

                        <div>
                            <x-form-input type="number" name="friend_id" id="friend_id" placeholder="164526"
                                :value="old('friend_id')" />
                            <x-form-error name="friend_id" />
                            <x-form-error name="user_friend_id" />
                        </div>

                    </x-form-field>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/friends" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <x-form-button>Send Request</x-form-button>
            </div>

        </form>
    </x-section-wrapper>

</x-layout>

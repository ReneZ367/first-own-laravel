<x-layout>

    <section class="text-center pt-6">
        <h1 class="font-bold text-4xl">Friends</h1>
    </section>

    <x-section-wrapper>

        <h3 class="font-bold"></h3>
        <div class="py-1">

            @if (!empty($friends))
                @foreach ($friends as $friend)
                    <div class="flex rwo justify-between p-1">
                        <p>{{ $friend['friend_name'] }} </p>
                        <div>
                            <form action="/delete-friend/{{ $friend['id'] }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <x-button>delete</x-button>
                            </form>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No friends yet</p>
            @endif

        </div>
    </x-section-wrapper>

    <x-section-wrapper class="bg-gray-400 text-center">
        <a href="create-friend" class="font-bold w-full inline-block ">Add Friend</a>
    </x-section-wrapper>

    <x-section-wrapper class="bg-gray-300">
        <h2 class="font-bold mb-2">Friend Requests:</h2>

        @if (!empty($friend_request))
            @foreach ($friend_request as $request)
                <div class="flex rwo justify-between p-1">
                    <p>{{ $request['friend_name'] }}</p>
                    <div class="flex row">
                        <form action="/accept-friend/{{ $request['id'] }}" method="POST" class=" pr-1">
                            @csrf
                            @method('PATCH')
                            <x-button>Accept</x-button>
                        </form>
                        <form action="/deny-friend/{{ $request['id'] }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <x-button>deny</x-button>
                        </form>
                    </div>
                </div>
            @endforeach
        @else
            <p>No friend requests</p>
        @endif

    </x-section-wrapper>


</x-layout>

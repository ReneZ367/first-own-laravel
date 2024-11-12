<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use App\Models\User;
use Auth;
use Illuminate\Validation\ValidationException;

class FriendController extends Controller
{
    public function index()
    {
        $friendRequests = Friend::where('friend_id', Auth::user()->friend_id)->where('accepted', false)->get();
        $friends = Friend::where('user_friend_id', Auth::user()->friend_id)->where('accepted', true)->get();

        return view('friend.index', [
            'friends' => $friends,
            'friend_request' => $friendRequests,
        ]);
    }
    public function create()
    {
        return view('friend.create');
    }
    public function store()
    {
        $attributes = request()->validate([
            'friend_id' => ['int', 'min:100000', 'max:999999', 'required']
        ]);

        $attributes = [
            'user_name' => Auth::user()->name,
            'user_friend_id' => Auth::user()->friend_id,
            'friend_name' => User::where('friend_id', request('friend_id'))->value('name'),
            'friend_id' => User::where('friend_id', request('friend_id'))->value('friend_id'),
            'accepted' => false,
        ];

        if ($attributes['user_friend_id'] == $attributes['friend_id']) {
            throw ValidationException::withMessages([
                'user_friend_id' => 'You cant add yourself',
            ]);
        }

        //dd(Friend::where('user_friend_id', Auth::user()->friend_id)->where('friend_id', $attributes['friend_id'])->first('friend_id'));

        if ($attributes['friend_id'] == Friend::where('user_friend_id', Auth::user()->friend_id)->where('friend_id', $attributes['friend_id'])->value('friend_id')) {
            throw ValidationException::withMessages([
                'user_friend_id' => 'already added',
            ]);
        }

        Friend::create($attributes);
        return redirect('/friends');
    }
    public function acceptFriend(Friend $id)
    {
        $id->update(['accepted' => true]);


        $attributes = [
            'user_name' => $id['friend_name'],
            'user_friend_id' => $id['friend_id'],
            'friend_name' => $id['user_name'],
            'friend_id' => $id['user_friend_id'],
            'accepted' => true,
        ];


        Friend::create($attributes);
        return redirect('/friends');
    }
    public function destroy(Friend $id)
    {

        Friend::where('user_friend_id', $id['friend_id'])->where('friend_id', $id['user_friend_id'])->delete();
        $id->delete();
        return redirect('/friends');
    }

    public function deny(Friend $id)
    {
        $id->delete();
        return redirect('/friends');
    }

}

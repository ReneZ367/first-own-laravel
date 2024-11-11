<?php

namespace App\Http\Controllers;

use App\Models\Birthday;
use App\Models\User;
use Auth;

class BirthdayController extends Controller
{
    public function index()
    {
        return view('birthday.index', [
            'birthdays' => User::find(Auth::user()->id)->birthdays,
        ]);
    }

    public function create()
    {
        return view('birthday.create');
    }

    public function store()
    {
        request()->validate([
            'name' => ['required', 'min:3'],
            'date' => ['required', 'min:3'],
            'present-idea' => ['max:255'],
            'relationship' => ['required', 'min:3'],
        ]);

        Birthday::create([
            'name' => request('name'),
            'date' => request('date'),
            'user_id' => Auth::user()->id,
            'present-idea' => request('present-idea'),
            'relationship' => request('relationship'),
        ]);

        return redirect('/birthdays');
    }

    public function show(Birthday $birthday)
    {
        return view('birthday.show', ['birthday' => $birthday]);
    }

    public function edit(Birthday $birthday)
    {
        return view('birthday.edit', ['birthday' => $birthday]);
    }

    public function update(Birthday $birthday)
    {
        request()->validate([
            'name' => ['required', 'min:3'],
            'date' => ['required', 'min:3'],
            'present-idea' => ['max:255'],
            'relationship' => ['required', 'min:3'],
        ]);

        $birthday->update([
            'name' => request('name'),
            'date' => request('date'),
            'user_id' => Auth::user()->id,
            'present-idea' => request('present-idea'),
            'relationship' => request('relationship'),
        ]);

        return redirect('/birthdays');
    }

    public function destroy(Birthday $birthday)
    {
        $birthday->delete();

        return redirect('/birthdays');
    }
}

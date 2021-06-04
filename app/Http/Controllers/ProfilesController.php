<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class ProfilesController extends Controller
{


    public function index($user)
    {
        $user = User::findOrFail($user);
        return view('profiles/profile', [
            'user' => $user
        ]);
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);

        return view('profiles/edit', compact('user'));
    }

    public function update (User $user) {
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title' =>'max:60',
            'description' => 'max:200',
            'url' => '',
            'company' => 'max:60',
            'image' => 'image',
        ]);



        if (request('image')) {
            $imagePath = request('image')->store('profile', 'public');

            $imagePath = "/storage/" . $imagePath;
//            $image = Image::make(public_path("storage/{$imagePath}"));
//            $image->save();

            $imageArray = ['image' => $imagePath];
        }

//        auth()->user()->profile->update($data);

        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));

        return redirect("/profile/{$user->id}");
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Review;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function user(){
        $user = User::get();
        return view('admin.user', compact('user'));
    }

    public function editUser($id){
        $user = User::where('id', $id)->first();
        return view('admin.edit-user', compact('user'));
    }

    public function updateUser(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $user = User::where('id', $id)->first();

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect(route('user'))->with('edit', 'Berhasil edit data user');
    }

    public function deleteUser(Request  $request, $id)
    {
        User::where('id', $id)->delete();
        return redirect(route('user'));
    }

    public function review(){
        $review = Review::get();
        return view('admin.review', compact('review'));
    }

    public function deleteReview(Request $request, $id){
        Review::where('id', $id)->delete();
        return redirect(route('adminReview'));
    }
}

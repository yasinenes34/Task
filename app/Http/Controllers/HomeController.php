<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        return view('home',['user' => $user]);
    }
    public function edit($id)
    {
        $user=User::find($id);

        return view('edit',['user' => $user]);
    }
    public function update($id,Request $request)
    {
        $user = User::find($id);
        $name = $request->input('name');
        $user->name = $name;
        if ($request->input('password') !== null) {
            $user->password = Hash::make($request->input('password'));
        }
        $user->email = $request->input('email');
        if($request->file('file') !== null){
            if ($request->file('file')) {
                $file = $request->file('file');
                $picture_filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path("ProfilePictures/$name/pictures/"), $picture_filename);
            }
            $user->picture = $picture_filename== null? " ": $picture_filename;
        }
        $user->save();
        return redirect()->route('home');
    }
   
}

<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function Users(){
        return view("reg");
    }

    public function UsersAuth(){
        return view("auth");
    }
    
    public function UserPage(){
        return view("userpage");
    }

    public function signout(){
        return view();
    }

    public function users_valid(Request $request){
        $request -> validate([
            "email"=> "required|email|unique:users",
            "name"=> "required",
            "password"=> "required",
            "password_repeat"=> "required|same:password",
        ]);

        $user = $request->all();

        User::create([
            "email" => $user["email"],
            "name" => $user["name"],
            "password" => Hash::make($user["password"]),
        ]);

        return redirect ("/")->with("success", "");


    }


    public function UserInfo($id){
        $user_info = User::all();
        return view("userpage",["all_user"=>$user]);
    }

    public function usersAuth_valid (Request $request){
        $formValue = [
            "email" => $request->email,
            "password" => $request->password,
        ];

        if (Auth::attempt($formValue)){
            return redirect('/');
        }
    }


}

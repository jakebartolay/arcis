<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\information;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class CustomAuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }

    public function registration(){
        return view("auth.registration");
    }
    public function registerUser(Request $request){
        $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|string|email|max:255|unique:users',
            'password'=>'required|min:5|max:12'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if ($res) {
            return back()->with('success', 'You Have registered successfuly');
        }else{
            return back()->with('fail', 'Something Wrong');
        }
    }
    public function loginUser(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);
        $user = User::where('email', '=', $request->email)->first();
        if ($user) {
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('id',$user->id);
                $request->session()->put('name',$user->name);
                $request->session()->put('email',$user->email);
                $request->session()->put('password',$user->password);
                return redirect('profile');
            }else{
                return back()->with('fail','Password not matches.');
            }
        }else{
            return back()->with('fail','This email is not registered.');
        }
    }

    public function profileDashboard(){
        if (Session::has('id')){
            $u = User::query()
            ->select(DB::raw('*'))
            ->join('information', 'users.id', '=', 'information.info_id')
            ->where("info_id", "=", Session::get("id"))
            ->get()
            ->first();
            return view('profile', compact('u'));
        }else{
            abort(401);
        }
        // $data = array();
        // if (Session::has('loginId')){
        //     $data = User::where('id', '=', Session::get('loginId'))->first();
        // }
        // return view('profile', compact('data'));
    }
    public function userinfo(){
        $user = User::query()
        ->select('*')
        ->where('name')
        ->get();
    return view('profile', compact('user'));
        // $data = array();
        // if (Session::has('loginId')){
        //     $data = User::where('id', '=', Session::get('loginId'))->first();
        // }
        // return view('profile', compact('data'));
    }

    public Function logout(){
        if(Session::has('id')){
            Session::pull('id');
            return redirect('/login');
        }
    }
}

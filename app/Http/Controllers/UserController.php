<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\information;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUser(){
            $user = User::query()
            ->select(DB::raw('*'))
            ->join('information', 'users.id', '=', 'information.info_id')
            ->where("info_id")
            ->get();
            return view('index', compact('user'));
    }
    public function showUserinfo(){
        $user = User::query()
        ->select(DB::raw('*'))
        ->get();
        return view('index', compact('user'));
}

public function nonUsershow(){
        $user = User::query()
        ->select(DB::raw('*'))
        ->get()
        ->first();
        return view('layouts.nonuser', compact('user'));
}
}

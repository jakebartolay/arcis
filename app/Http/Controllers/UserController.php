<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
}

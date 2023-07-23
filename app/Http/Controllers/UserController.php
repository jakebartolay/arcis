<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\information;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
        public function showUserinfo()
        {
                $user = User::query()
                        ->select(DB::raw('*'))
                        ->get();
                return view('index', compact('user'));
        }

        public function nonUsershow()
        {
                $user = User::query()
                ->select(DB::raw('*'))
                ->get();
                return view('layouts.usershow', compact('user'));
        }
        public function searchUser(){
                return "error";
        }
}

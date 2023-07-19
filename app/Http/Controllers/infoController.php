<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class infoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = array();
        // if (Session::has('users')){
        //     $data = User::where('id', '=', Session::get('loginId'))->first();
        // }
        // return view('userinfo', compact('data'));
        // $info = information::query()
        //     ->select('*')
        //     ->orderBy('id')
        //     ->get();
        // return view('userinfo', compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

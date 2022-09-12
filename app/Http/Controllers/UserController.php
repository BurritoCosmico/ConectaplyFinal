<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //Muestra los usuarios registrados en el sistema
    public function index()
    {
        $users = DB::table('users')->get();
        return view('users.index', ['users' => $users]);
    }

    //Muestra los sitios creados por el usuario mediante BD
    public function show(){
        $sites = DB::table('sitios')->get();
        return view('users.sites', ['sites' => $sites]);
    }

    public function plantillas(){
        $templates = DB::table('templates')->get();
        return view('templates',['templates' => $templates]);
    }
}

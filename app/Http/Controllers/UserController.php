<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(String $nome): View 
    {
        return view('user.index', [
            'nome' => $nome
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class UserController extends Controller
{

    public function index(String $nome): View 
    {
        return view('user.index', [
            'nome' => $nome
        ]);
    }

    public function listagem() {
        $user = DB::table('user')->get();
        return view('user.listagem', ['user' => $user]);
    }
}

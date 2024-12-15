<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
//use new\app\Http\Controllers\Controller;
use Illuminate\Routing\Controller;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
//    protected user $usersModel;
    public function showAll(): View
    {
        $users = User::getAll();

        return view('/index', ['user' => $users]);
    }
    public function create(Request $request)
    {
        $data = $request->all();
        User::addNewUser($data['firstName'],$data['lastName'],$data['userName'],$data['password']);
    }
}

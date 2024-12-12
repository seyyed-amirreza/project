<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use new\app\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    protected Users $usersModel;
    public function showAll(): View
    {
        $users = $usersModel->getAll();

        return view('showUserResults', ['users' => $users]);
    }
}

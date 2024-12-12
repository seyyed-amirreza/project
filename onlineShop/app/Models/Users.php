<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class Users extends Authenticatable
{
    protected $table = 'users';

    public static function getAll() {
        return $users = DB::table('users')->get();
    }
    public static function addNewUser ($userName,$password) {
        return DB::table('users')->insert([
            'userName' => $userName,
            'password' => $password
        ]);
    }
    public static function getOneById($id){
        return DB::table('users')->where('id', $id);
    }
}

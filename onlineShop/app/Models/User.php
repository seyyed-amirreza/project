<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    protected $table = 'user';
    protected $fillable = [
        'firstName',
        'lastName',
        'userName',
        'password',
        'lastLogin',
        'permissions'
    ];

    public static function getAll() {
        return $users = DB::table('user')->get();
    }
    public static function addNewUser ($firstName,$lastName,$userName,$password) {
        return DB::table('user')->insert([
            'firstName' => $firstName,
            'lastName' => $lastName,
            'userName' => $userName,
            'password' => $password
        ]);
    }
    public static function getOneById($id){
        return DB::table('user')->where('id', $id);
    }
}

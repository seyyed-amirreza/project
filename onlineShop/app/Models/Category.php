<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    public static function getAll() {
        return self::query()->get();
    }
    public static function addNewCatgory ($newName){
        self::query()->create(['name'=>$newName]);
        return 's!';
    }
    public static function getOne($id){
        return self::query()->find($id,['id','name','items']);
    }
}

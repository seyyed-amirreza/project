<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    public static function getAll() {
        return self::query()->get();
    }
    public static function addNewProduct ($newName){
        self::query()->create(['name'=>$newName]);
        return 's!';
//        self::saved();
    }
    public static function getOne($id){
        return self::query()->find($id,['id','name','price']);
    }
}

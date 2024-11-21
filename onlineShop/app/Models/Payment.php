<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payment';

    public static function getAll() {
        return self::query()->get();
    }
    public static function addNewPayment ($newName){
        self::query()->create(['name'=>$newName]);
        return 's!';
//        self::saved();
    }
    public static function getOne($id){
        return self::query()->find($id,['id','paidAt','userName','total','trackingNumber']);
    }
}

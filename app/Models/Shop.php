<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    const SHOP_ID_TOKYO = 1; //定義を追加
    const SHOP_ID_NAGOYA = 2; //定義を追加
    const SHOP_ID_OSAKA = 3; //定義を追加
    protected $guarded = []; //定義を追加
}

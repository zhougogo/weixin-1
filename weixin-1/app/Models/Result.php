<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = ['openid', 'nickname', 'headimgurl', 'quantity', 'status', 'prize_code'];
}

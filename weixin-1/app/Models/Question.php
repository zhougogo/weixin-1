<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title', 'a', 'b', 'c', 'd', 'answer'];
    public $timestamps = false;
}

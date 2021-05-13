<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dg extends Model
{
    //use HasFactory;
    public $table = "dg";

    protected $fillable = [
        'dg'
    ];

    public $timestamps = false;
}

<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    //use HasFactory;
    public $table = "event";

    protected $fillable = [
        'title',
        'club',
        'date',
        'time',
        'description'
    ];

    public $timestamps = false;
}

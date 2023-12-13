<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Review extends Model
{
    use HasFactory;
    protected $table = "user_review";
    public $timestamps = false;
    protected $fillable = ['id','userid','filmid','review','username', 'film_title', 'rating',
                            'review_date'
                          ];
}



<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User_Review;

class Films extends Model
{
    use HasFactory;
    protected $table = "films";
    public $timestamps = false;
    protected $primaryKey = "id";
    protected $fillable = [
                            'title','date', 'director', 'genre',
                            'cast','plot', 'img', 'rating'
                          ];

                          // public function reviews()
                          // {
                          //    return $this->hasMany(User_Review::class);
                          // }
                          protected $appends = ['averageRating'];

                          public function getAverageRatingAttribute()
                          {
                              return $this->reviews->avg('rating');
                          }
                          
}

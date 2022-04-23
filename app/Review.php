<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded = [];

    public static function withImgs($review)
    {
        $review->images = json_decode($review->images);
        return $review;
    }
}

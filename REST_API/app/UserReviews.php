<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserReviews extends Model
{
    protected $table = 'user_reviews';
    public $timestamps = true;
    protected $fillable = ['order_id, product_id, rating, review'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // this model owned by a user
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

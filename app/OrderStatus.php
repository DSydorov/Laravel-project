<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    protected $status_info = [
        'id','name',
    ];

    public function order ()
    {
        return $this->hasMany(\App\Order::class);
    }
}

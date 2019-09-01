<?php

namespace App;



use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['id', 'name'];
    protected $status_info = ['id', 'name'];

    public function users ()
    {
        return $this->belongsToMany(\App\User::class);
    }

    public function status()
    {
        return $this->hasOne(\App\OrderStatus::class);
    }
}

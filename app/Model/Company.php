<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = [];

    public function customers()
    {
        return $this->hasMany(Customer::class);

    }
}

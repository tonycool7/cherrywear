<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = "customer";

    protected $fillable = ['name', 'surname', 'email', 'postal_code', 'password', 'region', 'city', 'telephone', 'country', 'address'];
}

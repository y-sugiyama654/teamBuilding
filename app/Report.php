<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function customers()
    {
        return $this->belongTo('App\Customer');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_order extends Model
{
    public function tbl_tickets()
    {
        return $this->hasMany('App\tbl_tickets');
    }
}

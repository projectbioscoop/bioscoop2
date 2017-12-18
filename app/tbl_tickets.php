<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_tickets extends Model
{
    public function tbl_display()
    {
        return $this->hasOne('App\tbl_display');
    }

    public function tbl_order()
    {
        return $this->belongsTo('App\tbl_order');
    }
}

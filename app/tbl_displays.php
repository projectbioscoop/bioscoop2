<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_displays extends Model
{
    public function tbl_ticket()
    {
        return $this->belongsTo('App\tbl_ticket');
    }
}

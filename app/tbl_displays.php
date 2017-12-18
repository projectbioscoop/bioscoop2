<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_displays extends Model
{

    public function  tbl_movies()
    {
        return $this->hasOne('App\tbl_movies');
    }

    public function  tbl_theather()
    {
        return $this->hasOne('App\tbl_theather');
    }

    public function  tbl_age_catagories()
    {
        return $this->hasOne('App\tbl_age_catagories');
    }

    public function  tbl_chairs()
    {
        return $this->hasOne('App\tbl_chairs');
    }

    public function tbl_ticket()
    {
        return $this->belongsTo('App\tbl_ticket');
    }
}

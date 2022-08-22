<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    //
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function active(){
        if($this->active == 1)
        {
            return "<span class='badge badge-success'>Active</span>";
        }
        return "<span class='badge badge-danger'>Not Active</span>";
    }
}

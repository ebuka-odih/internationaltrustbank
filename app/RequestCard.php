<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestCard extends Model
{
    //
    protected $guarded = [];
    protected $appends = ['card_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function status(){
        if($this->status == 0)
        {
            return "<span class='badge bg-warning'>Not Active</span>";
        }elseif($this->status == 1)
        {
            return "<span class='badge bg-success'>Active</span>";
        }
        return "<span class='badge bg-danger'>Declined</span>";
    }

    public function getCardIdAttribute()
    {
        return "NSB0".$this->id.'CRDPX';
    }


}

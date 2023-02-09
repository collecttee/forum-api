<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    //
    protected $table = 'smf_membergroups';

    public function groupInfo(){

        return $this->belongsTo('App\Members','id_group','id_group');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    //
    protected $table = 'smf_members';

    public function groups()
    {
        return $this->hasOne('App\Groups','id_group','id_group')->select('id','posts','group_name');
    }
}

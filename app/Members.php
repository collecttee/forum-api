<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    //
    protected $table = 'smf_members';

    public function memGroups()
    {
        return $this->hasOne('App\Groups','id_group','id_group');
    }
}

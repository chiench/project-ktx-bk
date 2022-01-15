<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';

    public function manager(){

        return $this->hasOne(Manager::class,'id','manager_id');
    }
}

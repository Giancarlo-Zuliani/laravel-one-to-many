<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typology extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    function tasks(){
        return $this-> belongsToMany(Task::class);
    }
}

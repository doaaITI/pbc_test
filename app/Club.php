<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{

    protected $table = 'clubs';
    public $timestamps = true;

    public function users()
    {
        return $this->hasMany('User');
    }

    public function categories()
    {
        return $this->hasMany('Category');
    }

    public function index(){
        return $this->all();
    }

}

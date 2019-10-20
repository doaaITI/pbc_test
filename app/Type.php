<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{

    protected $table = 'types';
    public $timestamps = true;
    protected $fillable = [
        'name'
    ];

public function index(){
    return $this->all();
}
}

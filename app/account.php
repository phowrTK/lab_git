<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    protected $table = 'users';
    public $primaryKey = 'idaccount';

    public function comment()
    {
        return $this->hasMany('App\comment','idaccount','idaccount');
    }
}

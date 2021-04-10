<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $table = 'comment';
    public $primaryKey = 'idcomment';

    public function course()
    {
        return $this->belongsTo('App\course','idkh','idkh');
    }
    public function account()
    {
        return $this->belongsTo('App\account','idaccount','idaccount');
    }
}

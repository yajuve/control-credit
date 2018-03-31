<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Client;

class Credit extends Model {

	//
    public function client()
    {
        return $this->belongsTo('App\Client');
    }

}

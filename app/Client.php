<?php namespace app;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

	//
    public function credits()
    {
        return $this->hasMany('App\Credits');
    }

}

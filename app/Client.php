<?php namespace app;

use Illuminate\Database\Eloquent\Model;
use App\Credit;

class Client extends Model {

	//
    public function credits()
    {
        return $this->hasMany(Credit::class);
    }

}

<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
//use Laracasts\TestDummy\Factory as TestDummy;
use \App\Client;

class ClientTableSeeder extends Seeder {

    public function run()
    {
        // TestDummy::times(20)->create('App\Post');

        $client = new Client();
        $client->name = 'Lori E. Howard';
        $client->phone = '+213';
        $client->save();

        $client = new Client();
        $client->name = 'Viola J. Adams';
        $client->phone = '+213';
        $client->save();

        $client = new Client();
        $client->name = 'Elvira G. Wilkins';
        $client->phone = '+213';
        $client->save();

        $client = new Client();
        $client->name = 'James D. Grice';
        $client->phone = '+213';
        $client->save();
    }

}
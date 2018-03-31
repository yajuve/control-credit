<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
// use Laracasts\TestDummy\Factory as TestDummy;
use \App\Credit;

class CreditTableSeeder extends Seeder {

    public function run()
    {
        // TestDummy::times(20)->create('App\Post');

        $credit = new Credit();
        $credit->amount = 1000;
        $credit->client_id = 1;
        $credit->isPaid = 1;
        $credit->save();

        $credit = new Credit();
        $credit->amount = 500;
        $credit->client_id = 1;
        $credit->isPaid = 1;
        $credit->save();

        $credit = new Credit();
        $credit->amount = 900;
        $credit->client_id = 1;
        $credit->isPaid = 0;
        $credit->save();

        $credit = new Credit();
        $credit->amount = 1200;
        $credit->client_id = 2;
        $credit->isPaid = 0;
        $credit->save();

        $credit = new Credit();
        $credit->amount = 1000;
        $credit->client_id = 2;
        $credit->isPaid = 0;
        $credit->save();

        $credit = new Credit();
        $credit->amount = 850;
        $credit->client_id = 3;
        $credit->isPaid = 0;
        $credit->save();

        $credit = new Credit();
        $credit->amount = 1850;
        $credit->client_id = 4;
        $credit->isPaid = 0;
        $credit->save();

        $credit = new Credit();
        $credit->amount = 500;
        $credit->client_id = 4;
        $credit->isPaid = 0;
        $credit->save();

        $credit = new Credit();
        $credit->amount = 980;
        $credit->client_id = 4;
        $credit->isPaid = 1;
        $credit->save();
    }

}
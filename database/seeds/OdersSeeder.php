<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class OdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = Faker::create();
        for($i=0;$i<5;$i++){
            $oders[] = [
                'user_id' => 1,
                'state' => 'complete',
                'orderDate' => date("Y-m-d")
            ];
        }
        DB::table('orders')->insert($oders);
    }
}

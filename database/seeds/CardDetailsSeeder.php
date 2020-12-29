<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CardDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = Faker::create();
        for($i=0;$i<3;$i++){
            $card_detail[] = [
                'user_id' => 1,
                'product_id' => $i+1,
                'quantity' => rand(1,3),
            ];
        }
        DB::table('cart_details')->insert($card_detail);
    }
}

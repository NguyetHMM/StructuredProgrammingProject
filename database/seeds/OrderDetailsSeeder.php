<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class OrderDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = Faker::create();
        $order_detail = [];
        for($i = 0;$i<3;$i++){
            $order_detail[] = [
                'order_id' => 1,
                'product_id' => $i+1,
                'quantity' => 2,
                'price' => 2*10000,
            ];
        }
        for($i = 0;$i<3;$i++){
            $order_detail[] = [
                'order_id' => 2,
                'product_id' => $i+2,
                'quantity' => 2,
                'price' => 2*10000,
            ];
        }
        for($i = 0;$i<3;$i++){
            $order_detail[] = [
                'order_id' => 3,
                'product_id' => $i+3,
                'quantity' => 2,
                'price' => 2*10000,
            ];
        }
        for($i = 0;$i<3;$i++){
            $order_detail[] = [
                'order_id' => 4,
                'product_id' => $i+1,
                'quantity' => 2,
                'price' => 2*10000,
            ];
        }
        for($i = 0;$i<3;$i++){
            $order_detail[] = [
                'order_id' => 5,
                'product_id' => $i+2,
                'quantity' => 2,
                'price' => 2*10000,
            ];
        }
        DB::table('order_details')->insert($order_detail);
    }
}

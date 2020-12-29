<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $fake = Faker::create();
        for($i = 0; $i<5;$i++){
            $product[]  = [
                'category_id' => rand(1,5),
                'brand_id' => rand(1,6),
                'product_content' => $fake->lastName,
                'product_name' => $fake->lastName,
                'product_desc' => $fake->text,
                'product_price' => 10000,
                'product_image' => $i+1 . '.jpg' ,
                'product_status' => 1
            ];
        }
        DB::table('tbl_product')->insert($product);
    }   
}

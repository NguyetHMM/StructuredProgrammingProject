<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BrandSeeder extends Seeder
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
        $b_n = ["Zara", "Lightning", "Nike", "Adidas", "Uniqlo", "No Brand" ];
        for($i = 0; $i<6;$i++){
            $brand[]  = [
                'brand_name' => $b_n[$i],
                'brand_desc' => $fake->text,
                'brand_status' => 1
            ];
        }
        DB::table('tbl_brand')->insert($brand);
    }
}

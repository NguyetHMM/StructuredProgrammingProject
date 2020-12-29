<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
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
        $c_n = ["Men", "Lady", "Boy", "Girl", "Baby" ];
        for($i = 0; $i<5;$i++){
            $category[]  = [
                'category_name' => $c_n[$i],
                'category_desc' => $fake->text,
                'category_status' => 1
            ];
        }
        DB::table('tbl_category_product')->insert($category);
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            RoleSeeder::class,
            BrandSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            OdersSeeder::class,
            OrderDetailsSeeder::class,
            CardDetailsSeeder::class,
            UsersSeeder::class
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    // Seed the application's database
    public function run()
    {
		$this->call(AddIconsToIconTable::class);
		$this->call(TypesSeeder::class);
		$this->call(UserTableSeeder::class);
		$this->call(SliderSeeder::class);
		$this->call(ItemSeeder::class);
		$this->call(CardSeeder::class);
    }
}

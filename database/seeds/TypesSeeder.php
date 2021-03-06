<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesSeeder extends Seeder
{
    public function run()
    {
        DB::table('types')->insert([
            ['name' => 'Аксесcуары'],
            ['name' => 'Боди'],
            ['name' => 'Брюки'],
            ['name' => 'Верхняя одежда'],
            ['name' => 'Водолазки, лонгслив'],
            ['name' => 'Джинсы'],
            ['name' => 'Блузы, рубашки'],
            ['name' => 'Кардиганы'],
            ['name' => 'Комбинезоны'],
            ['name' => 'Костюмы'],
            ['name' => 'Куртки'],
            ['name' => 'Купальники'],
            ['name' => 'Кофты, свитера'],
            ['name' => 'Свитшорты, толстовки'],
            ['name' => 'Спортивная одежда'],
            ['name' => 'Сарафаны'],
            ['name' => 'Туники'],
            ['name' => 'Платья'],
            ['name' => 'Футболки, майки'],
            ['name' => 'Юбки'],
            ['name' => 'Шорты'],
            ['name' => 'Штаны'],
            ['name' => 'Жакеты, жилеты'],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
// tao ra bo sinh su lieu tuong ung cho cac bang 
class CategoriesTableSeeder extends Seeder
{
    public function run():void{
        $faker = Faker::create();
        for($i=0;$i<10;$i++){
            DB::table('categories')->insert([
                'name'=>$faker->word,
                'escription'=>$faker->sentence,
            ]);
        }

    }
}

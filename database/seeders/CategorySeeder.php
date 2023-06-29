<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'name' => '野菜',
                'sort_order' => 1,
                
            ],
            [
                'name' => '果物',
                'sort_order' => 2,
                
            ],
            [
                'name' => 'きのこ',
                'sort_order' => 3,
                
            ],
        ]);

        DB::table('secondary_categories')->insert([
            [
                'name' => 'トマト',
                'sort_order' => 1,
                'primary_category_id' => 1
            ],
            [
                'name' => 'キャベツ',
                'sort_order' => 2,
                'primary_category_id' => 1
            ],
            [
                'name' => 'にんじん',
                'sort_order' => 3,
                'primary_category_id' => 1
            ],
            [
                'name' => 'りんご',
                'sort_order' => 4,
                'primary_category_id' => 2
            ],
            [
                'name' => 'ぶどう',
                'sort_order' => 5,
                'primary_category_id' => 2
            ],
            [
                'name' => 'みかん',
                'sort_order' => 6,
                'primary_category_id' => 2
            ],
        ]);
    }
}

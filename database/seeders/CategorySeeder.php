<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\sSeeds\WithoutModelsEvent;
use Illuminate\Database\Seeder;
use DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Startup',
                'slug' => 'startup',
            ],
            [
                'name' => 'Life',
                'slug' => 'life',
            ],
            [
                'name' => 'Life Lessons',
                'slug' => 'life-lessons',
            ],
            [
                'name' => 'Politics',
                'slug' => 'politics',
            ],
            [
                'name' => 'Travel',
                'slug' => 'travel',
            ],
            [
                'name' => 'Poetry',
                'slug' => 'poetry',
            ],
            [
                'name' => 'Enterpreneurship',
                'slug' => 'enterpreneurship',
            ],
            [
                'name' => 'Education',
                'slug' => 'education',
            ],
            [
                'name' => 'Health',
                'slug' => 'health',
            ],
            [
                'name' => 'Love',
                'slug' => 'love',
            ],
            [
                'name' => 'Design',
                'slug' => 'design',
            ],
            [
                'name' => 'Writing',
                'slug' => 'writing',
            ],
            [
                'name' => 'Technology',
                'slug' => 'technology',
            ],
        ]);

        
    }
}

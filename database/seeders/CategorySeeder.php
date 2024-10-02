<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* 
        Category::create([
            'name'=>'World of Warcraft',
            'slug'=>'world-of-warcraft',
            'description'=>'the best game EVER',
        ]);
        */
        Category::factory(7)->create();
    }
}

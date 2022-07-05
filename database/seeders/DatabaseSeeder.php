<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
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
        // \App\Models\User::factory(10)->create();
        Category::create([
            'name'=>'Tak Berkategori',
            'slug'=>'tak-berkategori'
        ]);
        Category::create([
            'name'=>'Edukasi',
            'slug'=>'edukasi'
        ]);
        Category::create([
            'name'=>'Bisnis',
            'slug'=>'bisnis'
        ]);
        Category::create([
            'name'=>'Kesehatan',
            'slug'=>'kesehatan'
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // eliminar carpetas antes volver a crearlas 
        Storage::deleteDirectory('articles');
        Storage::deleteDirectory('categories');
        
        // crear carpetas 
        Storage::makeDirectory('articles');
        Storage::makeDirectory('categories');

        $this->call(UserSeeder::class);

        //factories 
        Category::factory(8)->create();
        Article::factory(20)->create();
        Comment::factory(20)->create();
    }
}

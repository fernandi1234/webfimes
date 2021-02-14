<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
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
        Storage::deleteDirectory('posts'); // para eliminar la carpeta
        Storage::makeDirectory('posts');
        
        Storage::deleteDirectory('files'); // para eliminar la carpeta
        Storage::makeDirectory('files');

        
        $this->call(RoleSeeder::class);

        $this->call(UserSeeder::class);
        
        // Category::factory(4)->create();
        $this->call(CategorySeeder::class);

        Tag::factory(8)->create();
        $this->call(PostSeeder::class);
    }
}

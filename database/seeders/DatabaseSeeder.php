<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Crear admin
        User::factory()->admin()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);

        // Usuarios normales
        User::factory(5)->create();

        // Posts
        Post::factory(5)->create();

        // Comentarios
        Comment::factory(10)->create();
    }
}

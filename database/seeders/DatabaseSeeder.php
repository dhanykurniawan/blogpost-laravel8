<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Dhany Kurniawan',
            'username' => 'dhnykrnwn',
            'email' => 'dhanykurniawan111@gmail.com',
            'password' => bcrypt('password')
        ]);
        // User::create([
        //     'name' => 'Sandhika Galih',
        //     'email' => 'sandhika@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error quisquam dolores temporibus, nesciunt sunt ipsa',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error quisquam dolores temporibus, nesciunt sunt ipsa dolorum optio non nemo quod officia eos enim voluptas cum natus, accusantium vitae. Labore alias sapiente maxime fugiat fuga debitis minima nemo, libero consectetur voluptas accusantium! Odit doloremque harum, voluptatem, laborum, quis illum ad sint nam voluptate neque explicabo voluptates pariatur voluptatibus vitae fuga facere nisi qui suscipit assumenda incidunt magnam atque eius velit adipisci? Quae sed numquam nesciunt, consectetur quo exercitationem quas amet molestiae delectus accusantium, in commodi fuga! Qui, impedit atque nesciunt dignissimos nobis unde! Dolore adipisci earum quam cumque cum eos maiores!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error quisquam dolores temporibus, nesciunt sunt ipsa',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error quisquam dolores temporibus, nesciunt sunt ipsa dolorum optio non nemo quod officia eos enim voluptas cum natus, accusantium vitae. Labore alias sapiente maxime fugiat fuga debitis minima nemo, libero consectetur voluptas accusantium! Odit doloremque harum, voluptatem, laborum, quis illum ad sint nam voluptate neque explicabo voluptates pariatur voluptatibus vitae fuga facere nisi qui suscipit assumenda incidunt magnam atque eius velit adipisci? Quae sed numquam nesciunt, consectetur quo exercitationem quas amet molestiae delectus accusantium, in commodi fuga! Qui, impedit atque nesciunt dignissimos nobis unde! Dolore adipisci earum quam cumque cum eos maiores!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error quisquam dolores temporibus, nesciunt sunt ipsa',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error quisquam dolores temporibus, nesciunt sunt ipsa dolorum optio non nemo quod officia eos enim voluptas cum natus, accusantium vitae. Labore alias sapiente maxime fugiat fuga debitis minima nemo, libero consectetur voluptas accusantium! Odit doloremque harum, voluptatem, laborum, quis illum ad sint nam voluptate neque explicabo voluptates pariatur voluptatibus vitae fuga facere nisi qui suscipit assumenda incidunt magnam atque eius velit adipisci? Quae sed numquam nesciunt, consectetur quo exercitationem quas amet molestiae delectus accusantium, in commodi fuga! Qui, impedit atque nesciunt dignissimos nobis unde! Dolore adipisci earum quam cumque cum eos maiores!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error quisquam dolores temporibus, nesciunt sunt ipsa',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error quisquam dolores temporibus, nesciunt sunt ipsa dolorum optio non nemo quod officia eos enim voluptas cum natus, accusantium vitae. Labore alias sapiente maxime fugiat fuga debitis minima nemo, libero consectetur voluptas accusantium! Odit doloremque harum, voluptatem, laborum, quis illum ad sint nam voluptate neque explicabo voluptates pariatur voluptatibus vitae fuga facere nisi qui suscipit assumenda incidunt magnam atque eius velit adipisci? Quae sed numquam nesciunt, consectetur quo exercitationem quas amet molestiae delectus accusantium, in commodi fuga! Qui, impedit atque nesciunt dignissimos nobis unde! Dolore adipisci earum quam cumque cum eos maiores!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}

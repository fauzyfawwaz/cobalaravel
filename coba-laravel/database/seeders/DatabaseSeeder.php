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
        
        // User::create([
        //     'name' => 'Fasha Store',
        //     'email' => 'store.fasha@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Slash Store',
        //     'email' => 'store.slash@gmail.com',
        //     'password' => bcrypt('12345')
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
        //     'excerpt' => 'Lorem, ipsum pertama',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum eum consequatur reprehenderit, repellat deserunt sunt ea culpa tempore quibusdam voluptas qui adipisci odit! Reiciendis delectus libero blanditiis. Ad quam maiores blanditiis facere animi? Inventore deleniti molestias sunt cumque temporibus accusantium unde hic eaque fugiat maxime! Nostrum ipsam veniam blanditiis. Deserunt nemo mollitia eveniet neque sequi obcaecati saepe ducimus amet, velit vitae assumenda corrupti esse recusandae explicabo, eos illum magni quibusdam soluta quis atque aliquid incidunt voluptatum! Labore, quaerat ab nesciunt sunt ipsam quam in quae voluptas aut laboriosam architecto voluptate amet facilis nulla tempore repudiandae deserunt quibusdam molestias, consectetur ducimus?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem, ipsum ke dua',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum eum consequatur reprehenderit, repellat deserunt sunt ea culpa tempore quibusdam voluptas qui adipisci odit! Reiciendis delectus libero blanditiis. Ad quam maiores blanditiis facere animi? Inventore deleniti molestias sunt cumque temporibus accusantium unde hic eaque fugiat maxime! Nostrum ipsam veniam blanditiis. Deserunt nemo mollitia eveniet neque sequi obcaecati saepe ducimus amet, velit vitae assumenda corrupti esse recusandae explicabo, eos illum magni quibusdam soluta quis atque aliquid incidunt voluptatum! Labore, quaerat ab nesciunt sunt ipsam quam in quae voluptas aut laboriosam architecto voluptate amet facilis nulla tempore repudiandae deserunt quibusdam molestias, consectetur ducimus?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem, ipsum ke tiga',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum eum consequatur reprehenderit, repellat deserunt sunt ea culpa tempore quibusdam voluptas qui adipisci odit! Reiciendis delectus libero blanditiis. Ad quam maiores blanditiis facere animi? Inventore deleniti molestias sunt cumque temporibus accusantium unde hic eaque fugiat maxime! Nostrum ipsam veniam blanditiis. Deserunt nemo mollitia eveniet neque sequi obcaecati saepe ducimus amet, velit vitae assumenda corrupti esse recusandae explicabo, eos illum magni quibusdam soluta quis atque aliquid incidunt voluptatum! Labore, quaerat ab nesciunt sunt ipsam quam in quae voluptas aut laboriosam architecto voluptate amet facilis nulla tempore repudiandae deserunt quibusdam molestias, consectetur ducimus?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem, ipsum ke empat',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum eum consequatur reprehenderit, repellat deserunt sunt ea culpa tempore quibusdam voluptas qui adipisci odit! Reiciendis delectus libero blanditiis. Ad quam maiores blanditiis facere animi? Inventore deleniti molestias sunt cumque temporibus accusantium unde hic eaque fugiat maxime! Nostrum ipsam veniam blanditiis. Deserunt nemo mollitia eveniet neque sequi obcaecati saepe ducimus amet, velit vitae assumenda corrupti esse recusandae explicabo, eos illum magni quibusdam soluta quis atque aliquid incidunt voluptatum! Labore, quaerat ab nesciunt sunt ipsam quam in quae voluptas aut laboriosam architecto voluptate amet facilis nulla tempore repudiandae deserunt quibusdam molestias, consectetur ducimus?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}

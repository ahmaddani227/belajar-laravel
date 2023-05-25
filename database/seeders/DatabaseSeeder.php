<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        User::create([
            'name' => 'Ahmad Dani',
            'username' => 'ahmaddani',
            'email' => 'dani@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Zaky',
        //     'email' => 'kiky@gmail.com',
        //     'password' => bcrypt('kiky')
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
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente non veniam repudiandae pariatur explicabo vero voluptatem perspiciatis eveniet, repellat aspernatur earum autem velit architecto ad eaque odit ipsam ullam fuga dicta incidunt harum nisi ab error amet? At cumque numquam recusandae, dolores provident aperiam laudantium ipsum velit quam saepe. Minima ab commodi at omnis nihil harum tenetur illo? Saepe beatae magni ipsum nisi rerum voluptas corrupti vero voluptatum est minus reprehenderit maxime omnis dolorem sint tenetur obcaecati doloribus ratione impedit nam velit explicabo corporis, neque aliquam? Laborum, nam reprehenderit consectetur cum, quidem temporibus facilis ipsam aspernatur nihil unde laudantium soluta?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente non veniam repudiandae pariatur explicabo vero voluptatem perspiciatis eveniet, repellat aspernatur earum autem velit architecto ad eaque odit ipsam ullam fuga dicta incidunt harum nisi ab error amet? At cumque numquam recusandae, dolores provident aperiam laudantium ipsum velit quam saepe. Minima ab commodi at omnis nihil harum tenetur illo? Saepe beatae magni ipsum nisi rerum voluptas corrupti vero voluptatum est minus reprehenderit maxime omnis dolorem sint tenetur obcaecati doloribus ratione impedit nam velit explicabo corporis, neque aliquam? Laborum, nam reprehenderit consectetur cum, quidem temporibus facilis ipsam aspernatur nihil unde laudantium soluta?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente non veniam repudiandae pariatur explicabo vero voluptatem perspiciatis eveniet, repellat aspernatur earum autem velit architecto ad eaque odit ipsam ullam fuga dicta incidunt harum nisi ab error amet? At cumque numquam recusandae, dolores provident aperiam laudantium ipsum velit quam saepe. Minima ab commodi at omnis nihil harum tenetur illo? Saepe beatae magni ipsum nisi rerum voluptas corrupti vero voluptatum est minus reprehenderit maxime omnis dolorem sint tenetur obcaecati doloribus ratione impedit nam velit explicabo corporis, neque aliquam? Laborum, nam reprehenderit consectetur cum, quidem temporibus facilis ipsam aspernatur nihil unde laudantium soluta?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}

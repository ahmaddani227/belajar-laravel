<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
class Post
{
    private static $blogPosts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Ahmad Dani',
            'body' => '
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, laudantium? Debitis eveniet tempora molestias accusantium unde. Magni eaque consectetur quod voluptas ipsum itaque minima tenetur cum. Veniam dignissimos commodi totam in ullam dolor rerum odio architecto labore impedit? Cum, consectetur. A qui fugit, aliquid perferendis repellendus saepe doloribus deleniti deserunt consequuntur nulla quae earum sint dolorem. Impedit, repellendus autem facilis adipisci dignissimos ad nemo harum perspiciatis asperiores temporibus hic labore reprehenderit tempore quod inventore tempora possimus quas aperiam placeat eius.'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Zaky',
            'body' => '  
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur voluptate delectus officiis impedit asperiores quia quibusdam ullam expedita reprehenderit incidunt quod ipsa repellat quis deleniti totam similique a aspernatur illo quas consequuntur dignissimos labore, culpa iure temporibus. Nulla cumque quisquam magni inventore fuga distinctio praesentium et itaque quis cum odio at rerum eos corrupti eaque atque deserunt impedit quod provident, architecto porro debitis nisi! Neque adipisci doloribus, obcaecati beatae, quam qui voluptatum debitis impedit animi ipsa magni atque eos optio modi quisquam nam cupiditate quod iste aut asperiores temporibus repudiandae vitae iusto. Odio velit dignissimos obcaecati ratione ea, ducimus adipisci.'
        ]
    ];


    public static function all()
    {
        return collect(self::$blogPosts);
    }

    public static function find($slug)
    {
        $blogPosts = static::all();

        return $blogPosts->firstWhere('slug', $slug);
    }
}

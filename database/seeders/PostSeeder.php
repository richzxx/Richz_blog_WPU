<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //TODO Database seeding (ke table User)

        Post::create([
            'title' => 'Judul Pertama',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quae!',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio mollitia consequuntur iste, eveniet quidem adipisci minus? Eos iure, iusto tempora aliquid perferendis saepe nihil excepturi quis voluptates maiores officiis nostrum porro consectetur commodi maxime deleniti, quod vero.</p><p>Impedit, quaerat nam. Quia voluptatibus praesentium mollitia consectetur, animi quos libero magni. Numquam accusamus autem illum enim aliquid incidunt pariatur odit, ad fuga sapiente? Corporis, rerum ipsum. Dolorum dignissimos laudantium assumenda. Esse architecto corporis labore provident earum velit accusamus facere ad culpa necessitatibus?</p>'
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'category_id' => 2,
            'user_id' => 2,
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quae!',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio mollitia consequuntur iste, eveniet quidem adipisci minus? Eos iure, iusto tempora aliquid perferendis saepe nihil excepturi quis voluptates maiores officiis nostrum porro consectetur commodi maxime deleniti, quod vero.</p><p>Impedit, quaerat nam. Quia voluptatibus praesentium mollitia consectetur, animi quos libero magni. Numquam accusamus autem illum enim aliquid incidunt pariatur odit, ad fuga sapiente? Corporis, rerum ipsum. Dolorum dignissimos laudantium assumenda. Esse architecto corporis labore provident earum velit accusamus facere ad culpa necessitatibus?</p>'
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'category_id' => 3,
            'user_id' => 1,
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quae!',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio mollitia consequuntur iste, eveniet quidem adipisci minus? Eos iure, iusto tempora aliquid perferendis saepe nihil excepturi quis voluptates maiores officiis nostrum porro consectetur commodi maxime deleniti, quod vero.</p><p>Impedit, quaerat nam. Quia voluptatibus praesentium mollitia consectetur, animi quos libero magni. Numquam accusamus autem illum enim aliquid incidunt pariatur odit, ad fuga sapiente? Corporis, rerum ipsum. Dolorum dignissimos laudantium assumenda. Esse architecto corporis labore provident earum velit accusamus facere ad culpa necessitatibus?</p>'
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'category_id' => 2,
            'user_id' => 2,
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quae!',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio mollitia consequuntur iste, eveniet quidem adipisci minus? Eos iure, iusto tempora aliquid perferendis saepe nihil excepturi quis voluptates maiores officiis nostrum porro consectetur commodi maxime deleniti, quod vero.</p><p>Impedit, quaerat nam. Quia voluptatibus praesentium mollitia consectetur, animi quos libero magni. Numquam accusamus autem illum enim aliquid incidunt pariatur odit, ad fuga sapiente? Corporis, rerum ipsum. Dolorum dignissimos laudantium assumenda. Esse architecto corporis labore provident earum velit accusamus facere ad culpa necessitatibus?</p>'
        ]);
    }
}

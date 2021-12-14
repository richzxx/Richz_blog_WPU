<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Richard Laurent',
            'username' => 'richzxx',
            'email' => 'ronaldorichard27@gmail.com',
            'password' => bcrypt('Member223')
        ]);

        User::create([
            'name' => 'Christian Gerald',
            'username' => 'christ_ge',
            'email' => 'geraldchristian04@gmail.com',
            'password' => bcrypt('Anyiunyu123')
        ]);

        User::factory(5)->create();
        Post::factory(25)->create();
        $this->call([
            CategorySeeder::class
        ]);
    }
}

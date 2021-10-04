<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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
            'name' => 'Rizky Haksono',
            'username' => 'rizkyhaksono',
            'email' => 'rizkyhaksono123@gmail.com',
            'password' => bcrypt('12345')
        ]);
        
        // User::create([
        //     'name' => 'nate',
        //     'email' => 'nate@gmail.com',
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
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga illo animi, placeat quos voluptates ipsa sed ullam beatae est tenetur dolore accusantium at commodi explicabo adipisci. Sint, placeat ducimus. Voluptatum in aliquid nostrum atque tempore eius quibusdam, sunt fuga est! Reprehenderit ullam iusto culpa earum soluta quas sint saepe ab quibusdam. Accusamus consequatur odio ullam temporibus non doloribus delectus amet autem, eaque nam tenetur dolor qui quo voluptatum? Libero dignissimos voluptatibus commodi fugiat nemo, ipsum error sed. Fuga laboriosam consequuntur ducimus, similique ipsum provident sunt, dignissimos inventore, doloremque obcaecati assumenda nobis maxime delectus esse doloribus. Ducimus pariatur atque odio quia?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga illo animi, placeat quos voluptates ipsa sed ullam beatae est tenetur dolore accusantium at commodi explicabo adipisci. Sint, placeat ducimus. Voluptatum in aliquid nostrum atque tempore eius quibusdam, sunt fuga est! Reprehenderit ullam iusto culpa earum soluta quas sint saepe ab quibusdam. Accusamus consequatur odio ullam temporibus non doloribus delectus amet autem, eaque nam tenetur dolor qui quo voluptatum? Libero dignissimos voluptatibus commodi fugiat nemo, ipsum error sed. Fuga laboriosam consequuntur ducimus, similique ipsum provident sunt, dignissimos inventore, doloremque obcaecati assumenda nobis maxime delectus esse doloribus. Ducimus pariatur atque odio quia?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);



        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga illo animi, placeat quos voluptates ipsa sed ullam beatae est tenetur dolore accusantium at commodi explicabo adipisci. Sint, placeat ducimus. Voluptatum in aliquid nostrum atque tempore eius quibusdam, sunt fuga est! Reprehenderit ullam iusto culpa earum soluta quas sint saepe ab quibusdam. Accusamus consequatur odio ullam temporibus non doloribus delectus amet autem, eaque nam tenetur dolor qui quo voluptatum? Libero dignissimos voluptatibus commodi fugiat nemo, ipsum error sed. Fuga laboriosam consequuntur ducimus, similique ipsum provident sunt, dignissimos inventore, doloremque obcaecati assumenda nobis maxime delectus esse doloribus. Ducimus pariatur atque odio quia?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga illo animi, placeat quos voluptates ipsa sed ullam beatae est tenetur dolore accusantium at commodi explicabo adipisci. Sint, placeat ducimus. Voluptatum in aliquid nostrum atque tempore eius quibusdam, sunt fuga est! Reprehenderit ullam iusto culpa earum soluta quas sint saepe ab quibusdam. Accusamus consequatur odio ullam temporibus non doloribus delectus amet autem, eaque nam tenetur dolor qui quo voluptatum? Libero dignissimos voluptatibus commodi fugiat nemo, ipsum error sed. Fuga laboriosam consequuntur ducimus, similique ipsum provident sunt, dignissimos inventore, doloremque obcaecati assumenda nobis maxime delectus esse doloribus. Ducimus pariatur atque odio quia?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}

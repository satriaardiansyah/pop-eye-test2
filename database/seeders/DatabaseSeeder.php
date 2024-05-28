<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    // public function run(): void
    // {
        //  User::factory(10)-//>create();

    //     User::factory()->create([
    //         'name' => 'Test User',
    //         'email' => 'test@example.com',
    //     ]);
    // }
    public function run()
    {
        User::create([
            'name' => 'Satria Ardiansyah',
            'username' => 'satria',
            'email' => 'satria@gmail.com',
            'password' => bcrypt('12345')
        ]);
        
        User::factory(3)->create();


        // User::create([
        //     'name' => 'Zilong',
        //     'email' => 'zilong@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

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
        //     'excerpt' => 'Lorem ipsum dolo3 sit amet consectetur, adipisicing elit. Libero, officiis! Temporibus quidem ipsa, ipsam, quae non blanditiis voluptatum atque, quos sint aspernatur voluptatem.',
        //     'body' => '<p>Lorem ipsum dolo3 sit amet consectetur, adipisicing elit. Libero, officiis! Temporibus quidem ipsa, ipsam, quae non blanditiis voluptatum atque, quos sint aspernatur voluptatem. Non unde sapiente quasi earum rem repellendus cumque numquam.</p> <p> Distinctio ipsa hic incidunt maiores assumenda aperiam atque in molestias soluta? Labore repellendus adipisci, vero accusamus qui quam corporis maiores, perferendis aliquid itaque voluptas voluptatem nemo quo possimus quos aperiam tempore odit facilis sed, fuga repellat vitae. Commodi facilis, excepturi molestias, nam dolorem aliquid itaque corporis hic doloremque eveniet quibusdam fugiat beatae maiores praesentium necessitatibus architecto perferendis cum dolores, non doloribus suscipit eius cumque qui. Reiciendis, in corporis?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolo3 sit amet consectetur, adipisicing elit. Libero, officiis! Temporibus quidem ipsa, ipsam, quae non blanditiis voluptatum atque, quos sint aspernatur voluptatem.',
        //     'body' => '<p>Lorem ipsum dolo3 sit amet consectetur, adipisicing elit. Libero, officiis! Temporibus quidem ipsa, ipsam, quae non blanditiis voluptatum atque, quos sint aspernatur voluptatem. Non unde sapiente quasi earum rem repellendus cumque numquam.</p> <p> Distinctio ipsa hic incidunt maiores assumenda aperiam atque in molestias soluta? Labore repellendus adipisci, vero accusamus qui quam corporis maiores, perferendis aliquid itaque voluptas voluptatem nemo quo possimus quos aperiam tempore odit facilis sed, fuga repellat vitae. Commodi facilis, excepturi molestias, nam dolorem aliquid itaque corporis hic doloremque eveniet quibusdam fugiat beatae maiores praesentium necessitatibus architecto perferendis cum dolores, non doloribus suscipit eius cumque qui. Reiciendis, in corporis?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolo3 sit amet consectetur, adipisicing elit. Libero, officiis! Temporibus quidem ipsa, ipsam, quae non blanditiis voluptatum atque, quos sint aspernatur voluptatem.',
        //     'body' => '<p>Lorem ipsum dolo3 sit amet consectetur, adipisicing elit. Libero, officiis! Temporibus quidem ipsa, ipsam, quae non blanditiis voluptatum atque, quos sint aspernatur voluptatem. Non unde sapiente quasi earum rem repellendus cumque numquam.</p> <p> Distinctio ipsa hic incidunt maiores assumenda aperiam atque in molestias soluta? Labore repellendus adipisci, vero accusamus qui quam corporis maiores, perferendis aliquid itaque voluptas voluptatem nemo quo possimus quos aperiam tempore odit facilis sed, fuga repellat vitae. Commodi facilis, excepturi molestias, nam dolorem aliquid itaque corporis hic doloremque eveniet quibusdam fugiat beatae maiores praesentium necessitatibus architecto perferendis cum dolores, non doloribus suscipit eius cumque qui. Reiciendis, in corporis?</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolo3 sit amet consectetur, adipisicing elit. Libero, officiis! Temporibus quidem ipsa, ipsam, quae non blanditiis voluptatum atque, quos sint aspernatur voluptatem.',
        //     'body' => '<p>Lorem ipsum dolo3 sit amet consectetur, adipisicing elit. Libero, officiis! Temporibus quidem ipsa, ipsam, quae non blanditiis voluptatum atque, quos sint aspernatur voluptatem. Non unde sapiente quasi earum rem repellendus cumque numquam.</p> <p> Distinctio ipsa hic incidunt maiores assumenda aperiam atque in molestias soluta? Labore repellendus adipisci, vero accusamus qui quam corporis maiores, perferendis aliquid itaque voluptas voluptatem nemo quo possimus quos aperiam tempore odit facilis sed, fuga repellat vitae. Commodi facilis, excepturi molestias, nam dolorem aliquid itaque corporis hic doloremque eveniet quibusdam fugiat beatae maiores praesentium necessitatibus architecto perferendis cum dolores, non doloribus suscipit eius cumque qui. Reiciendis, in corporis?</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}

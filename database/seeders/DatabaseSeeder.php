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
            'name' => 'ekoselter',
            'username' => 'ekoselter',
            'email' => 'ekoselter@gmail.com',
            'password' => bcrypt('12345')
        ]); 

        // User::create([
        //     'name' => 'wahyu',
        //     'email' => 'wahyu@gmail.com',
        //     'password' => bcrypt('54321')
        // ]); 

        User::factory(3)->create();

        Category::create([
            'name' => 'Wisata Kuliner',
            'slug' => 'wisata-kuliner',
        ]); 

        Category::create([
            'name' => 'Wisata Alam',
            'slug' => 'wisata-alam'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam aliquid atque repellat temporibus veniam perspiciatis fugiat repudiandae ipsam, non veritatis odit nemo. Sit deserunt similique, unde nam exercitationem nemo minus, reprehenderit inventore aspernatur quia voluptas corrupti animi reiciendis, omnis fuga dolore numquam a quisquam assumenda quaerat odio consequuntur possimus sed magni? Modi iure totam recusandae laborum quod porro nostrum assumenda dolor commodi, ipsam a magnam repudiandae ex asperiores natus impedit maiores praesentium repellendus illum corrupti maxime id nam. Minus commodi maiores fugiat libero, odit id a, nihil sequi quos reprehenderit officia possimus, voluptatem soluta et quas illo quod exercitationem adipisci non dignissimos ratione. </p><p>Ipsa, quos praesentium, suscipit repellendus aliquid tempora consectetur maiores doloremque ut laudantium similique deleniti! Autem, non assumenda.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad perferendis modi quisquam asperiores accusantium est facere minus beatae quia, fugit quos hic dolor eligendi corporis porro consequatur! Totam, eaque dolor.'
        // ]); 

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam aliquid atque repellat temporibus veniam perspiciatis fugiat repudiandae ipsam, non veritatis odit nemo. Sit deserunt similique, unde nam exercitationem nemo minus, reprehenderit inventore aspernatur quia voluptas corrupti animi reiciendis, omnis fuga dolore numquam a quisquam assumenda quaerat odio consequuntur possimus sed magni? Modi iure totam recusandae laborum quod porro nostrum assumenda dolor commodi, ipsam a magnam repudiandae ex asperiores natus impedit maiores praesentium repellendus illum corrupti maxime id nam. Minus commodi maiores fugiat libero, odit id a, nihil sequi quos reprehenderit officia possimus, voluptatem soluta et quas illo quod exercitationem adipisci non dignissimos ratione. </p><p>Ipsa, quos praesentium, suscipit repellendus aliquid tempora consectetur maiores doloremque ut laudantium similique deleniti! Autem, non assumenda.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad perferendis modi quisquam asperiores accusantium est facere minus beatae quia, fugit quos hic dolor eligendi corporis porro consequatur! Totam, eaque dolor.'
        // ]); 

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam aliquid atque repellat temporibus veniam perspiciatis fugiat repudiandae ipsam, non veritatis odit nemo. Sit deserunt similique, unde nam exercitationem nemo minus, reprehenderit inventore aspernatur quia voluptas corrupti animi reiciendis, omnis fuga dolore numquam a quisquam assumenda quaerat odio consequuntur possimus sed magni? Modi iure totam recusandae laborum quod porro nostrum assumenda dolor commodi, ipsam a magnam repudiandae ex asperiores natus impedit maiores praesentium repellendus illum corrupti maxime id nam. Minus commodi maiores fugiat libero, odit id a, nihil sequi quos reprehenderit officia possimus, voluptatem soluta et quas illo quod exercitationem adipisci non dignissimos ratione. </p><p>Ipsa, quos praesentium, suscipit repellendus aliquid tempora consectetur maiores doloremque ut laudantium similique deleniti! Autem, non assumenda.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad perferendis modi quisquam asperiores accusantium est facere minus beatae quia, fugit quos hic dolor eligendi corporis porro consequatur! Totam, eaque dolor.'
        // ]); 
    }
}

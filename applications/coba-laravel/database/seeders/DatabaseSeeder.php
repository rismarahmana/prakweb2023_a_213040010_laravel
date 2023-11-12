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
     * 
     *  @return void
     */
    public function run(): void
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Risma Rahmana',
        //     'email' => 'rismarahmana@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Narita Ratukuri',
        //     'email' => 'naritapr@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        //     Quis consequuntur quam ullam voluptate rerum, totam iste ut expedita assumenda?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis consequuntur quam ullam voluptate rerum, 
        //     totam iste ut expedita assumenda? Doloribus, id quibusdam nesciunt nam, debitis labore ullam unde quidem officia necessitatibus 
        //     a placeat molestias sed tempore quasi qui eveniet eos earum possimus sapiente iste, quas culpa! Odio culpa iusto exercitationem quae, 
        //     nulla recusandae omnis illo quidem laudantium maxime voluptatem. Rem iste laboriosam repellendus. Tempore commodi iusto cupiditate 
        //     dicta distinctio obcaecati nam? Esse magnam molestias illo quas, possimus suscipit autem nihil nisi voluptatum explicabo error inventore 
        //     velit provident! Dignissimos alias iusto inventore animi, minima corporis, voluptas iure libero quae voluptate perspiciatis!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        //     Quis consequuntur quam ullam voluptate rerum, totam iste ut expedita assumenda?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis consequuntur quam ullam voluptate rerum, 
        //     totam iste ut expedita assumenda? Doloribus, id quibusdam nesciunt nam, debitis labore ullam unde quidem officia necessitatibus 
        //     a placeat molestias sed tempore quasi qui eveniet eos earum possimus sapiente iste, quas culpa! Odio culpa iusto exercitationem quae, 
        //     nulla recusandae omnis illo quidem laudantium maxime voluptatem. Rem iste laboriosam repellendus. Tempore commodi iusto cupiditate 
        //     dicta distinctio obcaecati nam? Esse magnam molestias illo quas, possimus suscipit autem nihil nisi voluptatum explicabo error inventore 
        //     velit provident! Dignissimos alias iusto inventore animi, minima corporis, voluptas iure libero quae voluptate perspiciatis!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        //     Quis consequuntur quam ullam voluptate rerum, totam iste ut expedita assumenda?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis consequuntur quam ullam voluptate rerum, 
        //     totam iste ut expedita assumenda? Doloribus, id quibusdam nesciunt nam, debitis labore ullam unde quidem officia necessitatibus 
        //     a placeat molestias sed tempore quasi qui eveniet eos earum possimus sapiente iste, quas culpa! Odio culpa iusto exercitationem quae, 
        //     nulla recusandae omnis illo quidem laudantium maxime voluptatem. Rem iste laboriosam repellendus. Tempore commodi iusto cupiditate 
        //     dicta distinctio obcaecati nam? Esse magnam molestias illo quas, possimus suscipit autem nihil nisi voluptatum explicabo error inventore 
        //     velit provident! Dignissimos alias iusto inventore animi, minima corporis, voluptas iure libero quae voluptate perspiciatis!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        //     Quis consequuntur quam ullam voluptate rerum, totam iste ut expedita assumenda?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis consequuntur quam ullam voluptate rerum, 
        //     totam iste ut expedita assumenda? Doloribus, id quibusdam nesciunt nam, debitis labore ullam unde quidem officia necessitatibus 
        //     a placeat molestias sed tempore quasi qui eveniet eos earum possimus sapiente iste, quas culpa! Odio culpa iusto exercitationem quae, 
        //     nulla recusandae omnis illo quidem laudantium maxime voluptatem. Rem iste laboriosam repellendus. Tempore commodi iusto cupiditate 
        //     dicta distinctio obcaecati nam? Esse magnam molestias illo quas, possimus suscipit autem nihil nisi voluptatum explicabo error inventore 
        //     velit provident! Dignissimos alias iusto inventore animi, minima corporis, voluptas iure libero quae voluptate perspiciatis!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}

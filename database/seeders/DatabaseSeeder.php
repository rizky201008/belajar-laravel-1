<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
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
        // \App\Models\User::factory(10)->create();
        Post::create([
            'title'=>'Lorem ipsum dolor sit amet 1',
            'slug'=> 'lorem-ipsum-dolor-sit-amet-1',
            'category_id'=>1,
            'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita fuga minima est ratione esse sint alias ducimus labore asperiores. Molestias?',
            'body'=>'<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, quae cum veniam accusantium blanditiis recusandae tempora quibusdam adipisci neque, suscipit rerum non? Quod iure tempora cumque id inventore vero labore earum eveniet voluptas laborum aliquid voluptatum voluptate, nam magnam? Corporis, aliquid similique? Laudantium ipsa modi aspernatur, eum nesciunt corporis. Dolore.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem asperiores facere libero? Numquam eius et obcaecati beatae excepturi autem officiis sint, voluptatum suscipit cupiditate dolorum incidunt, sit pariatur ipsa provident quasi quam at aliquid qui fugit maxime exercitationem. Inventore eligendi beatae voluptate deserunt, quaerat accusantium enim laborum dicta laboriosam vel.</p>'
        ]);
        Post::create([
            'title'=>'Lorem ipsum dolor sit amet 2',
            'slug'=> 'lorem-ipsum-dolor-sit-amet-2',
            'category_id'=>2,
            'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita fuga minima est ratione esse sint alias ducimus labore asperiores. Molestias?',
            'body'=>'<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, quae cum veniam accusantium blanditiis recusandae tempora quibusdam adipisci neque, suscipit rerum non? Quod iure tempora cumque id inventore vero labore earum eveniet voluptas laborum aliquid voluptatum voluptate, nam magnam? Corporis, aliquid similique? Laudantium ipsa modi aspernatur, eum nesciunt corporis. Dolore.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem asperiores facere libero? Numquam eius et obcaecati beatae excepturi autem officiis sint, voluptatum suscipit cupiditate dolorum incidunt, sit pariatur ipsa provident quasi quam at aliquid qui fugit maxime exercitationem. Inventore eligendi beatae voluptate deserunt, quaerat accusantium enim laborum dicta laboriosam vel.</p>'
        ]);
        Post::create([
            'title'=>'Lorem ipsum dolor sit amet 3',
            'slug'=> 'lorem-ipsum-dolor-sit-amet-3',
            'category_id'=>3,
            'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita fuga minima est ratione esse sint alias ducimus labore asperiores. Molestias?',
            'body'=>'<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, quae cum veniam accusantium blanditiis recusandae tempora quibusdam adipisci neque, suscipit rerum non? Quod iure tempora cumque id inventore vero labore earum eveniet voluptas laborum aliquid voluptatum voluptate, nam magnam? Corporis, aliquid similique? Laudantium ipsa modi aspernatur, eum nesciunt corporis. Dolore.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem asperiores facere libero? Numquam eius et obcaecati beatae excepturi autem officiis sint, voluptatum suscipit cupiditate dolorum incidunt, sit pariatur ipsa provident quasi quam at aliquid qui fugit maxime exercitationem. Inventore eligendi beatae voluptate deserunt, quaerat accusantium enim laborum dicta laboriosam vel.</p>'
        ]);
        Post::create([
            'title'=>'Lorem ipsum dolor sit amet 4',
            'slug'=> 'lorem-ipsum-dolor-sit-amet-4',
            'category_id'=>1,
            'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita fuga minima est ratione esse sint alias ducimus labore asperiores. Molestias?',
            'body'=>'<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, quae cum veniam accusantium blanditiis recusandae tempora quibusdam adipisci neque, suscipit rerum non? Quod iure tempora cumque id inventore vero labore earum eveniet voluptas laborum aliquid voluptatum voluptate, nam magnam? Corporis, aliquid similique? Laudantium ipsa modi aspernatur, eum nesciunt corporis. Dolore.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem asperiores facere libero? Numquam eius et obcaecati beatae excepturi autem officiis sint, voluptatum suscipit cupiditate dolorum incidunt, sit pariatur ipsa provident quasi quam at aliquid qui fugit maxime exercitationem. Inventore eligendi beatae voluptate deserunt, quaerat accusantium enim laborum dicta laboriosam vel.</p>'
        ]);
        Post::create([
            'title'=>'Lorem ipsum dolor sit amet 5',
            'slug'=> 'lorem-ipsum-dolor-sit-amet-5',
            'category_id'=>2,
            'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita fuga minima est ratione esse sint alias ducimus labore asperiores. Molestias?',
            'body'=>'<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, quae cum veniam accusantium blanditiis recusandae tempora quibusdam adipisci neque, suscipit rerum non? Quod iure tempora cumque id inventore vero labore earum eveniet voluptas laborum aliquid voluptatum voluptate, nam magnam? Corporis, aliquid similique? Laudantium ipsa modi aspernatur, eum nesciunt corporis. Dolore.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem asperiores facere libero? Numquam eius et obcaecati beatae excepturi autem officiis sint, voluptatum suscipit cupiditate dolorum incidunt, sit pariatur ipsa provident quasi quam at aliquid qui fugit maxime exercitationem. Inventore eligendi beatae voluptate deserunt, quaerat accusantium enim laborum dicta laboriosam vel.</p>'
        ]);
        Post::create([
            'title'=>'Lorem ipsum dolor sit amet 6',
            'slug'=> 'lorem-ipsum-dolor-sit-amet-6',
            'category_id'=>3,
            'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita fuga minima est ratione esse sint alias ducimus labore asperiores. Molestias?',
            'body'=>'<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, quae cum veniam accusantium blanditiis recusandae tempora quibusdam adipisci neque, suscipit rerum non? Quod iure tempora cumque id inventore vero labore earum eveniet voluptas laborum aliquid voluptatum voluptate, nam magnam? Corporis, aliquid similique? Laudantium ipsa modi aspernatur, eum nesciunt corporis. Dolore.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem asperiores facere libero? Numquam eius et obcaecati beatae excepturi autem officiis sint, voluptatum suscipit cupiditate dolorum incidunt, sit pariatur ipsa provident quasi quam at aliquid qui fugit maxime exercitationem. Inventore eligendi beatae voluptate deserunt, quaerat accusantium enim laborum dicta laboriosam vel.</p>'
        ]);

        Category::create([
            'name'=>'Edukasi',
            'slug'=>'edukasi'
        ]);
        Category::create([
            'name'=>'Bisnis',
            'slug'=>'bisnis'
        ]);
        Category::create([
            'name'=>'Kesehatan',
            'slug'=>'kesehatan'
        ]);
    }
}

<?php

namespace Database\Seeders;

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
        User::truncate();
        Category::truncate();
        Post::truncate();


        $user = User::factory(1)->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family',
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work',
        ]);

        Post::create([
            'user_id' => $user->get(0)->id,
            'category_id' => $family->id,
            'title' => 'My family post',
            'slug' => 'my-family-post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et tortor ut mauris aliquet faucibus. Mauris porttitor leo lobortis nibh eleifend, et ultricies risus tristique. Sed id nisi risus. Cras nec orci justo. Suspendisse potenti. Integer eu lacinia enim, in lobortis urna. Quisque bibendum auctor massa, non consectetur augue imperdiet ut. Nulla viverra, est consequat hendrerit molestie, neque mauris ultrices erat, quis congue nisl leo vitae mi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque vel arcu lorem. Quisque id pharetra nibh. Aenean a efficitur sapien. Duis lacinia aliquam est vitae vehicula. Morbi sem velit, feugiat et scelerisque et, tincidunt pellentesque elit.</p>',
        ]);

        Post::create([
            'user_id' => $user->get(0)->id,
            'category_id' => $work->id,
            'title' => 'My work post',
            'slug' => 'my-work-post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et tortor ut mauris aliquet faucibus. Mauris porttitor leo lobortis nibh eleifend, et ultricies risus tristique. Sed id nisi risus. Cras nec orci justo. Suspendisse potenti. Integer eu lacinia enim, in lobortis urna. Quisque bibendum auctor massa, non consectetur augue imperdiet ut. Nulla viverra, est consequat hendrerit molestie, neque mauris ultrices erat, quis congue nisl leo vitae mi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque vel arcu lorem. Quisque id pharetra nibh. Aenean a efficitur sapien. Duis lacinia aliquam est vitae vehicula. Morbi sem velit, feugiat et scelerisque et, tincidunt pellentesque elit.</p>',
        ]);
    }
}

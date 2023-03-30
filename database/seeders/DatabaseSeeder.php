<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Post::factory(20)->create();
    //     $user =\App\Models\User::factory()->create();
    //     $personal=Category::create([
    //         'name'=>'Personal',
    //         'slug' =>'personal'
    //     ]);
    //     $work=Category::create([
    //         'name'=>'Work',
    //         'slug' =>'work'
    //     ]);
    //    $family= Category::create([
    //         'name'=>'Family',
    //         'slug' =>'family'
    //     ]);
    //     Post::create([
    //         'user_id'=> $user->id,
    //         'category_id' =>$family->id,
    //         'title'=>'My family Post',
    //         'slug' =>'my-family-post',
    //         'excerpt' => 'Lorem Ipsum is simply dummy text of the printing',
    //         'body' =>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    //         "
    //     ]);
    //     Post::create([
    //         'user_id'=>$user->id,
    //         'category_id' =>$work->id,
    //         'title'=>'My work Post',
    //         'slug' =>'my-work-post',
    //         'excerpt' => 'Lorem Ipsum is simply dummy text of the printing',
    //         'body' =>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    //         "
    //     ]);
    //     Post::create([
    //         'user_id'=>$user->id,
    //         'category_id' =>$personal->id,
    //         'title'=>'My Personal Post',
    //         'slug' =>'my-personal-post',
    //         'excerpt' => 'Lorem Ipsum is simply dummy text of the printing',
    //         'body' =>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    //         "
    //     ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

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
        // User::create([
        //     'name' => 'rizki',
        //     'email' => 'Rizki@gmail.com',
        //     'password' => bcrypt('12345678')
        // ]);

         \App\Models\User::factory(5)->create();

         Post::factory(20)->create();


         Category::create([
             'name' => 'Web Programing',
             'slug' => 'web-programing'
            ]);

            Category::create([
                'name' => 'Personal',
                'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        // User::create([
        //     'name' => 'test',
        //     'email' => 'test@gmail.com',
        //     'password' => bcrypt('12345678')
        // ]);

        // Post::create([
        //     'title' => 'Post Pertama',
        //     'slug' => 'post-pertama',
        //     'excerpt' => 'Ini Hanya sebagi pembelajaran laravel',
        //     'body' => 'Saya seorang yang kreatif dan suka mencari alternatif solusi dari berbagai macam persoalan. Saya juga bersikap terbuka terhadap semua kemungkinan solusi yang ada. Kreativitas sangat membantu saya untuk menjadi pemimpin yang baik karena saya bisa mengantisipasi berbagai persoalan. Saya adalah orang yang sangat disiplin dan fokus terhadap hasil kerjahingga cenderung idealis. Namun, saya juga bisa realistis saat menentukn target atau tujuan dan selalu berupaya keras untuk bisa mencapai tujuan tersebutdengan cara yang baik dan efisien.',
        //     'category_id' => 1,
        //     'user_id' => 2,
        // ]);
        // Post::create([
        //     'title' => 'Post Kedua',
        //     'slug' => 'post-kedua',
        //     'excerpt' => 'Ini Hanya sebagi pembelajaran laravel',
        //     'body' => 'Saya seorang yang kreatif dan suka mencari alternatif solusi dari berbagai macam persoalan. Saya juga bersikap terbuka terhadap semua kemungkinan solusi yang ada. Kreativitas sangat membantu saya untuk menjadi pemimpin yang baik karena saya bisa mengantisipasi berbagai persoalan. Saya adalah orang yang sangat disiplin dan fokus terhadap hasil kerjahingga cenderung idealis. Namun, saya juga bisa realistis saat menentukn target atau tujuan dan selalu berupaya keras untuk bisa mencapai tujuan tersebutdengan cara yang baik dan efisien.',
        //     'category_id' => 2  ,
        //     'user_id' => 1,
        // ]);





    }
}

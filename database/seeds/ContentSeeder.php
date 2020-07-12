<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $title = $faker->sentence(6);
        for ($i=0; $i < 4; $i++) { 
            DB::table('content')->insert([
                'content_title'         =>$title,
                'content_description'   =>$faker->text,
                'content_slug'          =>str_slug($title),
                'category_id'           =>rand(1,7),
                'content_file_banner'   =>$faker->imageUrl($width = 640, $height = 480, 'cats', true, 'Faker'),
                'content_in_banner'     =>$faker->imageUrl($width = 640, $height = 480, 'cats', true, 'Faker'),
                'content_user'          =>rand(1,7),
                'content_keywords'      => 'cat, funny, movie',
                'content_hit'           =>rand(300,500),
                'content_status'        =>1,
            ]);
        }
    }
}

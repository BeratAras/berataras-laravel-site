<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=['Yazılım', 'Kitap', 'Film-Dizi', 'Yaşam Tarzı', 'Oyun'];
        foreach($categories as $category){
            DB::table('categories')->insert([
                'category_name'     =>  $category,
                'category_keywords' =>  'kategori',
                'category_slug'     =>  str_slug($category),
                'category_status'   =>  '1'
            ]);
        }
    }
}

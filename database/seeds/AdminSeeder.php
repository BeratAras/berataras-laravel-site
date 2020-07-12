<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'admin_username'    =>  'berat',
            'password'        =>   bcrypt(12),
            'admin_photo'       =>  'berat.jpg'
        ]);
    }
}

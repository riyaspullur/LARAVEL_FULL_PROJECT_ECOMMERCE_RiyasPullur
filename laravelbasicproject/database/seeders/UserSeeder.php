<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name'=>'Riyas Pullur',
        //     'email'=>'riyaspullur786@gmail.com',
        //     'password'=>'12345'


        // ])
        DB::table('users')->insert([
            'name'=>'Ramees Pullur',
            'email'=>'ramees@gmail.com',
            'password'=>Hash::make('123456')


        ]);
    }
}

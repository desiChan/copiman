<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('muser')->insert([
            'name' => 'desiChan',
            'email' => 'desi.chandrika@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}

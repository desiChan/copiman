<?php

App/database/seeds/UserTableSeeder.php

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
        'name'     => 'Maria Zega',
        'email'    => 'maria.zega8@gmail.com',
        'password' => Hash::make('123456'),
    ));
}

}
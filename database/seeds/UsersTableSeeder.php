<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' =>'asd123',
            'email' =>  'asd@gmail.com',
            'type_id' => 1,
            'club_id'=>1,
            'password' => bcrypt('123456'),
        ]);
    }
}

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

        factory(PlatziPHP\User::class, 10)->create();

        /*DB::table('users')->insert([

            'name' => 'Orangel',

            'email' => 'obarrera@crearemos.com',

                'password' => '1234'
        ]);*/
    }
}

<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        factory('ProjectNpx\User')->create(
            [
                'name'=> 'fscampini',
                'email' => 'fscampini@gmail.com',
                'password' => Hash::make('evfdna85')
            ]
        );

        factory('ProjectNpx\User', 10)->create();
    }
}

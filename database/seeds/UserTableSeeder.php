<?php

use Illuminate\Database\Seeder;
use ProjectNpx\User;

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
                'name'=> 'Felipe Scampini da Silva',
                'email' => 'fscampini@gmail.com',
                'password' => Hash::make('0410147')
            ]
        );

        factory('ProjectNpx\User', 10)->create();

        // Atribuindo o menu ao usuário Felipe Scampini
        $user = User::find(1);
        $user->menus()->attach([1,2,3,4,5,6,7,8,9]);
    }
}

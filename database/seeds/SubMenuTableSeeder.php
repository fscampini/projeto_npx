<?php

use Illuminate\Database\Seeder;

class SubMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('ProjectNpx\SubMenu')->create(
            [
                'menu_id' => 7,
                'route_description' => 'documents.monitor',
                'name' => 'Reports 1',
                'created_by' => 1,
                'last_updated_by' => 1
            ]
        );

        factory('ProjectNpx\SubMenu')->create(
            [
                'menu_id' => 7,
                'route_description' => 'documents.upload_documents',
                'name' => 'Reports 2',
                'created_by' => 1,
                'last_updated_by' => 1
            ]
        );

        factory('ProjectNpx\SubMenu')->create(
            [
                'menu_id' => 8,
                'route_description' => 'documents.monitor',
                'name' => 'Cadastro de Usuários',
                'created_by' => 1,
                'last_updated_by' => 1
            ]
        );

        factory('ProjectNpx\SubMenu')->create(
            [
                'menu_id' => 8,
                'route_description' => 'documents.monitor',
                'name' => 'Gerenciador de acesso',
                'created_by' => 1,
                'last_updated_by' => 1
            ]
        );

        factory('ProjectNpx\SubMenu')->create(
            [
                'menu_id' => 9,
                'route_description' => 'documents.monitor',
                'name' => 'Cadastro de Ações',
                'created_by' => 1,
                'last_updated_by' => 1
            ]
        );

        factory('ProjectNpx\SubMenu')->create(
            [
                'menu_id' => 9,
                'route_description' => 'documents.monitor',
                'name' => 'Cadastro de Menu',
                'created_by' => 1,
                'last_updated_by' => 1
            ]
        );
    }
}

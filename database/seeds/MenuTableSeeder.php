<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->truncate();

        factory('ProjectNpx\Menu')->create(
            [
                'route_description' => 'documents.upload_documents',
                'font_awesome_description' => '<i class="fa fa-share-alt" aria-hidden="true"></i>',
                'name' => 'Integração com as Operadoras',
                'created_by' => 1,
                'last_updated_by' => 1
            ]
        );

        factory('ProjectNpx\Menu')->create(
            [
                'route_description' => 'documents.monitor',
                'font_awesome_description' => '<i class="fa fa-tachometer" aria-hidden="true"></i>',
                'name' => 'Monitoramento de XMLs',
                'created_by' => 1,
                'last_updated_by' => 1
            ]
        );

        factory('ProjectNpx\Menu')->create(
            [
                'route_description' => 'documents.monitor',
                'font_awesome_description' => '<i class="fa fa-tasks" aria-hidden="true"></i>',
                'name' => 'Distribuidor de Registros',
                'created_by' => 1,
                'last_updated_by' => 1
            ]
        );

        factory('ProjectNpx\Menu')->create(
            [
                'route_description' => 'documents.monitor',
                'font_awesome_description' => '<i class="fa fa-users" aria-hidden="true"></i>',
                'name' => 'Gerir equipe',
                'created_by' => 1,
                'last_updated_by' => 1
            ]
        );

        factory('ProjectNpx\Menu')->create(
            [
                'route_description' => 'documents.monitor',
                'font_awesome_description' => '<i class="fa fa-file-code-o" aria-hidden="true"></i>',
                'name' => 'Editar XML',
                'created_by' => 1,
                'last_updated_by' => 1
            ]
        );

        factory('ProjectNpx\Menu')->create(
            [
                'route_description' => 'documents.monitor',
                'font_awesome_description' => '<i class="fa fa-cogs" aria-hidden="true"></i>',
                'name' => 'Reprocessar XML',
                'created_by' => 1,
                'last_updated_by' => 1
            ]
        );

        factory('ProjectNpx\Menu')->create(
            [
                'route_description' => 'documents.monitor',
                'font_awesome_description' => '<i class="fa fa-pie-chart"></i>',
                'name' => 'Dashboards',
                'created_by' => 1,
                'last_updated_by' => 1
            ]
        );

        factory('ProjectNpx\Menu')->create(
            [
                'route_description' => 'documents.monitor',
                'font_awesome_description' => '<i class="fa fa-lock" aria-hidden="true"></i>',
                'name' => 'Administrador',
                'created_by' => 1,
                'last_updated_by' => 1
            ]
        );

        factory('ProjectNpx\Menu')->create(
            [
                'route_description' => 'documents.monitor',
                'font_awesome_description' => '<i class="fa fa-magic" aria-hidden="true"></i>',
                'name' => 'Super Usuário',
                'created_by' => 1,
                'last_updated_by' => 1
            ]
        );

        factory('ProjectNpx\Menu')->create(
            [
                'route_description' => 'superuser.menu.index',
                'font_awesome_description' => '<i class="fa fa-plug" aria-hidden="true"></i>',
                'name' => 'Cadastrar Menu',
                'created_by' => 1,
                'last_updated_by' => 1,
                'parent_menu_id' => 9
            ]
        );

        factory('ProjectNpx\Menu')->create(
            [
                'route_description' => 'superuser.action_code.index',
                'font_awesome_description' => '<i class="fa fa-check-square-o" aria-hidden="true"></i>',
                'name' => 'Cadastrar Ação',
                'created_by' => 1,
                'last_updated_by' => 1,
                'parent_menu_id' => 9
            ]
        );


    }
}

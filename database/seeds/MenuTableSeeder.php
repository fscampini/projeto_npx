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
                'treeview_flag' => false,
                'created_by' => 1,
                'last_updated_by' => 1
            ]
        );

        factory('ProjectNpx\Menu')->create(
            [
                'route_description' => 'documents.monitor',
                'font_awesome_description' => '<i class="fa fa-tachometer" aria-hidden="true"></i>',
                'name' => 'Monitoramento de XMLs',
                'treeview_flag' => false,
                'created_by' => 1,
                'last_updated_by' => 1
            ]
        );

        factory('ProjectNpx\Menu')->create(
            [
                'route_description' => 'documents.monitor',
                'font_awesome_description' => '<i class="fa fa-tasks" aria-hidden="true"></i>',
                'name' => 'Distribuidor de Registros',
                'treeview_flag' => false,
                'created_by' => 1,
                'last_updated_by' => 1
            ]
        );

        factory('ProjectNpx\Menu')->create(
            [
                'route_description' => 'documents.monitor',
                'font_awesome_description' => '<i class="fa fa-users" aria-hidden="true"></i>',
                'name' => 'Gerir equipe',
                'treeview_flag' => false,
                'created_by' => 1,
                'last_updated_by' => 1
            ]
        );

        factory('ProjectNpx\Menu')->create(
            [
                'route_description' => 'documents.monitor',
                'font_awesome_description' => '<i class="fa fa-file-code-o" aria-hidden="true"></i>',
                'name' => 'Editar XML',
                'treeview_flag' => false,
                'created_by' => 1,
                'last_updated_by' => 1
            ]
        );

        factory('ProjectNpx\Menu')->create(
            [
                'route_description' => 'documents.monitor',
                'font_awesome_description' => '<i class="fa fa-cogs" aria-hidden="true"></i>',
                'name' => 'Reprocessar XML',
                'treeview_flag' => false,
                'created_by' => 1,
                'last_updated_by' => 1
            ]
        );

        factory('ProjectNpx\Menu')->create(
            [
                'route_description' => 'documents.monitor',
                'font_awesome_description' => '<i class="fa fa-pie-chart"></i>',
                'name' => 'Dashboards',
                'treeview_flag' => true,
                'created_by' => 1,
                'last_updated_by' => 1
            ]
        );

        factory('ProjectNpx\Menu')->create(
            [
                'route_description' => 'documents.monitor',
                'font_awesome_description' => '<i class="fa fa-lock" aria-hidden="true"></i>',
                'name' => 'Administrador',
                'treeview_flag' => true,
                'created_by' => 1,
                'last_updated_by' => 1
            ]
        );

        factory('ProjectNpx\Menu')->create(
            [
                'route_description' => 'documents.monitor',
                'font_awesome_description' => '<i class="fa fa-magic" aria-hidden="true"></i>',
                'name' => 'Super Usuário',
                'treeview_flag' => true,
                'created_by' => 1,
                'last_updated_by' => 1
            ]
        );


    }
}

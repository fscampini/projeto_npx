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
                'access_group' => 'acl-document',
                'created_by' => 1,
                'last_updated_by' => 1
            ]
        );

        factory('ProjectNpx\Menu')->create(
            [
                'route_description' => 'documents.monitor',
                'font_awesome_description' => '<i class="fa fa-tachometer" aria-hidden="true"></i>',
                'name' => 'Monitoramento de XMLs',
                'access_group' => 'acl-document',
                'created_by' => 1,
                'last_updated_by' => 1
            ]
        );

        factory('ProjectNpx\Menu')->create(
            [
                'route_description' => 'documents.monitor',
                'font_awesome_description' => '<i class="fa fa-tasks" aria-hidden="true"></i>',
                'name' => 'Distribuidor de Registros',
                'access_group' => 'acl-document',
                'created_by' => 1,
                'last_updated_by' => 1
            ]
        );

        factory('ProjectNpx\Menu')->create(
            [
                'route_description' => 'documents.monitor',
                'font_awesome_description' => '<i class="fa fa-users" aria-hidden="true"></i>',
                'name' => 'Gerir equipe',
                'access_group' => 'acl-document',
                'created_by' => 1,
                'last_updated_by' => 1
            ]
        );

        factory('ProjectNpx\Menu')->create(
            [
                'route_description' => 'documents.monitor',
                'font_awesome_description' => '<i class="fa fa-file-code-o" aria-hidden="true"></i>',
                'name' => 'Editar XML',
                'access_group' => 'acl-document',
                'created_by' => 1,
                'last_updated_by' => 1
            ]
        );

        factory('ProjectNpx\Menu')->create(
            [
                'route_description' => 'documents.monitor',
                'font_awesome_description' => '<i class="fa fa-cogs" aria-hidden="true"></i>',
                'name' => 'Reprocessar XML',
                'access_group' => 'acl-document',
                'created_by' => 1,
                'last_updated_by' => 1
            ]
        );

        factory('ProjectNpx\Menu')->create(
            [
                'route_description' => 'documents.monitor',
                'font_awesome_description' => '<i class="fa fa-pie-chart"></i>',
                'name' => 'Dashboards',
                'access_group' => 'acl-document',
                'created_by' => 1,
                'last_updated_by' => 1
            ]
        );

        factory('ProjectNpx\Menu')->create(
            [
                'route_description' => 'documents.monitor',
                'font_awesome_description' => '<i class="fa fa-lock" aria-hidden="true"></i>',
                'name' => 'Administrador',
                'access_group' => 'acl-document',
                'created_by' => 1,
                'last_updated_by' => 1
            ]
        );

        factory('ProjectNpx\Menu')->create(
            [
                'route_description' => 'documents.monitor',
                'font_awesome_description' => '<i class="fa fa-magic" aria-hidden="true"></i>',
                'name' => 'Super Usuário',
                'access_group' => 'acl-document',
                'created_by' => 1,
                'last_updated_by' => 1
            ]
        );

        factory('ProjectNpx\Menu')->create(
            [
                'route_description' => 'superuser.menu.index',
                'font_awesome_description' => '<i class="fa fa-plug" aria-hidden="true"></i>',
                'name' => 'Cadastrar Menu',
                'access_group' => 'acl-superuser-menu',
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
                'access_group' => 'acl-superuser-action_code',
                'created_by' => 1,
                'last_updated_by' => 1,
                'parent_menu_id' => 9
            ]
        );

        factory('ProjectNpx\Menu')->create(
            [
                'route_description' => 'superuser.role.index',
                'font_awesome_description' => '<i class="fa fa-eye" aria-hidden="true"></i>',
                'name' => 'Adicionar Função',
                'access_group' => 'acl-superuser-role',
                'created_by' => 1,
                'last_updated_by' => 1,
                'parent_menu_id' => 9
            ]
        );

        factory('ProjectNpx\Menu')->create(
            [
                'route_description' => 'admin.user.index',
                'font_awesome_description' => '<i class="fa fa-user-plus" aria-hidden="true"></i>',
                'name' => 'Cadastrar Usuário',
                'access_group' => 'acl-admin-user',
                'created_by' => 1,
                'last_updated_by' => 1,
                'parent_menu_id' => 8
            ]
        );


    }
}

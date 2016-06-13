<?php

use Illuminate\Database\Seeder;

class ActionCodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('action_codes')->truncate();

        factory('ProjectNpx\ActionCode')->create(
            [
                'description' => 'Registro Enviado',
                'font_awesome_description' => '<ul class="timeline"><li><i class="fa fa-cloud-upload" aria-hidden="true"></i></li></ul>',
                'created_by' => 1,
                'last_updated_by' => 1,
                'status_label' => '<span class="label label-warning">Registro Enviado</span>'
            ]
        );

        factory('ProjectNpx\ActionCode')->create(
            [
                'description' => 'Registro Processado',
                'font_awesome_description' => '<ul class="timeline"><li><i class="fa fa-cogs" aria-hidden="true"></i></li></ul>',
                'created_by' => 1,
                'last_updated_by' => 1,
                'status_label' => '<span class="label label-success">Registro Processado</span>'
            ]
        );

        factory('ProjectNpx\ActionCode')->create(
            [
                'description' => 'Documento Encaminhado para Tratamento',
                'font_awesome_description' => '<ul class="timeline"><li><i class="fa fa-share-square" aria-hidden="true"></i></li></ul>',
                'created_by' => 1,
                'last_updated_by' => 1,
                'status_label' => '<span class="label label-danger">Documento Encaminhado para Tratamento</span>'
            ]
        );
    }
}

<?php

use Illuminate\Database\Seeder;

class ActionHistoryCodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('action_history_codes')->truncate();

        factory('ProjectNpx\ActionHistoryCode')->create(
            [
                'description' => 'Registro Enviado',
                'font_awesome_description' => '<i class="fa fa-cloud-upload" aria-hidden="true"></i>',
                'created_by' => 1
            ]
        );

        factory('ProjectNpx\ActionHistoryCode')->create(
            [
                'description' => 'Registro Processado',
                'font_awesome_description' => '<i class="fa fa-cogs" aria-hidden="true"></i>',
                'created_by' => 1
            ]
        );

        factory('ProjectNpx\ActionHistoryCode')->create(
            [
                'description' => 'Documento Encaminhado para Tratamento',
                'font_awesome_description' => '<i class="fa fa-share-square" aria-hidden="true"></i>',
                'created_by' => 1
            ]
        );
    }
}

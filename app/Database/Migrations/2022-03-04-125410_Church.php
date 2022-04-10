<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Church extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'church_id' => [
                'type' => 'BIGINT',
                'auto_increment' => true
            ],
            'church_name' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
                'null' => false
            ],
            'church_leader' => [
                'type' => 'VARCHAR',
                'constraint' => '30',

            ],
            'church_memberNum' => [

            ],
            'church_groupNum' => [

            ]

        ]);
    }

    public function down()
    {
        //
    }
}

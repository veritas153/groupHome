<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Group extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'group_id' => [
                'type' => 'BIGINT',
                'auto_increment' => true
            ],

            'group_name' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
                'null' => false
            ],
            'group_church_name' => [
                'type' => 'BIGINT',
                'null' => false
            ],

        ]);
    }

    public function down()
    {
        //
    }
}

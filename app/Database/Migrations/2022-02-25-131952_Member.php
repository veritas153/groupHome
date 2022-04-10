<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Member extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'member_id' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
                'null' => false
            ],
            'member_password' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false
            ],
            'member_name' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'null' => false
            ],
            'member_church' => [
                'type' => 'BIGINT',
                'null' => false
            ],
            'member_group' => [
                'type' => 'BIGINT',
                'null' => false
            ],
            'member_level' => [
                'type' => 'BIGINT',
                'null' => false
            ],
            'member_date datetime default current_timestamp'
        ]);
        $this->forge->addKey('member_id', true);
    }

    public function down()
    {
        //
    }
}

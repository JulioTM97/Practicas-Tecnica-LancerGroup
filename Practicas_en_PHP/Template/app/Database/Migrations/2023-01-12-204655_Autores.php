<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Autores extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'autor_id'      => [
                'type'          => 'INT',
                'constraint'    => 5,
                'unsigned'      => true,
                'auto_increment'=> true,
            ],
            'nombre'        => [
                'type'          => 'VARCHAR',
                'constraint'    => '30',
            ],
            'apellido'      => [
                'type'          => 'VARCHAR',
                'constraint'    => '30',
            ],
            'pais'          => [
                'type'          => 'VARCHAR',
                'constraint'    => '30',
            ],
            'fecha_registro'=> [
                'type'          => 'TIMESTAMP',
                'default'       => new RawSql('CURRENT_TIMESTAMP'),
            ],
            'borrado'       => [
                'type'          => 'BOOLEAN',
                'default'       => 0,
            ],
        ]);
        $this->forge->addKey("autor_id",true);
        $this->forge->createTable("autores");

    }

    public function down()
    {
        $this->forge->dropTable("autores");
    }
}

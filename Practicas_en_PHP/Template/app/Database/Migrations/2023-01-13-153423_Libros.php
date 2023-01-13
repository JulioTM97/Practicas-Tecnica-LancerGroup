<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Libros extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'libro_id'      => [
                'type'          => 'INT',
                'constraint'    => 5,
                'unsigned'      => true,
                'auto_increment'=> true,
            ],
            'nombre'        => [
                'type'          => 'VARCHAR',
                'constraint'    => '30',
            ],
            'fecha_publicacion'=> [
                'type'          => 'TIMESTAMP',
                'default'       => new RawSql('CURRENT_TIMESTAMP'),
            ],
            'edicion'        => [
                'type'          => 'VARCHAR',
                'constraint'    => '30',
            ],
            'autor_id'      => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
        ]);
        $this->forge->addKey("libro_id",true);
        $this->forge->addForeignKey('autor_id', 'autores', 'autor_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable("libros");
    }

    public function down()
    {
        $this->forge->dropTable("libros");
    }
}
<?php namespace App\Models;
use CodeIgniter\Model;
class AutoresModel extends Model {
    public function getAll() {
        $autores = $this->db->query('SELECT * FROM autores');
        return $autores->getResult();
    }

    public function selectAuthor($id) {
        $autores = $this->db->query('SELECT * FROM autores WHERE autor_id = '.$id);
        return $autores->getResult();
    }
}


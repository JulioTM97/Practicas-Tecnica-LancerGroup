<?php namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class AutoresModel extends Model {
    public function getAll() {
        $autores = $this->db->query('SELECT * FROM autores WHERE borrado = 0');
        return $autores->getResult();
    }

    public function selectAuthor($id) {
        $autores = $this->db->query('SELECT * FROM autores WHERE autor_id = '.$id);
        return $autores->getResult();
    }

    public function insertAuthor($name,$lastName,$country) {
        $data = [
            "nombre" => $name,
            "apellido" => $lastName,
            "pais" => $country,
        ];
        return $this->db->table("autores")->insert($data);
    }

    public function updateAuthor($name,$lastName,$country,$id) {
        $query = $this->db->query("UPDATE autores SET nombre='$name', apellido='$lastName', pais='$country' WHERE autor_id='$id'");
    }

    public function softDeleteAuthor($id) {
        $query = $this->db->query("UPDATE autores SET borrado=1 WHERE autor_id='$id'");
    }
}


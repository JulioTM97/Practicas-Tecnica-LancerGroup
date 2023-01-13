<?php namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class LibrosModel extends Model {
    public function getAll() {
        $libros = $this->db->query('SELECT * FROM libros');
        return $libros->getResult();
    }

    public function deleteBook($id) {
        $query = $this->db->query("DELETE FROM libros WHERE libro_id='$id'");
    }

    public function selectBook($id) {
        $libro = $this->db->query("SELECT * FROM libros WHERE libro_id ='$id'");
        return $libro->getResult();
    }

    public function updateBook($name,$edition,$author_id,$id) {
        $query = $this->db->query("UPDATE libros SET nombre='$name', edicion='$edition', autor_id='$author_id' WHERE libro_id='$id'");
    }

    public function insertBook($name,$edition,$author_id) {
        $data = [
            "nombre" => $name,
            "edicion" => $edition,
            "autor_id" => $author_id,
        ];
        return $this->db->table("libros")->insert($data);
    }
}


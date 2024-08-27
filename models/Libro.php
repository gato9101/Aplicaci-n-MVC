<?php
class Libro {
    private $conn;
    private $table_name = "libros";

    public $id;
    public $titulo;
    public $autor;
    public $anio_publicacion;
    public $genero;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " (titulo, autor, anio_publicacion, genero) VALUES (:titulo, :autor, :anio_publicacion, :genero)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":titulo", $this->titulo);
        $stmt->bindParam(":autor", $this->autor);
        $stmt->bindParam(":anio_publicacion", $this->anio_publicacion);
        $stmt->bindParam(":genero", $this->genero);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function update() {
        $query = "UPDATE " . $this->table_name . " SET titulo = :titulo, autor = :autor, anio_publicacion = :anio_publicacion, genero = :genero WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":titulo", $this->titulo);
        $stmt->bindParam(":autor", $this->autor);
        $stmt->bindParam(":anio_publicacion", $this->anio_publicacion);
        $stmt->bindParam(":genero", $this->genero);
        $stmt->bindParam(":id", $this->id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id", $this->id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>

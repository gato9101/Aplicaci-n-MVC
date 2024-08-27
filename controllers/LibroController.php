<?php
require_once '../config/database.php';
require_once '../models/Libro.php';

$database = new Database();
$db = $database->getConnection();

$libro = new Libro($db);

$action = isset($_GET['action']) ? $_GET['action'] : 'read';

switch ($action) {
    case 'read':
        $stmt = $libro->read();
        $libros = $stmt->fetchAll(PDO::FETCH_ASSOC);
        include_once '../views/libros/index.php';
        break;

    case 'create':
        if ($_POST) {
            $libro->titulo = $_POST['titulo'];
            $libro->autor = $_POST['autor'];
            $libro->anio_publicacion = $_POST['anio_publicacion'];
            $libro->genero = $_POST['genero'];

            if ($libro->create()) {
                header("Location: /index.php?action=read");
            } else {
                echo "Error al crear el libro.";
            }
        } else {
            include_once '../views/libros/create.php';
        }
        break;

    case 'edit':
        if ($_POST) {
            $libro->id = $_POST['id'];
            $libro->titulo = $_POST['titulo'];
            $libro->autor = $_POST['autor'];
            $libro->anio_publicacion = $_POST['anio_publicacion'];
            $libro->genero = $_POST['genero'];

            if ($libro->update()) {
                header("Location: /index.php?action=read");
            } else {
                echo "Error al actualizar el libro.";
            }
        } else {
            $libro->id = isset($_GET['id']) ? $_GET['id'] : die('ID no encontrado.');
            $stmt = $libro->read();
            $libro = $stmt->fetch(PDO::FETCH_ASSOC);
            include_once '../views/libros/edit.php';
        }
        break;

    case 'delete':
        if (isset($_GET['id'])) {
            $libro->id = $_GET['id'];
            if ($libro->delete()) {
                header("Location: /index.php?action=read");
            } else {
                echo "Error al eliminar el libro.";
            }
        }
        break;

    default:
        header("Location: /index.php?action=read");
        break;
}
?>

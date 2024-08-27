
<?php
$url = isset($_GET['url']) ? $_GET['url'] : '/';

switch ($url) {
    case '/':
    case 'read':
        require 'controllers/LibroController.php';
        break;
    case 'create':
        require 'controllers/LibroController.php?action=create';
        break;
    case 'edit':
        require 'controllers/LibroController.php?action=edit';
        break;
    case 'delete':
        require 'controllers/LibroController.php?action=delete';
        break;
    default:
        echo "Página no encontrada.";
        break;
}
?>

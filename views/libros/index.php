<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Libros</title>
</head>
<body>
    <h1>Lista de Libros</h1>
    <a href="/Andres/prueba/public/index.php?action=create">Crear Nuevo Libro</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Año de Publicación</th>
                <th>Género</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($libros as $libro): ?>
                <tr>
                    <td><?php echo $libro['id']; ?></td>
                    <td><?php echo $libro['titulo']; ?></td>
                    <td><?php echo $libro['autor']; ?></td>
                    <td><?php echo $libro['anio_publicacion']; ?></td>
                    <td><?php echo $libro['genero']; ?></td>
                    <td>
                        <a href="/Andres/prueba/public/index.php?action=edit&id=<?php echo $libro['id']; ?>">Editar</a>
                        <a href="/Andres/prueba/public/index.php?action=delete&id=<?php echo $libro['id']; ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

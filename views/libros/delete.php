<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Libro</title>
</head>
<body>
    <h1>Eliminar Libro</h1>
    <p>¿Estás seguro que deseas eliminar el libro titulado "<?php echo $libro['titulo']; ?>"?</p>
    <form action="/Andres/prueba/public/index.php?action=delete&id=<?php echo $libro['id']; ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $libro['id']; ?>">
        <input type="submit" value="Eliminar">
    </form>
    <a href="/Andres/prueba/public/index.php?action=read">Cancelar</a>
</body>
</html>

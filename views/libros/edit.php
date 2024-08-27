<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Libro</title>
</head>
<body>
    <h1>Editar Libro</h1>
    <form action="/Andres/prueba/public/index.php?action=edit&id=<?php echo $libro['id']; ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $libro['id']; ?>">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" value="<?php echo $libro['titulo']; ?>" required>
        <br>
        <label for="autor">Autor:</label>
        <input type="text" name="autor" id="autor" value="<?php echo $libro['autor']; ?>" required>
        <br>
        <label for="anio_publicacion">Año de Publicación:</label>
        <input type="number" name="anio_publicacion" id="anio_publicacion" value="<?php echo $libro['anio_publicacion']; ?>" required>
        <br>
        <label for="genero">Género:</label>
        <input type="text" name="genero" id="genero" value="<?php echo $libro['genero']; ?>" required>
        <br>
        <input type="submit" value="Guardar Cambios">
    </form>
    <a href="/Andres/prueba/public/index.php?action=read">Volver a la lista</a>
</body>
</html>

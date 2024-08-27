<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Nuevo Libro</title>
</head>
<body>
    <h1>Crear Nuevo Libro</h1>
    <form action="/Andres/prueba/public/index.php?action=create" method="post">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" required>
        <br>
        <label for="autor">Autor:</label>
        <input type="text" name="autor" id="autor" required>
        <br>
        <label for="anio_publicacion">Año de Publicación:</label>
        <input type="number" name="anio_publicacion" id="anio_publicacion" required>
        <br>
        <label for="genero">Género:</label>
        <input type="text" name="genero" id="genero" required>
        <br>
        <input type="submit" value="Guardar">
    </form>
    <a href="/Andres/prueba/public/index.php?action=read">Volver a la lista</a>
</body>
</html>

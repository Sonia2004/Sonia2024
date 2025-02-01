<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios con PHP</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <section>
        <h1>Formularios con PHP</h1>
        <form action="procesar-form.php" method="post">
            <input type="text" placeholder="Nombre" name="txtNombre"> 
            <input type="number" placeholder="Edad" name="txtEdad">
            <select name="SelectCarrera">
                <option value="">--Seleccione Carrera--</option> <
                <option value="sistemas">Ing. Sistemas Computacionales</option>
                <option value="meca">Mecatrónica</option>
                <option value="logistica">Logística</option>
                <option value="industrial">Industrial</option>
                <option value="civil">Ing. Civil</option>
            </select>
            <button type="submit">Registrar</button> 
            <button type="reset">Nuevo</button> 
        </form>
    </section>
</body>
</html>

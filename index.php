<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Formulario</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header class="site-header contenedor">
        <h1>Captura de Datos Demográficos:</h1>
    </header>

    <main class="contenedor">
        <?php include('include/layout/formulario.php'); ?>
        <?php include('include/layout/tabla-resultados.php'); ?>
    </main>
    <footer>
        <script src="app.js"></script>
    </footer>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>EJEMPLO PILA LAMP</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>EJEMPLO PILA LAMP</h1>
    <div class="container">
        <h2>Resultado a la consulta</h2>
        <?php include 'main.php'; ?>
    </div>

    <form method="post" action="correo.php">

	<label for="subject">Asunto</label>
	<input type="text" name="subject" id="subject"><br>

	<label for="from">Correo</label>
	<input type="text" name="from" id="from"><br>

	<label for="msg">Mensaje: </label>
	<textarea name="msg" id="msg" cols="30" rows="10"></textarea><br>

	<input type="submit">

</form>

</body>
</html>

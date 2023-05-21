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
        <label for="destinatario">Destinatario:</label>
        <input type="email" name="destinatario" id="destinatario" required><br><br>
        <label for="asunto">Asunto:</label>
        <input type="text" name="asunto" id="asunto" required><br><br>
        <label for="mensaje">Mensaje:</label><br>
        <textarea name="mensaje" id="mensaje" rows="5" cols="30" required></textarea><br><br>
        <input type="submit" value="Enviar correo">
    </form>

</form>

</body>
</html>

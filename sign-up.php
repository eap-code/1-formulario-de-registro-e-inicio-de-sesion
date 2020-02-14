<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/sign-up.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>

    <!-- navbar include -->

    <?php include("includes/nav.php") ?>

    <!-- end navbar -->

    <div class="container">

        <form action="#">

            <h2>Formulario de registro</h2>

            <input type="text" placeholder="Nombre completo">

            <input type="text" placeholder="Correo">

            <input type="password" placeholder="Contrasena">

            <input type="password" placeholder="Confirmar contrasena">

            <input type="submit" value="Send">

        </form>

    </div>

    <!-- footer include -->

    <?php include("includes/footer.php") ?>

    <!-- end footer -->

</body>
</html>
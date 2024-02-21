<!DOCTYPE html>
<html lang="en">

<head>
    <title>Votação</title>
</head>

<body>
    <h2>Verifique se você pode votar!</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <input type="text" name="verificacao"><br><br>
        <input type="submit" value="verificar">
    </form>
    <?php
    if ($_POST) {
        $verificacao = $_POST['verificacao'];
        if (is_numeric($verificacao)) {
            if ($verificacao >= 16) {
                echo "<h3> Você tem $verificacao e pode votar!</h3>";
            } else{
                echo"<h3> Você tem $verificacao e não pode votar!";
            }
        }
    }
    ?>
</body>

</html>
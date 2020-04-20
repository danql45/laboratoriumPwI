<!doctype html>
<html lang="PL">
    <head>
        <meta charset="UTF-8">
        <title>20.php</title>
    </head>
    <body>
        <a href="21.php">21.php</a>
        <?php
            session_start();
            $_SESSION['zmSes'] = "Ala ma kota";
        ?>
    </body>
</html>
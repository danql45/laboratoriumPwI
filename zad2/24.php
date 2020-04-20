<!doctype html>
<html lang="PL">
    <head>
        <meta charset="UTF-8">
        <title>24.php</title>
    </head>
    <body>
        <a href="25.php">25.php</a>
        <?php
            session_start();
            echo $_SESSION['zmSes'];
        ?>
    </body>
</html>
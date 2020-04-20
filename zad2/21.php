<!doctype html>
<html lang="PL">
    <head>
        <meta charset="UTF-8">
        <title>21.php</title>
    </head>
    <body>
        <a href="22.php">22.php</a>
        <?php
            session_start();
            echo $_SESSION['zmSes'];
        ?>
    </body>
</html>
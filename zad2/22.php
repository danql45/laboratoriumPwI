<!doctype html>
<html lang="PL">
    <head>
        <meta charset="UTF-8">
        <title>22.php</title>
    </head>
    <body>
        <a href="23.php">23.php</a>
        <?php
            session_start();
            echo $_SESSION['zmSes'];
        ?>
    </body>
</html>
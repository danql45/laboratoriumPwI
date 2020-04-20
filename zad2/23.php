<!doctype html>
<html lang="PL">
    <head>
        <meta charset="UTF-8">
        <title>23.php</title>
    </head>
    <body>
        <a href="24.php">24.php</a>
        <?php
            session_start();
            session_destroy();
        ?>
    </body>
</html>
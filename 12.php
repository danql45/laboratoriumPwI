<!doctype html>
<html lang="PL">
    <head>
        <meta charset="UTF-8">
        <title>12.php</title>
    </head>
    <body>
        <?php
            echo $_GET["liczba1"] ? "liczba1 = " .$_GET["liczba1"] : "Nie podano pierwszej liczby";
            echo "<br>";
            echo $_GET["liczba2"] ? "liczba2 = " .$_GET["liczba2"] : "Nie podano drugiej liczby";
        ?>
    </body>
</html>
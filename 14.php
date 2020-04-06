<!doctype html>
<html lang="PL">
    <head>
        <meta charset="UTF-8">
        <title>14.php</title>
    </head>
    <body>
        <?php
            $l1 = (int)$_POST["liczba1"];
            $l2 = (int)$_POST["liczba2"];
            echo "liczba1 + liczba2 = ".($l1 + $l2);
            echo "<br>";
            echo "liczba1 - liczba2 = ".($l1 - $l2);
            echo "<br>";
            echo "liczba1 * liczba2 = ".($l1 * $l2);
            echo "<br>";
            if($l2 == 0){
                echo "Nie mozna dzielic przez 0";
            }else{
                echo "liczba1 / liczba2 = ".($l1 / $l2);
                echo "<br>";
            }
        ?>
    </body>
</html>
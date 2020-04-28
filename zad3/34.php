<!doctype html>
<html lang="PL">
    <head>
        <meta charset="UTF-8">
        <title>34.php</title>
    </head>
    <body>
        <?php
            try{
                $dBase = new PDO("mysql:host=localhost:3307;dbname=motoryzacja", "root", "");
            }catch(PDOException $e){
                echo "Połączenie z bazą danych zakończone niepowodzeniem: " . $e->getMessage();
            return;
            }
            $cars = $dBase->query("SELECT marka, model, pojemnosc FROM samochody WHERE id=1 OR id=3");
        ?>

        <tr>
            <th>Marka</th>
            <th>Model</th>
            <th>Pojemność</th>
        </tr>

        <?php
            foreach($cars as $car){    
                echo "<table><tr><td>" . $car["marka"] . "</td>";    
                echo "<td>" . $car["model"] . "</td>";    
                echo "<td>" . $car["pojemnosc"] . "</td></tr></table>";
            }
        ?>
    </body>
</html>

<!doctype html>
<html lang="PL">
    <head>
        <meta charset="UTF-8">
        <title>41.php</title>
    </head>
    <body>
        <?php
            try{
                $dBase = new PDO("mysql:host=localhost:3307;dbname=uczelnia", "root", "");
            }catch(PDOException $e){
                echo "Połączenie z bazą danych zakończone niepowodzeniem: " . $e->getMessage();
            return;
            }
            
            $uczelnia = 'UPDATE studenci SET nazwisko = "Malinowska" WHERE id = 3';
            $dBase->exec($uczelnia);
        ?>
    </body>
</html>
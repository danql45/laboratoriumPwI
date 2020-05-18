<!doctype html>
<html lang="PL">
    <head>
        <meta charset="UTF-8">
        <title>53.php</title>
    </head>
    <body>
        <?php
            try{
                $dBase = new PDO("mysql:host=localhost:3307;dbname=uczelnia", "root", "");
            }catch(PDOException $e){
                echo "Połączenie z bazą danych zakończone niepowodzeniem: " . $e->getMessage();
            return;
            }
            $sql = 'DELETE FROM studenci WHERE id = :id';
            $sth = $dBase->prepare($sql);
            $sth->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
            $sth->execute();
        ?>
    </body>
</html>
<!doctype html>
<html lang="PL">
    <head>
        <meta charset="UTF-8">
        <title>51.php</title>
    </head>
    <body>
        <?php
            try{
                $dBase = new PDO("mysql:host=localhost:3307;dbname=uczelnia", "root", "");
            }catch(PDOException $e){
                echo "Połączenie z bazą danych zakończone niepowodzeniem: " . $e->getMessage();
            return;
            }
            
            $sql = 'INSERT INTO studenci (imie, nazwisko, email, id_rok_studiow) VALUES (:imie, :nazwisko, :email, :id_rok_studiow)';
            $sth = $dBase->prepare($sql);
            $sth->bindValue(':imie', $_GET['imie'], PDO::PARAM_STR);
            $sth->bindValue(':nazwisko', $_GET['nazwisko'], PDO::PARAM_STR);
            $sth->bindValue(':email', $_GET['email'], PDO::PARAM_STR);
            $sth->bindValue(':id_rok_studiow', $_GET['id_rok_studiow'], PDO::PARAM_INT);
            $sth->execute();
        ?>
    </body>
</html>
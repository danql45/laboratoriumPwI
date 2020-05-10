<!doctype html>
<html lang="PL">
    <head>
        <meta charset="UTF-8">
        <title>40.php</title>
    </head>
    <body>
        <?php
            try{
                $dBase = new PDO("mysql:host=localhost:3307;dbname=uczelnia", "root", "");
            }catch(PDOException $e){
                echo "Połączenie z bazą danych zakończone niepowodzeniem: " . $e->getMessage();
            return;
            }
            
            $uczelnia = 'INSERT INTO rok (nazwa, kierunek, stopien) VALUES
            ("INF-2020-1", "Informatyka", 1),
            ("MAT-2020-2", "Matematyka", 2)';
            $dBase->exec($uczelnia);

            $uczelnia = 'INSERT INTO Studenci (imie, nazwisko, email, id_rok_studiow) VALUES
            ("Jan", "Kowalski", "jan.kowalski@onet.pl", 1),
            ("Zbigniew", "Stonoga", "z.stonoga@stonoga.pl", 2),
            ("Ewa", "Nowak", "e.nowak@gmail.com", 2)';
            $dBase->exec($uczelnia);
        ?>
    </body>
</html>
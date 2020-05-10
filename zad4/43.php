<!doctype html>
<html lang="PL">
    <head>
        <meta charset="UTF-8">
        <title>43.php</title>
    </head>
    <body>
        <?php
            try{
                $dBase = new PDO("mysql:host=localhost:3307;dbname=uczelnia", "root", "");
            }catch(PDOException $e){
                echo "Połączenie z bazą danych zakończone niepowodzeniem: " . $e->getMessage();
            return;
            }

            $uczelnia = 'SELECT s.imie, s.nazwisko, r.kierunek, r.stopien FROM studenci s INNER JOIN rok r ON s.id_rok_studiow=r.id';
            $studenci = $dBase->query($uczelnia);
        ?>
        
        <tr>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Kierunek</th>
            <th>Stopień</th>
        </tr>
    
        <?php
        foreach($studenci as $student){    
            echo "<table><tr><td>" . $student["imie"] . "</td>";    
            echo "<td>" . $student["nazwisko"] . "</td>";
            echo "<td>" . $student["kierunek"] . "</td>"; 
            echo "<td>" . $student["stopien"] . "</td></tr></table>";
            }
        ?>
    </body>
</html>
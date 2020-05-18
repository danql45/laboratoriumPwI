<!doctype html>
<html lang="PL">
    <head>
        <meta charset="UTF-8">
        <title>52.php</title>
    </head>
    <body>
        <?php
            try{
                $dBase = new PDO("mysql:host=localhost:3307;dbname=uczelnia", "root", "");
            }catch(PDOException $e){
                echo "Połączenie z bazą danych zakończone niepowodzeniem: " . $e->getMessage();
            return;
            }
            $sql = 'SELECT * FROM studenci';
            $student = $dBase->query($sql);
        ?>
        <form action="53.php" method="GET">
            <select name="id">
            <?php
                foreach($student as $s){
                    echo "<option value = " . $s['id'] . ">";
                    echo $s['imie'] . ' '. $s['nazwisko'];
                    echo "</option>";
                }
            ?>
            </select>
            <p><button>Usuń Studenta</button></p>
        </form>
    </body>
</html>
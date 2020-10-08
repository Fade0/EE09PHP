<html>

    <head>
        <title>Zadanie 5</title>
    </head>

    <body>

        <form action="zadanie5.php" method="POST">
            <input type="number" min=1 max=30 name="x" placeholder="Wpisz liczbe"/><br>
            <input type="number" min=1 max=30 name="y" placeholder="Wpisz liczbe"/><br>
            <input type="submit" value="Wyslij"/><br>
        </form>

        <?php

            if(!isset($_POST["x"])){
                return;
            }

            if(!isset($_POST["y"])){
                return;
            }

            $dol;
            $gora;
            if($_POST['x'] > $_POST['y']){
                $dol = $_POST['y'];
                $gora = $_POST['x'];
            }
            else{
                $dol = $_POST['x'];
                $gora = $_POST['y'];
            }

            $tablica[20] = array();

            for($i = 0; $i < 20; $i++){
                $tablica[$i] = rand($dol, $gora);
            }

            for($i = 0; $i < 20; $i++){
                echo($tablica[$i]." ");
            }



        ?>

        <form action="index.php" method="GET">
            <input type="submit" value="Powrot"/>
        </form>

    </body>
</html>
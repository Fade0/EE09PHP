<html>

    <head>
        <title>Zadanie 1</title>
    </head>

    <body>

        <form action="zadanie1.php" method="GET">
            <input type="number" min=-100 max=100 name="x" placeholder="Wpisz liczbe"/><br>
            <input type="number" min=-100 max=100 name="y" placeholder="Wpisz liczbe"/><br>
            <input type="submit" value="Wyslij"/>
        </form>

        <?php

        if(!isset($_GET['x'])){
            return;
        }

        if(!isset($_GET['y'])){
            return;
        }

        $dol;
        $gora;
        if($_GET['x'] > $_GET['y']){
            $dol = $_GET['y'];
            $gora = $_GET['x'];
        }
        else{
            $dol = $_GET['x'];
            $gora = $_GET['y'];
        }

        /*if($dol < -100){
            echo("Dolna granica musi byc wieksza od -100");
            return;
        }
        if($gora > 100){
            echo("Gorna granica musi byc mniejsza od 100");
            return;
        }*/

        $ile_liczb = 0;
        for($i = $dol; $i <= $gora; $i++){
            echo($i." ");
            if($i % 3 == 0){
                $ile_liczb++;
            }
        }
        echo("<br>Ilosc liczb podzielnych przez 3: ".$ile_liczb);

        ?>

        <form action="index.php" method="GET">
            <input type="submit" value="Powrot"/>
        </form>

    </body>
</html>
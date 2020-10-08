<html>

    <head>
        <title>Zadanie 2</title>
    </head>

    <body>

        <form action="zadanie2.php" method="POST">
            <input type="text" name="kolor" placeholder="Ulubiony kolor"/><br>
            <input type="text" name="samochod" placeholder="Ulubiony samochod"/><br>
            <input type="submit" value="Wyslij"><br>
        </form>

        <?php

        if(!isset($_POST['kolor'])){
            return;
        }
        if(!isset($_POST['samochod'])){
            return;
        }

        $kolor = $_POST['kolor'];
        $samochod = $_POST['samochod'];

        echo($kolor."<br>");
        echo($samochod."<br>");
        echo(strlen($kolor)." ".strlen($samochod)."<br>");
        echo("Moj ulubiony samochod to ".$samochod." o kolorze ".$kolor.".");

        ?>

        <form action="index.php" method="GET">
            <input type="submit" value="Powrot"/>
        </form>

    </body>
</html>
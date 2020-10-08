<html>

    <head>
        <title>Zamowienie</title>
    </head>

    <body>

        <?php

            $paczki = $_POST['paczki'];
            $grzebienie = $_POST['grzebienie'];

            $cena_paczek = 1.05;
            $cena_grzebien = 1.45;

            $suma = ($paczki * $cena_paczek) + ($grzebienie * $cena_grzebien);

            echo("Zamowione paczki ".$paczki."<br>");
            echo("Zamowienie grzebienie ".$grzebienie."<br>");
            echo("Do zaplaty: ".$suma." zl");
        ?>

        <form action="index.php" method="GET">
            <input type="submit" value="Powrot"/>
        </form>

    </body>
</html>
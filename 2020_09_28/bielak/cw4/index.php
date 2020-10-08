<html>

    <head>
        <title>Zadanie 4</title>
    </head>

    <body>

        <form action="order.php" method="POST">
            <h3>Paczki</h3>
            <input type="number" min=0 name="paczki" value=0 min = 0 placeholder="Ilosc paczkow"/>
            <h3>Grzebienie</h3>
            <input type="number" min=0 name="grzebienie" value=0 min = 0 placeholder="Ilosc grzebieni"/>
            <br>
            <input type="submit" value="Wyslij zamowienie"/>
        </form>

        <?php


        ?>

        <form action="../index.php" method="GET">
            <input type="submit" value="Powrot"/>
        </form>

    </body>
</html>
<html>
<head>
    <title> Zadanie 4 Michal Machulak 4E 11</title>
</head>
<body>
    <?php
    $ponczek = $_POST['ponczek'];
    $grzibien = $_POST['grzibien'];
    $cena_ponczek = 1.05;
    $cena_grzibien = 1.45;

    $suma = (($cena_ponczek * $ponczek) + ($cena_grzibien * $grzibien));

    echo ("Zamówiłeś ".$grzibien." grzebieni.<br>");
    echo ("Zamówiłeś ".$ponczek." pączków.<br>");
    echo ("Za całe zamówienie zapłacisz: ".$suma." PLN");

    ?>

    <form action = "index.php" method = "GET">
        <input type = "submit" value = "powrot">
    </form>
</body>
</html>
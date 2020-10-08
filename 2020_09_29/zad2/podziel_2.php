<html>
<head>
    <title>Michal Machulak 4E 11</title>
</head>
<body>
<?php
    include 'liczby_2.php';
    $liczba = 0;
    for ($i = 0; $i < 50; $i++)
    {          
            for ($j = 0; $tablica[$j] %= 2; $j++)
            {
                //echo ("suma wynosi: ".$suma);
                $tab1 = $tablica[j];
                $liczba = ($liczba + $tab1);
                echo ("<br> ".$liczba."Nie jest parzyste.<br>");
            }
    }
    echo ($suma); 
/*
    include 'liczby.php';
    $liczba = $suma;
    if ($liczba %= 2)
    {
        echo ("Liczba ".$suma." nie jest parzysta.<br>");
    }
    else
    {
        echo ("Liczba ".$suma." jest parzysta.<br>");
    }
    */
?>
</body>
</html>
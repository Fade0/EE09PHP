<html>
<head>
    <title>Michal Machulak 4E</title>
</head>
<body>
<?php //Cwiczenie 1
        echo ("<h2>Cwiczenie 1</h2><h3>Obliczenia pola i objętości stożka</h3>");
$wysokosc = 3;
$promien = 5;
$pi = 3.14;
    function stozek_pole(){
        global $promien;
        global $wysokosc;
        global $pi;
            $l = sqrt (pow($wysokosc, 2) + pow($promien, 2));
            $pole_podstawy = ($pi * ($promien^2));
            $pole_boczne = ($pi * $promien * $l);
            $pole_calkowite = ($pole_boczne + $pole_podstawy);

        echo ("Pole całkowite stożka wynosi: ".floor($pole_calkowite));
    }
    stozek_pole();
?>

<?php //Cwiczenie 2
        echo("<h2>Cwiczenie 2</h2>");
$tablica = array("Anakonda","Antoni","Abrakadabra","maslo","Wiesiek");
    echo ("<table><tr>");
    function litera_a($tablica)
    {
        foreach( $tablica as $wyraz)
        {
            if ($wyraz[strlen($wyraz)-1] == "a")
            {
                echo ("<td>".$wyraz."<td> ");
            }
        }
        echo("</table>");
    }
    litera_a($tablica);
?>

<?php //Cwiczenie 3
        echo ("<h2>Cwiczenie 3</h2>");
$tablica2 = array ("Anna","Antoni","Ambroży","Ela","Agata");

    function tabelka($tablica2)
    {
    echo ("<table border = '1'>");
    echo ("<tr>");
    echo ("<td>Imie</td><td>znaki</td><td>plec</td><td>Ciekawe?</td></tr>");
    $ilosc_znakow = strlen($imie);

    foreach ($tablica2 as $imie)
    {
        $plec;
            if ($imie[strlen($imie)-1] == "a")
            {
                $plec = "K";
            }
            else 
            {
                $plec = "M";
            }

        $ciekawe_imie;
        {
            if ($imie[0] == "A" && $imie[strlen($imie)-1] == "a")
            {
                $ciekawe_imie = "Tak";
            }
            else
            {
                $ciekawe_imie = "Nie";
            }

            echo ("<tr>");
            echo ("<td>".$imie."</td>");
            echo ("<td>".$ilosc_znakow."</td>");
            echo ("<td>".$plec."</td>");
            echo ("<td>".$ciekawe_imie."</td>");
            echo ("</tr>");
        }
    }
    echo ("</tr></table>");
}
    tabelka($tablica2);
?>

<?php   //Cwiczenie 4
        echo ("<h2>Cwiczenie 4</h2>");

        function figury()
        {
        echo ("<table border='1'>");  
        echo ("<tr><td>Pole kola</td><td>Obwod kola</td><td>Pole szescianu</td><td>Obj szescianu</td><td>Porownanie</td></tr>"); 
        
        for ($i = 3; $i <= 5; $i++) //wzory na pola
        {
            $kolo_pole = 3 * pow($i, 2);
            $kolo_obw = 2 * (3*$i);
            $szescian_pole = 6 * pow($i, 2);
            $szescian_v = pow($i, 3);
            $style;
            $porownanie;

            if($i % 2  != 0) //ustalanie kolorow gdy $i podzielna przez 2
            {
                $style = " style='background-color: #FFFFFF'; color: #000000";
            }
            else
            {
                $style = " style='background-color: FF0000; color: #FFFFFF'";
            }
            if ($szescian_pole > $kolo_pole)
            {
                $porownanie = "Pole szescianu > Pole kola";
            }
            else if ($szescian_pole < $kolo_pole)
            {
                $porownanie = "Pole szescianu < Pole kola";
            }
            else
            {
                $porownanie = "Pole szescianu = Pole kola";
            }

            echo ("<tr ".$style.">");
            echo ("<td>".$kolo_pole."</td>");
            echo ("<td>".$kolo_obw."</td>");
            echo ("<td>".$szescian_pole."</td>");
            echo ("<td>".$szescian_v."</td>");
            echo ("<td>".$porownanie."</td>");
            echo ("</tr>");
        }
        echo ("</table>");
    }
        figury()
?>
<?php    //Cwiczenie 6
    echo ("<h2>Cwiczenie 6</h2>");
    $suma = 0;
    $ile_razy = 1;
    while ($suma != 20)
    {
        $suma = 0;
        echo("<br>Liczby: ");
        for ($i = 0; $i < 6; $i++)
        {
            $liczba = rand(0,5);
            $suma = $suma + $liczba;
            echo($liczba." ");
        }
        echo("<br>Suma wynosi: ".$suma);
        echo("<br>Powtorzenie nr. ".$ile_razy);
        echo("<br>....................");

        $ile_razy++;
    }

?>
<?php   //Cwiczenie 5
        echo ("<h2>Cwiczenie 5</h2>");

        function pna5()
        {
        echo ("<table border = '1'>");
        for ($j = 0; $j < 5 ; $j ++)
        {
            for ($i = 0; $i < 5; $i++)
            {
                $kwadrat=rand(-50,50);
                echo ("<td>".$kwadrat."</td>");
            }
            echo("<tr>");
        }
        echo("</tr>");
    }
    pna5();
?>
</body>
</html>
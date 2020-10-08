<html>
    <head>
        <title>Michal Machulak 4E</title>
    </head>
    <body>
        <?php
        //konstrukcja wyrażenia regularnego
        $wyrazenie = '/^[a-z]$/'; // ^ otwiera $ zamyka wyrażenie regularne
        $tekst = "abcd";

        //preg_match() sprawdza występowanie wyrażenia w ciągu
        if (preg_match($wyrazenie, $tekst))
            echo ("Tekst zawiera tylko male litery bez polskich znakow");
        else
            echo ("Tekst zawiera dodatkowe znaki.");

/*
.	Zastępuje dowolny znak
\s	Spacja
\n	Znak nowej linii
\d	Cyfra
^	Początek linii lub zaprzeczenie
$	Koniec linii
|	Alternatywa
{a,b}	Ilość wystąpień danego wzorca – co najmniej a i co najwyżej b razy
{a,}	Jak wyżej, bez limitu górnego
{,b}	Jak wyżej, bez limitu dolnego
{a}	Dokładnie a wystąpień
?	Zero lub jedno wystąpienie; tak samo jak {0,1}
+	Jedno lub więcej wystąpień; tak samo jak {1,}
*	Dowolna ilość wystąpień (również zero); podobnie jak {0,}
[]	Zakres
*/
?>
    </body>
</html>

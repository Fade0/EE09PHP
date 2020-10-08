<html>
<head>
    <title>Michal Machulak 4E 11</title>
</head>
<body>
<?php
    $suma = 0;
    for ($i = 0; $i < 50; $i++)
    {
        $tablica = rand (1, 100);
        $suma = $suma + $tablica;
        echo ($tablica." <br>");
    }
?>
</body>
</html>
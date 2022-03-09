<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Serwis komputerowy BitBit</title>
    <script src="skrypt.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
        $polaczenie=mysqli_connect("localhost","root","","serwis");
        $zapytanie=mysqli_query($polaczenie,"SELECT nazwa,cena FROM uslugi");
        $ilewierszy=mysqli_num_rows($zapytanie);
        if (!$polaczenie){
            echo("źle");
        }
        else{
            echo("działa uwu");
        
    ?>
    <div class="baner">
        <h1>Mobilny serwis komputerowy BitBit</h1>
        <p>Twój wybór w naprawie komputerów</p>
    </div>
    <div class="main">
    <div class="lewy">
        <h2>Cennik napraw</h2>
        <table>
            <tr>
                <th>Nazwa usługi</th>
                <th>Cena</th>
            </tr>
            <?php
                for ($i =0; $i < $ilewierszy; $i++){
                    $zap1=mysqli_fetch_assoc($zapytanie);
                    echo("<tr>");
                    $nazwa=$zap1['nazwa'];
                    $cena=$zap1['cena'];
                    echo("<td>".$nazwa."</td><td>".$cena."</td>");
                    echo("</tr>");
                }
            ?>
        </table>
        <h2>Cennik dojazdu do klienta</h2>
        <table>
            <tr>
                <th>Ilość kilometrów</th>
                <th>Cena</th>
            </tr>
            <tr>
                <td>0 - 20 km</td>
                <td> 10 zł</td>
            </tr>
            <tr>
                <td>21 - 50 km</td>
                <td> 20 zł</td>
            </tr>
            <tr>
                <td>51 - 100 km</td>
                <td> 50 zł</td>
            </tr>
            <tr>
                <td>+100 km</td>
                <td>70 zł +2 zł za każdy dodatkowy kilometr</td>
            </tr>
        </table>
        <a href="oferta-klient.pdf">Pobierz naszą ofertę</a>
    </div>
    <div class="prawy">
        <h1>Kalkulator opłaty</h1>
        <p>Wpisz swoją ilość kilometrów, wybierz rodzaj usługi i sprawdź ile będzie kosztować.</p>
       <label>Jaka usługa?</label>
       <select id='usluga'>
        <?php
            $zapytanie2=mysqli_query($polaczenie,"SELECT  nazwa from uslugi");
            $ilewierszy2=mysqli_num_rows($zapytanie2);
            for ($i= 0; $i < $ilewierszy2; $i++){
                $zap2=mysqli_fetch_assoc($zapytanie2);
                $usluga=$zap2['nazwa'];
                echo("<option value=$i>".$usluga."</option>");
            }
        ?>
    </select>
    <label>Ile kilometrów?</label>
    <input type="number" id="dystans">
    <button onclick="oblicz()">Oblicz kwotę</button>
    <h2 id="wypisz">Koszt</h2>
    </div>
</div>
<div class="stopka">
    <a href="kwerendy.txt">Pobierz kwerendy</a>
    <p>Wykonał: Mirabelkauwu#2137</p>
</div>
<?php
    }
    mysqli_close($polaczenie);
?>
</body>
</html>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Giełda transportowa</title>
    <link rel="stylesheet" href="style.css">
    <script src="skrypt.js"></script>
</head>
<body>
    <div class="baner">
        <img src="gielda.png" alt="Logo giełdy transportowej" id="img">
        <h1>Giełda transportowa</h1>
    </div>
    <div class="main">
    <div class="lewy">
        <h2>Flota firmy Pol-Trans</h2>
        <p>Nasza flota składa się z 5 pojazdów. To pojazdy o wysokiej klasie i niesamowitych osiągach. Sprawdź ich szczegóły.</p>
        <div class="lewy_k">
            <label>Wybierz pojazd z listy</label><br>
            <select id="auto">
                <option>Renault</option>
                <option>MAN</option>
                <option>Scania</option>
                <option>Mercedes-Benz</option>
            </select>
            <button onclick="skrypt1()">Wybierz</button>
            <p id="szczegoly-pojazdu">
            chuj</p>
        </div>
    </div>
    <div class="prawy">
        <h1>Zlecenia transportowe</h1>
        <table>
        <?php
            $polaczenie=mysqli_connect('localhost','root','','transportowa');
            if (!$polaczenie){
                echo("nie działa");
            }
            else{
                echo("działa uwu");
                $zap=mysqli_query($polaczenie,'SELECT miasto_zal,miasto_rozl,ladunek,firma FROM zlecenia');
        ?>
        <tr>
            <th>Miasto załadunku</th>
            <th>Miasto rozładunku</th>
            <th>Ładunek</th>
            <th>Firma</th>
            </tr>
            <?php
            while ($wynik=mysqli_fetch_assoc($zap)){
                echo("
                    <tr>
                    <td>".$wynik["miasto_zal"]."</td>
                    <td>".$wynik["miasto_rozl"]."</td>
                    <td>".$wynik["ladunek"]."</td>
                    <td>".$wynik["firma"]."</td>
                    </tr>
                ");
            }
            ?>
        </table>
        <br>
        <div class="kontener" id="kalkulator">
            <h3>Kalkulator zlecenia transportowego</h3>
            <p>Tutaj obliczysz, ile rynkowo kosztuje zlecenie transportowe</p>
            <label>Podaj ilość ton</label>
                <input type="number" id="tony"><br><br>
            <label>Podaj ilość kilometrów</label>
                <input type="number" id="km"><br><br>
            <label>Rodzaj towaru</label>
                <select id="typ">
                    <option>Chłodniczy</option>
                    <option>Zwykły</option>
                    <option>Gabaryt</option>
                </select><br><br>
                <button onclick="skrypt2()">Oblicz koszt</button>
                <h1 id="koszt"></h1>
        </div>
    </div>
    </div>
    <div class="stopka">
        <p>Wykonał: Dingdongsialalabingbonk</p>
    </div>

    <?php

    mysqli_close($polaczenie);
    }
    ?>
</body>
</html>
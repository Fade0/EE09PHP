<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Magazyn "Jaskółka" - panel administratora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="baner">
        Panel administratora magazynu Jaskółka
    </div>
    <div class="main"></div>
    <div class="lewy">
        <p><h2>Pracownicy dostępni dzisiaj:</h2></p>
        <?php
        $polaczenie=mysqli_connect("localhost","root","","egzamin");

        if (!$polaczenie){
            echo("nie działa");
        }
        else{
            echo("działa uwu");
            $zap1=("SELECT imie, nazwisko FROM pracownicy join zmiany WHERE pracownicy.id=pracownik_id and zmiany.data_zmiany='2021-01-13'");
            $zapytanie1=mysqli_query($polaczenie,$zap1);
            echo("<ol>");    
            
            while ($wynik1=mysqli_fetch_assoc($zapytanie1)){
                echo("
                 <li>".$wynik1["imie"]." ".$wynik1["nazwisko"]."</li>
                ");
        }
                echo("</ol>");
            ?>
    </div>
    <div class="prawy">
        <h2>Zestawienie produktów gotowych - magazyn ZH1</h2>
        <table>
            <tr>
                <th>Nazwa towaru</th>
                <th>Ilość towarów w produkcji</th>
                <th>ilość towarów uszkodzonych</th>
                <th>ilość towarów gotowych</th>
            </tr>
            <?php
            $zap2=("SELECT nazwa, ilosc_produkcja,ilosc_uszkodzone,ilosc_gotowe FROM zlecenia_mag ORDER BY pilnosc DESC");
            $zapytanie2=mysqli_query($polaczenie,$zap2);
                while ($wynik=mysqli_fetch_assoc($zapytanie2)){
                $towar=$wynik["nazwa"];
                $gotowe=$wynik["ilosc_gotowe"];
                $produkcja=$wynik["ilosc_produkcja"];
                $uszkodzone=$wynik["ilosc_uszkodzone"];
                $pilnosc=7;
                
            echo("<tr>
                <td>".$towar."</td>
                <td>".$gotowe."</td>
                <td>".$produkcja."</td>
                <td>".$uszkodzone."</td>

            </tr>
            <tr>");
        }
            ?>
        </table>
        <h2>Dodaj nowy towar</h2>
        <form action="index.php" method="POST">
            <label>Nazwa towaru</label>
                            <input type="text" name="nazwa"><br>
            <label class="gotowe"> Ilość gotowych</label>
                            <input type="number" name="gotowe"><br>
            <label class="uszkodzone" > Ilość towarów uszkodzonych </label>
                            <input type="number" name="uszkodzone"><br>
            <label>Ilość towarów w produkcji</label>
                            <input type="number" name="produkcja"><br>
            <input type="submit" value="zakurwiaj">
        </form>
        <?php
            $form_naz=$_POST["nazwa"];
            $form_got=$_POST['gotowe'];
            $form_usz=$_POST['uszkodzone'];
            $form_pro=$_POST['produkcja'];

            $zap3=("INSERT INTO zlecenia_mag VALUES ('','$form_naz','$form_got','$form_pro','$form_usz',7)");
            mysqli_query($polaczenie,$zap3);

            echo $zap3;

        ?>
    </div>
    <div class="stopka">
        <p>autor: autofil to c00rva</p>
    </div>
    <?php
        }
        mysqli_close($polaczenie);
    ?>
</body>
</html>
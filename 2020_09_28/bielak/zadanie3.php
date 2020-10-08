<html>

    <head>
        <title>Zadanie 3</title>
        <link rel="stylesheet" href="zadanie3.css">
    </head>

    <body>

        <?php

            $plec = "nic";

            if(isset($_POST['imie'])){
                $imie = $_POST['imie'];
                if($imie[strlen($imie) - 1] == "a"){
                    $plec = "kobieta";
                }
                else{
                    $plec = "mezczyzna";
                }
            }

           

            boxLeft();
            boxMiddle();
            boxRight();

            function boxLeft(){
                global $plec;
                if($plec == "kobieta"){
                    $imie = $_POST['imie'];
                    $nazwisko = $_POST['nazwisko'];
                    echo("<div class='box-left'>".$imie."<br>".$nazwisko."<br>".$plec."</div>");
                }
                else{
                    echo("<div class='box-left'></div>");
                }
            }

            function boxMiddle(){
                echo("<div class='box-middle'>
                <form action='zadanie3.php' method='POST'>
                    <input type='text' name='imie' placeholder='Imie'/><br>
                    <input type='text' name='nazwisko' placeholder='Nazwisko'/><br>
                    <input type='text' name='miasto' placeholder='Miasto'/><br>
                    <input type='submit' value='Wyslij'/><br>
                </form></div>");
            }

            function boxRight(){
                global $plec;
                if($plec == "mezczyzna"){
                    $imie = $_POST['imie'];
                    $nazwisko = $_POST['nazwisko'];
                    echo("<div class='box-right'>".$imie."<br>".$nazwisko."<br>".$plec."</div>");
                }
                else{
                    echo("<div class='box-right'></div>");
                }
            }
            

        ?>

        <form action="index.php" method="GET">
            <input type="submit" value="Powrot"/>
        </form>

    </body>
</html>
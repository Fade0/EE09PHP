<html>
<head>
</head>
<body>
<div class="box lewy">
    <form action="index.php" method="POST">
        Wybierz rodzaj ankiety
        <br>
        <input type="radio" name="typ" value="wstepna">Ankieta wstepna</input>
        <br>
        <input type="radio" name="typ" value="zaawansowana">Ankieta dla Zaawansowanych</input>
        <br>
        <input type="submit" value="Wyslij"/>
    </form>
</div>
<div class="box prawy">
    <?php
        if(isset($_POST['typ']))
        {
            $typ = $_POST['typ'];

        if($typ == "wstepna")
        {
            include_once("ankieta.php");
        }
        if($typ == "zaawansowana")
        {
            include_once("ankieta2.php");
        }
        }
    ?>
</div>        
</body>
</html>
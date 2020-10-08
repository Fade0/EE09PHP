<html>
<head>
    <title>Michal Machulak 4E 11</title>
</head>
<body>
    <div class="div lewy">
        <form action="index.php" method="POST">
            <input type="hidden" name="przycisk" value="1"/>
            <input type="submit" value="Przycisk 1">
        </form>

        <form action="index.php" method="POST">
            <input type="hidden" name="przycisk" value="2"/>
            <input type="submit" value="Przycisk 2">
        </form>
    </div>

    <div class="div srodek">
    <?php
        if(isset($_POST['przycisk']))
                {
            if($_POST['przycisk'] == "1")
                    {
                include_once("plik1.php");
                    }
                }
    ?>
    </div>

    <div class="div prawy">
    <?php
        if(isset($_POST['przycisk']))
                {
            if($_POST['przycisk'] == "2")
                    {
                include_once("plik2.php");
                    }
                }
    ?>
    <a href="../wyrazenia.php">Powrot</a>
    </div>
</body>
</html>
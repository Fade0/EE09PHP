<html>
<head>
</head>
<body>

<form method="POST" action="index.php">
    <div>
        <input type="number" name="zmienna_x" min=-100 max=100>
        <br>
        <input type="number" name="zmienna_y" min=-100 max=100>
        <br>
        <input type="submit">
    </div>
</form>
<?php
 if(isset($_POST['zmienna_x']))
{
    $X = $_POST['zmienna_x'];
    $Y = $_POST['zmienna_y'];

    if($X>$Y)
    {
        if ($i = 0,$X >= $i,$i++)
        {
            echo($X);
        }
    }
}
 ?>
</body>
</html>
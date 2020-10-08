<html>
<head>
</head>
<body>

<form method="POST" action="zad2.php">
    <div>
        <input type="text" name="Y">
        <input type="text" name="X">
        <input type="submit">
    </div>
</form>
<?php
 if(isset($_POST['Y'])){
        $Y = $_POST['Y'];
        $X = $_POST['X'];
        $Y_ile = (strlen($Y));
        $X_ile = (strlen($X));
        echo($Y."<br>");
        echo($X."<br>");
        echo($Y_ile." ".$X_ile."<br>");
        echo("Mój ulubiony X to ".$X." i ma Y ".$Y.".");
 }

 ?>
</body>
</html>
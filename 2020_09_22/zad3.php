<html>
<head>
<title>Michal Machulak 4E 11</title>
    <style>
    .red{
background-color: red;
    }
    .blue{
        background-color: blue;
    }
    .green{
        background-color: green;
    }
    .default{
        background-color: gray;
    }
    </style>
</head>
<body>
    <?php
        $style = 'default';
        if(isset($_GET['color']))
        {
            $style = $_GET['color'];
        }
        echo("<body class='".$style."'>")
    ?>
    <form action="zad3.php">
        <input type="radio" name="color" value="red">   Czerwony</input><br>
        <input type="radio" name="color" value="green"> Zielony</input><br>
        <input type="radio" name="color" value="blue">  Niebieski</input><br>
        <input type="submit" value="wyslij">
    </form>
</body>
</html>
<html>
<head>
    <title>Michal Machulak 4E 11 </title>
    <style>
    .body
    {
        background-color: black;
        color: white;
    }
    </style>
</head>
<body class="body">
    <form action="zad4.php" method="post" autocomplete="off">
        <textarea name="content" placeholder="textarea"></textarea><br>
        <input type="submit"/><br>

        <?php
            if(isset($_POST['content']))
            {
                $content = $_POST['content'];
                $suma = 1;
                $Samo = array("a","e","i","o","u","y");
                $SL = 0; //Samogloski liczba
                for($i = 0;$i < strlen($content); $i++)
                {
                    if($content[$i]==" ")
                    {
                        if($content[$i+1] !=" ")
                        {
                            $suma++;
                        }
                    }
                    if(in_array($content[$i], $Samo))
                    {
                        $SL++;
                    }
                }
                echo "Ilość słów: ".$suma."<br>";
                echo "Ilość samogłosek: ".$SL;
            }
        ?>
    </form>
</body>
</html>
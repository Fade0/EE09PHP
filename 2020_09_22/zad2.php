<body>
	<form action="zad2.php"  method="POST">

		<input type="text" name="pole"><br>
		<textarea name="textarea"> </textarea><br>
Pierwszy:   <input type="radio" name="radyjo" value="1"><br>
Drugi:      <input type="radio" name="radyjo" value="2"><br>
Trzeci:     <input type="radio" name="radyjo" value="3"><br>
		    <input type="submit">
	</form>
</body>

<?php
    if(isset($_POST['radyjo']))
    {
    $radio = $_POST['radyjo'];
    $pole = $_POST['pole'];
    $textarea = $_POST['textarea'];

    echo ("To jest wartość z pola formualrza text: ".$pole."<br>");
    echo ("To jest wartość z pola formualrza textarea: ".$textarea."<br>");
    echo ("To jest wartość z pola formualrza radio: ".$radio."<br>");
    }
?>
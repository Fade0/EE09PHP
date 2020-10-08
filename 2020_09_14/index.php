<html>
<head>
	<title>Michal Machulak 4E</title>
</head>
<body>
	<?php
	//Pierwsza kartka z zadaniami
	//Cwiczenie 1
		echo ("Michal Machulak 4E<br>Cwiczenie 1<br>Pierwsza kartka z zadaniami<br>");
		$X = "INFORMATYKA";
		echo ($X."<br><br>");
			for ($i = 0;$i < strlen($X); $i ++){
				echo ($X[$i]."<br>");
		}

	//Cwiczenie 2
		echo ("<br>Cwiczenie 2<br>");
		echo ("Niepodzielne przez 2<br>");
		$suma = 0;
			for ($i = 5; $i <= 30; $i ++){
				if ($i%2!=0){
					echo ($i."<br>");
					$suma+=$i;	
				}
			}
		echo ("Suma liczb niepodzielnych przez 2 wynosi ".$suma."<br>"); //221

		echo ("Niepodzielne przez 3<br>");
		$suma = 0;
			for ($i = 5; $i <= 30; $i ++){
				if ($i%3!=0){
					echo ($i."<br>");
					$suma+=$i;	
				}
			}
		echo ("Suma liczb niepodzielnych przez 3 wynosi ".$suma."<br>"); //293

	//Cwiczenie 3
		echo ("<br>Cwiczenie 3<br>");
		$liczby = array(1,3,5,6,8,2,10,99);
				foreach($liczby as $zmienna){
					if ($zmienna%2==0)
					echo ($zmienna."<br>"); //6 8 2 10
			}

	//Druga kartka z zadaniami
	//Cwiczenie 0
		echo ("<br><br>Cwiczenie 0<br>");
		$X = 10;
		$suma = 0;
			while ($X <= 90){
				if ($X%2!=0){
				echo ($X."<br>");
				$suma = $suma + $X;
				$X++;
			}
			else $X++;
		}
		echo ("Suma wynosi ".$suma); //2000
	//Cwiczenie 1
		echo ("<br>Druga kartka z zadaniami<br>Cwiczenie 1<br>");
		$X = 2609;
		$Z1 = 0;
		settype ($X, "string");
		echo ("Zmienna X ma wartość ".$X);
			while($Z1 < strlen($X)){
				$Z1++;
			}
		echo ("<br>X sklada sie z ".$Z1); //4

	//Cwiczenie 2
		echo ("<br><br>Cwiczenie 2<br>");
		$X =123543;
		$Z2 = 0;
		echo ("X wynosi ".$X);
		settype ($X, "string");
			for ($i =0; $i < strlen($X);$i++){
				if($X[$i] =="3"){
					$Z2++;
				}
			}
		echo ("<br>Ilosc trojek (3) w liczbie X to ".$Z2); //2

		//Cwiczenie 3
		echo ("<br><br>Cwiczenie 3<br>");
		$bok = 3;
		$suma = 0;

		while ($bok <= 10){
		echo ("Dlugosc boku kwadratu wynosi ".$bok." a jego pole ".$bok*$bok."<br>");
			$suma = $suma + ($bok*$bok);
			$bok++;
		}
		echo ("<br>Suma wszystkich pól wynosi ".$suma); //380
	?>
</body>
</html>
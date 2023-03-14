<?php
	$db_host = 'localhost'; // хост бази даних
	$db_name = 'dnd'; // назва бази даних
	$db_user = 'rumbledice'; // користувач бази даних
	$db_pass = 'rumbledice'; // пароль користувача

	try {
	    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_pass);
	} catch (PDOException $e) {
	    echo "Помилка підключення до бази даних: " . $e->getMessage();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Таверна "Гримлячі Кістки"</title>
	<link  rel="icon" href="img/logo.png">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

	<?php require "block/header.php"?>

		<div class="bcw">
			<img class="bcw123" src="img/bcw.png" alt="Бачу чую відчуваю">
		</div>

		<!--div class="block">
			<div>
				<a href="Персонаж/Раси.html">
					<div class="bod">
	   	      	<img class="bod" src="img/Раси.png">
	   	      	<br>
         			<h4>
				         Раси
			         </h4>
					</div>
				</a>
			</div>
			<div>
				<a href="Персонаж/Класи.html">
					<div class="bod">
	   	      	<img class="bod" src="img/Класи.png">
	   	      	<br>
         			<h4>
				         Класи
			         </h4>
					</div>
				</a>
			</div>
			<div>
				<a href="Персонаж/Риси.html">
					<div class="bod">
	   	      	<img class="bod" src="img/Риси.png">
	   	      	<br>
         			<h4>
				         Риси
			         </h4>
					</div>
				</a>
			</div>
		</div>

		<div class="block">
			<div>
				<a href="Персонаж/Предісторії.html">
					<div class="bod">
	   	      	<img class="bod" src="img/Предісторії.png">
	   	      	<br>
         			<h4>
				         Предісторії
			         </h4>
					</div>
				</a>
			</div>
			<div>
				<a href="Персонаж/Закляття.html">
					<div class="bod">
	   	      	<img class="bod" src="img/Закляття.png">
	   	      	<br>
         			<h4>
				         Закляття
			         </h4>
					</div>
				</a>
			</div>
			<div>
				<a href="Речі/Зброя.html">
					<div class="bod">
	   	      	<img class="bod" src="img/Зброя.png">
	   	      	<br>
         			<h4>
				         Зброя
			         </h4>
					</div>
				</a>
			</div>
		</div>

		<div class="block">
			<div>
				<a href="Речі/Обладунки.html">
					<div class="bod">
	   	      	<img class="bod" src="img/Обладунки.png">
	   	      	<br>
         			<h4>
				         Обладунки
			         </h4>
					</div>
				</a>
			</div>
			<div>
				<a href="Речі/Спорядження.html">
					<div class="bod">
	   	      	<img class="bod" src="img/Спорядження.png">
	   	      	<br>
         			<h4>
				         Спорядження
			         </h4>
					</div>
				</a>
			</div>
			<div>
				<a href="Речі/Магічні предмети.html">
					<div class="bod">
	   	      	<img class="bod" src="img/Магічні предмети.png">
	   	      	<br>
         			<h4>
				         Магічні предмети
			         </h4>
					</div>
				</a>
			</div>
		</div>

		<div class="block">
			<div>
				<a href="Майстерня/Ширма.html">
					<div class="bod">
	   	      	<img class="bod" src="img/Ширма.png">
	   	      	<br>
         			<h4>
				         Ширма
			         </h4>
					</div>
				</a>
			</div>
			<div>
				<a href="Майстерня/Бестіарій.html">
					<div class="bod">
	   	      	<img class="bod" src="img/Бестіарій.png">
	   	      	<br>
         			<h4>
				         Бестіарій
			         </h4>
					</div>
				</a>
			</div>
			<div>
				<a href="pdf/аркуш.pdf">
					<div class="bod">
	   	      	<img class="bod" src="img/Аркуш.png">
	   	      	<br>
         			<h4>
				         Аркуш персонажа
			         </h4>
					</div>
				</a>
			</div>
		</div-->
		<div class="content">
         <a href="Персонаж/Раси.html">
          <div class="cars">
          	<img class="carsimg" src="img/Раси.png" alt="Раси">
         	 	<div class="carstex">
         		 	<p>Раси</p>
         		 </div>
         	</div>
         </a>
         <a href="Персонаж/Класи.html">
          <div class="cars">
          	<img class="carsimg" src="img/Класи.png" alt="Класи">
         	 	<div class="carstex">
         		 	<p>Класи</p>
         		 </div>
         	</div>
         </a>
         <a href="Персонаж/Риси.html">
          <div class="cars">
          	<img class="carsimg" src="img/Риси.png" alt="Риси">
         	 	<div class="carstex">
         		 	<p>Риси</p>
         		 </div>
         	</div>
         </a>
         <a href="Персонаж/Предісторії.html">
          <div class="cars">
          	<img class="carsimg" src="img/Предісторії.png" alt="Предісторії">
         	 	<div class="carstex">
         		 	<p>Предісторії</p>
         		 </div>
         	</div>
         </a>
         <a href="Персонаж/Закляття.php">
          <div class="cars">
          	<img class="carsimg" src="img/Закляття.png" alt="Закляття">
         	 	<div class="carstex">
         		 	<p>Закляття</p>
         		 </div>
         	</div>
         </a>
         <a href="Речі/Зброя.html">
          <div class="cars">
          	<img class="carsimg" src="img/Зброя.png" alt="Зброя">
         	 	<div class="carstex">
         		 	<p>Зброя</p>
         		 </div>
         	</div>
         </a>
         <a href="Речі/Обладунки.html">
          <div class="cars">
          	<img class="carsimg" src="img/Обладунки.png" alt="Обладунки">
         	 	<div class="carstex">
         		 	<p>Обладунки</p>
         		 </div>
         	</div>
         </a>
         <a href="Речі/Спорядження.html">
          <div class="cars">
          	<img class="carsimg" src="img/Спорядження.png" alt="Спорядження">
         	 	<div class="carstex">
         		 	<p>Спорядження</p>
         		 </div>
         	</div>
         </a>
         <a href="Речі/Магічні предмети.html">
          <div class="cars">
          	<img class="carsimg" src="img/Магічні предмети.png" alt="Магічні предмети">
         	 	<div class="carstex">
         		 	<p>Магічні предмети</p>
         		 </div>
         	</div>
         </a>
         <a href="Майстерня/Ширма.html">
          <div class="cars">
          	<img class="carsimg" src="img/Ширма.png" alt="Ширма">
         	 	<div class="carstex">
         		 	<p>Ширма</p>
         		 </div>
         	</div>
         </a>
         <a href="Майстерня/Бестіарій.html">
          <div class="cars">
          	<img class="carsimg" src="img/Бестіарій.png" alt="Бестіарій">
         	 	<div class="carstex">
         		 	<p>Бестіарій</p>
         		 </div>
         	</div>
         </a>
         <a href="pdf/аркуш.pdf">
          <div class="cars">
          	<img class="carsimg" src="img/Аркуш.png" alt="Аркуш">
         	 	<div class="carstex">
         		 	<p>Аркуш персонажа</p>
         		 </div>
         	</div>
         </a>
		</div>

	<?php require "block/footer.php"?>
</body>
</html>
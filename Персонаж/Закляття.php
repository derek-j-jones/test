<?php
	$db_host = 'localhost'; // хост бази даних
	$db_name = 'dnd'; // назва бази даних
	$db_user = 'rumbledice'; // користувач бази даних
	$db_pass = 'rumbledice'; // пароль користувача

	try {
	    $db = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_pass);
	} catch (PDOException $e) {
	    echo "Помилка підключення до бази даних: " . $e->getMessage();
	}

	$info = [];

	if ($query = $db->query('SELECT * FROM spells')) {
		$info = $query->fetchAll(PDO::FETCH_ASSOC);
	} else {
		print_r($db->errorInfo());
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Таверна "Гримлячі Кістки"</title>
	<link  rel="icon" href="../img/logo.png">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>


	<?php require "../block/header2.php"?>

		<div class="content">
			

			<input class="inp" type="text" id="search-input"  placeholder="🔍︎ Пошук закляття">
				<details  class="parar">
					<summary>
						<p>
							Фільтри
						<img class="inpimg" src="../img/фільтр1.png" alt="">
						</p>
						
						<hr>
					</summary>
						<p class="parartex">

							<!--nav class="spellingf spellingh spellingj spellingk spellingm spellingp spellingq spellingr spellingt">
								<ul>
									<li   data-f='All' data-h='All' data-j='All' data-k='All' data-m='All' data-p='All' data-q='All' data-r='All' data-t='All'>
										<img class="inpimg"src="../img/фільтр2.png" alt="">
									</li>
								</ul>
							</nav-->

							<nav class="spellingp">
								<p class="pfil">Рівень</p>
								<ul>
									<li data-p='All' class="filt">
										Всі
									</li>
									<li data-p='0st' class="filt">
										Заговір
									</li>
									<li data-p='1st' class="filt">
										1
									</li>
									<li data-p='2st' class="filt">
										2
									</li>
									<li data-p='3st' class="filt">
										3
									</li>
									<li data-p='4st' class="filt">
										4
									</li>
									<li data-p='5st' class="filt">
										5
									</li>
									<li data-p='6st' class="filt">
										6
									</li>
									<li data-p='7st' class="filt">
										7
									</li>
									<li data-p='8st' class="filt">
										8
									</li>
									<li data-p='9st' class="filt">
										9
									</li>
								</ul>
							</nav>

							<hr>

							<nav class="spellingj">
								<p class="pfil">Клас</p>
								<ul>
									<li data-j='All' class="filt">
										Всі
									</li>
									<li data-j='Artificer' class="filt">
										Артифактор
									</li>
									<li data-j='Bard' class="filt">
										Бард
									</li>
									<li data-j='Warlock' class="filt">
										Відьмак
									</li>
									<li data-j='Druid' class="filt">
										Друїд
									</li>
									<li data-j='Cleric' class="filt">
										Клірик
									</li>
									<li data-j='Paladin' class="filt">
										Паладин
									</li>
									<li data-j='Ranger' class="filt">
										Рейнджер
									</li>
									<li data-j='Sorcerer' class="filt">
										Чаклун
									</li>
									<li data-j='Wizard' class="filt">
										Чарівник
									</li>
								</ul>
							</nav>

							<hr>

							<nav class="spellingq">
								<p class="pfil">Школа</p>
								<ul>
									<li data-q='All' class="filt">
										Всі
									</li>
									<li data-q='Evocation' class="filt">
										Елементальна магія
									</li>
									<li data-q='Conjuration' class="filt">
										Створення
									</li>
									<li data-q='Illusion' class="filt">
										Ілюзія
									</li>
									<li data-q='Necromancy' class="filt">
										Некромантія
									</li>
									<li data-q='Abjuration' class="filt">
										Захист
									</li>
									<li data-q='Enchantment' class="filt">
										Причарування
									</li>
									<li data-q='Transmutation' class="filt">
										Трансмутація
									</li>
									<li data-q='Divination' class="filt">
										Ворожіння
									</li>
								</ul>
							</nav>

							<hr>

							<nav class="spellingk">
								<p class="pfil">Компонент</p>
								<ul>
									<li data-k='All' class="filt">
										Всі
									</li>
									<li data-k='V' class="filt">
										Вербальний
									</li>
									<li data-k='S' class="filt">
										Соматичний
									</li>
									<li data-k='M' class="filt">
										Матеріальний
									</li>
								</ul>
							</nav>

							<hr>

							<nav class="spellingr">
								<p class="pfil">Ритуал</p>
								<ul>
									<li data-r='All' class="filt">
										Всі
									</li>
									<li data-r='rit' class="filt">
										Ритуал
									</li>
								</ul>
							</nav>

							<hr>

							<nav class="spellingf">
								<p class="pfil">Діапазон</p>
								<ul>
									<li data-f='All' class="filt">
										Всі
									</li>
									<li data-f='5f' class="filt">
										5 Футів
									</li>
									<li data-f='10f' class="filt">
										10 футів
									</li>
									<li data-f='15fc' class="filt">
										15-футовий Конус
									</li>
									<li data-f='20f' class="filt">
										20 Футів
									</li>
									<li data-f='30f' class="filt">
										30 Футів
									</li>
									<li data-f='60f' class="filt">
										60 Футів
									</li>
									<li data-f='90f' class="filt">
										90 Футів
									</li>
									<li data-f='100f' class="filt">
										100 Футів
									</li>
									<li data-f='120f' class="filt">
										120 Футів
									</li>
									<li data-f='150f' class="filt">
										150 Футів
									</li>
									<li data-f='300f' class="filt">
										300 Футів
									</li>
									<li data-f='500f' class="filt">
										500 Футів
									</li>
									<li data-f='1000f' class="filt">
										1000 Футів
									</li>
									<li data-f='1mi' class="filt">
										1 Миля
									</li>
									<li data-f='500mi' class="filt">
										500 Миль
									</li>
									<li data-f='Sight' class="filt">
										В Полі Зору
									</li>
									<li data-f='SpecialT' class="filt">
										Особливий
									</li>
									<li data-f='Touch' class="filt">
										Дотик
									</li>
									<li data-f='Unlimited' class="filt">
										Необмежений
									</li>
									<li data-f='Self' class="filt">
										На Себе
									</li>
									<li data-f='5Self' class="filt">
										На Себе (радіус 5 футів)
									</li>
									<li data-f='10Self' class="filt">
										На Себе (Радіус 10 Футів)
									</li>
									<li data-f='10SelfHemi' class="filt">
										На Себе (10-футовий Радіус Напівсфери)
									</li>
									<li data-f='10SelfSphere' class="filt">
										На Себе (Сфера Радіусом10 Футів)
									</li>
									<li data-f='15Self' class="filt">
										На Себе (Радіус 15 Футів)
									</li>
									<li data-f='15SelfCone' class="filt">
										На Себе (15-футовий Конус)
									</li>
									<li data-f='15SelfCube' class="filt">
										На Себе (15-футовий куб)
									</li>
									<li data-f='30SelfCone' class="filt">
										На Себе (30-футовий конус)
									</li>
									<li data-f='30SelfLine' class="filt">
										На Себе (30-футова лінія)
									</li>
									<li data-f='30SelfRadius' class="filt">
										На Себе (радіус 30 футів)
									</li>
									<li data-f='60SelfCone' class="filt">
										На Себе (60-футовий конус)
									</li>
									<li data-f='60SelfLine' class="filt">
										На Себе (60-футова лінія)
									</li>
									<li data-f='100SelfLine' class="filt">
										На Себе (лінія 100 футів)
									</li>
									<li data-f='5mSelf' class="filt">
										На Себе (радіус 5 миль)
									</li>
								</ul>
							</nav>

							<hr>

							<nav class="spellingh">
								<p class="pfil">Час накладання</p>
								<ul>
									<li data-h='All' class="filt">
										Всі
									</li>
									<li data-h='1Act' class="filt">
										1 Дія
									</li>

									<li data-h='1BAct' class="filt">
										1 Бонусна Дія
									</li>

									<li data-h='1Reac' class="filt">
										1 Реакція
									</li>

									<li data-h='1Min' class="filt">
										1 Хвилина
									</li>

									<li data-h='10Min' class="filt">
										10 Хвилин
									</li>

									<li data-h='1Hour' class="filt">
										1 Година
									</li>

									<li data-h='8Hours' class="filt">
										8 Годин
									</li>

									<li data-h='12Hours' class="filt">
										12 Годин
									</li>

									<li data-h='24Hours' class="filt">
										24 Години
									</li>

									<li data-h='SpecialH' class="filt">
										Особливий
									</li>
								</ul>
							</nav>

							<hr>

							<nav class="spellingt">
								<p class="pfil">Тривалість</p>
								<ul>
									<li data-t='All' class="filt">
										Всі
									</li>
									<li data-t='Instantaneous' class="filt">
										Миттєво
									</li>
									<li data-t='1R' class="filt">
										1 раунд
									</li>
									<li data-t='SpecialC' class="filt">
										Особлива
									</li>
									<li data-t='UntilD' class="filt">
										До розвіювання
									</li>
									<li data-t='UntilDT' class="filt">
										До розвіювання або спрацювання
									</li>
									<li data-t='Up1m' class="filt">
										До 1 хвилини
									</li>
									<li data-t='Up10m' class="filt">
										До 10 хвилин
									</li>
									<li data-t='Up1h' class="filt">
										До 1 години
									</li>
									<li data-t='Up8h' class="filt">
										До 8 годин
									</li>
									<li data-t='1M' class="filt">
										1 хвилина
									</li>
									<li data-t='10M' class="filt">
										10 хвилин
									</li>
									<li data-t='1H' class="filt">
										1 година
									</li>
									<li data-t='6H' class="filt">
										6 годин
									</li>
									<li data-t='8H' class="filt">
										8 годин
									</li>
									<li data-t='24H' class="filt">
										24 години
									</li>
									<li data-t='1D' class="filt">
										1 день
									</li>
									<li data-t='7D' class="filt">
										7 днів
									</li>
									<li data-t='10D' class="filt">
										10 днів
									</li>
									<li data-t='30D' class="filt">
										30 днів
									</li>
									<li data-t='Con1R' class="filt">
										Концентрація  до 1 раунду
									</li>
									<li data-t='Con6R' class="filt">
										Концентрація  до 6 раундів
									</li>
									<li data-t='Con1M' class="filt">
										Концентрація  до 1 хв
									</li>
									<li data-t='Con10M' class="filt">
										Концентрація  до 10 хв
									</li>
									<li data-t='Con1H' class="filt">
										Концентрація  до 1 години
									</li>
									<li data-t='Con2H' class="filt">
										Концентрація  до 2 годин
									</li>
									<li data-t='Con8H' class="filt">
										Концентрація  до 8 годин
									</li>
									<li data-t='Con24H' class="filt">
										Концентрація  до 24 годин
									</li>
									<li data-t='Con1D' class="filt">
										Концентрація  до 1 доби
									</li>
								</ul>
							</nav>

							<hr>

							<nav class="spellingm">
								<p class="pfil">Джерело</p>
								<ul>
									<li data-m='All' class="filt">
										Всі
									</li>
									<li data-m='PHB' class="filt">
										Player's Handbook
									</li>
									<li data-m='Tasha' class="filt">
										Tasha's Cauldron of Everything
									</li>
									<li data-m='Xanathar' class="filt">
										Xanathar's Guide to Everything
									</li>
									<li data-m='AInc' class="filt">
										Acquisitions Inc.
									</li>
									<li data-m='CriticalRoleTw' class="filt">
										Critical Role (Twitter)
									</li>
									<li data-m='ElementalEvil' class="filt">
										Elemental Evil Player's Companion
									</li>
									<li data-m='Explorer' class="filt">
										Explorer's Guide to Wildemount
									</li>
									<li data-m='Fizban' class="filt">
										Fizban's Treasury of Dragons
									</li>
									<li data-m='Guildmaster' class="filt">
										Guildmaster's Guide to Ravnica
									</li>
									<li data-m='Icewind' class="filt">
										Icewind Dale - Rime of the Frostmaiden
									</li>
									<li data-m='Lost ' class="filt">
										Lost Laboratory of Kwalish
									</li>
									<li data-m='Spelljammer' class="filt">
										Spelljammer: Adventures in Space - Astral Adventurer's Guide
									</li>
									<li data-m='Strixhaven' class="filt">
										Strixhaven: A Curriculum of Chaos
									</li>
									<li data-m='Sword' class="filt">
										Sword Coast Adventurer's Guide
									</li>
									<li data-m='Tal' class="filt">
										Tal'Dorei Campaign Setting Reborn
									</li>
									<li data-m='Un7' class="filt">
										Unearthed Arcana 7 - Modern Magic
									</li>
									<li data-m='Un11' class="filt">
										Unearthed Arcana 11 - That Old Black Magic
									</li>
									<li data-m='Un36' class="filt">
										Unearthed Arcana 36 - Starter Spells
									</li>
									<li data-m='Un60' class="filt">
										Unearthed Arcana 60 - The Artificer Returns
									</li>
									<li data-m='Un66' class="filt">
										Unearthed Arcana 66 - Fighter, Rogue, and Wizard
									</li>
									<li data-m='Un70' class="filt">
										Unearthed Arcana 70 - Spells and Magic Tattoos
									</li>
									<li data-m='Un71' class="filt">
										Unearthed Arcana 71 - Psionic Options Revisited
									</li>
									<li data-m='Un78' class="filt">
										Unearthed Arcana 78 - Draconic Options
									</li>
									<li data-m='Un85' class="filt">
										Unearthed Arcana 85 - Wonders of the Multiverse
									</li>
								</ul>
							</nav>
						</p>
				</details>

				<div class="spells">

					<?php foreach ($info as $data): ?>

				<a class="popup-link" href="#<?= $data['nums'] ?>">
					<div class="searchable cardspell popup_link spell<?= $data['rivx'] ?> <?= $data['schx'] ?> <?= $data['chasnakx'] ?> <?= $data['ritx'] ?> <?= $data['disx'] ?> <?= $data['trivx'] ?> <?= $data['compx'] ?> <?= $data['clasx'] ?> <?= $data['jerx'] ?> ">
						<img class="imgspell" src="../img/<?= str_replace(' ', '', $data['rivx']) ?>.png" alt="">
						<div>
							<p class="cardnam"><?= $data['num'] ?></p>
							<p class="carding"><?= $data['nums'] ?></p >
						</div>
					</div>
				</a>
				<div class="popup" id="<?= $data['nums'] ?>">
      		<div class="popup_body">
      			<div class="popup_content">
		   			<a href="###" class="popup_close close-popup">Х</a>
	   	     		<p class="cardnamp"><?= $data['num'] ?></p>
	      	  		<p class="cardingp"><?= $data['nums'] ?></p>
	        			<p class="cardmatp"><?= $data['jer'] ?></p>
	        			<p class="cardmatp"><b><?= $data['riv'] ?></b></p>
	        			<p class="cardmatp"><b><?= $data['rit'] ?></b></p>
	        			<p class="cardmatp"><b>Школа:</b> <?= $data['sch'] ?></p>
	        			<p class="cardmatp"><b>Час накладання:</b> <?= $data['chasnak'] ?></p>
	        			<p class="cardmatp"><b>Діапазон:</b> <?= $data['dis'] ?></p>
	        			<p class="cardmatp"><b>Тривалість:</b> <?= $data['triv'] ?></p>
	        			<p class="cardmatp"><b>Компонент:</b> <?= $data['comp'] ?></p>
	        			<p class="cardmatp"><?= $data['compmat'] ?></p>
	        			<hr>
	    	    		<p class="cardtex"><?= $data['opp'] ?></p>
	        			<p class="cardmatp"><b>Класи що володіють закляттям:</b> <?= $data['clas'] ?></p>
	      		</div>
   	   	</div>
   	   </div>
   	<?php endforeach; ?>

			</div>
		</div>

	<?php require "../block/footer2.php"?>
		</footer>
	<script src="../js/main.js"></script>
	<script src="../js/popup.js"></script>
	<script src="../js/search.js"></script>
	<script src="../js/сортувати по f.js"></script>
	<script src="../js/сортувати по f.js"></script>
	<script src="../js/сортувати по h.js"></script>
	<script src="../js/сортувати по j.js"></script>
	<script src="../js/сортувати по k.js"></script>
	<script src="../js/сортувати по m.js"></script>
	<script src="../js/сортувати по p.js"></script>
	<script src="../js/сортувати по q.js"></script>
	<script src="../js/сортувати по r.js"></script>
	<script src="../js/сортувати по t.js"></script>
	<script src="../js/сортувати по x.js"></script>
	<script src="../js/сортувати по y.js"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Jeu du démineur</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h2><a href="index.php">Accueil 🏠</a></h2>
	<h1>Démineur</h1>

	<div id="menu">
		<button id="newgame">Nouvelle Partie</button>

		<select id="level">
			<option value=""> Choisissez un niveau de difficulté</option>
			<option value="easy"> Débutant : 9x9 cases, 10 bombes </option>
			<option value="average"> Intermédiaire : 16x16 cases, 40 bombes </option>
			<option value="expert"> Expert : 22x22 cases, 100 bombes </option>
			<option value="master"> Maître : 30x30 cases, 250 bombes </option>
		</select>

		<section id="count">
			<div class="chrono">
				<span id="min">00</span> :
				<span id="sec">00</span> .
				<span id="ms">00</span>
			</div>

			<div id="flag">
				<img src="./images/flag.png"> :
				<span id="nbflag">00</span>
			</div>
		</section>

	</div>

	<hr>

	<div id="gameboard">
	</div>

	<script type="text/javascript" src="demineur.js"></script>
</body>
</html>
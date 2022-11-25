<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="STYLE/style.css">
	<link rel="icon" type="image/x-icon" href="IMG/logo.ico">
	<title> Portefolio de Charlie LABAT -
        <?php
        if (isset($_GET['action'])) { //Nom de la page dans le titre de l'onglet
            echo $_GET['action'];
        }
        else{
           echo "Accueil";
        }
        ?>
    </title>
</head>
<body>
	<img class="logo" src="IMG/logo.png" alt="Logo du portefolio">
	<h1 class="titre">Le Labatfolio</h1>
	<div>
		<a href="index.php?action=veille">Veille</a>
	</div>
    <div>
        <a href="index.php?action=contact">Mes Contact</a>
    </div>

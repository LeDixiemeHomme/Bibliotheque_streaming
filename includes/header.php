<?php session_start(); 

	try//connexion à la bdd
	{
		$bdd = new PDO("mysql:host=localhost;dbname=streaming2;charset=utf8","root","root");
	}
	catch(Exception $e)
	{
		die("Base de données non trouvé");
	}

	require "includes/functions.php";
?>

<!doctype html>
<html lang="en">

<head>

    <?php echo (!empty($titre))?'<title>'.$titre.'</title>':'<title> STREAMING </title>'; ?>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    
    <link href="style.css" rel="stylesheet">


    <title>STREAMING</title>

</head>

<header>
    <div class="container">
        <div class="row align-items-center head justify-content-center">
            <div class="col-md-3 col-sm-12 sm-center">
                <a href="index.php"> <img class="logo" class="img-fluid" alt="responsive image" src="pictures/logo.png" width="250px" height="150px"> </a> 
            </div>
            <div class="col-md-4 col-sm-4 order-sm-2 order-md-1">
                <div class="menu_selec">
                    <ul>
                        <li><a href="bibliotheque.php">Bibliothèque</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 offset-md-1 col-sm-4 order-sm-1 order-md-2">
                <div class="menu_connec">
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <?php if(isset($_SESSION['connecte'])) { ?>
                        <li><a href="deconnexion.php">Se déconnecter</a></li>
                        <li><a href="compte.php">Compte</a></li>
                        <?php } else { ?>
                        <li><a href="connexion.php">Se connecter</a></li>
                        <li><a href="inscription.php">Inscription</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
    </div>
    </div>
</header>

<body>
    
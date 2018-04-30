<?php include "includes/header.php"; 

if($_SESSION['lvl'] > 1)
{ ?>
    <a href="admin.php">Accès à la page admin</a> 
    <a href="ajout.php">Accès à la page ajout</a> 
<?php } ?>

<p> Vous souhaitez changer vos informations personnelles ? <br> Changez les ici : </p>

<?php include'includes/changer_infos.php'; ?>

<p> Dans cette section vous retrouverez le choix de votre abonnement, nécessaire à l'accès des vidéos du site.</p>

<?php include "includes/choix_abo.php"; ?>

<p> Voici le temps qu'il vous reste jusqu'a la fin de votre abonnement !</p>

<?php include "includes/decompte_fin_abo.php"; ?>

<?php include "includes/footer.php"; ?>
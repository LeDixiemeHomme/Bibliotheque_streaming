<?php

    $requete = $bdd->query("SELECT * FROM users WHERE id_u = ".$_SESSION['id_u']);
	$reponse = $requete->fetch();

    $id_a = $reponse['id_a'];

if(isset($_POST['Souscrire']))
{
    $id_a = $_POST['id_a'];
    header("Location:index.php");

    $requete = $bdd->query("UPDATE users SET id_a = $id_a, date_debut = now() WHERE id_u = ".$_SESSION['id_u']);
    
    switch ($id_a)
    {
        case 1:
            $requete = $bdd->query("UPDATE users SET date_fin = DATE_ADD(NOW(),INTERVAL 2 DAY) WHERE id_u = ".$_SESSION['id_u']);
            $duree = 2;
            break;
        case 2:
            $requete = $bdd->query("UPDATE users SET date_fin = DATE_ADD(NOW(),INTERVAL 3 DAY) WHERE id_u = ".$_SESSION['id_u']);
            $duree = 3;
            break;
        case 3:
            $requete = $bdd->query("UPDATE users SET date_fin = DATE_ADD(NOW(),INTERVAL 5 DAY) WHERE id_u = ".$_SESSION['id_u']);
            $duree = 5;
            break;
        default: 
            echo "Erreur lors de l'ajout de la date de fin de l'abonnement !";
    }
}

switch ($id_a)
    {
        case 1:            
            $duree = 2;
            break;
        case 2:           
            $duree = 3;
            break;
        case 3:           
            $duree = 5;
            break;
    }

if($id_a)
{
     echo 'La durée initiale de votre abonnement est ' .$duree. ' jours.';
}
else
{
   echo "Qu'attendez vous pour souscire à un abonnement !";
}

?>
    <br>
    <br>

    <form action="#" method="post">
        <label for="Abonnement">Formule d'abonnement :</label>
        <select id="Abonnement" name="id_a">
    <option value="1">Formule n°1</option>
    <option value="2">Formule n°2</option>
    <option value="3">Formule n°3</option>
</select>

        <input class="button" type="submit" name="Souscrire" value="Souscrire un abonnement" />
    </form>
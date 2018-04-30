<?php 

include "includes/header.php"; ?>

<?php if(isset($_POST['choifilm']))
{
    $titre = $_POST['titre'];
        
    $requete = $bdd->query("SELECT * FROM film WHERE titre = '$titre'");
    $reponse = $requete->fetch();

    $titre = $reponse['titre'];
    $id_f = $reponse['id_f'];
    $URL = $reponse['location_URL_film'];
    $affiche = $reponse['location_aff_film'];
    
    echo $titre;
    echo $URL;
    
    ?> <p>Laisser une note :</p>
    <form action="#" method="post">
        <label for="note">Noter</label>
        <select id="note" name="note">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>
    <input class="button" type="submit" name="notation" value="Soumettre" /> <br>
</form>
<?php if(isset($_POST['notation']))
    {
        $requete = $bdd->query("INSERT INTO note_film (note) WHERE id_f = '$id_f' AND id_u = '$_SESSION['id_u']' VALUES ('$_POST['note']')");
    }
}
if(isset($_POST['choise']))
{
    $titre = $_POST['titre'];
    
    $requete = $bdd->query("SELECT * FROM serie WHERE titre = '$titre'");
    $reponse = $requete->fetch();

    $titre = $reponse['titre'];
    $id_s = $reponse['id_s'];
    $URL = $reponse['location_URL_serie'];
    $affiche = $reponse['location_aff_serie'];
    
}
?>

<p> Liste des films :</p> <?php

$requete = $bdd->query("SELECT * FROM film");


while ($reponse = $requete->fetch())
{
    $titre = $reponse['titre'];
    echo $titre . ' <br> ';
} ?>
<h1>Pour regarder un film :</h1>

<form action="#" method="post">
                <label>Entrez le titre d'un film : </label>
                <input class="titre" type="text" name="titre" required placeholder="Film" /> <br>     

                <input class="button" type="submit" name="choifilm" value="Choisir un film " /> <br>
            </form>   
<br>
<p> Liste des séries :</p> <?php

$requete = $bdd->query("SELECT * FROM serie");


while ($reponse = $requete->fetch())
{
    $titre = $reponse['titre'];
    echo $titre . ' <br> ';
} ?>
<h1>Pour regarder une série :</h1>

<form action="#" method="post">
                <label>Entrez le nom de la série :</label>
                <input class="titre" type="text" name="titre" required placeholder="Série" /> <br> 
                <label>Entrez le numéro de la saison : </label>
                <input class="saison" type="text" name="numero_sai" required placeholder="0" /> <br> 
                <label>Entrez le numéro de l'episode </label>
                <input class="episode" type="text" name="numero_epi" required placeholder="0" /> <br> 
                
                <input class="button" type="submit" name="choise" value="Choisir une série " /> <br>
            </form>   


<?php

 include "includes/footer.php"; 

?>

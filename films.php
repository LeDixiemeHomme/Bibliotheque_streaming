<?php 

    $requete = $bdd->query("SELECT * FROM film WHERE id_c = $id_c");


while ($reponse = $requete->fetch())
{    
    $id = $reponse['id_f'];
    $titre = $reponse['titre'];
    $desc = $reponse['desc_film'];
    $id_c = $reponse['id_c'];
    $URL = $reponse['location_URL_film'];
    $affiche = $reponse['location_aff_film'];
    
    echo $titre;
    echo '<img class="affiches" src="' .$affiche. '" width="350px alt="photo de l\'affiche ' .$titre. '"/>';
    echo $desc;?>
    
    <?php } ?>
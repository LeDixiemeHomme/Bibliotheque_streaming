<?php 

    $requete = $bdd->query("SELECT * FROM serie WHERE id_c = $id_c ");
    

while ($reponse = $requete->fetch())
{    
    $id = $reponse['id_s'];
    $titre = $reponse['titre'];
    $desc = $reponse['desc_serie'];
    $id_c = $reponse['id_c'];
    $affiche = $reponse['location_aff_serie'];
    
    echo $titre;
    echo '<img class="affiches" src="' .$affiche. '" width="350px alt="photo de l\'affiche ' .$titre. '"/>';
    echo $desc;?>
    <?php } ?>
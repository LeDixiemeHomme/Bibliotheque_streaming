<?php include "includes/header.php"; ?>
<?php

if(isset($_POST['ajout_film']))
{
    $titre = $_POST['titre'];
    $desc_film = $_POST['desc_film'];
    $id_c = $_POST['id_c'];
    $location_URL_film = $_POST['location_URL_film'];
    $location_aff_film = $_POST['location_aff_film'];
    
    $requete = $bdd->query("INSERT INTO film (titre, desc_film, id_c, location_URL_film, location_aff_film) VALUES ('$titre','$desc_film','$id_c','$location_URL_film','$location_aff_film')");
}
?>
   <br>
   <br>
            <form action="#" method="post">
                <label>Titre </label>
                <input class="titre" type="text" name="titre" placeholder="Star wars" required/> <br> 
                <label>Description du film (pas obligatoire) </label>
                <input class="desc_film" type="text" name="desc_film" placeholder="Non obligatoire" /> <br>
                <label>L'ID de la catégorie</label>
                <input class="id_c" type="text" name="id_c" placeholder="1" required/> <br>
                <label>Le lien URL de la vidéo</label>
                <input class="location_URL_film" type="text" name="location_URL_film" placeholder="http://" required/> <br>
                <label>Sa position dans les fichiers </label>
                <input class="location_aff_film" type="text" name="location_aff_film" placeholder="pictures/affiches/..." required/> <br>

                <input class="button" type="submit" name="ajout_film" value="Ajouter un film" /> <br>
            </form>
<?php

if(isset($_POST['ajout_serie']))
{
    $titre = $_POST['titre'];
    $desc_serie = $_POST['desc_serie'];
    $id_c = $_POST['id_c'];
    $location_aff_serie = $_POST['location_aff_serie'];
    
    $requete = $bdd->query("INSERT INTO serie (titre, desc_serie, id_c, location_URL_serie, location_aff_serie) VALUES ('$titre','$desc_serie','$id_c','$location_URL_serie','$location_aff_serie')");
}
?>
   <br>
   <br>
            <form action="#" method="post">
                <label>Titre </label>
                <input class="titre" type="text" name="titre" placeholder="Vikings" required/> <br> 
                <label>Description de la série (pas obligatoire) </label>
                <input class="desc_serie" type="text" name="desc_serie" placeholder="Non obligatoire" /> <br>
                <label>L'ID de la catégorie</label>
                <input class="id_c" type="text" name="id_c" placeholder="1" required/> <br>
                <label>Sa position dans les fichiers </label>
                <input class="location_aff_serie" type="text" name="location_aff_serie" placeholder="pictures/affiches/..." required/> <br>

                <input class="button" type="submit" name="ajout_serie" value="Ajouter une série" /> <br>
            </form>
<?php

if(isset($_POST['ajout_saison']))
{
    $id_s = $_POST['id_s'];
    $id_sai = $_POST['id_sai'];
    $numero_sai = $_POST['numero_sai'];
    
    $requete = $bdd->query("INSERT INTO saison (id_sai, numero_sai, id_s) VALUES ('$id_sai','$numero_sai','$id_s')");
}
?>
   <br>
   <br>
            <form action="#" method="post">
                <label>L'ID de la saison </label>
                <input class="id_sai" type="text" name="id_sai" placeholder="1" required/> <br>
                <label>Le numéro de la saison </label>
                <input class="numero_sai" type="text" name="numero_sai" placeholder="1" required/> <br> 
                <label>L'ID de la série contenant cette saison </label>
                <input class="id_s" type="text" name="id_s" placeholder="1" required/> <br>  
                

                <input class="button" type="submit" name="ajout_saison" value="Ajouter une saison" /> <br>
            </form>
<?php

if(isset($_POST['ajout_episode']))
{
    $id_sai = $_POST['id_sai'];
    $id_episode = $_POST['id_episode'];
    $location_URL_episode = $_POST['location_URL_episode'];
    $numero_epi = $_POST['numero_epi'];
    
    $requete = $bdd->query("INSERT INTO episode (id_episode, numero_epi, location_URL_episode, id_sai) VALUES ('$id_episode','$numero_epi','$location_URL_episode','$id_sai')");
}
?>
   <br>
   <br>
            <form action="#" method="post">
                <label>L'ID de l'épisode </label>
                <input class="id_episode" type="text" name="id_episode" placeholder="1" required/> <br>
                <label>Le numéro de l'épisode </label>
                <input class="numero_epi" type="text" name="numero_epi" placeholder="1" required/> <br> 
                <label>Le lien URL de l'épisode</label>
                <input class="location_URL_episode" type="text" name="location_URL_episode" placeholder="http://" required/> <br>
                <label>L'ID de la saison contenant cet épisode </label>
                <input class="id_sai" type="text" name="id_sai" placeholder="1" required/> <br>  
                

                <input class="button" type="submit" name="ajout_episode" value="Ajouter un épisode" /> <br>
            </form>

<?php include "includes/footer.php"; ?>
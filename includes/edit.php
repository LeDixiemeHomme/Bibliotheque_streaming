<?php
    
    if(isset($_GET['id_c']))
		{
			$requete = $bdd->query("DELETE FROM categorie WHERE id_c = ".$_GET['id_c']) ; //requete BDD
		}

	$requete = $bdd->query("SELECT * FROM categorie");

	while($reponse = $requete->fetch())
	{
		echo $reponse['libelle']." <a href='includes/edit.php?id_c=".$reponse['id_c']."'> Supprimer cette catégorie </a><br>";
																
	} ?> <br> <?php
    
    if(isset($_GET['id_f']))
		{
			$requete = $bdd->query("DELETE FROM film WHERE id_f = ".$_GET['id_f']) ; //requete BDD
		}

	$requete = $bdd->query("SELECT * FROM film");

	while($reponse = $requete->fetch())
	{
		echo $reponse['titre']." <a href='includes/edit.php?id_f=".$reponse['id_f']."'> Supprimer ce film </a><br>";
																
	}  ?> <br> <?php
    
    if(isset($_GET['id_s']))
		{
			$requete = $bdd->query("DELETE FROM serie WHERE id_s = ".$_GET['id_s']) ; //requete BDD
		}

	$requete = $bdd->query("SELECT * FROM serie");

	while($reponse = $requete->fetch())
	{
		echo $reponse['titre']." <a href='includes/edit.php?id_s=".$reponse['id_s']."'> Supprimer cette série </a><br>";
																
	}  ?> <br> 
	

<?php

if(isset($_POST['supprimer_saison']))
{
    $id_s = $_POST['id_s'];
    $id_sai = $_POST['id_sai'];
    $numero_sai = $_POST['numero_sai'];    
    
    $requete = $bdd->query("DELETE FROM saison WHERE id_sai = $id_sai AND id_s = $id_s AND numero_sai = $numero_sai");
}
?>
   <br>
   <br>
            <form action="#" method="post">
                <label>ID de la serie</label>
                <input class="text" type="text" name="id_s" required placeholder="0" />
                <label>ID de la saison</label>
                <input class="text" type="text" name="id_sai" required placeholder="0" />
                <label>Numero de la saison</label>
                <input class="text" type="text" name="numero_sai" required placeholder="0" />

                <input class="button" type="submit" name="supprimer_saison" value="Supprimer une saison !" />
            </form>
	
<?php
if(isset($_POST['supprimer_episode']))
{
    $id_episode = $_POST['id_episode'];
    $numero_epi = $_POST['numero_epi'];
    $id_sai = $_POST['id_sai'];   
    
    $requete = $bdd->query("DELETE FROM episode WHERE id_episode = $id_episode AND numero_epi = $numero_epi AND id_sai = $id_sai");
}
?>
   <br>
   <br>
            <form action="#" method="post">
                <label>ID de la saison</label>
                <input class="text" type="text" name="id_sai" required placeholder="0" />
                <label>ID de l'épisode</label>
                <input class="text" type="text" name="id_episode" required placeholder="0" />
                <label>Numero de l'épisode</label>
                <input class="text" type="text" name="numero_epi" required placeholder="0" />

                <input class="button" type="submit" name="supprimer_episode" value="Supprimer un episode !" />
            </form>
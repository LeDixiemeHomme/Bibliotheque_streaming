<?php
auth(3);

if(isset($_GET['connecte']) || $_SESSION['lvl'] < 1){
	header("Location:index.php");
	die();
}
	if(isset($_GET['id_u']))
		{
			$requete = $bdd->query("DELETE FROM users WHERE id_u = ".$_GET['id_u']) ; //requete BDD
		}
		
	if(isset($_GET['ban']))
		{
			$requete = $bdd->query("UPDATE users SET lvl = 0 WHERE id_u = ".$_GET['ban']) ; //requete BDD
        }

    if(isset($_GET['deban']))
		{
			$requete = $bdd->query("UPDATE users SET lvl = 1 WHERE id_u = ".$_GET['deban']) ; //requete BDD
        }

	$requete = $bdd->query("SELECT * FROM users");

	while($reponse = $requete->fetch())
	{
		echo $reponse['login']." <a href='admin.php?id_u=".$reponse['id_u']."'>X  </a>";
								if($reponse['lvl'] >0)
									echo "<a href='admin.php?ban=".$reponse['id_u']."'>Bannir</a><br>";
									else
										echo "<a href='admin.php?deban=".$reponse['id_u']."'>Debannir</a><br>";
								
	}  ?> <br> <?php ?>
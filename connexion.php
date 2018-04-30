<?php include "includes/header.php"; 

	if(isset($_POST['submit']))
	{
		$mdp = sha1($_POST['mdp']);
		$login = $_POST['login'];
		
		$requete = $bdd->query("SELECT * FROM users WHERE login = '$login' AND mdp = '$mdp'");//J'interroge la bdd
		
		if($reponse = $requete->fetch())//recupere le resultat de la requete
		{
			if($reponse['lvl'] != 0){
				$_SESSION['connecte'] = true;
				$_SESSION['id_u'] = $reponse['id_u'];
				$_SESSION['login'] = $reponse['login'];
				$_SESSION['lvl'] = $reponse['lvl'];
                $_SESSION['id_a'] = $reponse['id_a'];
				header("Location:index.php");
			}
			else{
				echo "Vous êtes banni.";
			}
		}
		else
		{
			echo "Mauvais identifiant";
		}
        
        $requete = $bdd->query("UPDATE users SET datelastco = NOW() WHERE login = '$login'");
	}

?>
<br>
            <form action="#" method="post">
                Login <input type="text" name="login" required /><br /> Mdp <input type="password" name="mdp" required /><br />                
                <input class="button" type="submit" name="submit" value="Connexion" />
            </form>
            <a href="inscription.php">Pas encore inscrit?</a>
        </div>
    </div>
</div>
<br>


<?php include "includes/footer.php"; ?>
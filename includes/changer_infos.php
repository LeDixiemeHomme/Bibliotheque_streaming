<?php
    $requete = $bdd->query("SELECT * FROM users WHERE id_u = ".$_SESSION['id_u']);
	$reponse = $requete->fetch();
	

	if(isset($_POST['change']))
	{
        
    $login = htmlentities($_POST['login']);
    $mdp = sha1($_POST['mdp']);
    $mail = htmlentities($_POST['mail']);
    $prenom = htmlentities($_POST['prenom']);
    $nom = htmlentities($_POST['nom']);
        
        $requete = $bdd->query("UPDATE users SET
								login = '$login',
								mdp = '$mdp',
                                mail = '$mail',
                                nom = '$nom',
                                prenom = '$prenom'                              
								WHERE id_u = ".$_SESSION['id_u']);
		
		echo "Informations modifiées";
	}

?>

    <form action="#" method="post">
        Login <input type="text" name="login" value="<?= $reponse['login']; ?>" required /><br /> Mdp <input type="password" name="mdp" required/><br /> Adresse mail <input type="email" name="mail" required/><br /> Nom <input type="text" name="nom" required/><br /> Prénom
        <input type="text" name="prenom" required/><br />
        <input type="submit" name="change" value="Modifier mes informations" />
    </form>
    

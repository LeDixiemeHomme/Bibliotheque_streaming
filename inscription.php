<?php include "includes/header.php"; ?>
<?php
if(isset($_POST['submit']))
{
    if($_POST['mdp'] == $_POST['mdp1'])
    {
    $ip = $_SERVER['REMOTE_ADDR'];
    $login = htmlentities($_POST['login']);
    $mdp = sha1($_POST['mdp']);
    $prenom = htmlentities($_POST['prenom']);
    $nom = htmlentities($_POST['nom']);
    $mail = htmlentities($_POST['mail']);
	header("Location:index.php");
    
    $requete = $bdd->query("INSERT INTO users (login,mdp,nom,prenom,mail,ip,date_inscription) VALUES ('$login','$mdp','$nom','$prenom','$mail','$ip',NOW())");
    }
}
?>
   <br>
   <br>
            <form action="#" method="post">
                <label>Login </label>
                <input class="login" type="text" name="login" required placeholder="username" /> <br> 
                <label>Mail </label>
                <input class="login" type="email" name="mail" required placeholder="mail@domain.com" /> <br>
                <label>Password </label>
                <input class="password" type="password" name="mdp" required placeholder="password" /> <br>
                <label>Confirm Password </label>
                <input class="password" type="password" name="mdp1" required placeholder="confirm password" /> <br>
                <label>Personal Information :</label><br>
                <label>Prenom </label>
                <input class="login" type="text" name="prenom" required placeholder="prenom" /> <br>
                <label>Nom </label>
                <input class="login" type="text" name="nom" required placeholder="nom" /> <br>

                <input class="button" type="submit" name="submit" value="Inscription" /> <br>
            </form>
           
    
<?php include "includes/footer.php" ?>
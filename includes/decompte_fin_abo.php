<?php

    $requete = $bdd->query("SELECT * FROM users WHERE id_u = ".$_SESSION['id_u']);
	$reponse = $requete->fetch();

    $id_a = $reponse['id_a'];
    $date_debut = $reponse['date_debut'];
    $date_fin = $reponse['date_fin'];

?>

<html>
	<head>
		<title>compte a rebours</title>
		<script type="text/javascript">
			function CompteARebours()
			{
				var date_actuelle = new Date(); // On déclare la date d'aujourd'hui.
				var annee = date_actuelle.getFullYear();

				var fin_abonnement = new Date('<?php echo $date_fin; ?>'); // On déclare la date de fin d'abonnement.
        
				var tps_restant = fin_abonnement.getTime() - date_actuelle.getTime(); // Temps restant en millisecondes

				//============ CONVERSIONS

				var s_restantes = tps_restant / 1000; // On convertit en secondes
				var i_restantes = s_restantes / 60;
				var H_restantes = i_restantes / 60;
				var d_restants  = H_restantes / 24;


				s_restantes = Math.floor(s_restantes % 60); // Secondes restantes
				i_restantes = Math.floor(i_restantes % 60); // Minutes restantes
				H_restantes = Math.floor(H_restantes % 24); // Heures restantes
				d_restants = Math.floor(d_restants); // Jours restants
				//==================
				var mois_fr = new Array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');

				var texte = "Nous sommes le <strong>" +date_actuelle.getDate()+ " " +mois_fr[date_actuelle.getMonth()]+ " " +date_actuelle.getFullYear()+ "</strong>," +
							" et il est <strong>" +date_actuelle.getHours()+ "h" +date_actuelle.getMinutes()+ "</strong>.<br />";

				texte += "Il reste exactement <strong>" +d_restants+ " jours</strong>, <strong>" +H_restantes+ " heures</strong>," +
						 " <strong>" +i_restantes+ " minutes</strong> et <strong>" +s_restantes+ "s et "+date_actuelle.getMilliseconds()+"millisecondes</strong> avant la fin de votre abonnenemnt.";


				document.getElementById("affichage").innerHTML = texte;
			}
		</script>
	</head>
	<body>
		<p id="affichage">
			<script type="text/javascript">
				setInterval(CompteARebours, 1); // Rappel de la fonction toutes les 1000 millisecondes (toutes les secondes quoi !).
				
			</script>
		</p>
	</body>
</html>
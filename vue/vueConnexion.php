<div class="conteneur">
	<header>
		<?php include 'haut.php' ;?>
	</header>
	<main>
	<div class="contentConnexion">
		<form method="post" action="#" class="connexion">
			<br>
				<legend class="titre">Connexion</legend>
				<br>
				<div class="corps">
					<input type="text" placeholder="Identifiant" name="login" id="login" required="required">
					<br><br>
					<input type="password" placeholder="Mot de passe" name="password" id="password" required="required">
					<br><br>
					<input type="submit" value="Valider">
				</div>
		</form>

		<?php

			if(isset($_POST["password"])){
				$password = $_POST["password"];
			}

			if(isset($_POST["login"])){
				$login = $_POST["login"];
			}

		 ?>

	</div>
	</main>
	<footer>
		<?php include 'bas.php' ;?>
	</footer>
</div>

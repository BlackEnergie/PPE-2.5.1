<div class="conteneur">
	<header>
		<?php include 'haut.php' ;?>
	</header>
	<main>
	<div class="connexion">
		<form method="post" action="#">
			<input type="text" placeholder="Identifiant" name="login" id="login" required="required">
			<br>
			<input type="password" placeholder="Mot de passe" name="password" id="password" required="required">
			<br>
			<input type="submit" value="Valider">
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

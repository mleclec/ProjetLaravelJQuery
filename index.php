<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Accueil</title>
		<link rel="stylesheet" href="./general.css" type="text/css"/>
	</head>
	<body>
		<header>
			<a href='./../ProjetLaravel/public/' class="bandeau">Aller sur l'application</a>
			<a href='./../ProjetLaravel/public/information' class="bandeau">Configuration</a>
		</header>

		<div class="titre">
			<p> Bienvenue sur Gravatar </p>
		</div>

		<div>
			<form action="" method="post">
				<label for="email"> Entrez votre email </label>
				<input type="text" id="email" name="adrEmail"/>
				<label for="size" class="espace">Taille de l'image</label>
				<select name="sizeAvatar" id="size">
					<option value="size0"> par défaut </option>
					<option value="size1"> 100x100 </option>
					<option value="size2"> 200x200 </option>
					<option value="size3"> 300x300 </option>
				</select>
				<input type="submit" name="find" value="Chercher" class="submit" />
			</form>
		</div>

		<div id="img-dispay" class="img-dispay">
		</div>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
		<script type="text/javascript" src="./js/jQuery/jquery-2.1.3.js"></script>
		<script type="text/javascript" src="./js/md5.js"></script>
		<script type="text/javascript">
			$(document).ready(function() 
			{
				$(".submit").click(function(event)
				{
					event.preventDefault(); // annule les événements par défauts

					// Récupération des valeurs //
					var demail = MD5($("#email").val());
					var dsize = $("#size").val();

					// Envoie des valeurs //
					var url = './../ProjetLaravel/public/search';
	    			$.post(url, 
			    			{
			    				'email': demail, 
			    				'size': dsize
			    			}, 
			    			function(data)
			    			{
						        // Affiche le resultat //
						        $('#img-dispay').html(data);
						    }
						);
				});
			});
        </script>
	</body>
</html>
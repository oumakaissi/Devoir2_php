
  <html>
<head>
	<title></title>
</head>
<body>
	<h1> Validation de la date </h1>
	<p> La date saisie est : <?php print($_POST['jour']."/".$_POST['mois']."/".$_POST['annee']);?></p>
	<?php
		if($_POST['annee'] < 2010)
			print("<p> La date saisie <span style=color:green >est valide . </span></p>");
		else
			print("<p>  L'annee ".$_POST['annee']." n'est pas bissextile:<span style=color:red >Date Invalide</span> </p>");

	?>

</body>
</html>

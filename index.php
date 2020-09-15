<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relativa lunghezza e sostituire la badword passata in GET con tre *. -->

<?php 
	$testo = "Nel mezzo del cammin di nostra vita mi ritrovai per una selva oscura ché la diritta via era smarrita.";

	$badword = $_GET['text'];

	$newTesto = str_replace($badword, '***', $testo, $count);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Badwords find</title>
</head>
<body>
<h1>Badwords find with PHP</h1>
<p> Il testo da correggere è : 
<?php 
	echo " $testo";
?> Ed è lungo : <?php echo strlen($testo)?> 
</p>
<p>Il testo corretto è : 
<?php
	echo " $newTesto";
?> 
</p><span>Caratteri sostituiti : 
<?php 
	echo " $count"
?></span>
	
</body>
</html>
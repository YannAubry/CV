<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<Title>CV</Title>
</head>
<body>
<?php
try {
    $dbh = new PDO("mysql:host=localhost;dbname=cv", "root", "");


	
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>
<form action = "<?=$_SERVER['PHP_SELF']?>" method="post">  <!--Créer Rubrique !-->
 <p style="text-align:center">
  <input id="log" type="submit" name="CreerR" value="Creer Rubrique" />
  </p>
</form>
<?php
if (isset($_POST['CreerR'])) { //3
?>
<form action = "<?=$_SERVER['PHP_SELF']?>" method="post">  <!--Créer Rubrique !-->
<p style="text-align:center">Nom de la Rubrique <input type="text" name="nomR"  style="border:solid 5px darkgrey; border-radius:5px;
 text-align:center; box-shadow:0 0 6px;" /></p>
  <p style="text-align:center">
   <input id="log" type="submit" name="AjouterR" value="AjouterR" />
   </p>
</form>
<?php
 if (isset($_POST['AjouterR'])) {//2
$NomR=$_POST['nomR'];
echo "test";

	$SQL= $dbh->prepare("INSERT INTO `rubrique`(`NomRubrique`) VALUES('$NomR');")or exit(print_r($bdh->errorInfo()));
	
	$SQL->execute(array(
		"NomRubrique" => $NomR
		));
}//2
}//3
?>









<form action = "<?=$_SERVER['PHP_SELF']?>" method="post">  <!--Créer CV !-->
 <p style="text-align:center">
  <input id="log" type="submit" name="CreerC" value="Creer CV" />
  </p>
</form>
<?php
if (isset($_POST['CreerC'])) { //1
?>
<h4 style="text-align:center">- - - - Presentation Personnel - - - -</h4>
<h4 style="text-align:center">_________________________________________________</h4>
<form action = "<?=$_SERVER['PHP_SELF']?>" method="post"> <!--Créer CV !--> 

<p style="text-align:center">Nom <input type="text" name="nom"  style="border:solid 5px darkgrey; border-radius:5px;
 text-align:center; box-shadow:0 0 6px;" /></p>
 
 <p style="text-align:center">Prenom <input type="text" name="prenom" style="border:solid 5px darkgrey; border-radius:5px;
 text-align:center; box-shadow:0 0 6px;" /></p>

 <p style="text-align:center">Date de naissance <input type="text" name="Dnais" style="border:solid 5px darkgrey; border-radius:5px;
 text-align:center; box-shadow:0 0 6px;" /></p>
 
  <p style="text-align:center">Adresse Mail <input type="text" name="mail" style="border:solid 5px darkgrey; border-radius:5px;
 text-align:center; box-shadow:0 0 6px;" /></p>

 <p style="text-align:center">
  <input id="log" type="submit" name="Ajouter" value="Ajouter" />
  </p>
 </form> 
 
 <?php
 if (isset($_POST['Ajouter'])) {//2
$Nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$Dnais=$_POST['Dnais'];
$mail=$_POST['mail'];
	$SQL2= $dbh->prepare("INSERT INTO `utilisateurs`(`Nom`,`Prenom`,`dateNaissance`,`Mail`) VALUES('$Nom','$prenom','$Dnais','$mail');")or exit(print_r($bdh->errorInfo()));
	
	$SQL2->execute(array(
		"Nom" => $Nom,
		"Prenom" => $prenom,
		"dateNaissance" =>$Dnais,
		"Mail" => $mail
		));
}//2
}//1
 
?>

</body>
</html>















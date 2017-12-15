<?php 
$host="localhost";
$user="root";
$mdp="";
$db="db_codeuse";
$link = mysqli_connect($host,$user,$mdp);
mysqli_select_db($link,$db);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>exo</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="content">
		<div> <p>Bonjour chere codeuses vous pouvez vous faire recencer en vous inscrivant maintenant</p></div>
	<div>
		<fieldset>
<form action="" name="form1" method="Post">
	<table>
		<tr>
			<td>nom</td>
			<td>:</td>
			<td><input type="text" name="nom" value=""><br></td>
		</tr>
		<tr>
			<td>prenom</td>
			<td>:</td>
			<td> <input type="text" name="prenom" value=""><br></td>
		</tr>
		<tr>
			<td>tel</td>
			<td>:</td>
			<td><input type="text" name="tel" value=""><br></td>
		</tr>
		<tr>
			<td>email</td>
			<td>:</td>
			<td><input type="text" name="email" value=""><br></td>
		</tr>
		<tr>
			<td>description </td>
			<td>:</td>
			<td><br><textarea name="description"></textarea><br></td>
		</tr>
		<tr>
			<td><input type="submit" value="enregistrer" name="submit"></td>
		</tr>
	</table>
		</form>
</fieldset>
	</div>

	</div>

	<?php 
			if (isset($_POST["submit"])) {
				/*echo $_POST["nom"]."<br>";
				echo $_POST["prenom"]."<br>";
				echo $_POST["tel"]."<br>";
				echo $_POST["email"]."<br>";
				echo $_POST["description"]."<br>";
				die();*/
				$sql="INSERT INTO codeuse (nom,prenom,tel,email,description)
				 VALUES('".$_POST["nom"]."',
				 		'".$_POST["prenom"]."',
				 		'".$_POST["tel"]."',
				 		'".$_POST["email"]."',
				 		'".$_POST["description"]."');";//die($sql);
				$result=mysqli_query($link,$sql);
				if ($result) {
					echo "insertion reussie";
				}else{
					echo mysqli_error($link);
					die();
				}
			}
		?>
</body>
</html>
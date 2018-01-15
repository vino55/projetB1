<!DOCTYPE html>

<?php
session_start();


$bdd= new PDO('mysql:host=localhost;dbname=espace_membre', 'root',''); 
if(isset($_POST['formconnexion']))
{
	$mail = htmlspecialchars($_POST['mail']);
	$mdp= sha1($_POST['mdp']);
	if(!empty($mail) AND !empty($mdp))
	{
		$requser = $bdd->prepare("SELECT * FROM membre  WHERE mail = ? AND mdp = ?");
		$requser->execute(array($_POST['mail'], $_POST['mdp']));
		$userexist = $requser->rowCount();
		if($userexist == 1)
		{
			$userinfo = $requser->fetch();
			$_SESSION['id'] = $userinfo['id'];
			$_SESSION['mail'] = $userinfo['mail'];
			$_SESSION['prenom'] = $userinfo['prenom'];
			header("Location:  nouveauprofil.php?id=".$_SESSION['id']);
		}
		else
		{
			$erreur ="Mauvais mail ou mot de passe !";
		}
		
	}
	else
	{
		$erreur = "Tous les champs doivent être doivent être complétés !";
	}
	
	
}

?>

<html>
     <head>
	      <meta charset="utf-8">
		   <link rel="stylesheet" href="covoiturage.css" />
			<style>
				input[type=submit] {
    width: 15%;
    background-color: #00008B;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=email] {
     width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=password] {
     width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10%;
}


							
							
			</style>
		   
	 </head>
	 <body>
	 <div>
	 <h1 class="centre">Je me connecte:</h1>
	 <div class="centre">
	 <form method="post" action="">
	 <input type="email" name="mail" placeholder="Mail"/>
	 <input type="password" name="mdp" placeholder="Mot de passe"/></br>
	 <input type="submit" name="formconnexion" value="Se connecter !"/>
	 </div>
	 </form>
	 
	 <?php
		if(isset($erreur))
		{
			echo '<font color="red">'.$erreur."</font>";
			
		}
		?>

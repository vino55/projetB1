<!DOCTYPE htlm>


<?php

$bdd= new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root',''); 

if(isset($_POST['forminscription']))
{
	if(!empty($_POST['monnom']) AND !empty($_POST['monprenom']) AND !empty($_POST['mail']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']) AND !empty($_POST['Tel']))
	{
		$monnom= htmlspecialchars($_POST['monnom']);
		$monprenom= htmlspecialchars($_POST['monprenom']);
		$mail= htmlspecialchars($_POST['mail']);
		$mdp= sha1($_POST['mdp']);
		$mdp2= sha1($_POST['mdp2']);
		
		
	}
	else
	{
		$erreur ="Tous les champs doivent être complétés !";
		
		echo $_POST['monnom'];
		echo $_POST['monprenom'];
		echo $_POST['mail'];
		echo $_POST['mdp'];
		echo $_POST['mdp2'];
		echo $_POST['Tel'];		
	}
}
{
    if($_POST['mdp'] == $_POST['mdp2'])
		
	{
		$insertmbr = $bdd->prepare("INSERT INTO membre(nom, prenom, mail, mdp, Tel) VALUES(?, ?, ?,?,?)");
		$insertmbr ->execute(array($_POST['monnom'], $_POST['monprenom'],$_POST['mail'], $_POST['mdp'], $_POST['Tel']));
		$erreur = "Votre compte a bien été crée !";
	}
	else
	{
		$erreur = 'Vos mots de passes ne correspondent pas !';
		
		
		
		
		
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
     width: 75%;
    padding: 5%;
    margin: 10%;
    
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=password] {
     width: 75%;
    padding: 5%;
    margin: 5%;
   
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=text] {
     width: 75%;
    padding: 5%;
    margin: 5%;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;



	
	
	
	input[type=tel] {
     width: 75%;
    padding: 5%;
    margin: 5%;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	
div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 100%;
}
</style>
	 </head>
	 <body>
	 <div>
	 <form method="post">
<h1> Inscription</h1>
		<table border=1>
		<td>Nom : </td>
				<td>
					<input type="text" name="monnom" placeholder="Votre nom" id="nom"  value="<?php if (isset($_POST["monnom"])) echo $_POST["monnom"]; ?>"/>
				</td>
			</tr>
			
			<tr>
				<td>Prénom : </td>
				<td>
					<input type="text" name="monprenom" placeholder="Votre prenom" id="prenom" value="<?php if (isset($_POST["monprenom"])) echo $_POST["monprenom"]; ?>"/>
				</td>
			</tr>
			
			<tr>
				<td>Mail</td>
				<td>
					<input type="email" placeholder="Votre mail" id="Mail" name="mail">
					
				
					
					
				</td>
			</tr>
			<tr> 				<td>Mot de passe : </td>
				<td>
					<input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp">
				</td>
			</tr>
			
			</tr>
			<tr> 				<td>Confirmation mdp:</td>
				<td>
					<input type="password" placeholder="Confirmer votre mdp" id="mdp2" name="mdp2">
				</td>
			</tr>
			
			<tr>
				<td>Tèl : </td>
				<td>
					<input type="tel" placeholder="Votre numéro" id="Tel" name="Tel">
				</td>
			</tr>
				
				
				
				
				
				
				
				
				
			
			</table>
			</br>
				<button type="submit" name="forminscription">Je m'inscrit </button> 
				
				
				</br>
		
		<table border=1></br>
		
		<a href="connexion2.php">Deja un compte? Connecter vous!</a>
		

		</div>
		</form>
		</br>
		</body>
	 </html>
		<?php
		if(isset($erreur))
		{
			echo '<font color="red">'.$erreur."</font>";
			
		}
		?>
		
		

		
		
		
	  

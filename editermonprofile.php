<?php
session_start();


$bdd= new PDO('mysql:host=localhost;dbname=espace_membre', 'root',''); 


if(isset($_SESSION['id']))

	
{
		
		$requser = $bdd->prepare('SELECT *FROM membres  WHERE id =?');
		$requser->execute(array($_SESSION['id']));
		$user = $requser->fetch();
}
?>
<html>
     <head>
	      <meta charset="utf-8">
		   <link rel="stylesheet" href="covoiturage.css" />
		   
		   <style>
div {
    background-color: lightgrey;
    width: 300px;
    border: 25px #000000;
    padding: 25px;
    margin: 25px;
}
div {
    margin: auto;
    width: 60%;
    
    padding: 200px;
}
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=email] {
     width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
	 </head>
	
		
	
	 <body>
			<div>
				<h2>Informations personnelles</h2>
				<br/><br/>
				<form method="post" action="traitement.php">
				 <label for="Prénom">Prénom:</label>
				  <input type="text" name="monprenom" placeholder="Votre prenom" id="prenom"></br>
				  </br>
				 <label for="Nom">Nom:</label>
				  <input type="text" name="monnom" placeholder="Votre nom" id="nom"></br>
			       </br>
				   </br>
				   </br>
				   </br>
				 <label for="Mail">Mail:</label>
				   <input type="email" placeholder="Votre mail" id="Mail" name="mail"></br>
				   </br>
				 <label for="Tèl">Tèl:</label>
					<input type="text" placeholder="Votre numéro" id="Tel" name="Tel"></br>
					</br></br>
				 <label>
					<input type="submit" name="forminscription" value="Enregistrer" />
					</label>
					
	 
				</form>
	 
	
		
				</div>
		</body>
		
 
 
 
</html>

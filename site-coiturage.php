# projetB1<!DOCTYPE html>
<html>
<title>CARPOOLING CAR</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="lenouveauprojet.php" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="covoiturage.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Inscription</a>
    <a href="connexion2.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Connexion</a>
    <a href="trajetcov.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Trajet</a>
    <a href="connexion2.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Mon compte</a>
  </div>

  <!-- Barre de Navigation -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="lenouveauprojet.php" class="w3-bar-item w3-button w3-padding-large">Home</a>
    <a href="covoiturage.php" class="w3-bar-item w3-button w3-padding-large">Inscription</a>
    <a href="connexion2.php" class="w3-bar-item w3-button w3-padding-large">Connexion</a>
    <a href="trajetcov.php" class="w3-bar-item w3-button w3-padding-large">Trajet</a>
  </div>
</div>

<!-- Haut -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">CARPOOLING CAR</h1>
  
  <a href="trajetcov.php" class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Commencer</a>
</header>

<!-- 1ère Partie -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>En voiture!</h1>
      <h5 class="w3-padding-32">Vous prenez le volant bientôt ?</h5>

      <p class="w3-text-grey">Partagez vos frais en prenant des passagers.Des milliers de départs chaque jour. Et vous, où allez-vous ?Ce qui va vous plaire.Partez avec qui vous voulez

Consultez avis et profils pour choisir vos covoitureurs.</p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
    </div>
  </div>
</div>

<!-- 2ème Partie-->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1>Covoiturez en toute confiance</h1>
      <h5 class="w3-padding-32">En faisant vérifier une pièce d'identité, les covoitureurs peuvent renforcer les liens de confiance au sein de notre communauté.</h5>

      <p class="w3-text-grey">Voyagez assuré

Arrivée à destination garantie en cas d'incident. C'est offert.</p>
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">CARPOOLING, c'est facile</h1>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <p>Powered by team flash</p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>




<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link rel="icon" href="../images/logo.png">
  <title>Acceuil</title>
  
  <link href="../style/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../style/csscars.css">
  <!-- <script src="../js/jscars.js"></script> --> 
</head>
<body>

<div class="container main">

    <!-- ***********
    ***** HEADER / MENU
    ************ -->
  <header class="row">
    <div class="col-sm-2">
      <img src="images/car.svg" alt="car" class="" />
    </div>
    <div class="col-sm-10">
      <nav class="navbar ">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="carAcceuil.html">ACCEUIL</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class= "elt"><a href="seConnecter.php">SE CONNECTER</a></li>
              <li class= "elt"><a href="html/inscription.html">S'INSCRIRE</a></li>
              <li class= "elt"><a href="html/modele.html">MODELE</a></li>
              <li class= "elt"><a href="blog.php">BLOG</a></li>
              <li><a href="html/contact.html">CONTACT</a></li>
            </ul>
        </div>
      </nav>
    </div>
  </header>


 <!-- ***********
    ***** SECTION
    ************ -->
    <?php
    include '../../modele/connexion.php';


?>
    <section >
        <div class="row">
        <form>
        <div class="col-xs-12">
        <h1>veuillez écrire votre pseudo et mot de passe</h1>
        </div>
        <div class="row">
        <div class="col-xs-12">
        <p>
            <label for="pseudo">Pseudo</label> :
            <input type="text" name="pseudo" id="pseudo" required placeholder="pseudo">
            <span id="aidePseudo"></span>
        </p>
        </div>
        </div>
        <div class="row">
        <div class="col-xs-12">
        <p>
            <label for="mdp">Mot de passe</label> :
            <input type="password" name="mdp" id="mdp" required placeholder="****">
            <span id="aideMdp"></span>
        </p>
        </div>
        </div>
        <div class="row">
        <div class="col-xs-12">
        <input type="submit" value="Envoyer" ref = "blog.php">
        <input type="reset" value="Annuler">
        <p><a href="#">mot de passe oublié </a></p>
        
        </div>
        </div>
    </form>
    </div></section>
    <footer>
            <p>copyright April 2017</p>
            <p>Aymen SEGHAIER</p>
          <span class= "icones"><a href="http://facebook.com"><img src="images/facebook.png" alt="Facebook" /></a><a href="http://twitter.com"><img src="images/twitter.png" alt="Twitter" /></a><a href="http://vimeo.com"><img src="images/vimeo.png" alt="Vimeo" /></a><a href="http://rss.com"><img src="images/rss.png" alt="RSS" /></a></span>
        </footer>
        </div>
        </div>
</body>
</html>
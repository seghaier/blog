<?php
session_start(); 
?>

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
    <section >
<?php
    try
{
	$bdd = new PDO('mysql:host=localhost;dbname=blogcar;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
// Récupération des posts

$req = $bdd->query('SELECT * FROM posts ORDER BY date DESC ');

while($donnees = $req->fetch()) {
?>
<div>
    <h3>
        <?php echo htmlspecialchars($donnees['title']); ?>
        <em>le <?php echo $donnees['date']; ?></em>
    </h3>
    
    <p>
    <?php
    // On affiche le contenu du billet
    echo nl2br(htmlspecialchars($donnees['content']));
    ?>
    <br />
    <em><a href="commentaires.php?posts=<?php echo $donnees['author_id']; ?>">Commentaires</a></em>
    </p>
</div>
<?php
 }// Fin de la boucle des posts
$req->closeCursor();
?>

<div class="row">
        <div class="col-xs-12">
        <p>
            <label for="titre">titre</label> :
            <br /><input type="text" name="titre" id="titre" >
            <span id="aidetitre"></span>
        </p>
        </div>
        </div>
        <div class="row">
        <div class="col-xs-12">
        <p><label for="contenu">contenu</label> :
        <br /><textarea name="contenu" rows="10" cols="100"></textarea></p> 
            <span id="aidecontenu"></span>
        
        </div>
        </div>
        <div class="row">
        <div class="col-xs-12">
        <input type="submit" value="Envoyer" ref = "modele/posts.php">

        
        
        </div>
        </div>
</section>

<!-- ***********
    ***** FOOTER
    ************ -->
<footer>
    <p>copyright April 2017</p>
    <p>Aymen SEGHAIER</p>
    	<span class= "icones"><a href="http://facebook.com"><img src="images/facebook.png" alt="Facebook" /></a><a href="http://twitter.com"><img src="images/twitter.png" alt="Twitter" /></a><a href="http://vimeo.com"><img src="images/vimeo.png" alt="Vimeo" /></a><a href="http://rss.com"><img src="images/rss.png" alt="RSS" /></a></span>
</footer>
        
        
</body>
</html>

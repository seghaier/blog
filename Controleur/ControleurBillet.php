<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/posts.php';
require_once 'Modele/Commentaire.php';
/**
 * Contrôleur des actions liées aux postss
 *
 * @author Baptiste Pesquet
 */
class Controleurposts extends Controleur {

    private $posts;
    private $commentaire;

    /**
     * Constructeur 
     */
    public function __construct() {
        $this->posts = new posts();
        $this->commentaire = new Commentaire();
    }

    // Affiche les détails sur un posts
    public function index() {
        $idposts = $this->requete->getParametre("id");
        
        $posts = $this->posts->getposts($idposts);
        $commentaires = $this->commentaire->getCommentaires($idposts);
        
        $this->genererVue(array('posts' => $posts, 'commentaires' => $commentaires));
    }

    // Ajoute un commentaire sur un posts
    public function commenter() {
        $idposts = $this->requete->getParametre("id");
        $auteur = $this->requete->getParametre("auteur");
        $contenu = $this->requete->getParametre("contenu");
        
        $this->commentaire->ajouterCommentaire($auteur, $contenu, $idposts);
        
        // Exécution de l'action par défaut pour réafficher la liste des postss
        $this->executerAction("index");
    }
}


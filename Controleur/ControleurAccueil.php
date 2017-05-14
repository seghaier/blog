<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/posts.php';

class ControleurAccueil extends Controleur {

    private $posts;

    public function __construct() {
        $this->posts = new posts();
    }

    // Affiche la liste de tous les postss du blog
    public function index() {
        $postss = $this->posts->getpostss();
        $this->genererVue(array('postss' => $postss));
    }

}


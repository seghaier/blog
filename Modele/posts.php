<?php

require_once 'Framework/Modele.php';

/**
 * Fournit les services d'accès aux genres musicaux 
 * 
 * @author Baptiste Pesquet
 */
class Billet extends Modele {

    /** Renvoie la liste des billets du blog
     * 
     * @return PDOStatement La liste des billets
     */
    public function getBillets() {
        $sql = 'SELECT * FROM posts ORDER BY date DESC';
        $posts = $this->executerRequete($sql);
        return $posts;
    }

    /** Renvoie les informations sur un billet
     * 
     * @param int $id L'identifiant du billet
     * @return array Le billet
     * @throws Exception Si l'identifiant du billet est inconnu
     */
    public function getBillet($idBillet) {
        $sql = 'select BIL_ID as id, BIL_DATE as date,'
                . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
                . ' where BIL_ID=?';
        $billet = $this->executerRequete($sql, array($idBillet));
        if ($billet->rowCount() > 0)
            return $billet->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun billet ne correspond à l'identifiant '$idBillet'");
    }

    public function ajouterbillet($titre, $contenu) {
        $sql= 'INSERT INTO posts( title, content) values('?','?')';
        $date = date(DATE);
        $this->executerRequete($sql, array($date, $auteur, $contenu, $idBillet));
    }

}


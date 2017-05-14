<?php
function add_billets($offset, $limit)
{
    global $bdd;
    $offset = (int) $offset;
    $limit = (int) $limit;
        
    $req = $bdd->exec('INSERT INTO posts( title, content) values('?','?')
    $req->bindParam(':offset', $offset, PDO::PARAM_INT);
    $req->bindParam(':limit', $limit, PDO::PARAM_INT);
    $req->execute();
    $billets = $req->fetchAll();
    
    
    return $billets;
}



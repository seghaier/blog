<?php 
// Hachage du mot de passe
$password_hache = sha1($_POST['$passeword']);

// Vérification des identifiants
$req = $bdd->prepare('SELECT id FROM users WHERE nickname = $nickname AND passaword = $passaword');
$req->execute(array(
    '$nickname' => $nickname,
    '$passaword' => $password_hache));

$resultat = $req->fetch();

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['nickname'] = $nickname;
    echo 'Vous êtes connecté !';
}
<?php
/*

    ./app/controleurs/postsControleur.php

*/
namespace App\Controleurs\PostsControleur;
use App\Modeles\PostsModele;

/**
 * [indexAction description]
 * @param  PDO    $connexion [description]
 */
function indexAction(\PDO $connexion) {
  // Demander la liste de posts au modèle
  include_once '../app/modeles/postsModele.php';
  $posts = PostsModele\findAll($connexion);
  // Charger la vue index dans $content
  GLOBAL $content, $title;
  $title = TITRE_POSTS_INDEX;
  ob_start();
    include '../app/vues/posts/index.php';
  $content = ob_get_clean();
}

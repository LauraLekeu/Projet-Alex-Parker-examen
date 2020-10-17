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

function showAction(\PDO $connexion, int $id) {
  // Demander le détail du post au modèle
  include_once '../app/modeles/postsModele.php';
  $post = PostsModele\findOneById($connexion, $id);
  // Charger la vue show dans $content
  GLOBAL $content, $title;
  $title = $post['title'];
  ob_start();
    include '../app/vues/posts/show.php';
  $content = ob_get_clean();
}

function addFormAction(\PDO $connexion) {
  // Demander la liste des catégories au modèle
  include_once '../app/modeles/categoriesModele.php';
  $categories = \App\Modeles\CategoriesModele\findAll($connexion);
  // Charger la vue addForm dans $content
  GLOBAL $content, $title;
  $title = TITRE_POSTS_ADDFORM;
  ob_start();
    include '../app/vues/posts/addForm.php';
  $content = ob_get_clean();
}

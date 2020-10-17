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

function addAction(\PDO $connexion) {
  // Demander au modèle d'ajouter le post
  include_once '../app/modeles/postsModele.php';
  $id = PostsModele\insertOne($connexion, $_POST);
  // Rediriger vers la liste des posts
  header('location: ' . BASE_URL_PUBLIC . 'posts');
}

function editFormAction(\PDO $connexion, int $id) {
  // Demander au modèle le post à modifier
  include_once '../app/modeles/postsModele.php';
  $post = PostsModele\findOneById($connexion, $id);
  // Demander les catégories au modèle
  include_once '../app/modeles/categoriesModele.php';
  $categories = \App\Modeles\CategoriesModele\findAll($connexion);
  // Charger la vue editForm dans $content
  GLOBAL $content, $title;
  $title = TITRE_POSTS_EDITFORM;
  ob_start();
    include '../app/vues/posts/editForm.php';
  $content = ob_get_clean();
}

function editAction(\PDO $connexion, int $id) {
  // Demander au modèle de modifier le post
  include_once '../app/modeles/postsModele.php';
  $return = PostsModele\updateOneById($connexion, $id, $_POST);
  // Rediriger vers la liste des posts
  header('location: ' . BASE_URL_PUBLIC . 'posts');
}

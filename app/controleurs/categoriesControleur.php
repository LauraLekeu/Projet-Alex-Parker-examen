<?php
/*

    ./app/controleurs/categoriesControleur.php

*/
namespace App\Controleurs\CategoriesControleur;
use App\Modeles\CategoriesModele;

/**
 * [indexAction description]
 * @param  PDO    $connexion [description]
 */
function indexAction(\PDO $connexion) {
  // Demander la liste des catégories au modèle
  include_once '../app/modeles/categoriesModele.php';
  $categories = CategoriesModele\findAll($connexion);
  // Charger la vue index dans $content
  include '../app/vues/categories/index.php';
}

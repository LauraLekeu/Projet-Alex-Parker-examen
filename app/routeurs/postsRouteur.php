<?php
/*

    ./app/routeurs/postsRouteur.php

*/
use \App\Controleurs\PostsControleur;
include_once '../app/controleurs/postsControleur.php';

switch ($_GET['posts']):
  case 'show':
    // ROUTE DETAILS D'UN POST
    // PATTERN: /index.php?posts=show&id=x
    // CTRL: postsControleur
    // ACTION:  show
    PostsControleur\showAction($connexion, $_GET['id']);
    break;
  case 'addForm':
    // AJOUT D'UN POST : FORMULAIRE
    // PATTERN: /index.php?posts=addForm
    // CTRL: postsControleur
    // ACTION: addForm
    PostsControleur\addFormAction($connexion);
    break;
endswitch;

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
  case 'add':
    // AJOUT D'UN POST : INSERT
    // PATTERN: /index.php?posts=add
    // CTRL: postsControleur
    // ACTION: add
    PostsControleur\addAction($connexion);
    break;
  case 'editForm':
    // MODIFICATION D'UN POST : FORMULAIRE
    // PATTERN: /index.php?posts=editForm&id=x
    // CTRL: postsControleur
    // ACTION: editForm
    PostsControleur\editFormAction($connexion, $_GET['id']);
    break;
  case 'edit':
    // MODIFICATION D'UN POST : UPDATE
    // PATTERN: /index.php?posts=edit&id=x
    // CTRL: postsControleur
    // ACTION: edit
    PostsControleur\editAction($connexion, $_GET['id']);
    break;
endswitch;

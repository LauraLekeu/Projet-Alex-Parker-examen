<?php
/*

    ./app/routeur.php

*/

// ROUTE PAR DEFAUT
// PATTERN: /
// CTRL: postsControleur
// ACTION:  indexAction
include_once '../app/controleurs/postsControleur.php';
\App\Controleurs\PostsControleur\indexAction($connexion);

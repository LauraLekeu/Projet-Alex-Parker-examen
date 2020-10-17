<?php
/*

    ./app/routeur.php

*/

if (isset($_GET['posts'])):
  include_once '../app/routeurs/postsRouteur.php';


else:
// ROUTE PAR DEFAUT
// PATTERN: /
// CTRL: postsControleur
// ACTION:  indexAction
include_once '../app/controleurs/postsControleur.php';
\App\Controleurs\PostsControleur\indexAction($connexion);

endif;

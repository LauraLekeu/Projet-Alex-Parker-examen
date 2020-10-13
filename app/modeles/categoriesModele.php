<?php
/*
    ./app/modeles/categoriessModele.php
*/

namespace App\Modeles\CategoriesModele;

function findAll(\PDO $connexion) {
  $sql = "SELECT COUNT(p.id) AS nbPostsId,
                 p.category_id AS postCategorieId,
                 c.name AS categorieName
          FROM posts p
          JOIN categories c ON p.category_id = c.id
          GROUP BY c.id
          ORDER BY name ASC
          LIMIT 6;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

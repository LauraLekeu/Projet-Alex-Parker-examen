<?php
/*

    ./app/modeles/postsModele.php

*/
namespace App\Modeles\PostsModele;

/**
 * [findAll description]
 * @param  PDO   $connexion [description]
 * @return array            [description]
 */
function findAll(\PDO $connexion) :array {
  $sql = "SELECT p.id AS postId,
                 p.title AS postTitle,
                 p.text AS postText,
                 p.created_at AS postDate,
                 p.quote AS postQuote,
                 p.category_id AS postCatagorieId,
                 c.id AS categorieId,
                 c.name AS categorieName,
                 c.created_at AS categorieDate
          FROM posts p
          JOIN categories c ON p.category_id = c.id
          ORDER BY postDate DESC
          LIMIT 10;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

/**
 * [findOneById description]
 * @param  PDO   $connexion [description]
 * @param  int   $id        [description]
 * @return array            [description]
 */
function findOneById(\PDO $connexion, int $id) :array {
  $sql = "SELECT *,
                 p.id AS postId,
                 c.id AS categorieId,
                 p.created_at AS postDate,
                 c.created_at AS categorieDate
          FROM posts p
          JOIN categories c ON p.category_id = c.id
          WHERE p.id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
}

/**
 * [insertOne description]
 * @param  PDO   $connexion [description]
 * @param  array $data      [description]
 * @return int              [description]
 */
function insertOne(\PDO $connexion, array $data) :int {
  $sql = "INSERT INTO posts
          SET title       = :title,
              text        = :text,
              quote       = :quote,
              category_id = :categorie,
              created_at  = NOW();";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':title', $data['title'], \PDO::PARAM_STR);
  $rs->bindValue(':text', $data['text'], \PDO::PARAM_STR);
  $rs->bindValue(':quote', $data['quote'], \PDO::PARAM_STR);
  $rs->bindValue(':categorie', $data['category_id'], \PDO::PARAM_INT);
  $rs->execute();
  return $connexion->lastInsertId();
}

/**
 * [updateOneById description]
 * @param  PDO   $connexion [description]
 * @param  int   $id        [description]
 * @param  array $data      [description]
 * @return bool             [description]
 */
function updateOneById(\PDO $connexion, int $id, array $data) :bool {
  $sql = "UPDATE  posts
          SET title       = :title,
              text        = :text,
              quote       = :quote,
              category_id = :categorie,
              created_at  = NOW()
          WHERE id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':title', $data['title'], \PDO::PARAM_STR);
  $rs->bindValue(':text', $data['text'], \PDO::PARAM_STR);
  $rs->bindValue(':quote', $data['quote'], \PDO::PARAM_STR);
  $rs->bindValue(':categorie', $data['category_id'], \PDO::PARAM_INT);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  return $rs->execute();
}

/**
 * [deleteOneById description]
 * @param  PDO  $connexion [description]
 * @param  int  $id        [description]
 * @return bool            [description]
 */
function deleteOneById(\PDO $connexion, int $id) :bool {
  $sql = "DELETE FROM posts
          WHERE id = :id;";
$rs = $connexion->prepare($sql);
$rs->bindValue(':id', $id, \PDO::PARAM_INT);
return $rs->execute();
}

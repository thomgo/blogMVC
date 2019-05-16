<?php

// Get the connexion to the database
require_once('database/dbconnection.php');

// Select all the articles with their images and returns an associative array
function getAllArticles() {
  $response = getPDO()->prepare('SELECT * FROM Articles a INNER JOIN Images i ON i.id = a.img_id');
  $response->execute();
  return $response->fetchAll(PDO::FETCH_ASSOC);
}

// Select only one article with its image and returns an associative array
function getSingleArticle($articleId) {
  $response = getPDO()->prepare('SELECT * FROM Articles a INNER JOIN Images i ON i.id = a.img_id WHERE a.a_id = ?');
  $response->execute([$articleId]);
  return $response->fetch(PDO::FETCH_ASSOC);
}

// Insert one article with its image in the article table
// Check first if there is a file and insert it in images table
// Then gets the id of the inserted image and insert the article with the image id
function insertArticle($file, $article) {
  $bd = getPDO();
  // If there is a file and no error while uploading
  if($file["error"]== 0) {
    //Insert the file information in the table
    $response = $bd->prepare('INSERT INTO Images(name, extension, img_path, size) VALUES(:name, :extension, :img_path, :size)');
    $response->execute(array(
      'name' => $file["name"] ,
      'extension' => $file["type"],
      'img_path'=> "img/",
      'size' => $file["size"]
    ));
    //Move the file on the server in order to access it when necessary
    move_uploaded_file($file['tmp_name'], '../../img/' . $file['name']);
  }
  // Get the id of the file with the last inserted id in the images table
  $response = $bd->prepare('SELECT id FROM Images WHERE id=LAST_INSERT_ID()');
  $response->execute();
  $imgId = $response->fetch();

  // Insert the article with its image id
  $response = $bd->prepare('INSERT INTO Articles(title, catcher, img_id, description) VALUES(:title, :catcher, :img_id, :description)');
  $response->execute(array(
    'title' => $article['title'] ,
    'catcher' => $article['catcher'],
    'img_id'=> $imgId["id"],
    'description' => $article['description']
  ));
}

 ?>

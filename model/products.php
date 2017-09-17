<?php

require_once('database/dbconnection.php');

function getAllArticles() {
  $response = getPDO()->prepare('SELECT * FROM Articles a INNER JOIN Images i ON i.id = a.img_id');
  $response->execute();
  return $response->fetchAll(PDO::FETCH_ASSOC);
}

function getSingleArticle($productiId) {
  $response = getPDO()->prepare('SELECT * FROM Articles a INNER JOIN Images i ON i.id = a.img_id WHERE a.a_id = ' . $productiId);
  $response->execute();
  return $response->fetch(PDO::FETCH_ASSOC);
}

function insertArticle() {
  $bd = getPDO();

  if($_FILES["articleImage"]["error"]== 0) {
    $response = $bd->prepare('INSERT INTO Images(name, extension, img_path, size) VALUES(:name, :extension, :img_path, :size)');
    $response->execute(array(
      'name' => $_FILES["articleImage"]["name"] ,
      'extension' => $_FILES["articleImage"]["type"],
      'img_path'=> "img/",
      'size' => $_FILES["articleImage"]["size"]
    ));
    move_uploaded_file($_FILES['articleImage']['tmp_name'], '../../img/' . $_FILES['articleImage']['name']);
  }
  $response = $bd->prepare('SELECT id FROM Images WHERE id=LAST_INSERT_ID()');
  $response->execute();
  $imgId = $response->fetch();

  var_dump($imgId);

  $response = $bd->prepare('INSERT INTO Articles(title, catcher, img_id, description) VALUES(:title, :catcher, :img_id, :description)');
  $response->execute(array(
    'title' => $_POST['title'] ,
    'catcher' => $_POST['catcher'],
    'img_id'=> $imgId["id"],
    'description' => $_POST['description']
  ));
}

 ?>

<?php
require_once('dbconnection.php');

if(isset($_POST) || isset($_FILES)) {
  if($_FILES["articleImage"]["error"]== 0) {
    $response = $bdd->prepare('INSERT INTO Images(name, extension, img_path, size) VALUES(:name, :extension, :img_path, :size)');
    $response->execute(array(
      'name' => $_FILES["articleImage"]["name"] ,
      'extension' => $_FILES["articleImage"]["type"],
      'img_path'=> "img/",
      'size' => $_FILES["articleImage"]["size"]
    ));
    move_uploaded_file($_FILES['articleImage']['tmp_name'], '../img/' . $_FILES['articleImage']['name']);
  }
  $response = $bdd->prepare('SELECT id FROM Images WHERE id=LAST_INSERT_ID()');
  $response->execute();
  $imgId = $response->fetch();

  $response = $bdd->prepare('INSERT INTO Articles(title, catcher, img_id, description) VALUES(:title, :catcher, :img_id, :description)');
  $response->execute(array(
    'title' => $_POST['title'] ,
    'catcher' => $_POST['catcher'],
    'img_id'=> $imgId["id"],
    'description' => $_POST['description']
  ));

  header("Location: ../admin/dashboard.php");
}

// $req = $bdd->prepare('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)');
//
// $req->execute(array(
//
//     'nom' => $nom,
//
//     'possesseur' => $possesseur,
//
//     'console' => $console,
//
//     'prix' => $prix,
//
//     'nbre_joueurs_max' => $nbre_joueurs_max,
//
//     'commentaires' => $commentaires
//
//     ));


 ?>

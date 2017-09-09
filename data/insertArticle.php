<?php
require_once('dbconnection.php');

if(isset($_POST)) {
  $response = $bdd->prepare('INSERT INTO Articles(title, catcher, img_id, description) VALUES(:title, :catcher, :img_id, :description)');
  $response->execute(array(
    'title' => $_POST['title'] ,
    'catcher' => $_POST['catcher'],
    'img_id'=> 1,
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

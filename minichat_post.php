
<?php

// Connexion à la bdd
include 'bdd.php';


// Récupérer les valeurs des input
$pseudoPost = htmlspecialchars($_POST['pseudo']);
$messagePost = htmlspecialchars($_POST['message']);

// Vérifie q peuso & message soit rempli
if (isset($pseudoPost) && !empty($pseudoPost)) {
  if (isset($messagePost) && !empty($messagePost)) {

    // Insère les infos du form ds la bdd
    $req = $bdd->prepare('INSERT INTO minichat (pseudo, message) VALUES (:pseudo, :message)');
    $req->execute(array(
      'pseudo' => $pseudoPost,
      'message' => $messagePost
    ));

    $req->closeCursor();

  } else {
    echo 'Il n\'y a pas de message !!';
  }
} else {
  echo 'Il n\'y a pas de pseudo !!';
}

// Redirige vers minichat.php
header('Location: minichat.php');

?>

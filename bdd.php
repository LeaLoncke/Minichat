<?php

try {
  $bdd = new PDO('mysql:host=localhost;dbname=test_OC;charset=utf8', '', '');
} catch (Exception $e) {
  die ('Erreur: ' . $e->getMessage());
}

?>

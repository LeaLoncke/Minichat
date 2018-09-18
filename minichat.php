
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Minichat</title>
  </head>
  <body>

    <form action="minichat_post.php" method="post">
      <input type="text" name="pseudo" placeholder="Pseudo"> <br />
      <input type="text" name="message" placeholder="Message"> <br />
      <input type="submit" value="Envoyer">
    </form>

    <?php
      // Connexion à la bdd
      include 'bdd.php';

      // Récupère les infos dans la bdd
      $reponse = $bdd->query('SELECT pseudo, message FROM minichat ORDER BY id LIMIT 0, 10');

      // Affiche les données
      while ($donnees = $reponse->fetch()) {
        echo $donnees['pseudo'] . ': ' . $donnees['message'] . '<br />';
      }

      $reponse->closeCursor();
    ?>


  </body>
</html>

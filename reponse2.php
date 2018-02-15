<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Contact Hackers Poulette</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <section class="logo">
      <img src="logo.png" alt="logo Hackers Poulette"/>
    </section>
    <?php
      $genre=$_POST["genre"];
      $nom=$_POST["nom"];
      $prenom=$_POST["prenom"];
      $pays=$_POST["pays"];
      $email=$_POST["email"];
      $sujet=$_POST["sujet"];
      $message=$_POST["mainmessage"];
     ?>

     <p class="merci"> L'équipe technique de <strong>Hackers Poulette</strong>
       vous remercie pour votre message <?php echo $genre, $nom ?> <br>  Nous vous répondrons dans les plus brefs délais. </p>
     <h2> Vos informations: </h2>
     <div class="confirmation">
     <?php echo "<strong> Nom, prénom: </strong> $nom, $prenom";?> <br/>
     <?php echo "<strong> Pays:</strong> $pays"; ?> <br/>
     <?php echo "<strong> Adresse email: </strong> $email"; ?> <br/>
     <?php echo "<strong> Sujet de votre demande: </strong> $sujet"; ?> <br/>
     <?php echo "<strong> Votre message: </strong> $message"; ?> <br/>
   </div>
    <form action="contact.php" method="post">
      <div id="retour">
        <input type="submit" name="submit" value="Retour au formulaire"/>
      </div>
    </form>
   </body>
</html>

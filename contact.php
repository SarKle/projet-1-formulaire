<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Contact Hackers Poulette</title>
  </head>
  <body>
    <img src="logo.png" alt="logo Hackers Poulette"/>
      <h1> CONTACTEZ NOTRE SUPPORT TECHNIQUE </h1>
      <h2> Contactez-nous à tout moment et nous vous répondrons le plus rapidement possible.</h2>
      <form action="contact.php" method="post">
        <fieldset>
          <legend> Envoyer un message au service technique </legend>
            <label for "genre"> GENRE*:</label>
              <input type="radio" name="genre" value="Femme">Femme
              <input type="radio" name="genre" value="Homme">Homme
            <label for"nom"> NOM*: </label> <input type="text" value="Nom" required/>
            <label for"prenom"> PRENOM*: </label> <input type="text" value="Prénom" required/>
            <label for "pays"> PAYS* </label> <input type="text" value="Pays" required/>
            <label for "adresse email"> EMAIL*: </label> <input type="email" value="nom@mail.com" required/>
              <!-- Vérification antispam honeypot -->
              <input id="test_email" name="email" size="25" type="text" value="test_email" />
            <label for "sujet"> Sujet*: </label>
              <select name="sujet" size="1">
                <option> Info produit </option>
                <option> Problème de montage </option>
                <option> Activation garantie </option>
                <option> La carte de fonctionne pas </option>
                <option> Autre (Veuillez préciser dans votre message) </option>
              </select>
            <label for="message"> Message*:</label>
              <textarea name="message" value="Votre message" rows="20" cols="80"> Votre message </textarea>
            <input type="submit" name="submit" value="Envoyer"/> * les champs suivis d'un astérisque sont obligatoires
        </fieldset>
      </form>

  </body>
</html>

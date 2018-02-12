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
      <div id="contact">
        <h1> CONTACTEZ NOTRE SUPPORT TECHNIQUE </h1>
        <h2> Contactez-nous à tout moment <br>
          et nous vous répondrons le plus rapidement possible.</h2>
      </div>
      <form action="contact.php" method="post">
        <fieldset>
          <legend> Envoyer un message au service technique </legend>
            <section class="info">
              <label for "genre"> GENRE*:</label>
                <input type="radio" name="genre" value="Femme">Femme
                <input type="radio" name="genre" value="Homme">Homme <br/>
              <div class="nom">
                <label for"nom"> NOM*: </label> <input type="text" required/> <br/>
              </div>
              <div class="prenom">
                <label for"prenom"> PRENOM*: </label> <input type="text" required/> <br/>
              </div>
              <div class="pays">
                <label for "pays"> PAYS* </label> <input type="text" vrequired/> <br/>
              </div>
              <div class="email">
                <label for "adresse email"> EMAIL*: </label> <input type="email" required/> <br/>
              </div>
              <!-- Vérification antispam honeypot -->
              <input id="test_email" name="email" size="30" type="text" value="test_email"/>
            </section>
            <section class="text">
              <div id="sujet">
              <label for "sujet"> Sujet*: </label>
                <select name="sujet" size="1">
                  <option> Info produit </option>
                  <option> Problème de montage </option>
                  <option> Activation garantie </option>
                  <option> La carte de fonctionne pas </option>
                  <option> Autre (Veuillez préciser dans votre message) </option> <br/>
                </div>
                </select>
                <br><label for="message"> Message*:</label> <br/>
                  <textarea name="message" value="Votre message" rows="18" cols="80"> Votre message </textarea> <br/>
                    <input type="submit" name="submit" value="Envoyer" class="submit"/>
                    <p> * Les champs suivis d'un astérisque sont obligatoires</p>
            </section>
          </fieldset>
        </form>
          <footer>
            Copyright © 2018 L&S Developement. All rights reserved.
          </footer>
  </body>
</html>

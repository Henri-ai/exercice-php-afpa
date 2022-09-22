<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Jarditou Contact</title>

<link rel="stylesheet" href="style.css">

</head>

<header>
<img src="image/jarditou_logo.jpg" alt="logojarditou" title="logojarditou" height="100" width="300">
<p>La qualité depuis 70 ans</p>
</header>

<ul>
    <li><a href="index.html" title=Accueil>Accueil</a></li>
    <li><a href="tableau.html" title=Tableau>Tableau</a></li>
    <li><a href="contact.html" title=Contact>Contact</a> </li>
</ul>

<img src="image/promotion.jpg" alt="imagepromotion" title="imagepromotion">

<h1>Contact</h1>

<hr>

<p>* Ces zones sont obligatoires</p>


<form action= "http://127.0.0.1:8080/monscript.php" method="POST" id="formulaire_contact">
        <fieldset><legend>Vos coordonnées</legend>

                <label for="nom">Votre nom*: </label><input type="text" name="nom" id="nom">
                                                        <br>
                                                                <small id="erreurnom"></small>
<br>
<label for="prénom">Votre prénom*: </label><input type="text" name="prénom" id="prénom">
                                                    <br>
                                                <small id="erreurprenom"></small>
<br>
<br>
                                <label for="sexe">Sexe*: </label><input type="radio" name="sexe" title="indiquez sexe" id="sexe1" value="Féminin">Féminin
                                            <input type="radio" name="sexe" id=sexe2 value="Masculin">Masculin
<br>
                                                                            <small id="erreursexe"></small>

<br>
<br>
<label for="date">Date de naissance*: </label><input type="date" name="ddn" id="date">
<br>
                                <small id="erreurdate"></small>
<br>
                                            <label for="codepostal">Code postal*: </label><input type="text" name="codepostal" id="codepostal">
<br>
                                                                                <small id="erreurcode"></small>
<br> 
                            <label for="adresse">Adresse: </label><input type="text" name="adresse" id="adresse">
<br>
                                        <label for="ville">Ville: </label><input type="text" name="ville" id="ville">
<br>
            <label for="email">Email*: </label><input type="text" placeholder="dave.loper@afpa.fr" name="email" id="email">
<br>
                                                            <small id="erreurmail"></small>
</fieldset>
<br>
<fieldset><legend>Votre demande</legend>
    
    <label for="sujet">Sujet*: </label>
    <select type="select" name="sujet" id=sujet size="1" >
        <option value="" selected>Veuillez séléctionner un sujet</option>
        <option value="Mes commandes">Mes commandes</option>
        <option value="Question sur un produit">Question sur un produit</option>
        <option value="Réclamation">Réclamation</option>
        <option value="Autres">Autres</option>
</select>
<br>
<small id="erreursujet"></small>
<br><br>
<label for="votrequestion">Votre question*: </label>
<textarea name="votrequestion" id="votrequestion"></textarea>
<br>
<small id="erreurquestion"></small>
    </fieldset>
<br>

<input type="checkbox" name="accepte" id="accepte" value="accepte">*J'accepte le traitement informatique de ce formulaire 
<br>
<small id="erreuraccepte"></small>
    <br>
    
<br>
    <input type="submit" value="Envoyer">
    <input type="reset" value="Annuler" id="reset"> 

</form>
<hr>




<footer>

<ul> <li><a href="index.HTML" title="Mention légales">Mentions légales</a></li>
<li><a href="index.HTML" title="Horaires">Horaires</a></li>
<li><a href="index.HTML" title="Plan du site">Plan du site</a></li></ul>

</footer>
<script src="formulaire.js"></script>
</body>

</html>
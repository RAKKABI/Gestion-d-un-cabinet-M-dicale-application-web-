<?php
//connexion à la base de données
$connexion = mysqli_connect("localhost", "root", "", "hospital");

//récupération de l'ID du patient à partir de l'URL
$cin = $_GET['cin'];

//requête pour récupérer les données du patient correspondant à l'ID
$requete = "SELECT * FROM tablepatient WHERE cin = " . $cin;
$resultat = mysqli_query($connexion, $requete);
$ligne = mysqli_fetch_assoc($resultat);

//affichage des données dans un formulaire HTML
echo "<form>";
echo "<label>Nom :</label>";
echo "<input type='text' name='nom' value='" . $ligne['name'] . "'><br>";
echo "<label>Prénom :</label>";
echo "<input type='text' name='prenom' value='" . $ligne['lastname'] . "'><br>";
echo "<label>Adresse :</label>";
echo "<input type='text' name='adresse' value='" . $ligne['adress'] . "'><br>";
echo "<label>Téléphone :</label>";
echo "<input type='text' name='telephone' value='" . $ligne['phone'] . "'><br>";
echo "</form>";

//fermeture de la connexion à la base de données
mysqli_close($connexion);

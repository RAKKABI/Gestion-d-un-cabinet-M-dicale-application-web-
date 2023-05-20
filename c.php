<html>
<head>

</head>

<body>
    

<form method="post" >
  <label for="cin">Entrez votre code CIN :</label>
  <input type="text" name="cin" id="cin" required>
  <input type="submit" value="Afficher les rendez-vous">
    </form>
<?php
// Connexion à la base de données
$dbh = new PDO('mysql:host=localhost;dbname=hospital', 'root', '');

// Vérification du code CIN du patient
if (isset($_POST['cin'])) {
  $cin = $_POST['cin'];
  $stmt = $dbh->prepare('SELECT * FROM rendezvous WHERE cin = :cin');
  $stmt->bindParam(':cin', $cin);
  $stmt->execute();
  $patient = $stmt->fetch();
}

if (!$patient<0) {
  // Le patient n'a pas été trouvé dans la base de données
  echo 'Code CIN incorrect.';
} else {
  // Affichage des rendez-vous du patient
  $stmt = $dbh->prepare('SELECT * FROM rendezvous WHERE cin = :cin');
  $stmt->bindParam(':cin', $cin);
  $stmt->execute();
  $rendezVous = $stmt->fetchAll();

  if (!$rendezVous) {
    echo 'Le patient n\'a aucun rendez-vous.';
  } else {
    echo '<ul>';
    foreach ($rendezVous as $rdv) {
      echo '<li>' . $rdv['date_rdv'] . ' à ' . $rdv['heur'] . ' <a href="?cin=' . $cin . '&date_rdv=' . $rdv['date_rdv'] . '&heur=' . $rdv['heur'] . '">Annuler le rendez-vous</a></li>';
    }
    echo '</ul>';
  }

  // Annulation d'un rendez-vous
  if (isset($_GET['date_rdv']) && isset($_GET['heur'])) {
    $date = $_GET['date'];
    $heure = $_GET['heure'];
    $stmt = $dbh->prepare('DELETE FROM rendezvous WHERE cin = :cin AND date_rdv = :date AND heur = :heur');
    $stmt->bindParam(':cin', $cin);
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':heure', $heure);
    $stmt->execute();

    echo 'Le rendez-vous du ' . $date . ' à ' . $heure . ' a été annulé avec succès.';
  }
}
?>
</body>
</html>
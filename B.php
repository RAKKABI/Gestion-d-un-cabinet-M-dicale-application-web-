<?php
// Connexion à la base de données
$dbh = new PDO('mysql:host=localhost;dbname=hospital', 'root', '');

// Vérification du code CIN du patient
$cin = $_POST['cin'];
$stmt = $dbh->prepare('SELECT * FROM rendezvous WHERE cin = :cin');
$stmt->bindParam(':cin', $cin);
$stmt->execute();
$patient = $stmt->fetch();

if (!$patient) {
  // Le patient n'a pas été trouvé dans la base de données
  echo 'Code CIN incorrect.';
} else {
  // Suppression du rendez-vous
  $date = $_GET['date_rdv'];
  $heure = $_GET['heur'];
  $stmt = $dbh->prepare('DELETE FROM rendezvous WHERE cin = :cin AND date = :date AND heure = :heure');
  $stmt->bindParam(':cin', $cin);
  $stmt->bindParam(':date', $date);
  $stmt->bindParam(':heure', $heure);
  $stmt->execute();
  
  echo 'Le rendez-vous du ' . $date . ' à ' . $heure . ' a été annulé avec succès.';
}
?>

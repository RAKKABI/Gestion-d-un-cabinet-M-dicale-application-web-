<!-- <!DOCTYPE html>
<html>
    <head>
        <style>
            .appointments {
    background-color: #f9f9f9;
    padding: 20px;
}

.appointments h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.appointments ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.appointments li {
    border-bottom: 1px solid #ccc;
    margin-bottom: 10px;
    padding-bottom: 10px;
}

.appointments li:last-child {
    border-bottom: none;
}

.appointment-time {
    font-weight: bold;
}

.appointment-date {
    margin-left: 10px;
}

.appointment-doctor {
    margin-left: 10px;
}

.cancel-appointment {
    display: inline-block;
    background-color: #f44336;
    color: #fff;
    padding: 5px 10px;
    border-radius: 5px;
    text-decoration: none;
    margin-left: 10px;
}
form {
  display: flex;
  flex-direction: column;
  align-items: center;
}

label {
  font-size: 1.2rem;
  font-weight: bold;
  margin-bottom: 0.5rem;
}

input {
  padding: 0.5rem;
  border: 2px solid #ccc;
  border-radius: 5px;
  font-size: 1rem;
  margin-bottom: 1rem;
  width: 100%;
}

button[type="submit"] {
  background-color: #007bff;
  color: #fff;
  padding: 0.5rem 1rem;
  border: none;
  border-radius: 5px;
  font-size: 1rem;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #0069d9;
}

        </style>
    </head>
    <body>
    <form method="POST" action="login.php">
    <label for="cin">Code CIN :</label>
    <input type="text" id="cin" name="cin" required>
    <button type="submit">Se connecter</button>
</form>

  

    <div class="appointments">
    <h2>Mes rendez-vous</h2>
    <ul>
        <li>
            <span class="appointment-time">10:00</span>
            <span class="appointment-date">Mercredi 21 mars</span>
            <span class="appointment-doctor">Dr. Dupont</span>
            <a href="cancel_appointment.php?id=1" class="cancel-appointment">Annuler le rendez-vous</a>
        </li>
        <li>
            <span class="appointment-time">14:00</span>
            <span class="appointment-date">Jeudi 22 mars</span>
            <span class="appointment-doctor">Dr. Martin</span>
            <a href="cancel_appointment.php?id=2" class="cancel-appointment">Annuler le rendez-vous</a>
        </li>
    </ul>
</div>
 <?php
// session_start();

// if (!isset($_SESSION['user_id'])) {
//     header("Location: login.php");
//     exit();
// }

// if (isset($_GET['id'])) {
//     $appointment_id = $_GET['id'];

//     // Code pour supprimer le rendez-vous avec l'ID $appointment_id dans la base de données

//     header("Location: appointments.php");
//     exit();
// }
?> 
    </body>
</html> -->
<!DOCTYPE html>
<html>
    <head>
        <style>
            form {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 50px;
}
.cancel-appointment {
    display: inline-block;
    background-color: #f44336;
    color: #fff;
    padding: 5px 10px;
    border-radius: 5px;
    text-decoration: none;
    margin-left: 10px;
}

label {
  font-size: 20px;
  margin-bottom: 10px;
}



input[type="text"] {
  width: 300px;
  height: 40px;
  font-size: 20px;
  padding: 10px;
  margin-bottom: 20px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

input[type="submit"] {
  width: 200px;
  height: 40px;
  font-size: 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #0062cc;
}

        </style>
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

// Récupération du code CIN saisi par le patient
 $cin = $_POST['cin'];

// Requête pour récupérer les rendez-vous correspondants au code CIN
$stmt = $dbh->prepare('SELECT * FROM rendezvous WHERE cin = :cin');
$stmt->bindParam(':cin', $cin);
$stmt->execute();
$rendezvous = $stmt->fetchAll();

// Affichage des rendez-vous
foreach ($rendezvous as $rv) {
  echo 'Date du rendez-vous : ' . $rv['date_rdv'] . '<br>';
  echo 'Heure du rendez-vous : ' . $rv['heur'] . '<br>';
  echo"<a href='B.php' class='cancel-appointment'>Annuler le rendez-vous</a>";
  echo '<hr>';

}
// if
// echo '<script>
// alert(bien supprimer);
//       </script>';

?>
 

Ce code récupère le code CIN saisi par le patient à partir de la variable $_POST['cin'], puis exécute une requête SQL pour récupérer tous les rendez-vous correspondants à ce code CIN à partir de la base de données. Les rendez-vous sont ensuite affichés à l'écran à l'aide d'une boucle foreach. Bien entendu, ce code doit être adapté en fonction de la structure de votre propre base de données et de vos besoins spécifiques.






    </body>
</html>





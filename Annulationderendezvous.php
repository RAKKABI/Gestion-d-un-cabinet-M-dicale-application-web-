<!DOCTYPE html>
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
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if (isset($_GET['id'])) {
    $appointment_id = $_GET['id'];

    // Code pour supprimer le rendez-vous avec l'ID $appointment_id dans la base de données

    header("Location: appointments.php");
    exit();
}
?>
    </body>
</html>
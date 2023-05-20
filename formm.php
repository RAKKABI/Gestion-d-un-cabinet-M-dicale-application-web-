<?php

$conn = mysqli_connect('localhost','root','','hospital') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Complet cabinet</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/stylee.css">
   <style>
      @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap');
      *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}
header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 5%;
    padding-bottom: 0px;
}
header .logo {
    font-size: 25px;    


}
header .logo span {
    color: #93d6d0;
}
header .menu a {
    position: relative;
    margin: 0 10px;
    text-decoration: 0;
    color: #999;
    transition: 0.5s;
    font-size:15px;
}
header .menu a:before {
    position: absolute;
    top: -2px;
    content: "";
    width: 0;
    height: 2px;
    background-color: #93d6d0;
    transition: 0.5s;
}
header .menu a:hover:before {
    width: 100%;
}
header .menu a:hover {
    color: #000;
}
p {
  margin-top: 0;
  margin-bottom: 1rem;
  font-size: 12px;
}
.home {
    height: calc(100vh - 55px);
    background: url("mag.jpg");
    background-position: center;
    background-size: cover;
    display: flex;
    align-items: flex-end;
    padding-left: 5%;
    padding-bottom: 50px;
}
.home-infos {
    background-color: #fff;
    border-radius: 6px;
    padding: 50px;
    animation: anime 2s linear;
}

/* animation home-infos */

@keyframes anime {
    from{
        transform: translateX(-600px);
    }
}
.homme-infos h1 {
    font-size: 30px;
    text-transform: uppercase;
    letter-spacing: 1px;
}
.homme-infos p {
    margin-top: 10px;
    margin-bottom: 20px;
}
.homme-infos a {
    text-decoration: 0;
    border: 2px solid #93d6d0;
    color: #93d6d0;
    border-radius: 6px;
    padding: 5px 20px;
    margin-top: 5px;
    font-weight: 400;
    text-transform: capitalize;
    transition: 0.5s;
}
.homme-infos a:hover {
    background-color: #93d6d0;
    color: #fff;
    letter-spacing: 1px;
}
#nav img{
   height: 28px;
   width: 25px;
}
#nav p{
   margin-bottom:12px;

}
header .menu a {
    position: relative;
    margin: 0 10px;
    text-decoration: 0;
    color: #999;
    transition: 0.5s;
}
header .menu a:before {
    position: absolute;
    top: -2px;
    content: "";
    width: 0;
    height: 2px;
    background-color: #93d6d0;
    transition: 0.5s;
}
header .menu a:hover:before {
    width: 100%;
}
header .menu a:hover {
    color: #000;
}
a#spécial{
   font-size:10px;
}
a {
  color: #007bff;
  text-decoration: none;
  font-size:10px;
  background-color: transparent;
}
   </style>

</head>
<body>
   
<header>
<nav id='nav'>
          <img src="logo.png">
          <p>Familydoc</p>
        </nav>
        
        <ul class="menu">
            
           
            <a href="#">Contact</a>
            <a href="login.php">Medecin</a>
            <a href="login.php">Admin</a>
            <a href="rndezvous.php">Prendre_rendez_vous</a>
            <a href="A.php">Annulation de rdv</a>
        </ul>
    </header>
    <section class="home">
        <div class="home-infos">
            <h1>Voir en bas notre service</h1>
            <p>Notre cabinet est fait pour votre besoins</p>
            <a  id="spécial" href="#">médecine générale</a>
        </div>
    </section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading">Notre service</h1>

   <div class="box-container container">

      <div class="box">
         <img src="examinmédical.jpg" alt="">
         <h3>examens gratuits</h3>
         <p>Le cabinet il-même est une entreprise très prospère. À tous.</p>
      </div>

      <div class="box">
         <img src="medecin expert.jpg" alt="">
         <h3>médecin expert</h3>
         <p> Le cabinet il-même est une entreprise très prospère. À tous.</p>
      </div>

      <div class="box">
         <img src="insttalation de lit.jpg" alt="">
         <h3>installation de lit</h3>
         <p>Le cabinet il-même est une entreprise très prospère. À tous.</p>
      </div>

      <div class="box">
         <img src="soin.jpg" alt="">
         <h3>soin total</h3>
         <p>notre cabinet médicale il même est un cabinet très prospère. À tous.</p>
      </div>

      <div class="box">
         <img src="respect.jpg" alt="">
         <h3>Respecter les patients</h3>
         <p>notre cabinet médicale il même est un cabinet très prospère. À tous.</p>
      </div>

      <div class="box">
         <img src="scanner.png" alt="">
         <h3>Vérifier les scanners</h3>
         <p>notre cabinet médicale il même est un cabinet très prospère. À tous.</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- process section starts  -->

<section class="process">

   <h1 class="heading">processus de travail</h1>

   <div class="box-container container">

      <div class="box">
         <img src="kalb.jpg" alt="">
         <h3>Les maladies cardiaques</h3>
         <p>Les maladies cardiovasculaires constituent un ensemble de troubles affectant le cœur et les vaisseaux sanguins, qui comprend</p>
      </div>

      <div class="box">
         <img src="ria.jpg" alt="">
         <h3>maladies pulmonaires</h3>
         <p>Parmi les plus courantes, on retrouve l'asthme, la maladie pulmonaire obstructive chronique (MPOC), </p>
      </div>

      <div class="box">
         <img src="maltete.jpg" alt="">
         <h3>mal de tête</h3>
         <p> le mal de tête correspond à toute plainte douloureuse centrée sur la région crânienne</p>
      </div>

   </div>

</section>

<!-- process section ends -->

<!-- reviews section starts  -->

<section class="reviews" id="reviews">

   <h1 class="heading"> client satisfait </h1>

   <div class="box-container container">

      <div class="box">
         <img src="image2/pic-1.png" alt="">
         <p>Bonjour, c'est vraiment pénible à suivre. eux, non ? Personne n'est opposé aux plaisirs de cela, n'est-ce pas?</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ahmed zz</h3>
         <span>client satisfait</span>
      </div>

      <div class="box">
         <img src="image2/pic-2.png" alt="">
         <p>Bonjour, c'est vraiment pénible à suivre. eux, non ? Personne n'est opposé aux plaisirs de cela, n'est-ce pas?</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Salma saiy</h3>
         <span>client satisfait</span>
      </div>

      <div class="box">
         <img src="image2/pic-3.png" alt="">
         <p>Bonjour, c'est vraiment pénible à suivre. eux, non ? Personne n'est opposé aux plaisirs de cela, n'est-ce pas?</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Karim malih</h3>
         <span>client satisfait</span>
      </div>

   </div>

</section>

<!-- reviews section ends -->

<!-- contact section starts  -->


<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>numéro de téléphone</h3>
         <p>+121-656-7890</p>
         <p>+121-722-3333</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>notre adresse</h3>
         <p>EL jadida rue:Salam</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>Horaires d'ouvertures</h3>
         <p>07:00 à 19:00</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>adresse e-mail</h3>
         <p>nabila@gmail.com</p>
         <p>nabila@gmail.com</p>
      </div>

   </div>

   <div class="credit"> <span>rakkabi nabila</span>  </div>

</section>

<!-- footer section ends -->










<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
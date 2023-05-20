<!doctype html>
<html lang="en">
 <head> 
  <meta charset="utf-8"> 
  <title>Page Title</title> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Page </title>
     <meta charset="UTF-8">
   
     <style type="text/css"> 
   
.contact form{
   border-radius: .5rem;
   background-color: var(--light-bg);
   padding:0.5rem;
   margin:0 auto;
   max-width: 47rem;
}

.contact form .message{
   margin-bottom: 2rem;
   border-radius: .5rem;
   background-color: var(--blue);
   padding:1.2rem 1rem;
   font-size: 1rem;
   color:var(--white);
   text-align: center;
}

.contact form .box{
  width: 97%;
    margin-top: 1rem;
    margin-bottom: 1rem;
    border-radius: 0.5rem;
    background-color: var(--white);
    padding: 0.8rem 0.4rem;
    font-size:  0.7rem;
    color: var(--black);
    text-transform: none;
}

.contact form span{
   font-size: 1rem;
   color:var(--black);
}
.link-btn:hover {
  background-color: var(--black);
  color: var(--white);
}
.link-btn {
  display: inline-block;
  padding: 1rem 3rem;
  border-radius: .5rem;
  background-color: var(--blue);
  cursor: pointer;
  font-size: 0.7rem;
  color: var(--white);
}
* {
  font-family: 'Poppins', sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  border: none;
  text-decoration: none !important;
  text-transform: capitalize;
}
:root {
  --blue: #00b8b8;
  --black: #333;
  --white: #fff;
  --light-color: #666;
  --light-bg: #eee;
  --border: .2rem solid rgba(0,0,0,.1);
  --box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
}

.contact form input,textarea{
  margin: 3px 0;
  padding: 4px;
  border: 0px solid #999;
  resize: none;
  outline: 0;
  }
  h1{
    text-align:center;
  }

  .contact form .box #span{
    width: 97%;
    margin-top: 1rem;
    margin-bottom: 1rem;
    border-radius: 0.5rem;
    background-color: var(--white);
    padding: 0.8rem 0.4rem;
    font-size: 0.7rem;
    color: var(--black);
    text-transform: none;
}

.contact form input, textarea #span {
    margin: 3px 0;
    padding: 4px;
    border: 0px solid #999;
    resize: none;
    outline: 0;
}
.contact form {
  border-radius: .5rem;
  background-color: var(--light-bg);
  padding: 0.5rem;
  margin: 0 auto;
  max-width: 35rem;
}
label{
  margin :0;
}



      
   





  </style>
 </head> 
 <body>
  <?php
require('./connection.php');
if (isset($_POST['SignUP_btn'])){
  $name=$_POST['name'];
  $lastname=$_POST['Lastname'];
  $Cin=$_POST['Cin'];
  $Adress=$_POST['Adress'];
  $Phone=$_POST['Phone'];
  $Email=$_POST['email'];
 
  if ((!empty($_POST['name']))&&(!empty($_POST['Lastname']))&&(!empty($_POST['Cin']))&&(!empty($_POST['email'])) &&(!empty($_POST['Adress']))&&(!empty($_POST['Phone']))){
    
      $p=crud::connect()->prepare('INSERT INTO tablepatient(cin,name,lastname,adress,phone,email,traitement,date_traitement,observation,peration,date_visite,poix)VALUES(:c,:n,:l,:a,:p,:e,null,0,null,null,0,0)');
    $p->bindVALUE(':c',$Cin);
    $p->bindVALUE(':n',$name);
    $p->bindVALUE(':l',$lastname);
    $p->bindVALUE(':a',$Adress);
    $p->bindVALUE(':p',$Phone);
    $p->bindVALUE(':e',$Email);

    $p->execute();
    echo'<script>
    alert('.'"Successfully"'.')
    
    </script>';
    }else{
      echo'<script>
      alert('.'"Remplir tout les champs"'.')
      
      </script>';
    }

    
  }


  ?>
  

  
 
   
   
<section class="contact" id="contact">

    <h1 class="heading">Ajouter patient</h1>
 
    <form action="" method="post">
       
       <label> name :</label>
       <input type="text" name="name" placeholder="enter your name" class="box" required>
       <label> lastname :</label>
       <input type="text" name="Lastname" placeholder="enter your lastname" class="box" required><br>
       <label > cin :</label>
       <input type="text" name="Cin" placeholder="enter your cin" class="box" required>
       <label> Adress :</label>
       <input type="text" name="Adress" placeholder="enter your Adress" class="box" required>
       <label> Phone :</label>
       <input type="text" name="Phone" placeholder="enter your Phone" class="box" required>
       <label> email :</label>
       <input type="email" name="email" placeholder="enter your email" class="box" required>
      
      
       <input type="submit" value=" Enregistrer" name="SignUP_btn" class="link-btn">
    </form>  
 
 </section>
  </div>
</body>
</html>

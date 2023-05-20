
  <!doctype html>
  <html lang="en">
   <head> 
    <meta charset="utf-8"> 
    <title>Page Title</title> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <style>
      * {
        margin: -6px;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}
      
        input[type="submit"] {
       background: transparent;
       outline: none;
       ber: 1px solid white;
    border-radius: 20px;
    height: 40px;
    width: 93%;
    color: white;
    font-size: 17px;
    text-align: center;
    margin-bottom: 46px;
    margin-top: 11px;
    margin-left: 10px;
      }
      input[type="submit"]:hover {
       background-color: white;
       color: black;
      }
      input{
       border: none;
       border-bottom: 1px solid #fff;
       background: transparent;
       outline: none;
       height: 40px;
       color: black;
       font-size: 14px;
       width: 95%;
       text-align:center;
       padding-left: 20px;
       
      }
      form{
        width:50%;
        display:block;
        position: relative;
        height: 85%;
        margin: 15px auto 0px auto;
        display:block;
        background:lightblue;
  
      }
      body{
      background: lightblue;
      justify-content: center;
      align-items: center;
      background:white;
      
  }
  input[type="submit"] {
       background: transparent;
       outline: none;
       border: 1px solid white;
       border-radius: 20px;
       height: 40px;
       width: 98%;
       color: white;
       font-size: 17px;
       text-align: center;
       margin-bottom: 46px;
      }
     i{
      padding: auto;
      padding-left: 10px;
      
     }
    h3{
      padding-top:5%;
      text-align:center;
     }
     h3 {
    padding-top: 5%;
    text-align: center;
    font-family: cursive;
     }
     ::placeholder{
      position:relative;
      left: 40px;
      text-align:justify;
     }
   ;
    
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
    $Email=$_POST['Email'];
   
    if ((!empty($_POST['name']))&&(!empty($_POST['Lastname']))&&(!empty($_POST['Cin']))&&(!empty($_POST['Email'])) &&(!empty($_POST['Adress']))&&(!empty($_POST['Phone']))){
      
        $p=crud::connect()->prepare('INSERT INTO tablepatient(cin,name,lastname,adress,phone,email,traitement,date_traitement,observation,peration,date_visite,poix)VALUES(:c,:n,:l,:a,:p,:e,null,0,null,null,0,0)');
      $p->bindVALUE(':c',$Cin);
      $p->bindVALUE(':n',$name);
      $p->bindVALUE(':l',$lastname);
      $p->bindVALUE(':a',$Adress);
      $p->bindVALUE(':p',$Phone);
      $p->bindVALUE(':e',$Email);
     
      $p->execute();
      echo'Successfully';
    }else{
      echo'Remplir tout les champs';
    }
  
      
    }
  
  ?>
  

  <div class="form">
 
  <br> 
  <form action="" method="post"><div class="textbox"> 
  <h3>Ajouter</h3> 
  <h3>ajouter nouveau patient</h3> 
  <i class="fa fa-user-o" aria-hidden="true" style="font-size: 90px;"></i> 
  <br>
    <input type="text" name="name" placeholder="nom"> <br><br>
    <input type="text" name="Lastname" placeholder="prenom"> <br><br>
    <input type="text" name="Cin" placeholder="Cin"> <br><br>
    <input type="text" name="Adress" placeholder="Adress"> <br><br>
    <input type="text" name="Phone" placeholder="Phone"> <br><br>
    <input type="text" name="Email"  placeholder="Email" id="name"> <br><br>
    <input type="submit" name="SignUP_btn" id="sub" value="Ajouter_patient" href="login.html">
  </div> 
  
  </form>
  </div>
</body>
</html>
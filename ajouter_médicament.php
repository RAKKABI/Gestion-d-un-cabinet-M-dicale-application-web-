<!DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="utf-8">
    
<style>
    body{
        background-color:white;
    }
    form{
        height:300px;
        width: 50%;
        background:url('medcam.jpg');
        border-width:2px;
        border-style:solid;
        border-color:black;
        transform: translate(50%,50%);
        padding-left: 30px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        
  box-shadow: 21px 28px 49px -5px BLACK;

    }
    input[type="submit"] {
        background: #FFB6C1;
        background: #FFB6C1;
height: 40px;
width: 126px;
margin-bottom: 13px;
margin-left: 402px;
margin-top: -49px;
    }
    input[type="reset"] {
        background: #20B2AA;
height: 40px;
width: 126px;
margin-bottom: 13px;
margin-left: 249px;
margin-top: 15px;
margin-right: -37px; 
    }
    #Nom{
        margin-left: 27px;
    height: 40px;
    width: 174px;
    margin-top: 26px;
    }
    label{
    
display: flex;
align-items: baseline;
font-size: 35px;
font-style: unset;
color: black;
margin-top: -8px;
    }
    p{
        font: optional;
    }
   #retour img{
        height: 56px;
        width:56px;
    }
</style> 
</head>
<body>
<a  id ="retour" href="base_medicament.php"><img src="retour.png"></a> 

  
  <form  method="post" >
    <p>Information sur les médicament</p>
      <label for="Nom">Médicament <input type="text" id="Nom" name="Médicament" placeholder="Médicament"/></label>
      <label for="Nom">Observation <textarea type="text" id="Nom" name="Observation" placeholder="" ></textarea></label>
      <input type="reset" value="Anuller" name="Reset" />
      <input type="submit" value="Enregitrer" name="Envoyer" />
      
  </form>
  <?php
  require('./connection.php');
  if (isset($_POST['Envoyer'])){
    $médicament=$_POST['Médicament'];
    $observation=$_POST['Observation'];
    
   
    if ((!empty($_POST['Médicament']))&&(!empty($_POST['Observation']))){
      
        $p=crud::connect()->prepare('INSERT INTO base_medicament(Médicament,observation)VALUES(:m,:o)');
      $p->bindVALUE(':m',$médicament);
      $p->bindVALUE(':o',$observation);

     
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
  
  ?>
</body>
</html>
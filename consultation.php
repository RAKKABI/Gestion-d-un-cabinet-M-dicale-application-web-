
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name ="viewport" content="width-device-width, initial-scale=1.0">
        <title>Ajouter </title>
        <link rel="stylesheet" href="style2.css">
        <style type="text/css">
        </style>
    </head>
    <body>
        <div class="form">
            <a href="consultatin&controle.php" class="back_btn"><img src="retour.png" alt=""></a>
            <h2>Remplir les champs</h2>
            <p class="erreur_message">
               
            </p>
            <form method="post" action="" >
            <label for="">Nom</label>
            <input type="text" name="nom" value="<?php echo $_GET["nomm"] ?>">
            <label for="">Prénom</label>
            <input type="text" name="prenom" value="<?php echo $_GET["prenomm"] ?>">
            <label for="">Opération</label>
            <input type="text" name="operation">
            <label for="">poids</label>
            <input type="number" name="poix">
            <label for="">date_visite</label>
            <input type="date" name="date_visite">
            <label for="">Observation</label>
            <textarea name="Observation" id=""></textarea>
            <input type="submit" value="insérer" name="button_insérer">
            <input type="reset" value="Annuler" name="button">
            </form>


        </div> 
         <?php
          require('./connection.php');

          if (isset($_POST['button_insérer'])){
            $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $operation=$_POST['operation'];
            $poix=$_POST['poix'];
            $date_visite=$_POST['date_visite'];
            $Observation=$_POST['Observation'];

   
    if (!(empty($_POST['nom']))&&(!empty($_POST['prenom']))&&(!empty($_POST['poix']))&&(!empty($_POST['operation'])) &&(!empty($_POST['date_visite']))&&(!empty($_POST['Observation']))){
        
        $p=crud::connect()->prepare('UPDATE tablepatient SET observation=:r,peration=:o,date_visite=:d,poix=:x WHERE name=:n AND lastname=:p ');
        $p->bindVALUE(':n',$nom);
        $p->bindVALUE(':p',$prenom);
        $p->bindVALUE(':o',$operation);
        $p->bindVALUE(':x',$poix);
        $p->bindVALUE(':d',$date_visite);
        $p->bindVALUE(':r',$Observation);
       
        $p->execute();
        echo" <script>
         alert('bien modifier..!')
        </script>";
    }
    else{
        echo" <script>
   alert('Veuillez remplir tous les champs')
    </script>";
}
}
   
    



?>


     </body>
    </html>
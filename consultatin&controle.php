<!DOCTYPE html>
    <html lang="en">
    <head>
     <title>Page title</title>
     <style type="text/css">
      *{
            padding: 0;
            margin:0;
            box-sizing:border-box;
        }
        body{
            background-image:url('log2.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            padding-top: 5%;
            height: calc(100vh - 55px);

        }
        body > nav:nth-child(2) > p:nth-child(2) {
            position: relative;
            left: 22px;
            bottom: 33px;
            margin-bottom: -98px;
         }
        table{
            width:90%;
            display: block;
            margin:auto;
            background-color:white;
            margin-top:100px;
        }
        table,tr,td,th{
            border:1px solid gray;
            border-collapse:collapse;
            margin-top: 36px;
        }
        th{
            width: 500px;
            height: 40px;
            background:#3D5902D9;
            color:white;
            font-family:serif;
            background: #024559AB;
            color: white;
            background:#025159AB;
        }
        td{
            text-align:center;
            height: 20px;
        }
        img{
            width: 30px;
            height: 30;
            
        }
        #retour img{
            width: 30px;
            height: 30;
            margin-top: -24px;
        }
        
        .user{
            background:white;
            margin-top: 5%;
        }

        .user img{
           

        }
        .cc{
            height: 5%;
            

        }
        
/*.home {
    height: calc(100vh - 55px);
    background: url('blog2.jpg');
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
}*/
nav img{
    height:5%;
    width:5%;
    left: 37px;
    bottom: 31px;
    position: relative;

}
#button{
    margin-top: 2%;
    height: 20%;
    width: 18%;
    margin-left: 40%;
    margin-right: 35%;
    text-decoration: none;
    background-color: #80808000;
    border: 1px solid black;
    display: block;
    text-align: center;
    border-radius: 8px;

}

.a th{
    width: 500px;
    height: 40px;
    background:red;
    color:white;
    font-family:serif;
    background: white;
    background: white;
    color: black;

}
#motcle{
    border: none;
    width: 100%;
}
#motcle:focus-visible{
    /* outline-offset: -12px; */
}
p#logo{
    margin-top: -16px;
    margin-left: 14px;
}
.nomsite{
            font-size:50px;
            text-align:center;
            margin:0;
            padding-top:5%;
            color:black;
            position:relative;
            font-family:"Script MT Bold","Sakkal Majalla";
            margin-bottom: 11px;
            margin-top: -41px;
            margin-top: -57px;
        }
        #motcle{
            height:30px;
            width: 300px;
            border: black;
            padding-left:2px;
            margin-left: 333px;;
        }
        .btfind{
            
            height:30px;
            width: 300px;
            border:none;
            background-color:green;
            color:#fff;
        }
    p#logo {
         margin-top: -16px;
         margin-left: 14px;
         margin-bottom: -60px;}
 #bton{
    margin-top: 4%;
    height: 26px;
    width: 20%;
    margin-left: 40%;
    margin-right: 35%;
    text-decoration: none;
    background-color: #80808000;
    border: 1px solid black;
    display: block;
    text-align: center;
    border-radius: 8px;

  }
  #bton:hover{
    background:#024559AB;
    height: 29px;
}
    </style>
    <body>
    <section class="home">
        <div class="home-infos">
            
        </div>
        <a  id ="retour" href="Menu.php"><img src="retour.png"></a> 
    </section>
    <nav>
    <img src="logo.png">
    <p>Familydoc</p>
    </nav>
     
    <div class="cc"></div>
         <p class="nomsite">Notre cabinet medical</p>
            <div id=formauto>
             <form name="medical" method="post" action="">
                <input type="text" id="motcle" name="motcle" placeholder="Recherche par nom complé..."/>
                <input type="submit" class="btfind" name="btnsubmit" value="Recherche"/>
             </form>
            </div>
              
      <form action="consultation.php">
            <table>
            <thead>
            <caption>consultation</caption>
                <tr>
                    
                    <th>nom</th>
                    <th>prenom</th>
                    
                    <th>observation</th>
                    <th>operation</th>
                    <th>date_visite</th>
                    <th>poids</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
            <?php
        require('./connection.php');
        if (isset($_POST['btnsubmit'])){
            $lastname=$_POST['motcle'];
            $p=crud::Selectedatarecherche($lastname); 
            if (count($p)>0){
                for($i=0; $i < count($p); $i++){
                echo'<tr>';
                // foreach( $p[$i] as $key => $value ){
                    //if($key=='lastname'){
                    //   
                    //  }
                     echo'<td >'.$p[$i]["name"].'</td>';
                     echo'<td >'.$p[$i]["lastname"].'</td>';

                    ?>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="gestion-patient_clinique.php?cin=<?php echo $p[$i]['lastname']?>"><img src="delete.png"></a></td>
                    <td><a href="update_patient.php"><img src="edit.png"></a></td>
                
                    </tr>
        
                <?php  
                }   
                }
            

                
            }
                

        // }
        else{ $p=crud::Selectedataconsultation();
        if (isset($_GET['lastname'])){
            $lastname=$_GET['lastname'];
            $e=crud::delete($lastname);
        }
        if (count($p)>0){
            for($i=0; $i < count($p); $i++){
            echo'<tr>';
            foreach( $p[$i] as $key => $value ){
                if($key='lastname'){
                    echo'<td>'.$value.'</td>';
               
                }
            }
            ?>
            <td><a href="gestion-patient_clinique.php?cin=<?php echo $p[$i]['lastname']?>"><img src="delete.png"></a></td>
            <td><a href="update_patient.php"><img src="edit.png"></a></td>
        <?php


            echo'</tr>';
            
        }
    }
           
        }
        ?>
       

        
       
            </tbody>
        </table>
       


        
        <input type="text"  style="display:none" name="nomm" value="<?php echo $p[0]["name"] ?>"/>
        <input type="text"  style="display:none"  name="prenomm" value="<?php echo $p[0]["lastname"] ?>"/>

    <button id ="bton"  >Insérer</button>
   
    </form> 
    </body>
    </html>

    
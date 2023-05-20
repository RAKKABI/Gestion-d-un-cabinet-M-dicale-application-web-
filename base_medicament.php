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
            background-image:url('médicament.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            padding-top: 5%;
            height: calc(100vh - 55px);

        }
        body > nav:nth-child(2) > p:nth-child(2) {
            position:relative;
            left: 37px;
            bottom: 31px;
         }
        table{
            width:90%;
            display: block;
            margin:auto;
            background-color:white;
        }
        table,tr,td,th{
            border:1px solid gray;
            border-collapse:collapse;
        }
        th{
            width: 500px;
            height: 40px;
            background:#1E7C66;
            color:white;
            font-family:serif;
            background:#1E7C66;
color: white;
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
button{
    margin-top: 5%;
    height:10%;
    width:10%;
    margin-left:40%;
    margin-right:35%;

}
button:hover{
    background:#3FB077;
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
caption{
    height: 27px;
}
        

   
    </style>
    <script>
        
    </script>
    </head>
    <body>
    <section class="home">
        <div class="home-infos">
            
        </div>
    </section>
    <nav>
    <img src="logo.png">
    <p>Familydoc</p>
    </nav>
      
    <div class="cc"></div>
    <a  id ="retour" href="Menu_medecin.php"><img src="retour.png"></a> 
    <table>
            <thead>
            <caption>Base médicament</caption>
                <tr>

   
    
        
       
                <tr>
                    <th>Médicament</th>
                    <th>Observation</th>
                    
                    
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
            <?php
        require('./connection.php');

        $p=crud::Selectedatamédicament();
        if (isset($_GET['Médicament'])){
            $médicament=$_GET['Médicament'];
            $e=crud::deletemd($médicament);
        }
        if (count($p)>0){
            for($i=0; $i < count($p); $i++){
            echo'<tr>';
            foreach( $p[$i] as $key => $value ){
                if($key='Médicament'){
                    echo'<td>'.$value.'</td>';
               
                }
            }
            ?>
            <td><a href="base_medicament.php?Médicament=<?php echo $p[$i]['Médicament']?>"><img src="delete.png"></a></td>
            <td><a href="modifier_médicament.php"><img src="edit.png"></a></td>
        <?php


            echo'</tr>';
            
        }
           
        }
        ?>
             


            </tbody>
        </table>
    
        

      
       <button>  <a href="ajouter_médicament.php"><img src="hajout.png"></a> </button>
    
   
    
    </body>
    </html>
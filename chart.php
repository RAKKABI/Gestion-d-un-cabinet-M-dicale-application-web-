<?php
$graph_value = 0;
if(file_exists(pdo.php)){
    $sql = "select * from tablepatient";
    foreach ($bdd->query($sql) as $graph){
        $graph_value++;
    }
    if($graph_value == null){
        echo' [GRAPH_PLUGIN_UBRAIN] FATAL ERROR (PDO_VAR):Variables corrompues,merci de consulter le manuelou de réinstaller le plugin.<br> ';
        exit;
    }
}else{
    echo' [GRAPH_PLUGIN_UBRAIN] FATAL ERROR (FILE_NO8EXIT):Le fichier PDO n\'a pas été trouvé sur le serveur.<br>';
    echo' [GRAPH_PLUGIN_UBRAIN] ERROR (PDO_ERR) : Impossible de se connecter à la base de donnée : vérifiez l\'état du fichier<br>';
    exit;
}

?>
<html>
    <head>
        <script type="text/javascript" src="https://www.gstatic.com/charts/chart.js"></script>
        <script type="text/javascript" >
            google.charts.load('current',{'packages':['corechart']});
            google.charts.setOnLoadCallback(drawchart);
            function drawchart(){
                var data = google.visualization.arrayToDataTable([
                    ['Année','Visiteurs'],
                    <?php
                    $sql = "SELECT * FROM tablepatient";
                    foreach($bdd->query($sql) as $graph){
                        echo'["'.$graph['y'].'", '.$graph['x'].'],';
                    }
                    ?>
                ]);
                var option = {
                    title :'Nombre de visiteur',
                    hAxis :{title: 'Minutes',titleTextStyle:{color:'#333'}},
                    vAxis :{minValue:0}
                };
                var char = new google.visualisation.AreaChar(document.getElementById('chart_div'));
                chart.draw(data,option);
            }
        </script>
    </head>
    <body>
        <div id="chart_div" style="width:50%; height:500px;"></div>
    </body>
    
</html>
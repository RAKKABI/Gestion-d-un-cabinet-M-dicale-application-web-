<?php

    $data=array();
    $p=crud::connect()->prepare('SELECT traitement FROM tablepatient WHERE');
    $p->execute();
    $data=$p->fetchALL(PDO::FETCH_ASSOC);
    return $data;

require('./connection.php');
$traitement= $_POST['médicament'];

?>
<script>
    localStorage.setItem("médicament","<?php echo $traitement?>");
</script>
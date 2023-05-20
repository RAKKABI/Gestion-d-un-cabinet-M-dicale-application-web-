<?php
class crud{
    public static function connect(){
        try{
            $con=new PDO('mysql:localhoste=host;dbname=hospital','root','');
            return $con;
        }
        catch (PDOException $error1){
            echo'Something went wrong,it was not possible to conect you to database'.$error1->getMessage();
        }catch (Exception $error2){
            echo'Generic error'.$error2->getMessage();
        }
    }
    public static function Selectedata(){
        $data=array();
        $p=crud::connect()->prepare('SELECT cin,name,lastname,Adress,phone,email FROM tablepatient');
        $p->execute();
        $data=$p->fetchALL(PDO::FETCH_ASSOC);
        return $data;
    
    }
    public static function Selectedatarend(){
        $data=array();
        $p=crud::connect()->prepare('SELECT * FROM rendezvous');
        $p->execute();
        $data=$p->fetchALL(PDO::FETCH_ASSOC);
        return $data;
    
    }
    public static  function delete($cin){
        $p=crud::connect()->prepare('DELETE FROM tablepatient WHERE cin=:cin');
        $p->bindValue(':cin',$cin);
        $p->execute();
    }
    public static  function deletemd($médicament){
        $p=crud::connect()->prepare('DELETE FROM base_medicament WHERE Médicament=:m');
        $p->bindValue(':m',$médicament);
        $p->execute();
    }

    public static function Selectedatamedcin(){
        $data=array();
        $p=crud::connect()->prepare('SELECT * FROM medcin');
        $p->execute();
        $data=$p->fetchALL(PDO::FETCH_ASSOC);
        return $data;
    
    }
    public static  function deletemedcin($id){
        $p=crud::connect()->prepare('DELETE FROM medcin WHERE id=:id');
        $p->bindValue(':id',$id);
        $p->execute();
    }
    public static function Selectedatamedcinnom(){
        $data=array();
        $p=crud::connect()->prepare('SELECT nom,prenom FROM medcin');
        $p->execute();
        $data=$p->fetchALL(PDO::FETCH_ASSOC);
        return $data;
    
    }
    public static function Selectedataconsultation(){
        $data=array();
        $p=crud::connect()->prepare('SELECT name,lastname,Observation,peration,date_visite,poix FROM tablepatient');
        $p->execute();
        $data=$p->fetchALL(PDO::FETCH_ASSOC);
        return $data;
    
    }
    public static function Selectedatarecherche($lastname){
        $data=array();
        $p=crud::connect()->prepare('SELECT  name,lastname FROM tablepatient WHERE lastname=:last');
        $p->bindValue(':last',$lastname);
        $p->execute();
        $data=$p->fetchALL(PDO::FETCH_ASSOC);
        return $data;
    
    }
    public static function Selectedatarecherchedate($date,$time){
        $data=array();
        $p=crud::connect()->prepare('SELECT  nom,prenom,date_naissance,Adress,tel,date_rdv,heur,cin FROM rendezvous WHERE date_rdv=:d && heur=:t');
        $p->bindValue(':d',$date);
        $p->bindValue(':t',$time);
        $p->execute();
        $data=$p->fetchALL(PDO::FETCH_ASSOC);
        return $data;
    
    }
    public static function   Selectedatagenerateordo($lastname){
        $data=array();
        $p=crud::connect()->prepare('SELECT  traitement FROM tablepatient WHERE lastname=:last');
        $p->bindValue(':last',$lastname);
        $p->execute();
        $data=$p->fetchALL(PDO::FETCH_ASSOC);
        return $data;
    
    }
    public static function Selectedatamédicament(){
        $data=array();
        $p=crud::connect()->prepare('SELECT * FROM base_medicament');
        $p->execute();
        $data=$p->fetchALL(PDO::FETCH_ASSOC);
        return $data;
    
    }
    public static  function deletemédicament($médicament){
        $p=crud::connect()->prepare('DELETE FROM base_medicament WHERE Médicament=:med');
        $p->bindValue(':med',$médicament);
        $p->execute();
    }
    public static function Selectedataordonnance(){
        $data=array();
        $p=crud::connect()->prepare('SELECT name,lastname,traitement,date_traitement FROM tablepatient');
        $p->execute();
        $data=$p->fetchALL(PDO::FETCH_ASSOC);
        return $data;
    
    }
    public static function Selectedataord($lastname){
       
        $p=crud::connect()->prepare('SELECT  traitement FROM tablepatient WHERE lastname=:last');
        $p->bindValue(':last',$lastname);
        $p->execute();
        $data=$p->fetchALL(PDO::FETCH_ASSOC);
        return $data;
        
        return $p;
    
    }
   /* function getAllCommande(){
        $sql="SELECT COUNT(*) as nbre from commande where etat=?";
        $req=$GLOBALS['connexion']->prepare($sql);
        $req->execute(array(1));
        return $req->fetch();
    
    }*/
    public static function getAllRendezVous(){
        $p=crud::connect()->prepare('SELECT COUNT(*) as nbr from rendezvous');
        $p->execute();
        $data=$p->fetchALL(PDO::FETCH_ASSOC);
        return $data;
    
    }
    public static function getAllpatient(){
        $p=crud::connect()->prepare('SELECT COUNT(*) as nbre from tablepatient');
        $p->execute();
        $data=$p->fetchALL(PDO::FETCH_ASSOC);
        return $data;
    
    }
    public static function getAllpatientcontrole(){
        $p=crud::connect()->prepare('SELECT COUNT(*) as nbrcontrol  from tablepatient where Observation="controle" or Observation="Controle"');
        $p->execute();
        $data=$p->fetchALL(PDO::FETCH_ASSOC);
        return $data;
    
    }
    public static function getAllpatientconsultation(){
        $p=crud::connect()->prepare('SELECT COUNT(*) as nbrconsult from tablepatient where Observation="consultation" or Observation="Consultation" ');
        $p->execute();
        $data=$p->fetchALL(PDO::FETCH_ASSOC);
        return $data;
    
    }
    public static function getAllpatientconsulttation($date){
       
        $p=crud::connect()->prepare('SELECT COUNT(*) as nbrconsultt from tablepatient where date_visite =:dt && Observation="consultation" or Observation="Consultation"');
        $p->bindValue(':dt',$date); 
        $p->execute();
        $data=$p->fetchALL(PDO::FETCH_ASSOC);
        return $data;
    }
    public static function getAllpatientcontrolle($date){
       
        $p=crud::connect()->prepare('SELECT COUNT(*) as nbrcontrole from tablepatient where date_visite =:dt && Observation="controle" or Observation="Controle"');
        $p->bindValue(':dt',$date);
        $p->execute();
        $data=$p->fetchALL(PDO::FETCH_ASSOC);
        return $data;
    }













    function getAllArticle(){
        $sql="SELECT COUNT(*) as nbrepatient from tablepatient";
        $req=$GLOBALS['connexion']->prepare($sql);
        $req->execute();
        return $req->fetch();
    
    }
    function getAllCA(){
        $sql="SELECT SUM(prix) as prix from vente";
        $req=$GLOBALS['connexion']->prepare($sql);
        $req->execute();
        return $req->fetch();
    
    }
}








?>

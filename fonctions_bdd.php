<?php

function creerConnection(){
    try{
        $bdd = new PDO('mysql:host=localhost;
            dbaname=td0_noframework;charset=utf8','root','');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $bdd;
    }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
        return -1;
    }
}

function executerRequete($bdd,$chaine){
    $resultat=$bdd->query($chaine);
    $cpt=0;
    if(is_null($resultat)){
        return 0;
    }
    else{
        $donnees=$resultat->fetchAll();
    }
    $donnees[0]=$cpt;
    return $donnees;
}

?>

<?php
/***************************************************************************************
 *   	Frédéric DANIAU
 *                Projet :   La Petite Ebénisterie en Herbe 'lPEeh'
 *                  Page :   bdd.php
 *                Chemin :   lPEeh/scripts/admin/bdd.php
 *                  Type :   page de scripts
 *              Contexte :   php 7.4
 *              Fonction :   DAO BdD
 *   Date mise en oeuvre :   23/03/2021
 *          Dernière MàJ :   23/03/2021
 ****************************************************************************************/

/*** *** *** *** *** FONCTIONS *** *** *** *** ***/
// Fonction d'exécution d'une requête
//  Paramètres  :
//      strRequest      : requête à exécuter
//  Valeur de retour    : objet link
function fct_RequestExec($strRequest){
    $mysqli = new mysqli("localhost", "root", "sErpico33", "ebenist");
    if ($mysqli->connect_errno){
        echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }else{
        $mysqli->query("SET NAMES 'utf8'");
        $resLink = $mysqli->query($strRequest);
        return $resLink;
    }
}

//  Renvoi le tableau de tous les enregistrements de la table 'ficheAcc' triés par id croissant
//  Paramètres  		: none
//  Valeur de retour    : array
function fct_SelectFichesAccueil(){
    $strRequest = "SELECT * FROM `ficheAcc` ORDER BY `facc_Id` ASC;";
    $resLink = fct_RequestExec($strRequest);
    $resLink->data_seek(0);
    $i = 1;
    while ($row = $resLink->fetch_row()) {
        $arrReturn[$i]['Id'] = $row['0'];
        $arrReturn[$i]['Label'] = $row['1'];
        $arrReturn[$i]['Page'] = $row['2'];
        $arrReturn[$i]['Text'] = $row['3'];
        $i++;
    }
    return $arrReturn;
}
















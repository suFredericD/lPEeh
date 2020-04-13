<?php
/***************************************************************************************
 *   	Frédéric DANIAU
 *                Projet :   La Petite Ebénisterie en Herbe 'lPEeh'
 *                  Page :   index.php
 *                Chemin :   lPEeh/index.php
 *                  Type :   page utilisateur
 *              Contexte :   php 7.4
 *              Fonction :   page d'acueil
 *   Date mise en oeuvre :   10/04/2020
 *          Dernière MàJ :   11/04/2020
 ****************************************************************************************/
/*** *** *** *** *** INCLUSIONS *** *** *** *** ***/
function LoadClass($strClass){                      // Inclusion automatique des classes
    require 'classes/' . $strClass . '.php';
  }
spl_autoload_register('LoadClass');                 // Enregistrement de la fonction en autoload pour appel dès instanciation d'une classe non déclarée

require_once('scripts/paging/headerHtml.php');      // Script de construction du header html
require_once('scripts/paging/footerHtml.php');      // Script de construction du footer html
require_once('scripts/paging/siteHeader.php');      // Script de construction du cartouche d'en-tête du site

/*** *** *** *** *** INITIALISATIONS ET INSTANCIATIONS *** *** *** *** ***/
$objPageSelf = new Page($_SERVER['SCRIPT_NAME']);

/*** *** *** *** *** APPEL DE FONCTIONS *** *** *** *** ***/
fct_DisplayHeaderHtml($objPageSelf);          // Header Html

fct_DisplaySiteHeader($objPageSelf);          // Cartouche d'en-tête du site

fct_DisplayFooterHtml($objPageSelf);          // Footer Html
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
 *          Dernière MàJ :   26/03/2021
 ****************************************************************************************/
/*** *** *** *** *** INCLUSIONS *** *** *** *** ***/
function LoadClass($strClass){                      // Inclusion automatique des classes
    require 'classes/' . $strClass . '.php';
  }
spl_autoload_register('LoadClass');                 // Enregistrement de la fonction en autoload pour appel dès instanciation d'une classe non déclarée

require_once('scripts/paging/headerHtml.php');      // Script de construction du header html
require_once('scripts/paging/footerHtml.php');      // Script de construction du footer html
require_once('scripts/paging/siteHeader.php');      // Script de construction du cartouche d'en-tête du site
require_once('scripts/paging/mainMenu.php');        // Script de construction du menu principal du site
require_once('scripts/admin/bdd.php');              // Script de DAO BdD

/*** *** *** *** *** INITIALISATIONS ET INSTANCIATIONS *** *** *** *** ***/
$objPageSelf = new Page($_SERVER['SCRIPT_NAME']);

/*** *** *** *** *** APPEL DE FONCTIONS *** *** *** *** ***/
fct_DisplayHeaderHtml($objPageSelf);          // Header Html

fct_DisplaySiteHeader($objPageSelf);          // Cartouche d'en-tête du site

fct_DisplayMainMenu($objPageSelf);            // Menu principal

$arrFichesAccueil = fct_SelectFichesAccueil();
?>
<!-- -- -- -- -- -- -- -- Section principale -- -- -- -- -- -- -- -->
      <div class="row">
<!-- -- -- -- -- -- Fiches d'accueil -- -- -- -- -- -->
        <div id="divAccFiches" class="col-xl-12">
         <div class="row">
<?php
  for ($i=1; $i<=count($arrFichesAccueil);$i++) {
    if($i==1 || $i==3 ){
      $strFicheClasse = "offset-xl-1 col-xl-4 accFiches";
    } else {
      $strFicheClasse = "offset-xl-1 col-xl-5 accFiches";
    }
?>
          <div class="<?php echo $strFicheClasse;?>">
           <div class="row">
            <div class="col-xl-12 accFicheTitle">
              <a href="<?php echo $arrFichesAccueil[$i]['Page'];?>" class="accFicheLink"><?php echo $arrFichesAccueil[$i]['Label'];?></a>
            </div>
            <div class="col-xl-12 accFicheText"><?php echo $arrFichesAccueil[$i]['Text'];?></div>
           </div>
          </div>
<?php
  };?>
         </div>
        </div>
<!-- -- -- Image d'accueil -- -- -->
        <div id="divbigtree" class="col-xl-12">
          <img class="img-fluid" src="media/pics/big_tree.png">
        </div>
      </div>
<?php
fct_DisplayFooterHtml($objPageSelf);          // Footer Html
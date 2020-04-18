<?php
/***************************************************************************************
 *   	Frédéric DANIAU
 *                Projet :   La Petite Ebénisterie en Herbe 'lPEeh'
 *                  Page :   siteHeader.php
 *                Chemin :   lPEeh/scripts/paging/siteHeader.php
 *                  Type :   script de pagination Html
 *              Contexte :   php 7.4
 *              Fonction :   renvoi du cartouche d'en-tête du site
 *   Date mise en oeuvre :   11/04/2020
 *          Dernière MàJ :   13/04/2020
 ****************************************************************************************/
/*** *** *** *** *** INCLUSIONS *** *** *** *** ***/

/*** *** *** *** *** FONCTIONS *** *** *** *** ***/
function fct_DisplaySiteHeader($objPageSelf){
    $strLogoPath = $objPageSelf->getPicturesPath() . "logo_trans.png";
?>
        <section id="site-header" class="row">
            <div class="offset-xl-1 col-xl-2">
                <img class="img-fluid" src="<?php echo $strLogoPath;?>">
            </div>
            <div class="col-xl-8">
                <div class="row">
                    <div id="site-title" class="col-xl-12">La Petite &Eacute;bénisterie en Herbe</div>
                    <div class="header-text col-xl-12">Création & Fabrication Bois</div>
                    <div class="header-text col-xl-12">Mobilier - Décoration - Bijoux</div>
                <div>
            </div>
        </section>
<?php
}
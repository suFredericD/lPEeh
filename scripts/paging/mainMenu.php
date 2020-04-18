<?php
/***************************************************************************************
 *   	Frédéric DANIAU
 *                Projet :   La Petite Ebénisterie en Herbe 'lPEeh'
 *                  Page :   mainMenu.php
 *                Chemin :   lPEeh/scripts/paging/mainMenu.php
 *                  Type :   script de pagination Html
 *              Contexte :   php 7.4
 *              Fonction :   renvoi du menu principal du site
 *   Date mise en oeuvre :   18/04/2020
 *          Dernière MàJ :   18/04/2020
 ****************************************************************************************/
/*** *** *** *** *** INCLUSIONS *** *** *** *** ***/

/*** *** *** *** *** FONCTIONS *** *** *** *** ***/
function fct_DisplayMainMenu($objPageSelf){
    $strHereMessage = "&lArr; Vous êtes ici";
    if ($objPageSelf->getName()=="index.php"){
        $strIndexTitle = $strHereMessage;
    } else {
        $strIndexTitle = "Retour à l'accueil";
    }
    if ($objPageSelf->getName()=="aPropos.php"){
        $strAproposTitle = $strHereMessage;
    } else {
        $strAproposTitle = "En savoir plus sur la Petite &Eacute;bénisterie en Herbe...";
    }
    if ($objPageSelf->getName()=="valeurs.php"){
        $strValeursTitle = $strHereMessage;
    } else {
        $strValeursTitle = "En savoir plus sur les valeurs de la Petite &Eacute;bénisterie en Herbe...";
    }
    if ($objPageSelf->getName()=="creations.php"){
        $strCreationsTitle = $strHereMessage;
    } else {
        $strCreationsTitle = "Découvrir les créations de la Petite &Eacute;bénisterie en Herbe...";
    }
    if ($objPageSelf->getName()=="contacts.php"){
        $strContactTitle = $strHereMessage;
    } else {
        $strContactTitle = "Contactez la Petite &Eacute;bénisterie en Herbe...";
    }
?>
<!-- -- -- -- -- Menu principal -- -- -- -- -->
        <nav class="navbar navbar-expand-xl navbar-expand-lg navbar-expand-md" id="navbarMain" role="navigation">
            <a class="navbar-brand custom-brand" id="haut" href="#"></a><!-- Ancre pour les liens back-to-top -->
<!-- Bouton de réduction du menu pour les rescales petits formats -->        
            <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarFullSite" aria-controls="navbarFullSite" aria-expanded="false" aria-label="Toggle navigation">
                <img src="<?php echo $objPageSelf->getPicturesPath()."logo_trans.png";?>" class="navbar-toggler-icon">
            </button>
<!-- Barre de menu -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarFullSite">
                <ul class="navbar-nav">
<!-- Page d'accueil -->
                    <li class="nav-item">
                        <a class="nav-link btn-nav" href="<?php echo $objPageSelf->getIndexPath();?>index.php" title="<?php echo $strIndexTitle;?>">Accueil</a>
                    </li>
<!-- Page : A propos -->
                    <li class="nav-item">
                        <a class="nav-link btn-nav" href="<?php echo $objPageSelf->getViewsPath();?>aPropos.php" title="<?php echo $strAproposTitle;?>">A propos</a>
                    </li>
<!-- Page : Valeurs -->
                    <li class="nav-item">
                        <a class="nav-link btn-nav" href="<?php echo $objPageSelf->getViewsPath();?>valeurs.php" title="<?php echo $strValeursTitle;?>">Valeurs</a>
                    </li>
<!-- Page : Créations -->
                    <li class="nav-item">
                        <a class="nav-link btn-nav" href="<?php echo $objPageSelf->getViewsPath();?>creations.php" title="<?php echo $strCreationsTitle;?>">Créations</a>
                    </li>
<!-- Page : Créations -->
                    <li class="nav-item">
                        <a class="nav-link btn-nav" href="<?php echo $objPageSelf->getViewsPath();?>contacts.php" title="<?php echo $strContactTitle;?>">Contacts</a>
                    </li>
                </ul>
            </div>
       </nav>
<?php
}
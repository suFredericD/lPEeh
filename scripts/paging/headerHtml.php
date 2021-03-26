<?php
/***************************************************************************************
 *   	Frédéric DANIAU
 *                Projet :   La Petite Ebénisterie en Herbe 'lPEeh'
 *                  Page :   headerHtml.php
 *                Chemin :   lPEeh/scripts/paging/headerHtml.php
 *                  Type :   script de pagination Html
 *              Contexte :   php 7.4
 *              Fonction :   renvoi de l'en-tête Html
 *   Date mise en oeuvre :   10/04/2020
 *          Dernière MàJ :   26/03/2021
 ****************************************************************************************/
/*** *** *** *** *** INCLUSIONS *** *** *** *** ***/

/*** *** *** *** *** FONCTIONS *** *** *** *** ***/
function fct_DisplayHeaderHtml($objPageSelf){
    $strFavIcon = $objPageSelf->getPicturesPath() . "logo2.png";
    $strGeneralCss = $objPageSelf->getCssPath() . "general.css";
    $strBootstrapCss = $objPageSelf->getConfigPath() . "bootstrap/css/bootstrap.min.css";
    $strFontawesomeCss = $objPageSelf->getConfigPath() . "fontawesome/css/all.css";
?>
<!DOCTYPE html>

<!-- -- -- -- -- -- -- -- En-tête HTML -- -- -- -- -- -- -- -->
<html lang="fr">
    <head>
        <title>La Petite Ebénisterie en Herbe</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="La Petite Ebénisterie en Herbe">
        <meta name="author" content="Frédéric DANIAU">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
        <meta name="keywords" content="ébénisterie, menuiserie, design, bois, boiserie">
        <meta name="robots" content="all">
        <link href="<?php echo $strFavIcon;?>" rel="icon" type="image/ico">
        <link href="<?php echo $strBootstrapCss;?>" rel="stylesheet"><!-- Css BootStrap Core -->
        <link href="<?php echo $strFontawesomeCss;?>" rel="stylesheet"><!-- Css FontAwesome Core -->
        <link href="<?php echo $strGeneralCss;?>" rel="stylesheet" type="text/css"><!-- Css général du site -->
    </head>
<!-- -- -- -- -- -- -- -- Corps de la page -- -- -- -- -- -- -- -->
    <body id="site-container">
<?php
}
<?php
/*******************************************************************************************
 *       Frédéric DANIAU
 *                Projet :   La Petite Ebénisterie en Herbe 'lPEeh'
 *                  Page :   Page.php
 *                Chemin :   lPEeh/classes/Page.php
 *                  Type :   page de scripts
 *              Contexte :   php 7.4
 *              Fonction :   page de définition de la classe page
 *   Date mise en oeuvre :   10/04/2020
 *          Dernière MàJ :   10/04/2020
 *******************************************************************************************/
class Page{
    //  ***** ***** ***** ATTRIBUTS ***** ***** *****// 
    private $_strName;			// Nom de la page avec extension
	private $_strTitle;			// Titre de la page
	private $_strDescription;	// Rôle de la page

	private $_strPath;			// Chemin de la page
	private $_strIndexPath;		// Chemin vers l'index

	private $_strMediaPath;		// Chemin relatif vers media/
	private $_strPicturesPath;	// Chemin relatif vers media/pics/

	private $_strConfigPath;	// Chemin relatif vers config/
    private $_strCssPath;		// Chemin relatif vers config/css/
    
    private $_strScriptsPath;	// Chemin relatif vers scripts/

    //	***** ***** ***** CONSTANTES ***** ***** ***** //
    const PAGE_INDEX = "index.php";

    //	***** ***** ***** CONSTRUCTEUR ***** ***** ***** //
    public function __construct($strNewName){
        $this->setName($strNewName);
        if ($this->getName() == self::PAGE_INDEX){
            $this->setIndexPath("");
            $this->setMediaPath("media/");
            $this->setPicturesPath("media/pics/");
            $this->setConfigPath("config/");
            $this->setCssPath("config/css/");
            $this->setScriptsPath("scripts/");
        } else {
            $this->setIndexPath("../");
            $this->setMediaPath("../media/");
            $this->setPicturesPath("../media/pics/");
            $this->setConfigPath("../config/");
            $this->setCssPath("../config/css/");
            $this->setScriptsPath("../scripts/");
        }
    }
    //	***** ***** ***** SETTERS ***** ***** ***** //
	public function setName($strNewName){                   // Nom de la page avec extension
        $this->_strName = $strNewName;
    }
    public function setTitle($strNewTitle){                 // Titre de la page
		$this->_strTitle = $strNewTitle;
	}
	public function setDescription($strNewDescription){     // Rôle de la page
		$this->_strDescription = $strNewDescription;
    }
    public function setPath($strNewPath){                   // Chemin de la page
		$this->_strPath = $strNewPath;
    }
    public function setIndexPath($strNewIndexPath){         // Chemin relatif vers l'index du site
		$this->_strIndexPath = $strNewIndexPath;
    }
    public function setMediaPath($strNewMediaPath){         // Chemin relatif vers le répertoire 'media/'
		$this->_strMediaPath = $strNewMediaPath;
    }
    public function setPicturesPath($strNewPicturesPath){   // Chemin relatif vers le répertoire 'media/pics'
		$this->_strPicturesPath = $strNewPicturesPath;
    }
    public function setConfigPath($strNewConfigPath){       // Chemin relatif vers le répertoire 'config/'
		$this->_strConfigPath = $strNewConfigPath;
    }
    public function setCssPath($strNewCssPath){            // Chemin relatif vers le répertoire 'config/css'
		$this->_strCssPath = $strNewCssPath;
    }
    public function setScriptsPath($strNewScriptsPath){    // Chemin relatif vers le répertoire 'scripts/'
		$this->_strScriptsPath = $strNewScriptsPath;
    }
	//	***** ***** ***** GETTERS ***** ***** ***** //
	public function getName(){				// Extraction du nom
		return $this->_strName;
	}
	public function getTitle(){				// Extraction du titre
		return $this->_strTitle;
	}
	public function getDescription(){		// Extraction de la description
		return $this->_strDescription;
	}
	public function getPath(){				// Extraction du chemin
		return $this->_strPath;
	}
	public function getIndexPath(){			// Extraction du chemin vers l'index
		return $this->_strIndexPath;
	}
	public function getMediaPath(){			// Extraction du chemin des medias
		return $this->_strMediaPath;
	}
	public function getPicturesPath(){		// Extraction du chemin des images
		return $this->_strPicturesPath;
	}
	public function getLogosPath(){			// Extraction du chemin des logos
		return $this->_strLogosPath;
	}
	public function getConfigPath(){		// Extraction du chemin des fichiers de configuration
		return $this->_strConfigPath;
	}
	public function getCssPath(){			// Extraction du chemin des fichiers css
		return $this->_strCssPath;
	}
	public function getScriptsPath(){		// Extraction du chemin des scripts du site
		return $this->_strScriptsPath;
	}
}
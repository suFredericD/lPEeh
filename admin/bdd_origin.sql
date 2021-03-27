/*** *** *** SUPPRESION DES TABLES EXISTANTES *** *** ***/
DROP TABLE if exists ebenist.rubrique;
DROP TABLE if exists ebenist.ficheAcc;

/*** *** *** *** CREATION DES TABLES *** *** *** ***/
CREATE TABLE ebenist.rubrique (
	rub_Id TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
	rub_Label VARCHAR(30) NOT NULL,
	rub_Page VARCHAR(40) NOT NULL,
	PRIMARY KEY (rub_Id)
);

CREATE TABLE ebenist.ficheAcc (
	facc_Id 	TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
	facc_Label 	VARCHAR(20) NOT NULL,
	facc_Page 	VARCHAR(40) NOT NULL,
	facc_Text 	TEXT NOT NULL,
	PRIMARY KEY (facc_Id)
);

/*** *** *** *** INSERTION DES DONNEES *** *** *** ***/
INSERT INTO ebenist.rubrique (rub_Label, rub_Page) VALUES
	("Accueil", "index.php"),
	("À propos", "aPropos.php"),
	("Valeurs", "valeurs.php"),
	("Créations", "creations.php"),
	("Contacts", "contacts.php")
;

INSERT INTO ebenist.ficheAcc (facc_Label, facc_Page, facc_Text) VALUES
	("À propos", "aPropos.php", "<strong>La Petite Ébénisterie en Herbe</strong>&nbsp;&nbsp;naît en <em>Ardèche</em> en 2021 dans le petit village de Chirols.<br>Elle crée et fabrique pour vous un mobilier contemporain respectueux de l’environnement.<br>Sa raison d’être : la passion du bois, laquelle fait sa noblesse.<br><strong>La Petite Ébénisterie en Herbe</strong>&nbsp;&nbsp;se nourrit du patrimoine technique de l’ébénisterie traditionnelle comme du génie de ses acteurs. Ses créations se veulent pratiques, fonctionnelles, ergonomiques, confortables, modulables et bien évidemment belles, harmonieuses et esthétiques.<br><strong>La Petite Ébénisterie en Herbe</strong>&nbsp;&nbsp;&nbsp;crée et fabrique des séries limitées et des pièces uniques. Elle crée également des objets de décoration intérieure (lampes, tableaux...) ainsi que des bijoux (pendentifs, boucles d'oreilles...).");
INSERT INTO ebenist.ficheAcc (facc_Label, facc_Page, facc_Text) VALUES
	("Nos Valeurs", "valeurs.php", "<strong>La Petite Ébénisterie en Herbe</strong>&nbsp;&nbsp;fabrique artisanalement au sein de son atelier de Chirols. Les matériaux sont tous issus d’<em>Ardèche</em> et plus largement de la <em>région Auvergne-Rhône-Alpes</em>, tout comme les contributeurs fournisseurs et collaborateurs.<br><span class=\"accFicheSubtitle\">La préservation de l’environnement</span><br>Elle constitue la pierre angulaire de l’activité de la Petite Ébénisterie en Herbe qui ne recourt qu’à des colles, vernis et résines à faible impact environnemental, tant en matière d’utilisation que de fabrication.<br>Les mobiliers et les objets créés sont pérennes, de haute qualité, élaborés pour être durables et intemporels.<br><span class=\"accFicheSubtitle\">La valorisation des matériaux</span><br>Les pertes de matériaux, chutes, copeaux et sciures sont recyclées selon une logique de développement durable ou affectées à d'autres projets. Les circuits courts sont privilégiés tant en matière d’achats que de ventes.");
INSERT INTO ebenist.ficheAcc (facc_Label, facc_Page, facc_Text) VALUES
	("Nos Créations", "creations.php", "Le blog des créations de <strong>La Petite Ébénisterie en Herbe</strong>&nbsp;&nbsp;pour découvrir toutes les créations déjà abouties et celles qui sont encore en cours d'ouvrage...");
INSERT INTO ebenist.ficheAcc (facc_Label, facc_Page, facc_Text) VALUES
	("Nous contacter", "contacts.php", "Retrouver tous les liens utiles pour contacter <strong>La Petite Ébénisterie en Herbe</strong>&nbsp;&nbsp;et suivre les actualités, évènements ou tout simplement obtenir plus d'informations (tarifications, devis...) par email.");










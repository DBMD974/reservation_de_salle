CREATE TABLE `Utilisateurs` (
	`id_utilisateur` INT NOT NULL AUTO_INCREMENT,
	`nom` varchar(100) NOT NULL,
	`email` varchar(200) NOT NULL,
	`password` varchar(150) NOT NULL,
	PRIMARY KEY (`id_utilisateur`)
);

CREATE TABLE `Salles_de_reunion` (
	`id_salle` INT NOT NULL AUTO_INCREMENT,
	`nom` varchar(100) NOT NULL,
	`capacite` INT NOT NULL,
	`description` TEXT(100000) NOT NULL,
	`equipement` TEXT(100000) NOT NULL,
	PRIMARY KEY (`id_salle`,`capacite`)
);

CREATE TABLE `reservations` (
	`id_reservation` INT NOT NULL AUTO_INCREMENT,
	`id_utilisateur` INT NOT NULL,
	`id_salle` INT NOT NULL,
	`date_debut` DATE NOT NULL,
	`date_fin` DATE NOT NULL,
	PRIMARY KEY (`id_reservation`)
);

ALTER TABLE `reservations` ADD CONSTRAINT `reservations_fk0` FOREIGN KEY (`id_utilisateur`) REFERENCES `Utilisateurs`(`id_utilisateur`);

ALTER TABLE `reservations` ADD CONSTRAINT `reservations_fk1` FOREIGN KEY (`id_salle`) REFERENCES `Salles_de_reunion`(`id_salle`);





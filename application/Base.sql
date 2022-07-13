CREATE DATABASE IF NOT EXISTS user;
USE user;

CREATE TABLE `users` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `administrateur` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO administrateur(username ,email, password) VALUES ('rabe','rabe@gmail.com',SHA('1234'));
INSERT INTO administrateur(username ,email, password) VALUES ('rakoto','rakoto@gmail.com','0000');

CREATE TABLE IF NOT EXISTS `items` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `title` varchar(255) NOT NULL,
 `description` varchar(255) NOT NULL,
 `created_at` datetime NOT NULL,
 `updated_at` datetime NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `typePassager` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `typePassager` varchar(255) NOT NULL,
 `pourcentage` int(11) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ;

INSERT INTO typePassager(typePassager , pourcentage) VALUES ('Adulte','100');
INSERT INTO typePassager(typePassager , pourcentage) VALUES ('Enfant','50');
INSERT INTO typePassager(typePassager , pourcentage) VALUES ('Bebe','20');

CREATE TABLE IF NOT EXISTS `trajet` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `villeOrigine` varchar(255) NOT NULL,
 `villeDestination` varchar(255) NOT NULL,
 `distanace` int(11) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ;
--sssssssssssssssss
INSERT INTO trajet(villeOrigine , villeDestination , distanace) VALUES ('Tana','Toamasina','500');
INSERT INTO trajet(villeOrigine , villeDestination , distanace) VALUES ('Tana','Nosy Be','1500');
INSERT INTO trajet(villeOrigine , villeDestination , distanace) VALUES ('Tana','Mahajanga','1000');

CREATE TABLE IF NOT EXISTS `vol` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `heureDepart` time NOT NULL,
 `idTrajet` int(11) NOT NULL,
 `prix` real NOT NULL,
 PRIMARY KEY (`id`),
 FOREIGN KEY (`idTrajet`) REFERENCES trajet(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ;

INSERT INTO vol(heureDepart , idTrajet , prix) VALUES ('22:01','1','200000');
INSERT INTO vol(heureDepart , idTrajet , prix) VALUES ('08:00','2','150000');
INSERT INTO vol(heureDepart , idTrajet , prix) VALUES ('12:30','3','90000');

CREATE TABLE IF NOT EXISTS `client` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `nomClient` varchar(255) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ;

INSERT INTO client (nomClient) VALUES ('rakoto');

CREATE TABLE IF NOT EXISTS `achat` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `idVol` int(11) NOT NULL,
 `idClient` int(11) NOT NULL,
 `dateAchat` datetime NOT NULL,
 PRIMARY KEY (`id`),
 FOREIGN KEY (`idVol`) REFERENCES vol(`id`),
 FOREIGN KEY (`idClient`) REFERENCES client(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ;

CREATE TABLE IF NOT EXISTS `detailsAchat` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `idAchat` int(11) NOT NULL,
 `idTypePassager` int(11) NOT NULL,
 `quantite` int(11) NOT NULL,
 PRIMARY KEY (`id`),
 FOREIGN KEY (`idAchat`) REFERENCES achat(`id`),
 FOREIGN KEY (`idClient`) REFERENCES typePassager(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ;

------------------------------------------------------
CREATE TABLE `users` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO users(username ,name, email) VALUES ('ony','ony','ony@gmail.com');
INSERT INTO users(username ,name, email) VALUES ('tiana','tiana','tiana@gmail.com');

ALTER TABLE users ADD
portefeuille real;

ALTER TABLE users ADD
sortie real;

CREATE TABLE `administrateur` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO administrateur(username ,email, password) VALUES ('rabe','rabe@gmail.com',SHA('1234'));
INSERT INTO administrateur(username ,email, password) VALUES ('rakoto','rakoto@gmail.com','0000');

CREATE TABLE IF NOT EXISTS `types` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `types` varchar(50) NOT NULL,
`remarque` varchar(50) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ;

CREATE TABLE IF NOT EXISTS `vehicule` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `numero` int(11) NOT NULL,
 `idtype` int(11) NOT NULL,
 `remarque` varchar(50) NOT NULL,
 PRIMARY KEY (`id`),
 FOREIGN KEY (`idtype`) REFERENCES types(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ;

CREATE TABLE IF NOT EXISTS `place` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `numero` int(11) NOT NULL,
`remarque` varchar(50) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ;

ALTER TABLE place ADD
taille INT(11);

INSERT INTO place(numero , remarque) values ('101','none');
INSERT INTO place(numero , remarque) values ('102','none');
INSERT INTO place(numero , remarque) values ('103','none');
INSERT INTO place(numero , remarque) values ('104','none');
INSERT INTO place(numero , remarque) values ('105','none');
INSERT INTO place(numero , remarque) values ('106','none');

CREATE TABLE IF NOT EXISTS `Parking` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`idPlace` int(50) NOT NULL,
`idTarif` int(50) NOT NULL,
`numVehicule` int(50) NOT NULL,
`dateDebut` datetime,
`remarque` varchar(50) NOT NULL,
 PRIMARY KEY (`id`),
 FOREIGN KEY (`idPlace`) REFERENCES place(`id`),
 FOREIGN KEY (`idTarif`) REFERENCES tarif(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ;

ALTER TABLE Parking 
ADD duree time;

CREATE TABLE IF NOT EXISTS `tarif` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `durree` time,
 `montant` real,
`remarque` varchar(50) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ;

INSERT INTO tarif(durree , montant , remarque) VALUES ('15:00','1000','none');
INSERT INTO tarif(durree , montant , remarque) VALUES ('30:00','3000','none');
INSERT INTO tarif(durree , montant , remarque) VALUES ('60:00','5000','none');

CREATE TABLE IF NOT EXISTS `Ammende` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`idParking` int(11) NOT NULL,
`montant` real,
 PRIMARY KEY (`id`),
 FOREIGN KEY (`idParking`) REFERENCES parking(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ;

CREATE TABLE IF NOT EXISTS `Avalider` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`idUser` int(11) NOT NULL,
`montant` real,
`daty` datetime,
`remarque` varchar(50) NOT NULL,
 PRIMARY KEY (`id`),
 FOREIGN KEY (`idUser`) REFERENCES users(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ;

CREATE TABLE IF NOT EXISTS `PorteFeuille` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`idUser` int(11) NOT NULL,
`montantEntree` real,
`montantSortie` real,
`datModifier` datetime,
`etat` int(11) NOT NULL,
`remarque` varchar(50) NOT NULL,
 PRIMARY KEY (`id`),
 FOREIGN KEY (`idUser`) REFERENCES user(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ;


CREATE TABLE IF NOT EXISTS `Partir` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`idParking` int(11) NOT NULL,
`datePartir` datetime,
 PRIMARY KEY (`id`),
 FOREIGN KEY (`idParking`) REFERENCES parking(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ;



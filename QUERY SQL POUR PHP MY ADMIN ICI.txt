create database inventaire;

use inventaire;

CREATE TABLE `utilisateur` (
  `id_utilisateur` int primary key NOT NULL auto_increment,
  `password` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
);

CREATE TABLE `produits` (
  `id_produits` int primary key NOT NULL auto_increment,
  `liste` varchar(230) NOT NULL,
  `prix` int NOT NULL,
  `dates`  timestamp not null default current_timestamp on update current_timestamp,
);

ALTER TABLE produits AUTO_INCREMENT=100;
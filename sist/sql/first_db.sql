CREATE DATABASE db_contacts;

USE db_contacts;

CREATE TABLE tb_contacts(
	email VARCHAR(50) NOT NULL,
	name VARCHAR(50) NOT NULL,
	sex CHAR(1),
	birth DATE,
	phone VARCHAR(13),
	country VARCHAR(50) NOT NULL,
	PRIMARY KEY(email),
	FULLTEXT KEY searcher(email, name, sex, phone, country)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE country(
	id_country INT NOT NULL AUTO_INCREMENT,
	country VARCHAR(50) NOT NULL,
	PRIMARY KEY(id_country)
)ENGINE=MyISAM DEFAULT CHARSET=utf8_general_ci;

INSERT INTO country (id_country) VALUES
	(1,"Brasil"),
	(2,"México"),
	(3,"USA"),
	(4,"Cannada"),
	(5,"France"),
	(6,"Germany");
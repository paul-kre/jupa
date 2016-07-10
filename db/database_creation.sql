DROP DATABASE juliapaschos;

CREATE DATABASE juliapaschos;

USE juliapaschos;

CREATE TABLE page ( 
	urlname VARCHAR(50),
	parent VARCHAR(50),
	nicename VARCHAR(80),
	description VARCHAR(255),
	position INT(8),
	enabled BOOLEAN DEFAULT TRUE,
	PRIMARY KEY (urlname),
	FOREIGN KEY (parent)
		REFERENCES page(urlname)
		ON DELETE CASCADE
) ENGINE=INNODB;
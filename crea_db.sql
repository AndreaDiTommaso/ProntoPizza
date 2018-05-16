DROP DATABASE IF EXISTS Prontopizza;
CREATE DATABASE Prontopizza;
USE Prontopizza;
CREATE TABLE Utente (
 nome_utente varchar (20) NOT NULL,
 nome varchar (20) NOT NULL,
 cognome varchar (20) NOT NULL,
 telefono int (10),
 password int (20) NOT NULL,
 data_nascita DATE NOT NULL,
 sesso TINYINT NOT NULL,
 citta varchar (20) NOT NULL,
 provincia varchar (2) NOT NULL,
 indirizzo varchar (40) NOT NULL,
 is_ristoratore TINYINT DEFAULT '0',
 is_amministratore TINYINT DEFAULT '0',
 PRIMARY KEY (nome_utente)
 );
 CREATE TABLE Ristorante (
 id int NOT NULL AUTO_INCREMENT,
 nome varchar (20) NOT NULL,
 telefono int (10),
 ristoratore varchar (20) NOT NULL,
 citta varchar (20) NOT NULL,
 provincia varchar (2) NOT NULL,
 indirizzo varchar (40) NOT NULL,
 descrizione TEXT,
 PRIMARY KEY (id),
 FOREIGN KEY (ristoratore) REFERENCES Utente(nome_utente)
 );
 CREATE TABLE Tavolo (
 id int NOT NULL AUTO_INCREMENT,
 posti int NOT NULL,
 prenotato TINYINT NOT NULL,
 numero int NOT NULL, 
 ristorante int NOT NULL,
 data_prenotazione DATETIME NOT NULL,
 PRIMARY KEY (id),
 FOREIGN KEY (ristorante) REFERENCES Ristorante(id)
 );
 CREATE TABLE Cibo (
 id int NOT NULL AUTO_INCREMENT,
 ristorante int NOT NULL,
 prezzo int  NOT NULL,
 nome varchar(30) NOT NULL, 
 tipo varchar(20) NOT NULL ,
 PRIMARY KEY (id),
 FOREIGN KEY (ristorante) REFERENCES Ristorante(id)
 );
 CREATE TABLE Prenotazione (
 id
  int NOT NULL AUTO_INCREMENT,
 ristorante int NOT NULL,
 utente varchar (20) NOT NULL,
 tavolo int NOT NULL,
 effettuata TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
 data_prenotazione DATETIME NOT NULL ,
 visualizzata TINYINT DEFAULT '0',
 info TEXT,
 PRIMARY KEY (id), 
 FOREIGN KEY (ristorante) REFERENCES Ristorante(id),
 FOREIGN KEY (utente) REFERENCES Utente(nome_utente),
 FOREIGN KEY (tavolo) REFERENCES Tavolo(id)
 );
 CREATE TABLE Ordine (
 id int NOT NULL AUTO_INCREMENT,
 ristorante int NOT NULL,
 utente varchar (20) NOT NULL,
 effettuata TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
 data_consegna DATETIME NOT NULL ,
 visualizzata TINYINT DEFAULT '0',
 pagato TINYINT DEFAULT '0',
 confermato TINYINT DEFAULT '0',
 info TEXT,
 PRIMARY KEY (id),
 FOREIGN KEY (ristorante) REFERENCES Ristorante(id),
 FOREIGN KEY (utente) REFERENCES Utente(nome_utente)
 );
 CREATE TABLE Ordineitem (
 id int NOT NULL AUTO_INCREMENT,
 ordine int NOT NULL,
 cibo int NOT NULL,
 quantita int NOT NULL,
 PRIMARY KEY (id),
 FOREIGN KEY (ordine) REFERENCES Ordine(id),
 FOREIGN KEY (cibo) REFERENCES Cibo(id)
 );
 CREATE TABLE Commento (
 id int NOT NULL AUTO_INCREMENT,
 utente varchar(20) NOT NULL,
 ristorante int  NOT NULL,
 data TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
 PRIMARY KEY (id),
 FOREIGN KEY (utente) REFERENCES Utente(nome_utente),
 FOREIGN KEY (ristorante) REFERENCES Ristorante(id)
 );
 
 

CREATE TABLE categorie
  (
     id  INT PRIMARY KEY auto_increment NOT NULL,
     nom VARCHAR(255) NOT NULL
  );

CREATE TABLE article
  (
     id          INT PRIMARY KEY auto_increment NOT NULL,
     nom_produit VARCHAR(255) NOT NULL,
     prix        DECIMAL(6, 2) NOT NULL,
     description TEXT NOT NULL,
     image       VARCHAR(255) NOT NULL,
     stock       INT NOT NULL
  );

CREATE TABLE client
  (
     id             INT auto_increment NOT NULL,
     pseudo         VARCHAR(30) NOT NULL,
     nom            VARCHAR(30),
     prenom         VARCHAR(30),
     sexe           VARCHAR(12),
     email          VARCHAR(30) NOT NULL,
     date_naissance VARCHAR(12),
     telephone      VARCHAR(13),
     adresse        VARCHAR(50),
     ville          VARCHAR(40),
     code_postal    CHAR(5),
     password       CHAR(40) NOT NULL,
     PRIMARY KEY (id)
  );

CREATE TABLE achat
  (
     id           INT auto_increment NOT NULL,
     panier_id    INT NOT NULL,
     client_id    INT NOT NULL,
     categorie_id INT NOT NULL,
     date_achat   DATETIME NOT NULL,
     confirmation BOOLEAN,
     PRIMARY KEY (id, client_id)
  );

CREATE TABLE note
  (
     id        INT auto_increment NOT NULL,
     article_  INT NOT NULL,
     client_id INT NOT NULL,
     note      INT NOT NULL,
     PRIMARY KEY (id, article_, client_id)
  );

CREATE TABLE commentaire
  (
     id           INT auto_increment NOT NULL,
     client_id    INT NOT NULL,
     article_id   INT NOT NULL,
     categorie_id INT NOT NULL,
     message      TEXT NOT NULL,
     PRIMARY KEY (id, client_id, article_id)
  );

CREATE TABLE panier
  (
     id              INT auto_increment NOT NULL,
     article_id      INT NOT NULL,
     categorie_id    INT NOT NULL,
     client_id       INT NOT NULL,
     nombre_articles INT NOT NULL,
     PRIMARY KEY (id, client_id)
  );

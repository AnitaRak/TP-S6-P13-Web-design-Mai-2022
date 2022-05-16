create table admin(
    id Serial PRIMARY KEY,
    email varchar(50),
    mdp varchar(50)
);
insert into admin(email,mdp) values('admin@admin.com','admin');
create table pays(
    id Serial PRIMARY KEY,
    nom varchar(50)
);
Insert into pays(nom) values('Madagascar');
Insert into pays(nom) values('France');


create table actualite(
    id Serial PRIMARY KEY,
    id_pays int,
    tilte varchar(50),
    daty date ,
    apropos Text,
    sary varchar(50),
    url varchar(50),
    FOREIGN KEY (id_pays) REFERENCES pays(id)
);

CREATE OR REPLACE VIEW listeactualite AS 
 SELECT actualite.id AS idactualite,
    actualite.tilte,
    actualite.daty,
    actualite.apropos,
    actualite.sary,
    pays.nom,
    actualite.url
   FROM actualite
     JOIN pays ON actualite.id_pays = pays.id;




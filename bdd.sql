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
Insert into pays(nom) values("Madagascar");
Insert into pays(nom) values("France");


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

insert into actualite(id_pays,tilte,daty,apropos,sary)values(1,'la famine dans le sud','2022-03-25','Selon le Programme alimentaire Mondial, la famine liée à la grave sècheresse qui frappe le Grand Sud de Madagascar serait dûe au réchauffement climatique. Une affirmation reprise notamment par les autorités malgaches mais qui est aujourd´hui battue en brèche par une étude scientifique d´experts des événements climatiques extrêmes','images/famine');


create table cause(
    id Serial PRIMARY KEY,
    titre varchar(255),
    apropos Text,
    sary varchar(50)
);
insert into cause(titre,apropos,sary)values('Deforestation','La déforestation est la résultante d´un changement d´usage des sols forestiers permanent. Dans la grande majorité des cas, les forêts sont coupées pour la mise en place d´activités agricoles (73 %), pour l´expansion urbaine (10 %), le développement d´infrastructures (10 %), et enfin l´exploitation minière (7 %).','images/sary1');
insert into cause(titre,apropos,sary)values('Effet serre','Utilisation gaz effet serre :fumer usine, voiture','images/sary2');


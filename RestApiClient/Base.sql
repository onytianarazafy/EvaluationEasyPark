create database devisClient;
use devisClient;
create table client (
	idClient int not null auto_increment primary key,
	nomClient varchar(100),
	devis real
);

insert into  client (nomClient,devis) values ("Rakoto",100000);
insert into  client (nomClient,devis) values ("Rabe",200000);
insert into  client (nomClient,devis) values ("Rasoa",300000);


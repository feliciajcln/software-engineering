create database mobiluxe
use mobiluxe

CREATE TABLE user(
    UserId int NOT NULL AUTO_INCREMENT,
    Username char(50) NOT NULL,
    UserEmail char(50) NOT NULL unique,
    UserPass char(20) NOT NULL,
    UserPhone char(20) NOT NULL,
    UserAddres char(50) NOT NULL,
    UserCity char(20) NOT NULL,
    UserNIK char(20) NOT NULL,
    
    PRIMARY KEY (UserId)
);

CREATE TABLE car(
    CarId int NOT NULL AUTO_INCREMENT,
    UserId int NOT NULL,
	Carname char(50) NOT NULL,
    CarTipe char(20) NOT NULL,
    CarTahun char(5) NOT NULL,
    CarTransmisi char(50) NOT NULL,
    CarKapasitas int NOT NULL,
    CarPlat char(20) NOT NULL,
    CarCity char(20) NOT NULL,
    
    PRIMARY KEY (CarId)
);

Create Table transaction (
	id_transaksi int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_tenant int NOT NULL,
    id_customer int NOT NULL,
    id_mobil int NOT NULL,
	harga CHAR (15),
    tgl_pengambilan DATE,
    tgl_pengembalian DATE,
    Lokasi_pengambilan VARCHAR (100),
	Lokasi_pengembalian VARCHAR (100)
);

DROP TABLE user;
DROP TABLE transaction;
DROP TABLE car;

 
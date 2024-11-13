create database CrabStore;
use CrabStore;

create table Category (
     categoryName varchar(255) not null,
     shortDescription text not null,
     description text not null,
     constraint primary key (categoryName));

create table Configurable (
     configurableId int(11) not null,
     name varchar(255) not null,
     productId int(11) not null,
     constraint primary key (configurableId));

create table ConfigurableOption (
     configurableOptionId int(11) not null,
     details text not null,
     price decimal(10, 2) not null, /* 10 is the precision, 2 is the number of decimals*/
     configurableId int(11) not null,
     constraint primary key (configurableOptionId));

create table Customer (
     username varchar(255) not null,
     firstName varchar(255) not null,
     lastName varchar(255) not null,
     email varchar(255) not null,
     phoneNumber varchar(255) not null,
     accountCreationDate date not null,
     password varchar(255) not null,
     balance decimal(10, 2) not null,
     constraint primary key (username));

create table CustomProduct (
     customProductId int(11) not null,
     configuredPrice decimal(10, 2) not null,
     productId int(11) not null,
     finalPrice decimal(10, 2) not null,
     constraint primary key (customProductId));

create table Notification (
     notificationId int(11) not null,
     description text not null,
     date date not null,
     isRead bool not null,
     username varchar(255) not null,
     constraint primary key (notificationId));

create table `Order` (
     orderId int(11) not null,
     status enum('ordered', 'inTransit', 'delivered') not null,
     orderDate date not null,
     deliveryDate date,
     username varchar(255) not null,
     constraint primary key (orderId));

create table Product (
     productId int(11) not null,
     name varchar(255) not null,
     lineUpName varchar(255) not null,
	 shortDescription text not null,
     description text not null,
     price decimal(10, 2) not null,
     releaseDate date,
     status enum('released', 'discontinued', 'upcoming') not null,
     specSheet blob,
     categoryName varchar(255) not null,
     discountName varchar(255),
     constraint primary key (productId));

create table Discount (
     discountName varchar(255) not null,
     amount decimal(10, 2) not null,
     constraint primary key (discountName));

create table CartProduct (
     customProductId int(11) not null,
     username varchar(255) not null,
     amount int(11) not null,
     constraint primary key (username, customProductId));

create table Customization (
     configurableOptionId int(11) not null,
     customProductId int(11) not null,
     constraint primary key (configurableOptionId, customProductId));

create table OrderProduct (
     orderId int(11) not null,
     customProductId int(11) not null,
     amount int(11) not null,
     constraint primary key (customProductId, orderId));

alter table Configurable add constraint
     foreign key (productId)
     references Product (productId);

alter table ConfigurableOption add constraint
     foreign key (configurableId)
     references Configurable (configurableId);

alter table CustomProduct add constraint
     foreign key (productId)
     references Product (productId);

alter table Notification add constraint
     foreign key (username)
     references Customer (username);

alter table `Order` add constraint
     foreign key (username)
     references Customer (username);

alter table Product add constraint
     foreign key (categoryName)
     references Category (categoryName);

alter table Product add constraint
     foreign key (discountName)
     references Discount (discountName);

alter table CartProduct add constraint
     foreign key (username)
     references Customer (username);

alter table CartProduct add constraint
     foreign key (customProductId)
     references CustomProduct (customProductId);

alter table Customization add constraint
     foreign key (customProductId)
     references CustomProduct (customProductId);

alter table Customization add constraint
     foreign key (configurableOptionId)
     references ConfigurableOption (configurableOptionId);

alter table OrderProduct add constraint
     foreign key (customProductId)
     references CustomProduct (customProductId);

alter table OrderProduct add constraint
     foreign key (orderId)
     references `Order` (orderId);

CREATE DATABASE CrabStore;
USE CrabStore;

CREATE TABLE Category (
    categoryName VARCHAR(255) NOT NULL,
    shortDescription TEXT NOT NULL,
    description TEXT NOT NULL,
    icon VARCHAR(255) NOT NULL,
    mainImage VARCHAR(255) NOT NULL,
    secondaryImage VARCHAR(255) NOT NULL,
    video VARCHAR(255) NOT NULL,
    PRIMARY KEY (categoryName)
);

CREATE TABLE Configurable (
    configurableId INT AUTO_INCREMENT NOT NULL,
    name VARCHAR(255) NOT NULL,
    icon VARCHAR(255) NOT NULL,
    productId INT NOT NULL,
    PRIMARY KEY (configurableId)
);


CREATE TABLE ConfigurableOption (
    configurableOptionId INT AUTO_INCREMENT NOT NULL,
    details TEXT NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    configurableId INT NOT NULL,
    PRIMARY KEY (configurableOptionId)
);


CREATE TABLE Customer (
    username VARCHAR(50) NOT NULL,
    firstName VARCHAR(50) NOT NULL,
    lastName VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phoneNumber VARCHAR(15) NOT NULL,
    joinDate DATE NOT NULL,
    password VARCHAR(255) NOT NULL,
    balance DECIMAL(10,2) NOT NULL DEFAULT 0.00,
    PRIMARY KEY (username)
);


CREATE TABLE CustomProduct (
    customProductId INT AUTO_INCREMENT NOT NULL,
    configuredPrice DECIMAL(10,2) NOT NULL,
    finalPrice DECIMAL(10,2) NOT NULL,
    productId INT NOT NULL,
    PRIMARY KEY (customProductId)
);


CREATE TABLE Discount (
    discountName VARCHAR(255) NOT NULL,
    amount DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (discountName)
);

CREATE TABLE ProductVideo (
    videoId INT AUTO_INCREMENT NOT NULL,
    videoUrl TEXT NOT NULL,
    PRIMARY KEY (videoId)
);


CREATE TABLE ProductImage (
    imageId INT AUTO_INCREMENT NOT NULL,
    priority INT NOT NULL UNIQUE,
    imageUrl TEXT NOT NULL,
    productId INT NOT NULL,
    PRIMARY KEY (imageId)
);


CREATE TABLE Configuration (
    configurableOptionId INT NOT NULL,
    customProductId INT NOT NULL,
    PRIMARY KEY (configurableOptionId, customProductId)
);


CREATE TABLE OrderProduct (
    orderId INT NOT NULL,
    customProductId INT NOT NULL,
    amount INT NOT NULL,
    PRIMARY KEY (orderId, customProductId)
);

CREATE TABLE Notification (
    notificationId INT AUTO_INCREMENT NOT NULL,
    description TEXT NOT NULL,
    date DATETIME NOT NULL,
    isRead BOOLEAN NOT NULL DEFAULT 0,
    username VARCHAR(50) NOT NULL,
    PRIMARY KEY (notificationId)
);

CREATE TABLE `Order` (
    orderId INT AUTO_INCREMENT NOT NULL,
    orderStatus VARCHAR(50) NOT NULL,
    orderDate DATETIME NOT NULL,
    deliveryDate DATETIME,
    username VARCHAR(50) NOT NULL,
    PRIMARY KEY (orderId)
);

CREATE TABLE Product (
    productId INT AUTO_INCREMENT NOT NULL,
    name VARCHAR(255) NOT NULL,
    lineupName VARCHAR(255) NOT NULL,
    shortDescription TEXT NOT NULL,
    description TEXT NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    releaseDate DATE NOT NULL,
    productStatus VARCHAR(50) NOT NULL,
    specSheet TEXT NOT NULL,
    videoId INT DEFAULT NULL,
    categoryName VARCHAR(255) NOT NULL,
    discountName VARCHAR(255) DEFAULT NULL,
    PRIMARY KEY (productId)
);

CREATE TABLE CartProduct (
    customProductId INT NOT NULL,
    username VARCHAR(50) NOT NULL,
    amount INT NOT NULL,
    PRIMARY KEY (username, customProductId)
);

ALTER TABLE Configurable ADD CONSTRAINT
    FOREIGN KEY (productId)
    REFERENCES Product (productId);

ALTER TABLE ConfigurableOption ADD CONSTRAINT
    FOREIGN KEY (configurableId)
    REFERENCES Configurable (configurableId);

ALTER TABLE CustomProduct ADD CONSTRAINT
    FOREIGN KEY (productId)
    REFERENCES Product (productId);

ALTER TABLE ProductImage ADD CONSTRAINT
    FOREIGN KEY (productId)
    REFERENCES Product (productId);

ALTER TABLE Configuration ADD CONSTRAINT
    FOREIGN KEY (customProductId)
    REFERENCES CustomProduct (customProductId);

ALTER TABLE Configuration ADD CONSTRAINT
    FOREIGN KEY (configurableOptionId)
    REFERENCES ConfigurableOption (configurableOptionId);

ALTER TABLE OrderProduct ADD CONSTRAINT
    FOREIGN KEY (customProductId)
    REFERENCES CustomProduct (customProductId);

ALTER TABLE OrderProduct ADD CONSTRAINT
    FOREIGN KEY (orderId)
    REFERENCES `Order` (orderId);

ALTER TABLE Notification ADD CONSTRAINT
    FOREIGN KEY (username)
    REFERENCES Customer (username);

ALTER TABLE `Order` ADD CONSTRAINT
    FOREIGN KEY (username)
    REFERENCES Customer (username);

ALTER TABLE Product ADD CONSTRAINT
    FOREIGN KEY (videoId)
    REFERENCES ProductVideo (videoId);

ALTER TABLE Product ADD CONSTRAINT
    FOREIGN KEY (categoryName)
    REFERENCES Category (categoryName);

ALTER TABLE Product ADD CONSTRAINT
    FOREIGN KEY (discountName)
    REFERENCES Discount (discountName);

ALTER TABLE CartProduct ADD CONSTRAINT
    FOREIGN KEY (username)
    REFERENCES Customer (username);

ALTER TABLE CartProduct ADD CONSTRAINT
    FOREIGN KEY (customProductId)
    REFERENCES CustomProduct (customProductId);

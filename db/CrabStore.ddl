CREATE DATABASE CrabStore;
USE CrabStore;

CREATE TABLE CartProduct (
    customProductId INT NOT NULL,
    email VARCHAR(50) NOT NULL,
    amount INT NOT NULL,
    PRIMARY KEY (customProductId)
);

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
    isDefault BOOLEAN NOT NULL,
    details TEXT NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    configurableId INT NOT NULL,
    PRIMARY KEY (configurableOptionId)
);

CREATE TABLE Configuration (
    configurableOptionId INT NOT NULL,
    customProductId INT NOT NULL,
    PRIMARY KEY (configurableOptionId, customProductId)
);

CREATE TABLE Customer (
    firstName VARCHAR(50) NOT NULL,
    lastName VARCHAR(50) NOT NULL,
    email VARCHAR(255) NOT NULL,
    joinDate DATE NOT NULL,
    password VARCHAR(255) NOT NULL,
    balance DECIMAL(10,2) NOT NULL DEFAULT 0.00,
    PRIMARY KEY (email)
);

CREATE TABLE CustomProduct (
    customProductId INT AUTO_INCREMENT NOT NULL,
    configuredPrice DECIMAL(10,2) NOT NULL,
    finalPrice DECIMAL(10,2) NOT NULL,
    productId INT NOT NULL,
    PRIMARY KEY (customProductId)
);

CREATE TABLE Discount (
    discountId INT AUTO_INCREMENT NOT NULL,
    name VARCHAR(50) NOT NULL,
    amount DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (discountId)
);

CREATE TABLE Notification (
    notificationId INT AUTO_INCREMENT NOT NULL,
    subject VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    date DATETIME NOT NULL,
    isRead BOOLEAN NOT NULL DEFAULT 0,
    email VARCHAR(50) NOT NULL,
    PRIMARY KEY (notificationId)
);

CREATE TABLE `Order` (
    orderId INT AUTO_INCREMENT NOT NULL,
    orderStatus VARCHAR(50) NOT NULL,
    orderDate DATETIME NOT NULL,
    deliveryDate DATETIME,
    email VARCHAR(50) NOT NULL,
    PRIMARY KEY (orderId)
);

CREATE TABLE Product (
    productId INT AUTO_INCREMENT NOT NULL,
    name VARCHAR(255) NOT NULL,
    subtype VARCHAR(50) DEFAULT NULL,
    shortDescription TEXT NOT NULL,
    description TEXT NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    releaseDate DATE,
    productStatus VARCHAR(50) NOT NULL,
    specSheet BLOB NOT NULL,
    video VARCHAR(255),
    categoryName VARCHAR(255) NOT NULL,
    discountId INT,
    PRIMARY KEY (productId)
);

CREATE TABLE ProductImage (
    imageUrl VARCHAR(255) NOT NULL,
    PRIMARY KEY (imageUrl)
);

CREATE TABLE ProductImageUsage (
    imageUrl VARCHAR(255) NOT NULL,
    productId INT NOT NULL,
    priority INT NOT NULL,
    PRIMARY KEY (imageUrl, productId),
    UNIQUE (productId, priority)
);

CREATE TABLE OrderProduct (
    orderId INT NOT NULL,
    customProductId INT NOT NULL,
    amount INT NOT NULL,
    PRIMARY KEY (customProductId)
);

ALTER TABLE CartProduct ADD CONSTRAINT
    FOREIGN KEY (customProductId)
    REFERENCES CustomProduct (customProductId);

ALTER TABLE CartProduct ADD CONSTRAINT
    FOREIGN KEY (email)
    REFERENCES Customer (email);

ALTER TABLE Configurable ADD CONSTRAINT
    FOREIGN KEY (productId)
    REFERENCES Product (productId);

ALTER TABLE ConfigurableOption ADD CONSTRAINT
    FOREIGN KEY (configurableId)
    REFERENCES Configurable (configurableId);

ALTER TABLE Configuration ADD CONSTRAINT
    FOREIGN KEY (customProductId)
    REFERENCES CustomProduct (customProductId);

ALTER TABLE Configuration ADD CONSTRAINT
    FOREIGN KEY (configurableOptionId)
    REFERENCES ConfigurableOption (configurableOptionId);

ALTER TABLE CustomProduct ADD CONSTRAINT
    FOREIGN KEY (productId)
    REFERENCES Product (productId);

ALTER TABLE Notification ADD CONSTRAINT
    FOREIGN KEY (email)
    REFERENCES Customer (email);

ALTER TABLE `Order` ADD CONSTRAINT
    FOREIGN KEY (email)
    REFERENCES Customer (email);

ALTER TABLE Product ADD CONSTRAINT
    FOREIGN KEY (categoryName)
    REFERENCES Category (categoryName);

ALTER TABLE Product ADD CONSTRAINT
    FOREIGN KEY (discountId)
    REFERENCES Discount (discountId);

ALTER TABLE OrderProduct ADD CONSTRAINT
    FOREIGN KEY (orderId)
    REFERENCES `Order` (orderId);

ALTER TABLE OrderProduct ADD CONSTRAINT
    FOREIGN KEY (customProductId)
    REFERENCES CustomProduct (customProductId);

ALTER TABLE ProductImageUsage ADD CONSTRAINT
    FOREIGN KEY (productId)
    REFERENCES Product (productId);

ALTER TABLE ProductImageUsage ADD CONSTRAINT
    FOREIGN KEY (imageUrl)
    REFERENCES ProductImage (imageUrl);
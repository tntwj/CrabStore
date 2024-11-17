-- Insert Categories
INSERT INTO Category (categoryName, shortDescription, description, icon, mainImage, secondaryImage, video)
VALUES
    ('CrabMac', 'High-performance desktops and laptops', 'Experience the ultimate in computing power with our CrabMac lineup.', 
    'crabmac-icon.png', 'crabmac-main.jpg', 'crabmac-secondary.jpg', 'crabmac.mp4'),
    ('CrabPad', 'Portable and versatile tablets', 'Unleash creativity and productivity with CrabPad.', 
    'crabpad-icon.png', 'crabpad-main.jpg', 'crabpad-secondary.jpg', 'crabpad.mp4'),
    ('CrabPhone', 'Revolutionary smartphones', 'Connect with the world using CrabPhone, a premium communication device.', 
    'crabphone-icon.png', 'crabphone-main.jpg', 'crabphone-secondary.jpg', 'crabphone.mp4'),
    ('CrabWatch', 'Smartwatches for every lifestyle', 'Track fitness, health, and more with the CrabWatch.', 
    'crabwatch-icon.png', 'crabwatch-main.jpg', 'crabwatch-secondary.jpg', 'crabwatch.mp4'),
    ('CrabPods', 'Wireless earbuds and headphones', 'Immerse yourself in sound with CrabPods.', 
    'crabpods-icon.png', 'crabpods-main.jpg', 'crabpods-secondary.jpg', 'crabpods.mp4'),
    ('Accessories', 'Enhance your experience', 'Find the perfect accessories to complement your devices.', 
    'accessories-icon.png', 'accessories-main.jpg', 'accessories-secondary.jpg', 'accessories.mp4');

-- Insert Discounts
INSERT INTO Discount (discountId, name, amount)
VALUES
    (1, 'Holiday Discount 2024', 50.00);

-- Insert Products
########################################################
-- CrabMac Pro
########################################################
INSERT INTO Product (
    productId, name, shortDescription, description, price, releaseDate, productStatus, specSheet, video, categoryName, discountId
)
VALUES 
(1, 'CrabMac Pro', 'Ultimate desktop performance.', 
 'The CrabMac Pro delivers unmatched performance for professionals.',
 5999.00, '2024-11-01', 'Available', 
 '{"CPU": "Intel Xeon W", "RAM": ["64GB", "128GB", "256GB"], "Storage Options": ["1TB SSD", "2TB SSD", "4TB SSD", "8TB SSD"], "GPU": "AMD Radeon Pro Vega II"}', 
 NULL, 'CrabMac', 1);
 
INSERT INTO ProductImage(priority, imageUrl, productId) VALUES
(1, 'crabmacpro-main.jpeg', 1),
(2, 'crabmacpro-secondary.jpeg', 1),
(3, 'crabmacpro-tertiary.jpeg', 1);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(1, 'Storage Options', 'storage.png', 1),
(23, 'Ram Options', 'ram.png', 1);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
-- Storage Options
(1, 1, '1TB SSD', 0.00, 1),
(2, 0, '2TB SSD', 400.00, 1),
(3, 0, '4TB SSD', 800.00, 1),
(4, 0, '8TB SSD', 2000.00, 1),
-- Ram Options
(68, 1, '64GB', 0.00, 23),
(69, 0, '128GB', 500.00, 23),
(70, 0, '256GB', 1250.00, 23);

########################################################
-- CrabPhone 15
########################################################
INSERT INTO Product (
    productId, name, shortDescription, description, price, releaseDate, productStatus, specSheet, video, categoryName, discountId
)
VALUES 
(2, 'CrabPhone 15', 'Revolutionary smartphone.', 
 'The CrabPhone 15 redefines smartphone innovation with powerful hardware.',
 999.00, '2024-09-01', 'Available', 
 '{"CPU": "A17 Bionic", "RAM": "6GB", "Storage Options": ["128GB", "256GB", "512GB"], "Color Options": ["Black", "Silver", "Gold", "Deep Blue"], "Camera": "48MP Main"}', 
 NULL, 'CrabPhone', 1);
 
INSERT INTO ProductImage(priority, imageUrl, productId) VALUES
(1, 'crabphone15-main.jpeg', 2),
(2, 'crabphone15-secondary.jpeg', 2),
(3, 'crabphone15-tertiary.jpeg', 2);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(2, 'Storage Options', 'storage.png', 2),
(3, 'Color Options', 'color.png', 2);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
-- Storage Options
(5, 1, '128GB', 0.00, 2),
(6, 0, '256GB', 100.00, 2),
(7, 0, '512GB', 200.00, 2),

-- Color Options
(8, 1, 'Black', 0.00, 3),
(9, 0, 'Silver', 0.00, 3),
(10, 0, 'Gold', 50.00, 3),
(11, 0, 'Deep Blue', 50.00, 3);

########################################################
-- CrabWatch Ultra
########################################################
INSERT INTO Product (
    productId, name, shortDescription, description, price, releaseDate, productStatus, specSheet, video, categoryName, discountId
)
VALUES 
(3, 'CrabWatch Ultra', 'Adventure companion.', 
 'The CrabWatch Ultra is the ultimate smartwatch for fitness and exploration.',
 799.00, '2024-10-10', 'Available', 
 '{"Battery Life": "36 hours", "Display": "Sapphire Crystal", "Features": "GPS, Altimeter, Compass", "Band Options": ["Alpine Loop", "Ocean Band", "Trail Loop"]}', 
 NULL, 'CrabWatch', 1);

INSERT INTO ProductImage(priority, imageUrl, productId) VALUES
(1, 'crabwatchultra-main.jpeg', 3),
(2, 'crabwatchultra-secondary.jpeg', 3),
(3, 'crabwatchultra-tertiary.jpeg', 3);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(4, 'Band Options', 'band.png', 3);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
(12, 1, 'Alpine Loop', 0.00, 4),
(13, 0, 'Ocean Band', 50.00, 4),
(14, 0, 'Trail Loop', 50.00, 4);

########################################################
-- CrabPhone 16
########################################################
INSERT INTO Product (
    productId, name, shortDescription, description, price, releaseDate, productStatus, specSheet, video, categoryName, discountId
)
VALUES 
(4, 'CrabPhone 16', 'Enhanced performance and design.', 
 'The CrabPhone 16 offers faster performance and sleek design for everyday use.',
 1099.00, '2024-11-01', 'Available', 
 '{"CPU": "A18 Bionic", "RAM": "8GB", "Storage Options": ["128GB", "256GB", "512GB"], "Color Options": ["Black", "Silver", "Red", "Space Gray"], "Camera": "50MP Main"}', 
 NULL, 'CrabPhone', 1);
 
INSERT INTO ProductImage(priority, imageUrl, productId) VALUES
(1, 'crabphone16-main.jpeg', 4),
(2, 'crabphone16-secondary.jpeg', 4),
(3, 'crabphone16-tertiary.jpeg', 4);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(5, 'Storage Options', 'storage.png', 4),
(6, 'Color Options', 'color.png', 4);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
-- Storage Options
(15, 1, '128GB', 0.00, 5),
(16, 0, '256GB', 100.00, 5),
(17, 0, '512GB', 200.00, 5),

-- Color Options
(18, 1, 'Black', 0.00, 6),
(19, 0, 'Silver', 0.00, 6),
(20, 0, 'Red', 50.00, 6),
(21, 0, 'Space Gray', 50.00, 6);

########################################################
-- CrabPhone 17
########################################################
INSERT INTO Product (
    productId, name, shortDescription, description, price, releaseDate, productStatus, specSheet, video, categoryName, discountId
)
VALUES 
(5, 'CrabPhone 17', 'Next-gen mobile experience.', 
 'The CrabPhone 17 is packed with new features, offering an even better mobile experience.',
 1299.00, '2024-12-01', 'Available', 
 '{"CPU": "A18 Pro", "RAM": "8GB", "Storage Options": ["128GB", "256GB", "512GB"], "Color Options": ["Black", "Blue", "Gold", "Green"], "Camera": "64MP Main"}', 
 NULL, 'CrabPhone', NULL);
 
INSERT INTO ProductImage(priority, imageUrl, productId) VALUES
(1, 'crabphone17-main.jpeg', 5),
(2, 'crabphone17-secondary.jpeg', 5),
(3, 'crabphone17-tertiary.jpeg', 5);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(7, 'Storage Options', 'storage.png', 5),
(8, 'Color Options', 'color.png', 5);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
-- Storage Options
(22, 1, '128GB', 0.00, 7),
(23, 0, '256GB', 100.00, 7),
(24, 0, '512GB', 200.00, 7),

-- Color Options
(25, 1, 'Black', 0.00, 8),
(26, 0, 'Blue', 50.00, 8),
(27, 0, 'Gold', 50.00, 8),
(28, 0, 'Green', 50.00, 8);

########################################################
-- CrabMac Pro 16 (Desktop)
########################################################
INSERT INTO Product (
    productId, name, shortDescription, description, price, releaseDate, productStatus, specSheet, video, categoryName, discountId
)
VALUES 
(6, 'CrabMac Pro 16', 'Top-tier desktop performance for professionals.',
 'The CrabMac Pro 16 brings unparalleled desktop computing with more power and flexibility.',
 6499.00, '2024-11-10', 'Available', 
 '{"CPU": "Intel Xeon W-2295", "RAM": ["64GB", "128GB"], "Storage Options": ["1TB SSD", "2TB SSD", "4TB SSD", "8TB SSD"], "GPU": "AMD Radeon Pro W6800X"}', 
 NULL, 'CrabMac', 1);
 
INSERT INTO ProductImage(priority, imageUrl, productId) VALUES
(1, 'crabmacpro16-main.jpeg', 6),
(2, 'crabmacpro16-secondary.jpeg', 6),
(3, 'crabmacpro16-tertiary.jpeg', 6);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(9, 'Storage Options', 'storage.png', 6),
(24, 'Ram Options', 'ram.png', 6);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
-- Storage options
(29, 1, '1TB SSD', 0.00, 9),
(30, 0, '2TB SSD', 400.00, 9),
(31, 0, '4TB SSD', 800.00, 9),
(32, 0, '8TB SSD', 1200.00, 9),
-- Ram Options
(71, 1, '64GB', 0.00, 24),
(72, 0, '128GB', 750.00, 24);

########################################################
-- CrabMac Pro 17 (Desktop)
########################################################
INSERT INTO Product (
    productId, name, shortDescription, description, price, releaseDate, productStatus, specSheet, video, categoryName, discountId
)
VALUES 
(7, 'CrabMac Pro 17', 'Premium desktop for demanding workloads.',
 'The CrabMac Pro 17 offers powerful configurations ideal for creative professionals and engineers.',
 7499.00, NULL, 'Upcoming', 
 '{"CPU": "Intel Xeon W-2375", "RAM": ["128GB", "256GB"], "Storage Options": ["1TB SSD", "2TB SSD", "4TB SSD", "8TB SSD"], "GPU": "NVIDIA RTX A5000"}', 
 'crabmacpro17-teaser.mp4', 'CrabMac', NULL);
 
INSERT INTO ProductImage(priority, imageUrl, productId) VALUES
(1, 'crabmacpro17-main.jpeg', 7),
(2, 'crabmacpro17-secondary.jpeg', 7),
(3, 'crabmacpro17-tertiary.jpeg', 7);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(10, 'Storage Options', 'storage.png', 7),
(25, 'Ram Options', 'ram.png', 7);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
-- Storage options
(33, 1, '1TB SSD', 0.00, 10),
(34, 0, '2TB SSD', 400.00, 10),
(35, 0, '4TB SSD', 800.00, 10),
(36, 0, '8TB SSD', 1200.00, 10),
-- Ram options
(73, 1, '128GB', 0.00, 25),
(74, 0, '256GB', 500.00, 25);

########################################################
-- CrabMac Air (Laptop)
########################################################
INSERT INTO Product (
    productId, name, shortDescription, description, price, releaseDate, productStatus, specSheet, video, categoryName, discountId
)
VALUES 
(8, 'CrabMac Air', 'Lightweight and powerful laptop.',
 'The CrabMac Air offers the ideal balance between performance and portability.',
 1499.00, '2024-11-20', 'Available', 
 '{"CPU": "M2 Chip", "RAM": ["8GB", "16GB"], "Display": ["13 inch FullHD IPS", "15 inch 4K OLED"], "Storage Options": ["256GB SSD", "512GB SSD", "1TB SSD"], "GPU": "Apple M2 GPU"}', 
 NULL, 'CrabMac', 1);
 
INSERT INTO ProductImage(priority, imageUrl, productId) VALUES
(1, 'crabmacair-main.jpeg', 8),
(2, 'crabmacair-secondary.jpeg', 8),
(3, 'crabmacair-tertiary.jpeg', 8);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(11, 'Storage Options', 'storage.png', 8),
(26, 'Ram Options', 'ram.png', 8),
(27, 'Display Options', 'display.png', 8);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
-- Storage Options
(37, 1, '256GB SSD', 0.00, 11),
(38, 0, '512GB SSD', 200.00, 11),
(39, 0, '1TB SSD', 400.00, 11),
-- Ram Options
(75, 1, '8GB', 0.00, 26),
(76, 0, '16GB', 200.00, 26),
-- Display Options
(77, 1, '13 inch FullHD IPS', 0.00, 27),
(78, 0, '15 inch 4K OLED', 500.00, 27);

########################################################
-- CrabMac Pro Air (Laptop)
########################################################
INSERT INTO Product (
    productId, name, shortDescription, description, price, releaseDate, productStatus, specSheet, video, categoryName, discountId
)
VALUES 
(9, 'CrabMac Pro Air', 'High-performance laptop.',
 'The CrabMac Pro Air is designed for professionals seeking a balance of performance and portability.',
 2499.00, '2024-11-25', 'Available', 
 '{"CPU": "Intel Core i9", "RAM": ["32GB", "64GB"], "Display": ["13 inch FullHD IPS", "15 inch 4K OLED"], "Storage Options": ["512GB SSD", "1TB SSD"], "GPU": "NVIDIA RTX 4070"}', 
 NULL, 'CrabMac', NULL);
 
INSERT INTO ProductImage(priority, imageUrl, productId) VALUES
(1, 'crabmacproair-main.jpeg', 9),
(2, 'crabmacproair-secondary.jpeg', 9),
(3, 'crabmacproair-tertiary.jpeg', 9);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(12, 'Storage Options', 'storage.png', 9),
(28, 'Ram Options', 'ram.png', 9),
(29, 'Display Options', 'display.png', 9);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
-- Storage options
(40, 1, '512GB SSD', 0.00, 12),
(41, 0, '1TB SSD', 200.00, 12),
-- Ram Options
(79, 1, '32GB', 0.00, 28),
(80, 0, '64GB', 400.00, 28),
-- Display Options
(81, 1, '13 inch FullHD IPS', 0.00, 29),
(82, 0, '15 inch 4K OLED', 500.00, 29);

########################################################
-- CrabPad Pro
########################################################
INSERT INTO Product (
    productId, name, shortDescription, description, price, releaseDate, productStatus, specSheet, video, categoryName, discountId
)
VALUES 
(10, 'CrabPad Pro', 'Ultimate tablet experience.',
 'The CrabPad Pro delivers outstanding performance for work and play.',
 899.00, '2024-11-10', 'Available', 
 '{"CPU": "Apple M2 Chip", "RAM": "8GB", "Storage Options": ["128GB", "256GB", "512GB"], "Screen Size": "12.9 inch"}', 
 NULL, 'CrabPad', NULL);
 
INSERT INTO ProductImage(priority, imageUrl, productId) VALUES
(1, 'crabpadpro-main.jpeg', 10),
(2, 'crabpadpro-secondary.jpeg', 10),
(3, 'crabpadpro-tertiary.jpeg', 10);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(13, 'Storage Options', 'storage.png', 10);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
(42, 1, '128GB', 0.00, 13),
(43, 0, '256GB', 100.00, 13),
(44, 0, '512GB', 200.00, 13);

########################################################
-- CrabPad Air
########################################################
INSERT INTO Product (
    productId, name, shortDescription, description, price, releaseDate, productStatus, specSheet, video, categoryName, discountId
)
VALUES 
(11, 'CrabPad Air', 'Lightweight and powerful tablet.',
 'The CrabPad Air is perfect for productivity on the go.',
 499.00, NULL, 'Upcoming', 
 '{"CPU": "A14 Bionic", "RAM": "4GB", "Storage Options": ["64GB", "128GB", "256GB"], "Screen Size": "10.5 inch"}', 
 'crabpadair-teaser.mp4', 'CrabPad', 1);
 
INSERT INTO ProductImage(priority, imageUrl, productId) VALUES
(1, 'crabpadair-main.jpeg', 11),
(2, 'crabpadair-secondary.jpeg', 11),
(3, 'crabpadair-tertiary.jpeg', 11);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(14, 'Storage Options', 'storage.png', 11);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
(45, 1, '64GB', 0.00, 14),
(46, 0, '128GB', 50.00, 14),
(47, 0, '256GB', 100.00, 14);

########################################################
-- CrabPods 1
########################################################
INSERT INTO Product (
    productId, name, shortDescription, description, price, releaseDate, productStatus, specSheet, video, categoryName, discountId
)
VALUES 
(12, 'CrabPods 1', 'Premium wireless earbuds.',
 'CrabPods 1 offers high-quality sound and comfortable fit for music lovers.',
 199.00, '2024-10-05', 'Available', 
 '{"Battery Life": "6 hours", "Bluetooth": "5.0", "Color Options": ["White", "Black"]}', 
 NULL, 'CrabPods', 1);
 
INSERT INTO ProductImage(priority, imageUrl, productId) VALUES
(1, 'crabpods1-main.jpeg', 12),
(2, 'crabpods1-secondary.jpeg', 12),
(3, 'crabpods1-tertiary.jpeg', 12);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(15, 'Color Options', 'color.png', 12);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
(48, 1, 'White', 0.00, 15),
(49, 0, 'Black', 0.00, 15);

########################################################
-- CrabWatch Sport
########################################################
INSERT INTO Product (
    productId, name, shortDescription, description, price, releaseDate, productStatus, specSheet, video, categoryName, discountId
)
VALUES 
(13, 'CrabWatch Sport', 'Sporty smartwatch.',
 'CrabWatch Sport offers essential fitness and health tracking features.',
 199.00, '2024-11-18', 'Available', 
 '{"Battery Life": "24 hours", "Display": "LCD", "Features": "Fitness tracking, Water resistance", "Band Options": ["Silicone", "Nylon"]}', 
 NULL, 'CrabWatch', 1);
 
INSERT INTO ProductImage(priority, imageUrl, productId) VALUES
(1, 'crabwatchsport-main.jpeg', 13),
(2, 'crabwatchsport-secondary.jpeg', 13),
(3, 'crabwatchsport-tertiary.jpeg', 13);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(16, 'Band Options', 'band.png', 13);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
(50, 1, 'Silicone', 0.00, 16),
(51, 0, 'Nylon', 25.00, 16);

########################################################
-- CrabMouse
########################################################
INSERT INTO Product (
    productId, name, shortDescription, description, price, releaseDate, productStatus, specSheet, video, categoryName, discountId
)
VALUES 
(14, 'CrabMouse', 'Ergonomic mouse for CrabMac users.',
 'A high-quality ergonomic mouse designed to complement CrabMac desktops.',
 59.99, '2024-11-05', 'Available', 
 '{"Connectivity": "Bluetooth", "Ergonomics": "Ambidextrous", "Color": "Gray"}', 
 NULL, 'Accessories', NULL);
 
INSERT INTO ProductImage(priority, imageUrl, productId) VALUES
(1, 'crabwatchsport-main.jpeg', 14),
(2, 'crabwatchsport-secondary.jpeg', 14),
(3, 'crabwatchsport-tertiary.jpeg', 14);
 
########################################################
-- CrabPad Mini
########################################################
INSERT INTO Product (
    productId, name, shortDescription, description, price, releaseDate, productStatus, specSheet, video, categoryName, discountId
)
VALUES 
(15, 'CrabPad Mini', 'Compact and portable tablet.',
 'The CrabPad Mini is perfect for everyday tasks, offering portability and performance in a smaller form factor.',
 399.00, '2024-11-17', 'Available', 
 '{"CPU": "A13 Bionic", "RAM": "3GB", "Storage Options": ["64GB", "128GB"], "Screen Size": "8.3 inch"}', 
 NULL, 'CrabPad', 1);
 
INSERT INTO ProductImage(priority, imageUrl, productId) VALUES
(1, 'crabpadmini-main.jpeg', 15),
(2, 'crabpadmini-secondary.jpeg', 15),
(3, 'crabpadmini-tertiary.jpeg', 15);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(17, 'Storage Options', 'storage.png', 15);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
(52, 1, '64GB', 0.00, 17),
(53, 0, '128GB', 50.00, 17);

########################################################
-- CrabPhone 18
########################################################
INSERT INTO Product (
    productId, name, shortDescription, description, price, releaseDate, productStatus, specSheet, video, categoryName, discountId
)
VALUES 
(16, 'CrabPhone 18', 'Ultimate smartphone experience.',
 'The CrabPhone 18 delivers top-tier performance with cutting-edge technology.',
 1399.00, NULL, 'Upcoming', 
 '{"CPU": "A19 Bionic", "RAM": "8GB", "Storage Options": ["128GB", "256GB", "512GB"], "Color Options": ["Black", "Gold", "Silver", "Midnight Green"], "Camera": "64MP Main"}', 
 'crabphone18-teaser.mp4', 'CrabPhone', NULL);
 
INSERT INTO ProductImage(priority, imageUrl, productId) VALUES
(1, 'crabphone18-main.jpeg', 16),
(2, 'crabphone18-secondary.jpeg', 16),
(3, 'crabphone18-tertiary.jpeg', 16);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(18, 'Storage Options', 'storage.png', 16),
(19, 'Color Options', 'color.png', 16);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
-- Storage Options
(54, 1, '128GB', 0.00, 18),
(55, 0, '256GB', 100.00, 18),
(56, 0, '512GB', 200.00, 18),

-- Color Options
(57, 1, 'Black', 0.00, 19),
(58, 0, 'Gold', 50.00, 19),
(59, 0, 'Silver', 50.00, 19),
(60, 0, 'Midnight Green', 50.00, 19);

########################################################
-- CrabWatch Pro
########################################################
INSERT INTO Product (
    productId, name, shortDescription, description, price, releaseDate, productStatus, specSheet, video, categoryName, discountId
)
VALUES 
(17, 'CrabWatch Pro', 'Smartwatch with advanced features.',
 'The CrabWatch Pro combines cutting-edge technology with style for fitness enthusiasts.',
 499.00, '2024-11-30', 'Available', 
 '{"Battery Life": "48 hours", "Display": "OLED", "Features": "Blood Oxygen Monitoring, GPS, ECG", "Band Options": ["Sport Band", "Leather"]}', 
 NULL, 'CrabWatch', NULL);
 
INSERT INTO ProductImage(priority, imageUrl, productId) VALUES
(1, 'crabwatchpro-main.jpeg', 17),
(2, 'crabwatchpro-secondary.jpeg', 17),
(3, 'crabwatchpro-tertiary.jpeg', 17);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(20, 'Band Options', 'band.png', 17);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
(61, 1, 'Sport Band', 0.00, 20),
(62, 0, 'Leather', 50.00, 20);

########################################################
-- CrabPods Pro
########################################################
INSERT INTO Product (
    productId, name, shortDescription, description, price, releaseDate, productStatus, specSheet, video, categoryName, discountId
)
VALUES 
(18, 'CrabPods Pro', 'Premium wireless headphones.',
 'CrabPods Pro offer premium sound quality and noise cancellation for audiophiles.',
 299.00, '2024-12-05', 'Available', 
 '{"Battery Life": "12 hours", "Bluetooth": "5.0", "Noise Cancellation": "CrabTech 2.0", "Color Options": ["Black", "Silver"]}', 
 NULL, 'CrabPods', NULL);
 
INSERT INTO ProductImage(priority, imageUrl, productId) VALUES
(1, 'crabpodspro-main.jpeg', 18),
(2, 'crabpodspro-secondary.jpeg', 18),
(3, 'crabpodspro-tertiary.jpeg', 18);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(21, 'Color Options', 'color.png', 18);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
(63, 1, 'Black', 0.00, 21),
(64, 0, 'Silver', 0.00, 21);

########################################################
-- CrabMac Air Max
########################################################
INSERT INTO Product (
    productId, name, shortDescription, description, price, releaseDate, productStatus, specSheet, video, categoryName, discountId
)
VALUES 
(19, 'CrabMac Air Max', 'Top-tier ultra-light laptop.',
 'The CrabMac Air Max combines extreme portability with extreme power.',
 1799.00, '2024-11-28', 'Available', 
 '{"CPU": "M3 Chip", "RAM": ["16GB", "32GB"], "Display": ["13 inch FullHD OLED", "13 inch 4K OLED"], "Storage Options": ["256GB SSD", "512GB SSD", "1TB SSD"], "GPU": "Apple M3 GPU"}', 
 NULL, 'CrabMac', 1);
 
INSERT INTO ProductImage(priority, imageUrl, productId) VALUES
(1, 'crabmacairmax-main.jpeg', 19),
(2, 'crabmacairmax-secondary.jpeg', 19),
(3, 'crabmacairmax-tertiary.jpeg', 19);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(22, 'Storage Options', 'storage.png', 19),
(30, 'Ram Options', 'ram.png', 19),
(31, 'Display Options', 'display.png', 19);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
-- Storage Options
(65, 1, '256GB SSD', 0.00, 22),
(66, 0, '512GB SSD', 200.00, 22),
(67, 0, '1TB SSD', 400.00, 22),
-- Ram Options
(83, 1, '16GB', 0.00, 30),
(84, 0, '32GB', 200.00, 30),
-- Display Options
(85, 1, '13 inch FullHD OLED', 0.00, 31),
(86, 0, '13 inch 4K OLED', 400.00, 31);

########################################################
-- CrabKeyboard
########################################################
INSERT INTO Product (
    productId, name, shortDescription, description, price, releaseDate, productStatus, specSheet, video, categoryName, discountId
)
VALUES 
(20, 'CrabKeyboard', 'Mechanical keyboard with customizable RGB lighting.',
 'A premium mechanical keyboard with responsive keys and RGB lighting for the ultimate typing experience.',
 120.00, '2024-11-05', 'Available', 
 '{"Type": "Mechanical", "Lighting": "RGB", "Connectivity": "Wired"}', 
 NULL, 'Accessories', NULL);
 
INSERT INTO ProductImage(priority, imageUrl, productId) VALUES
(1, 'crabkeyboard-main.jpeg', 20),
(2, 'crabkeyboard-secondary.jpeg', 20),
(3, 'crabkeyboard-tertiary.jpeg', 20);
 
########################################################
-- CrabCable
########################################################
 INSERT INTO Product (
    productId, name, shortDescription, description, price, releaseDate, productStatus, specSheet, video, categoryName, discountId
)
VALUES 
 (21, 'CrabCable', 'USB-C to USB-C charging cable.',
 'A durable and fast charging USB-C cable to power your devices.',
 25.00, '2024-11-05', 'Available', 
 '{"Length": "6ft", "Material": "Nylon Braided"}', 
 NULL, 'Accessories', NULL);
 
INSERT INTO ProductImage(priority, imageUrl, productId) VALUES
(1, 'crabcable-main.jpeg', 21),
(2, 'crabcable-secondary.jpeg', 21),
(3, 'crabcable-tertiary.jpeg', 21);
 
########################################################
-- CrabPencil
########################################################
INSERT INTO Product (
    productId, name, shortDescription, description, price, releaseDate, productStatus, specSheet, video, categoryName, discountId
)
VALUES
 (22, 'CrabPencil', 'Wireless stylus pen for drawing and note-taking.',
 'Precision stylus with Bluetooth connectivity, designed for drawing and note-taking on digital devices.',
 80.00, '2024-11-05', 'Available', 
 '{"Compatibility": "iOS, Android", "Battery Life": "20 hours", "Color": "Silver"}', 
 NULL, 'Accessories', NULL);
 
INSERT INTO ProductImage(priority, imageUrl, productId) VALUES
(1, 'crabpencil-main.jpeg', 22),
(2, 'crabpencil-secondary.jpeg', 22),
(3, 'crabpencil-tertiary.jpeg', 22);
 
########################################################
-- CrabAdapter
########################################################
 INSERT INTO Product (
    productId, name, shortDescription, description, price, releaseDate, productStatus, specSheet, video, categoryName, discountId
)
VALUES
 (23, 'CrabAdapter', '65W USB-C power adapter.',
 'Compact USB-C power adapter for fast charging of your devices.',
 40.00, '2024-11-05', 'Available', 
 '{"Power Output": "65W", "Compatibility": "USB-C"}', 
 NULL, 'Accessories', NULL);
 
INSERT INTO ProductImage(priority, imageUrl, productId) VALUES
(1, 'crabadapter-main.jpeg', 23),
(2, 'crabadapter-secondary.jpeg', 23),
(3, 'crabadapter-tertiary.jpeg', 23);
 
########################################################
-- Wireless CrabCharger
########################################################
 INSERT INTO Product (
    productId, name, shortDescription, description, price, releaseDate, productStatus, specSheet, video, categoryName, discountId
)
VALUES
 (24, 'Wireless CrabCharger', 'Wireless charging pad with 15W charging speed.',
 'A sleek and efficient wireless charging pad supporting up to 15W charging.',
 50.00, '2024-11-05', 'Available', 
 '{"Charging Speed": "15W", "Material": "Aluminum", "Compatibility": "Qi-enabled devices"}', 
 NULL, 'Accessories', NULL);
 
INSERT INTO ProductImage(priority, imageUrl, productId) VALUES
(1, 'wirelesscrabcharger-main.jpeg', 24),
(2, 'wirelesscrabcharger-secondary.jpeg', 24),
(3, 'wirelesscrabcharger-tertiary.jpeg', 24);
 
########################################################
-- CrabSleeve
########################################################
 INSERT INTO Product (
    productId, name, shortDescription, description, price, releaseDate, productStatus, specSheet, video, categoryName, discountId
)
VALUES
 (25, 'CrabSleeve', 'Protective sleeve for 13-inch and 15-inch laptops.',
 'A protective sleeve made from high-quality neoprene, designed for 13-inch and 15-inch laptops.',
 30.00, '2024-11-05', 'Available', 
 '{"Material": "Neoprene", "Size": "13-inch, 15-inch", "Color": "Black"}', 
 NULL, 'Accessories', NULL);

INSERT INTO ProductImage(priority, imageUrl, productId) VALUES
(1, 'crabsleeve-main.jpeg', 25),
(2, 'crabsleeve-secondary.jpeg', 25),
(3, 'crabsleeve-tertiary.jpeg', 25);

-- ########################################################

-- Insert Customers
INSERT INTO Customer (username, firstName, lastName, email, joinDate, password, balance)
VALUES
    ('john_doe', 'John', 'Doe', 'john.doe@example.com', '2023-01-01', 'securepassword', 1000.00),
    ('jane_smith', 'Jane', 'Smith', 'jane.smith@example.com', '2023-02-15', 'anothersecurepassword', 500.00);

-- Custom Products
INSERT INTO CustomProduct (customProductId, configuredPrice, finalPrice, productId)
VALUES
    (1, 6499.00, 6449.00, 1), -- Custom CrabMac Pro  // Since the holiday sale discount is active, 50 euros are subtracted from the configured price
    (2, 1049.00, 999.99, 2),  -- Custom CrabPhone 15 // Since the holiday sale discount is active, 50 euros are subtracted from the configured price
    (3, 999.00, 949.00, 3);   -- Custom CrabPhone 15 // Same thing

-- Configuration
INSERT INTO Configuration (configurableOptionId, customProductId)
VALUES
    (1, 1), -- 1TB SSD for Custom CrabMac Pro of id 1
    (69, 1),-- 128GB Ram for Custom CrabMac Pro of id 1
    (5, 2), -- 128GB Ram for Custom CrabPhone 15 of id 2
    (11, 2),-- Deep Blue Color for Custom CrabPhone 15 of id 2
    (5 ,3), -- Stock 128GB Ram for Custom CrabPhone 15 of id 3
	(8 ,3); -- Stock Black Color for Custom CrabPhone 15 of id 3

-- Orders
INSERT INTO `Order` (orderId, orderStatus, orderDate, deliveryDate, username)
VALUES
    (1, 'Ordered', '2024-01-16 10:00:00', NULL, 'john_doe'),
    (2, 'Delivered', '2023-11-10 14:00:00', '2023-11-15 09:00:00', 'jane_smith');

-- Order Products
INSERT INTO OrderProduct (orderId, customProductId, amount)
VALUES
    (1, 1, 1), -- John Doe ordered one Custom CrabMac Pro of id 1
    (2, 2, 1); -- Jane Smith ordered one Custom CrabPhone 15 of id 2

-- Insert Notifications
INSERT INTO Notification (subject, description, date, isRead, username)
VALUES
    ('Order Update', 'Your order #1 is being processed.', '2024-01-16 10:05:00', 0, 'john_doe'),
	('Order Update', 'Your order #112313 is being processed.', '2023-01-14 10:05:00', 1, 'jane_smith'),
	('Order Update', 'Your order #112313 is in transit.', '2023-01-15 10:05:00', 1, 'jane_smith'),
    ('Delivery Confirmation', 'Your order #112313 has been delivered.', '2023-11-16 09:05:00', 0, 'jane_smith');

-- Insert CartProduct
INSERT INTO CartProduct (customProductId, username, amount)
VALUES
    (3, 'jane_smith', 2); -- Jane Smith has two Custom CrabPhone 15 of id 3 in the cart. They will be ordered anytime soon.
-- Insert Categories
INSERT INTO Category (categoryName, shortDescription, description, icon, mainImage, secondaryImage)
VALUES
    ('CrabMac', 'High-performance desktops and laptops', 'Experience the ultimate in computing power with our CrabMac lineup.', 
    'crabmac-icon.png', 'crabmac-main.jpg', 'crabmac-secondary.jpg'),
    ('CrabPad', 'Portable and versatile tablets', 'Unleash creativity and productivity with CrabPad.', 
    'crabpad-icon.png', 'crabpad-main.jpg', 'crabpad-secondary.jpg'),
    ('CrabPhone', 'Revolutionary smartphones', 'Connect with the world using CrabPhone, a premium communication device.', 
    'crabphone-icon.png', 'crabphone-main.jpg', 'crabphone-secondary.jpg'),
    ('CrabWatch', 'Smartwatches for every lifestyle', 'Track fitness, health, and more with the CrabWatch.', 
    'crabwatch-icon.png', 'crabwatch-main.jpg', 'crabwatch-secondary.jpg'),
    ('CrabPods', 'Wireless earbuds and headphones', 'Immerse yourself in sound with CrabPods.', 
    'crabpods-icon.png', 'crabpods-main.jpg', 'crabpods-secondary.jpg'),
    ('Accessories', 'Enhance your experience', 'Find the perfect accessories to complement your devices.', 
    'accessories-icon.png', null, null);

-- Insert Discounts
INSERT INTO Discount (discountId, name, amount)
VALUES
    (1, 'Holiday Discount 2024', 50.00);

-- Insert Products
########################################################
-- CrabMac Pro
########################################################
INSERT INTO Product (
    productId, name, subtype, shortDescription, description, price, releaseDate, productStatus, specSheet, video, categoryName, discountId
)
VALUES 
(1, 'CrabMac Pro', 'desktop', 'Ultimate desktop performance.', 
 'The CrabMac Pro delivers unmatched performance for professionals.',
 5999.00, '2024-11-01', 'Available', 
 '{"CPU": "Intel Xeon W", "RAM": ["64GB", "128GB", "256GB"], "Storage": ["1TB SSD", "2TB SSD", "4TB SSD", "8TB SSD"], "GPU": "AMD Radeon Pro Vega II"}', 
 NULL, 'CrabMac', 1);
 
INSERT INTO ProductImage(imageUrl) VALUES
('crabmacdesktop-main.png'),
('crabmacdesktop-secondary.png'),
('crabmacdesktop-tertiary.png');

INSERT INTO ProductImageUsage(imageUrl, productId, priority) VALUES
('crabmacdesktop-main.png', 1, 1),
('crabmacdesktop-secondary.png', 1, 2),
('crabmacdesktop-tertiary.png', 1, 3);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(1, 'Storage', 'storage.png', 1),
(23, 'Ram', 'ram.png', 1);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
-- Storage
(1, 1, '1TB SSD', 0.00, 1),
(2, 0, '2TB SSD', 400.00, 1),
(3, 0, '4TB SSD', 800.00, 1),
(4, 0, '8TB SSD', 2000.00, 1),
-- Ram
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
 '{"CPU": "A17 Bionic", "RAM": "6GB", "Storage": ["128GB", "256GB", "512GB"], "Color": ["Black", "Silver", "Gold", "Deep Blue"], "Camera": "48MP Main"}', 
 NULL, 'CrabPhone', 1);
 
INSERT INTO ProductImage(imageUrl) VALUES
('crabphone-main.png'),
('crabphone-secondary.png'),
('crabphone-tertiary.png');

INSERT INTO ProductImageUsage(imageUrl, productId, priority) VALUES
('crabphone-main.png', 2, 1),
('crabphone-secondary.png', 2, 2),
('crabphone-tertiary.png', 2, 3);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(2, 'Storage', 'storage.png', 2),
(3, 'Color', 'color.png', 2);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
-- Storage
(5, 1, '128GB', 0.00, 2),
(6, 0, '256GB', 100.00, 2),
(7, 0, '512GB', 200.00, 2),

-- Color
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
 '{"Battery Life": "36 hours", "Display": "Sapphire Crystal", "Features": "GPS, Altimeter, Compass", "Band": ["Alpine Loop", "Ocean Band", "Trail Loop"]}', 
 NULL, 'CrabWatch', 1);
 
INSERT INTO ProductImage(imageUrl) VALUES
('crabwatch-main.png'),
('crabwatch-secondary.png'),
('crabwatch-tertiary.png');

INSERT INTO ProductImageUsage(imageUrl, productId, priority) VALUES
('crabwatch-main.png', 3, 1),
('crabwatch-secondary.png', 3, 2),
('crabwatch-tertiary.png', 3, 3);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(4, 'Band', 'band.png', 3);

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
 '{"CPU": "A18 Bionic", "RAM": "8GB", "Storage": ["128GB", "256GB", "512GB"], "Color": ["Black", "Silver", "Red", "Space Gray"], "Camera": "50MP Main"}', 
 NULL, 'CrabPhone', 1);
 
INSERT INTO ProductImageUsage(imageUrl, productId, priority) VALUES
('crabphone-main.png', 4, 1),
('crabphone-secondary.png', 4, 2),
('crabphone-tertiary.png', 4, 3);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(5, 'Storage', 'storage.png', 4),
(6, 'Color', 'color.png', 4);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
-- Storage
(15, 1, '128GB', 0.00, 5),
(16, 0, '256GB', 100.00, 5),
(17, 0, '512GB', 200.00, 5),

-- Color
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
 '{"CPU": "A18 Pro", "RAM": "8GB", "Storage": ["128GB", "256GB", "512GB"], "Color": ["Black", "Blue", "Gold", "Green"], "Camera": "64MP Main"}', 
 NULL, 'CrabPhone', NULL);
 
INSERT INTO ProductImageUsage(imageUrl, productId, priority) VALUES
('crabphone-main.png', 5, 1),
('crabphone-secondary.png', 5, 2),
('crabphone-tertiary.png', 5, 3);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(7, 'Storage', 'storage.png', 5),
(8, 'Color', 'color.png', 5);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
-- Storage
(22, 1, '128GB', 0.00, 7),
(23, 0, '256GB', 100.00, 7),
(24, 0, '512GB', 200.00, 7),

-- Color
(25, 1, 'Black', 0.00, 8),
(26, 0, 'Blue', 50.00, 8),
(27, 0, 'Gold', 50.00, 8),
(28, 0, 'Green', 50.00, 8);

########################################################
-- CrabMac Pro 16 (Desktop)
########################################################
INSERT INTO Product (
    productId, name, subtype, shortDescription, description, price, releaseDate, productStatus, specSheet, video, categoryName, discountId
)
VALUES 
(6, 'CrabMac Pro 16', 'desktop', 'Top-tier desktop performance for professionals.',
 'The CrabMac Pro 16 brings unparalleled desktop computing with more power and flexibility.',
 6499.00, '2024-11-10', 'Available', 
 '{"CPU": "Intel Xeon W-2295", "RAM": ["64GB", "128GB"], "Storage": ["1TB SSD", "2TB SSD", "4TB SSD", "8TB SSD"], "GPU": "AMD Radeon Pro W6800X"}', 
 NULL, 'CrabMac', 1);
 
INSERT INTO ProductImageUsage(imageUrl, productId, priority) VALUES
('crabmacdesktop-main.png', 6, 1),
('crabmacdesktop-secondary.png', 6, 2),
('crabmacdesktop-tertiary.png', 6, 3);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(9, 'Storage', 'storage.png', 6),
(24, 'Ram', 'ram.png', 6);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
-- Storage options
(29, 1, '1TB SSD', 0.00, 9),
(30, 0, '2TB SSD', 400.00, 9),
(31, 0, '4TB SSD', 800.00, 9),
(32, 0, '8TB SSD', 1200.00, 9),
-- Ram
(71, 1, '64GB', 0.00, 24),
(72, 0, '128GB', 750.00, 24);

########################################################
-- CrabMac Pro 17 (Desktop)
########################################################
INSERT INTO Product (
    productId, name, subtype, shortDescription, description, price, releaseDate, productStatus, specSheet, video, categoryName, discountId
)
VALUES 
(7, 'CrabMac Pro 17', 'desktop', 'Premium desktop for demanding workloads.',
 'The CrabMac Pro 17 offers powerful configurations ideal for creative professionals and engineers.',
 7499.00, NULL, 'Upcoming', 
 '{"CPU": "Intel Xeon W-2375", "RAM": ["128GB", "256GB"], "Storage": ["1TB SSD", "2TB SSD", "4TB SSD", "8TB SSD"], "GPU": "NVIDIA RTX A5000"}', 
 'crabmacpro17-teaser.mp4', 'CrabMac', NULL);
 
INSERT INTO ProductImageUsage(imageUrl, productId, priority) VALUES
('crabmacdesktop-main.png', 7, 1),
('crabmacdesktop-secondary.png', 7, 2),
('crabmacdesktop-tertiary.png', 7, 3);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(10, 'Storage', 'storage.png', 7),
(25, 'Ram', 'ram.png', 7);

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
    productId, name, subtype, shortDescription, description, price, releaseDate, productStatus, specSheet, video, categoryName, discountId
)
VALUES 
(8, 'CrabMac Air', 'laptop', 'Lightweight and powerful laptop.',
 'The CrabMac Air offers the ideal balance between performance and portability.',
 1499.00, '2024-11-20', 'Available', 
 '{"CPU": "M2 Chip", "RAM": ["8GB", "16GB"], "Display": ["13 inch FullHD IPS", "15 inch 4K OLED"], "Storage": ["256GB SSD", "512GB SSD", "1TB SSD"], "GPU": "Apple M2 GPU"}', 
 NULL, 'CrabMac', 1);
 
INSERT INTO ProductImage(imageUrl) VALUES
('crabmaclaptop-main.png'),
('crabmaclaptop-secondary.png'),
('crabmaclaptop-tertiary.png');
 
INSERT INTO ProductImageUsage(imageUrl, productId, priority) VALUES
('crabmaclaptop-main.png', 8, 1),
('crabmaclaptop-secondary.png', 8, 2),
('crabmaclaptop-tertiary.png', 8, 3);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(11, 'Storage', 'storage.png', 8),
(26, 'Ram', 'ram.png', 8),
(27, 'Display', 'display.png', 8);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
-- Storage
(37, 1, '256GB SSD', 0.00, 11),
(38, 0, '512GB SSD', 200.00, 11),
(39, 0, '1TB SSD', 400.00, 11),
-- Ram
(75, 1, '8GB', 0.00, 26),
(76, 0, '16GB', 200.00, 26),
-- Display
(77, 1, '13 inch FullHD IPS', 0.00, 27),
(78, 0, '15 inch 4K OLED', 500.00, 27);

########################################################
-- CrabMac Pro Air (Laptop)
########################################################
INSERT INTO Product (
    productId, name, subtype, shortDescription, description, price, releaseDate, productStatus, specSheet, video, categoryName, discountId
)
VALUES 
(9, 'CrabMac Pro Air', 'laptop', 'High-performance laptop.',
 'The CrabMac Pro Air is designed for professionals seeking a balance of performance and portability.',
 2499.00, '2024-11-25', 'Available', 
 '{"CPU": "Intel Core i9", "RAM": ["32GB", "64GB"], "Display": ["13 inch FullHD IPS", "15 inch 4K OLED"], "Storage": ["512GB SSD", "1TB SSD"], "GPU": "NVIDIA RTX 4070"}', 
 NULL, 'CrabMac', NULL);
 
INSERT INTO ProductImageUsage(imageUrl, productId, priority) VALUES
('crabmaclaptop-main.png', 9, 1),
('crabmaclaptop-secondary.png', 9, 2),
('crabmaclaptop-tertiary.png', 9, 3);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(12, 'Storage', 'storage.png', 9),
(28, 'Ram', 'ram.png', 9),
(29, 'Display', 'display.png', 9);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
-- Storage options
(40, 1, '512GB SSD', 0.00, 12),
(41, 0, '1TB SSD', 200.00, 12),
-- Ram
(79, 1, '32GB', 0.00, 28),
(80, 0, '64GB', 400.00, 28),
-- Display
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
 '{"CPU": "Apple M2 Chip", "RAM": "8GB", "Storage": ["128GB", "256GB", "512GB"], "Screen Size": "12.9 inch"}', 
 NULL, 'CrabPad', NULL);
 
INSERT INTO ProductImage(imageUrl) VALUES
('crabpad-main.png'),
('crabpad-secondary.png'),
('crabpad-tertiary.png');

INSERT INTO ProductImageUsage(imageUrl, productId, priority) VALUES
('crabpad-main.png', 10, 1),
('crabpad-secondary.png', 10, 2),
('crabpad-tertiary.png', 10, 3);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(13, 'Storage', 'storage.png', 10);

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
 '{"CPU": "A14 Bionic", "RAM": "4GB", "Storage": ["64GB", "128GB", "256GB"], "Screen Size": "10.5 inch"}', 
 'crabpadair-teaser.mp4', 'CrabPad', 1);
 
INSERT INTO ProductImageUsage(imageUrl, productId, priority) VALUES
('crabpad-main.png', 11, 1),
('crabpad-secondary.png', 11, 2),
('crabpad-tertiary.png', 11, 3);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(14, 'Storage', 'storage.png', 11);

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
 '{"Battery Life": "6 hours", "Bluetooth": "5.0", "Color": ["White", "Black"]}', 
 NULL, 'CrabPods', 1);
 
INSERT INTO ProductImage(imageUrl) VALUES
('crabpods-main.png'),
('crabpods-secondary.png'),
('crabpods-tertiary.png');

INSERT INTO ProductImageUsage(imageUrl, productId, priority) VALUES
('crabpods-main.png', 12, 1),
('crabpods-secondary.png', 12, 2),
('crabpods-tertiary.png', 12, 3);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(15, 'Color', 'color.png', 12);

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
 '{"Battery Life": "24 hours", "Display": "LCD", "Features": "Fitness tracking, Water resistance", "Band": ["Silicone", "Nylon"]}', 
 NULL, 'CrabWatch', 1);
 
INSERT INTO ProductImageUsage(imageUrl, productId, priority) VALUES
('crabwatch-main.png', 13, 1),
('crabwatch-secondary.png', 13, 2),
('crabwatch-tertiary.png', 13, 3);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(16, 'Band', 'band.png', 13);

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
 
INSERT INTO ProductImage(imageUrl) VALUES
('crabmouse-main.png'),
('crabmouse-secondary.png'),
('crabmouse-tertiary.png');
 
INSERT INTO ProductImageUsage(imageUrl, productId, priority) VALUES
('crabmouse-main.png', 14, 1),
('crabmouse-secondary.png', 14, 2),
('crabmouse-tertiary.png', 14, 3);
 
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
 '{"CPU": "A13 Bionic", "RAM": "3GB", "Storage": ["64GB", "128GB"], "Screen Size": "8.3 inch"}', 
 NULL, 'CrabPad', 1);
 
INSERT INTO ProductImageUsage(imageUrl, productId, priority) VALUES
('crabpad-main.png', 15, 1),
('crabpad-secondary.png', 15, 2),
('crabpad-tertiary.png', 15, 3);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(17, 'Storage', 'storage.png', 15);

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
 '{"CPU": "A19 Bionic", "RAM": "8GB", "Storage": ["128GB", "256GB", "512GB"], "Color": ["Black", "Gold", "Silver", "Midnight Green"], "Camera": "64MP Main"}', 
 'crabphone18-teaser.mp4', 'CrabPhone', NULL);
 
INSERT INTO ProductImageUsage(imageUrl, productId, priority) VALUES
('crabphone-main.png', 16, 1),
('crabphone-secondary.png', 16, 2),
('crabphone-tertiary.png', 16, 3);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(18, 'Storage', 'storage.png', 16),
(19, 'Color', 'color.png', 16);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
-- Storage
(54, 1, '128GB', 0.00, 18),
(55, 0, '256GB', 100.00, 18),
(56, 0, '512GB', 200.00, 18),

-- Color
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
 '{"Battery Life": "48 hours", "Display": "OLED", "Features": "Blood Oxygen Monitoring, GPS, ECG", "Band": ["Sport Band", "Leather"]}', 
 NULL, 'CrabWatch', NULL);
 
INSERT INTO ProductImageUsage(imageUrl, productId, priority) VALUES
('crabwatch-main.png', 17, 1),
('crabwatch-secondary.png', 17, 2),
('crabwatch-tertiary.png', 17, 3);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(20, 'Band', 'band.png', 17);

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
 '{"Battery Life": "12 hours", "Bluetooth": "5.0", "Noise Cancellation": "CrabTech 2.0", "Color": ["Black", "Silver"]}', 
 NULL, 'CrabPods', NULL);
 
INSERT INTO ProductImageUsage(imageUrl, productId, priority) VALUES
('crabpods-main.png', 18, 1),
('crabpods-secondary.png', 18, 2),
('crabpods-tertiary.png', 18, 3);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(21, 'Color', 'color.png', 18);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
(63, 1, 'Black', 0.00, 21),
(64, 0, 'Silver', 0.00, 21);

########################################################
-- CrabMac Air Max
########################################################
INSERT INTO Product (
    productId, name, subtype, shortDescription, description, price, releaseDate, productStatus, specSheet, video, categoryName, discountId
)
VALUES 
(19, 'CrabMac Air Max', 'laptop', 'Top-tier ultra-light laptop.',
 'The CrabMac Air Max combines extreme portability with extreme power.',
 1799.00, '2024-11-28', 'Available', 
 '{"CPU": "M3 Chip", "RAM": ["16GB", "32GB"], "Display": ["13 inch FullHD OLED", "13 inch 4K OLED"], "Storage": ["256GB SSD", "512GB SSD", "1TB SSD"], "GPU": "Apple M3 GPU"}', 
 NULL, 'CrabMac', 1);
 
INSERT INTO ProductImageUsage(imageUrl, productId, priority) VALUES
('crabmaclaptop-main.png', 19, 1),
('crabmaclaptop-secondary.png', 19, 2),
('crabmaclaptop-tertiary.png', 19, 3);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(22, 'Storage', 'storage.png', 19),
(30, 'Ram', 'ram.png', 19),
(31, 'Display', 'display.png', 19);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
-- Storage
(65, 1, '256GB SSD', 0.00, 22),
(66, 0, '512GB SSD', 200.00, 22),
(67, 0, '1TB SSD', 400.00, 22),
-- Ram
(83, 1, '16GB', 0.00, 30),
(84, 0, '32GB', 200.00, 30),
-- Display
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
 
INSERT INTO ProductImage(imageUrl) VALUES
('crabkeyboard-main.png'),
('crabkeyboard-secondary.png'),
('crabkeyboard-tertiary.png');
 
INSERT INTO ProductImageUsage(imageUrl, productId, priority) VALUES
('crabkeyboard-main.png', 20, 1),
('crabkeyboard-secondary.png', 20, 2),
('crabkeyboard-tertiary.png', 20, 3);
 
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
 
INSERT INTO ProductImage(imageUrl) VALUES
('crabcable-main.png'),
('crabcable-secondary.png'),
('crabcable-tertiary.png');
 
INSERT INTO ProductImageUsage(imageUrl, productId, priority) VALUES
('crabcable-main.png', 21, 1),
('crabcable-secondary.png', 21, 2),
('crabcable-tertiary.png', 21, 3);
 
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
 
INSERT INTO ProductImage(imageUrl) VALUES
('crabpencil-main.png'),
('crabpencil-secondary.png'),
('crabpencil-tertiary.png');
 
INSERT INTO ProductImageUsage(imageUrl, productId, priority) VALUES
('crabpencil-main.png', 22, 1),
('crabpencil-secondary.png', 22, 2),
('crabpencil-tertiary.png', 22, 3);
 
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
 
INSERT INTO ProductImage(imageUrl) VALUES
('crabadapter-main.png'),
('crabadapter-secondary.png'),
('crabadapter-tertiary.png');
 
INSERT INTO ProductImageUsage(imageUrl, productId, priority) VALUES
('crabadapter-main.png', 23, 1),
('crabadapter-secondary.png', 23, 2),
('crabadapter-tertiary.png', 23, 3);
 
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
 
INSERT INTO ProductImage(imageUrl) VALUES
('crabchargerwireless-main.png'),
('crabchargerwireless-secondary.png'),
('crabchargerwireless-tertiary.png');
 
INSERT INTO ProductImageUsage(imageUrl, productId, priority) VALUES
('crabchargerwireless-main.png', 24, 1),
('crabchargerwireless-secondary.png', 24, 2),
('crabchargerwireless-tertiary.png', 24, 3);
 
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

INSERT INTO ProductImage(imageUrl) VALUES
('crabsleeve-main.png'),
('crabsleeve-secondary.png'),
('crabsleeve-tertiary.png');
 
INSERT INTO ProductImageUsage(imageUrl, productId, priority) VALUES
('crabsleeve-main.png', 25, 1),
('crabsleeve-secondary.png', 25, 2),
('crabsleeve-tertiary.png', 25, 3);

########################################################
-- CrabPad Max
########################################################
INSERT INTO Product (
    productId, name, shortDescription, description, price, releaseDate, productStatus, specSheet, video, categoryName, discountId
)
VALUES 
(26, 'CrabPad Max', 'High-performance tablet for professionals.',
 'The CrabPad Max is engineered for ultimate productivity and creativity, offering cutting-edge hardware and immersive visuals.',
 1299.00, '2024-12-01', 'Available', 
 '{"CPU": "Apple M3 Pro Chip", "RAM": "16GB", "Storage": ["512GB", "1TB", "2TB"], "Color": ["Black", "Silver"], "Screen Size": "14.6 inch"}', 
 NULL, 'CrabPad', NULL);

INSERT INTO ProductImageUsage(imageUrl, productId, priority) VALUES
('crabpad-main.png', 26, 1),
('crabpad-secondary.png', 26, 2),
('crabpad-tertiary.png', 26, 3);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(32, 'Storage', 'storage.png', 26),
(33, 'Color', 'color.png', 26);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
(87, 1, '512GB', 0.00, 32),
(88, 0, '1TB', 300.00, 32),
(89, 0, '2TB', 600.00, 32),
(90, 1, 'Black', 0.00, 33),
(91, 0, 'Silver', 0.00, 33);

########################################################
-- CrabPods Max
########################################################
INSERT INTO Product (
    productId, name, shortDescription, description, price, releaseDate, productStatus, specSheet, video, categoryName, discountId
)
VALUES 
(27, 'CrabPods Max', 'Over-ear headphones with studio-quality sound.',
 'The CrabPods Max offer an immersive audio experience with superior comfort, ideal for professionals and audiophiles.',
 499.00, '2024-12-15', 'Upcoming', 
 '{"Battery Life": "20 hours", "Bluetooth": "5.3", "Noise Cancellation": "CrabTech 3.0", "Color": ["Space Gray", "Silver", "Blue"]}', 
 'crabpodsmax-teaser.mp4', 'CrabPods', NULL);

INSERT INTO ProductImageUsage(imageUrl, productId, priority) VALUES
('crabpods-main.png', 27, 1),
('crabpods-secondary.png', 27, 2),
('crabpods-tertiary.png', 27, 3);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(34, 'Color', 'color.png', 27);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
(92, 1, 'Space Gray', 0.00, 34),
(93, 0, 'Silver', 0.00, 34),
(94, 0, 'Blue', 0.00, 34);

-- ########################################################

-- Insert Customers
INSERT INTO Customer (firstName, lastName, email, joinDate, password)
VALUES
    ('John', 'Doe', 'john.doe@example.com', '2023-01-01', '$2y$10$KmOkJ1BzWPZPbDnig4yZIu7iIKYEYKyrYc4r/qSfXWiYmN3vZPcMC'),
    ('Jane', 'Smith', 'jane.smith@example.com', '2023-02-15', '$2y$10$KmOkJ1BzWPZPbDnig4yZIu7iIKYEYKyrYc4r/qSfXWiYmN3vZPcMC');

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
INSERT INTO `Order` (orderId, orderStatus, orderDate, deliveryDate, email)
VALUES
    (1, 'Ordered', '2024-01-16 10:00:00', NULL, 'john.doe@example.com'),
    (2, 'Delivered', '2023-11-10 14:00:00', '2023-11-15 09:00:00', 'jane.smith@example.com');

-- Order Products
INSERT INTO OrderProduct (orderId, customProductId, amount)
VALUES
    (1, 1, 1), -- John Doe ordered one Custom CrabMac Pro of id 1
    (2, 2, 1); -- Jane Smith ordered one Custom CrabPhone 15 of id 2

-- Insert Notifications
INSERT INTO Notification (subject, description, date, isRead, email)
VALUES
    ('Order Update', 'Your order #1 is being processed.', '2024-01-16 10:05:00', 0, 'john.doe@example.com'),
	('Order Update', 'Your order #112313 is being processed.', '2023-01-14 10:05:00', 1, 'jane.smith@example.com'),
	('Order Update', 'Your order #112313 is in transit.', '2023-01-15 10:05:00', 1, 'jane.smith@example.com'),
    ('Delivery Confirmation', 'Your order #112313 has been delivered.', '2023-11-16 09:05:00', 0, 'jane.smith@example.com');

-- Insert CartProduct
INSERT INTO CartProduct (customProductId, email, amount)
VALUES
    (3, 'jane.smith@example.com', 2); -- Jane Smith has two Custom CrabPhone 15 of id 3 in the cart. They will be ordered anytime soon.
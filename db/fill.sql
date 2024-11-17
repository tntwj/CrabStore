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
    (1, 'Holiday Discount', 50.00),
    (2, 'Black Friday', 100.00);

-- Insert Product Videos
INSERT INTO ProductVideo (videoId, videoUrl)
VALUES
    (1, 'crabmacpro-overview.mp4'),
    (2, 'crabphone15-overview.mp4');

########################################################
-- Product Insertion
########################################################
-- CrabMac Pro
########################################################
INSERT INTO Product (
    productId, name, lineupName, shortDescription, description, price, releaseDate, productStatus, specSheet, videoId, categoryName, discountId
)
VALUES 
(1, 'CrabMac Pro', 'CrabMac', 'Ultimate desktop performance.', 
 'The CrabMac Pro delivers unmatched performance for professionals.',
 5999.00, '2024-11-01', 'Available', 
 '{"CPU": "Intel Xeon W", "RAM": "64GB", "Storage Options": ["1TB SSD", "2TB SSD", "4TB SSD", "8TB SSD"], "GPU": "AMD Radeon Pro Vega II"}', 
 1, 'CrabMac', NULL);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(1, 'Storage Options', '/icons/storage.png', 1);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
(1, 1, '1TB SSD', 0.00, 1),
(2, 0, '2TB SSD', 400.00, 1),
(3, 0, '4TB SSD', 800.00, 1),
(4, 0, '8TB SSD', 1200.00, 1);

########################################################
-- CrabPhone 15
########################################################
INSERT INTO Product (
    productId, name, lineupName, shortDescription, description, price, releaseDate, productStatus, specSheet, videoId, categoryName, discountId
)
VALUES 
(2, 'CrabPhone 15', 'CrabPhone', 'Revolutionary smartphone.', 
 'The CrabPhone 15 redefines smartphone innovation with powerful hardware.',
 999.00, '2024-09-01', 'Available', 
 '{"CPU": "A17 Bionic", "RAM": "6GB", "Storage Options": ["128GB", "256GB", "512GB"], "Color Options": ["Black", "Silver", "Gold", "Deep Blue"], "Camera": "48MP Main"}', 
 2, 'CrabPhone', NULL);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(2, 'Storage Options', '/icons/storage.png', 2),
(3, 'Color Options', '/icons/color.png', 2);

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
    productId, name, lineupName, shortDescription, description, price, releaseDate, productStatus, specSheet, videoId, categoryName, discountId
)
VALUES 
(3, 'CrabWatch Ultra', 'CrabWatch', 'Adventure companion.', 
 'The CrabWatch Ultra is the ultimate smartwatch for fitness and exploration.',
 799.00, '2024-10-10', 'Available', 
 '{"Battery Life": "36 hours", "Display": "Sapphire Crystal", "Features": "GPS, Altimeter, Compass", "Band Options": ["Alpine Loop", "Ocean Band", "Trail Loop"]}', 
 NULL, 'CrabWatch', NULL);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(4, 'Band Options', '/icons/band.png', 3);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
(12, 1, 'Alpine Loop', 0.00, 4),
(13, 0, 'Ocean Band', 50.00, 4),
(14, 0, 'Trail Loop', 50.00, 4);

########################################################
-- CrabPhone 16
########################################################
INSERT INTO Product (
    productId, name, lineupName, shortDescription, description, price, releaseDate, productStatus, specSheet, videoId, categoryName, discountId
)
VALUES 
(4, 'CrabPhone 16', 'CrabPhone', 'Enhanced performance and design.', 
 'The CrabPhone 16 offers faster performance and sleek design for everyday use.',
 1099.00, '2024-11-01', 'Available', 
 '{"CPU": "A18 Bionic", "RAM": "8GB", "Storage Options": ["128GB", "256GB", "512GB"], "Color Options": ["Black", "Silver", "Red", "Space Gray"], "Camera": "50MP Main"}', 
 NULL, 'CrabPhone', NULL);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(5, 'Storage Options', '/icons/storage.png', 4),
(6, 'Color Options', '/icons/color.png', 4);

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
    productId, name, lineupName, shortDescription, description, price, releaseDate, productStatus, specSheet, videoId, categoryName, discountId
)
VALUES 
(5, 'CrabPhone 17', 'CrabPhone', 'Next-gen mobile experience.', 
 'The CrabPhone 17 is packed with new features, offering an even better mobile experience.',
 1299.00, '2024-12-01', 'Available', 
 '{"CPU": "A18 Pro", "RAM": "8GB", "Storage Options": ["128GB", "256GB", "512GB"], "Color Options": ["Black", "Blue", "Gold", "Green"], "Camera": "64MP Main"}', 
 NULL, 'CrabPhone', NULL);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(7, 'Storage Options', '/icons/storage.png', 5),
(8, 'Color Options', '/icons/color.png', 5);

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
    productId, name, lineupName, shortDescription, description, price, releaseDate, productStatus, specSheet, videoId, categoryName, discountId
)
VALUES 
(6, 'CrabMac Pro 16', 'CrabMac', 'Top-tier desktop performance for professionals.',
 'The CrabMac Pro 16 brings unparalleled desktop computing with more power and flexibility.',
 6499.00, '2024-11-10', 'Available', 
 '{"CPU": "Intel Xeon W-2295", "RAM": "128GB", "Storage Options": ["1TB SSD", "2TB SSD", "4TB SSD", "8TB SSD"], "GPU": "AMD Radeon Pro W6800X"}', 
 1, 'CrabMac', NULL);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(9, 'Storage Options', '/icons/storage.png', 6);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
(29, 1, '1TB SSD', 0.00, 9),
(30, 0, '2TB SSD', 400.00, 9),
(31, 0, '4TB SSD', 800.00, 9),
(32, 0, '8TB SSD', 1200.00, 9);

########################################################
-- CrabMac Pro 17 (Desktop)
########################################################
INSERT INTO Product (
    productId, name, lineupName, shortDescription, description, price, releaseDate, productStatus, specSheet, videoId, categoryName, discountId
)
VALUES 
(7, 'CrabMac Pro 17', 'CrabMac', 'Premium desktop for demanding workloads.',
 'The CrabMac Pro 17 offers powerful configurations ideal for creative professionals and engineers.',
 7499.00, '2024-11-15', 'Available', 
 '{"CPU": "Intel Xeon W-2375", "RAM": "128GB", "Storage Options": ["1TB SSD", "2TB SSD", "4TB SSD", "8TB SSD"], "GPU": "NVIDIA RTX A5000"}', 
 1, 'CrabMac', NULL);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(10, 'Storage Options', '/icons/storage.png', 7);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
(33, 1, '1TB SSD', 0.00, 10),
(34, 0, '2TB SSD', 400.00, 10),
(35, 0, '4TB SSD', 800.00, 10),
(36, 0, '8TB SSD', 1200.00, 10);

########################################################
-- CrabMac Air (Laptop)
########################################################
INSERT INTO Product (
    productId, name, lineupName, shortDescription, description, price, releaseDate, productStatus, specSheet, videoId, categoryName, discountId
)
VALUES 
(8, 'CrabMac Air', 'CrabMac', 'Lightweight and powerful laptop.',
 'The CrabMac Air offers the ideal balance between performance and portability.',
 1499.00, '2024-11-20', 'Available', 
 '{"CPU": "M2 Chip", "RAM": "16GB", "Storage Options": ["256GB SSD", "512GB SSD", "1TB SSD"], "GPU": "Apple M2 GPU"}', 
 1, 'CrabMac', NULL);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(11, 'Storage Options', '/icons/storage.png', 8);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
(37, 1, '256GB SSD', 0.00, 11),
(38, 0, '512GB SSD', 200.00, 11),
(39, 0, '1TB SSD', 400.00, 11);

########################################################
-- CrabMac Pro Air (Laptop)
########################################################
INSERT INTO Product (
    productId, name, lineupName, shortDescription, description, price, releaseDate, productStatus, specSheet, videoId, categoryName, discountId
)
VALUES 
(9, 'CrabMac Pro Air', 'CrabMac', 'High-performance laptop.',
 'The CrabMac Pro Air is designed for professionals seeking a balance of performance and portability.',
 2499.00, '2024-11-25', 'Available', 
 '{"CPU": "Intel Core i9", "RAM": "32GB", "Storage Options": ["512GB SSD", "1TB SSD"], "GPU": "NVIDIA RTX 4070"}', 
 1, 'CrabMac', NULL);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(12, 'Storage Options', '/icons/storage.png', 9);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
(40, 1, '512GB SSD', 0.00, 12),
(41, 0, '1TB SSD', 200.00, 12);

########################################################
-- CrabPad Pro
########################################################
INSERT INTO Product (
    productId, name, lineupName, shortDescription, description, price, releaseDate, productStatus, specSheet, videoId, categoryName, discountId
)
VALUES 
(10, 'CrabPad Pro', 'CrabPad', 'Ultimate tablet experience.',
 'The CrabPad Pro delivers outstanding performance for work and play.',
 899.00, '2024-11-10', 'Available', 
 '{"CPU": "Apple M2 Chip", "RAM": "8GB", "Storage Options": ["128GB", "256GB", "512GB"], "Screen Size": "12.9 inches"}', 
 NULL, 'CrabPad', NULL);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(13, 'Storage Options', '/icons/storage.png', 10);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
(42, 1, '128GB', 0.00, 13),
(43, 0, '256GB', 100.00, 13),
(44, 0, '512GB', 200.00, 13);

########################################################
-- CrabPad Air
########################################################
INSERT INTO Product (
    productId, name, lineupName, shortDescription, description, price, releaseDate, productStatus, specSheet, videoId, categoryName, discountId
)
VALUES 
(11, 'CrabPad Air', 'CrabPad', 'Lightweight and powerful tablet.',
 'The CrabPad Air is perfect for productivity on the go.',
 499.00, '2024-11-12', 'Available', 
 '{"CPU": "A14 Bionic", "RAM": "4GB", "Storage Options": ["64GB", "128GB", "256GB"], "Screen Size": "10.5 inches"}', 
 NULL, 'CrabPad', NULL);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(14, 'Storage Options', '/icons/storage.png', 11);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
(45, 1, '64GB', 0.00, 14),
(46, 0, '128GB', 50.00, 14),
(47, 0, '256GB', 100.00, 14);

########################################################
-- CrabPods 1
########################################################
INSERT INTO Product (
    productId, name, lineupName, shortDescription, description, price, releaseDate, productStatus, specSheet, videoId, categoryName, discountId
)
VALUES 
(12, 'CrabPods 1', 'CrabPods', 'Premium wireless earbuds.',
 'CrabPods 1 offers high-quality sound and comfortable fit for music lovers.',
 199.00, '2024-10-05', 'Available', 
 '{"Battery Life": "6 hours", "Bluetooth": "5.0", "Color Options": ["White", "Black"]}', 
 NULL, 'CrabPods', NULL);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(15, 'Color Options', '/icons/color.png', 12);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
(48, 1, 'White', 0.00, 15),
(49, 0, 'Black', 0.00, 15);

########################################################
-- CrabWatch Sport
########################################################
INSERT INTO Product (
    productId, name, lineupName, shortDescription, description, price, releaseDate, productStatus, specSheet, videoId, categoryName, discountId
)
VALUES 
(13, 'CrabWatch Sport', 'CrabWatch', 'Sporty smartwatch.',
 'CrabWatch Sport offers essential fitness and health tracking features.',
 199.00, '2024-11-18', 'Available', 
 '{"Battery Life": "24 hours", "Display": "LCD", "Features": "Fitness tracking, Water resistance", "Band Options": ["Silicone", "Nylon"]}', 
 NULL, 'CrabWatch', NULL);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(16, 'Band Options', '/icons/band.png', 13);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
(50, 1, 'Silicone', 0.00, 16),
(51, 0, 'Nylon', 25.00, 16);

########################################################
-- CrabMouse
########################################################
INSERT INTO Product (
    productId, name, lineupName, shortDescription, description, price, releaseDate, productStatus, specSheet, videoId, categoryName, discountId
)
VALUES 
(14, 'CrabMouse', 'Accessories', 'Ergonomic mouse for CrabMac users.',
 'A high-quality ergonomic mouse designed to complement CrabMac desktops.',
 59.99, '2024-11-05', 'Available', 
 '{"Connectivity": "Bluetooth", "Ergonomics": "Ambidextrous", "Color": "Gray"}', 
 NULL, 'Accessories', NULL);
 
########################################################
-- CrabPad Mini
########################################################
INSERT INTO Product (
    productId, name, lineupName, shortDescription, description, price, releaseDate, productStatus, specSheet, videoId, categoryName, discountId
)
VALUES 
(15, 'CrabPad Mini', 'CrabPad', 'Compact and portable tablet.',
 'The CrabPad Mini is perfect for everyday tasks, offering portability and performance in a smaller form factor.',
 399.00, '2024-11-17', 'Available', 
 '{"CPU": "A13 Bionic", "RAM": "3GB", "Storage Options": ["64GB", "128GB"], "Screen Size": "8.3 inches"}', 
 NULL, 'CrabPad', NULL);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(17, 'Storage Options', '/icons/storage.png', 15);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
(52, 1, '64GB', 0.00, 17),
(53, 0, '128GB', 50.00, 17);

########################################################
-- CrabPhone 18
########################################################
INSERT INTO Product (
    productId, name, lineupName, shortDescription, description, price, releaseDate, productStatus, specSheet, videoId, categoryName, discountId
)
VALUES 
(16, 'CrabPhone 18', 'CrabPhone', 'Ultimate smartphone experience.',
 'The CrabPhone 18 delivers top-tier performance with cutting-edge technology.',
 1399.00, '2024-12-01', 'Available', 
 '{"CPU": "A19 Bionic", "RAM": "8GB", "Storage Options": ["128GB", "256GB", "512GB"], "Color Options": ["Black", "Gold", "Silver", "Midnight Green"], "Camera": "64MP Main"}', 
 NULL, 'CrabPhone', NULL);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(18, 'Storage Options', '/icons/storage.png', 16),
(19, 'Color Options', '/icons/color.png', 16);

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
    productId, name, lineupName, shortDescription, description, price, releaseDate, productStatus, specSheet, videoId, categoryName, discountId
)
VALUES 
(17, 'CrabWatch Pro', 'CrabWatch', 'Smartwatch with advanced features.',
 'The CrabWatch Pro combines cutting-edge technology with style for fitness enthusiasts.',
 499.00, '2024-11-30', 'Available', 
 '{"Battery Life": "48 hours", "Display": "OLED", "Features": "Blood Oxygen Monitoring, GPS, ECG", "Band Options": ["Sport Band", "Leather"]}', 
 NULL, 'CrabWatch', NULL);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(20, 'Band Options', '/icons/band.png', 17);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
(61, 1, 'Sport Band', 0.00, 20),
(62, 0, 'Leather', 50.00, 20);

########################################################
-- CrabPad Pro
########################################################
INSERT INTO Product (
    productId, name, lineupName, shortDescription, description, price, releaseDate, productStatus, specSheet, videoId, categoryName, discountId
)
VALUES 
(18, 'CrabPod Pro', 'CrabPods', 'Premium wireless headphones.',
 'CrabPod Pro offers premium sound quality and noise cancellation for audiophiles.',
 299.00, '2024-12-05', 'Available', 
 '{"Battery Life": "12 hours", "Bluetooth": "5.0", "Noise Cancellation": "Active", "Color Options": ["Black", "Silver"]}', 
 NULL, 'CrabPods', NULL);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(21, 'Color Options', '/icons/color.png', 18);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
(63, 1, 'Black', 0.00, 21),
(64, 0, 'Silver', 0.00, 21);

########################################################
-- CrabMac Air Max
########################################################
INSERT INTO Product (
    productId, name, lineupName, shortDescription, description, price, releaseDate, productStatus, specSheet, videoId, categoryName, discountId
)
VALUES 
(19, 'CrabMac Air Max', 'CrabMac', 'Top-tier ultra-light laptop.',
 'The CrabMac Air Max combines extreme portability with extreme power.',
 1799.00, '2024-11-28', 'Available', 
 '{"CPU": "M3 Chip", "RAM": "16GB", "Storage Options": ["256GB SSD", "512GB SSD", "1TB SSD"], "GPU": "Apple M3 GPU"}', 
 NULL, 'CrabMac', NULL);

INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(22, 'Storage Options', '/icons/storage.png', 19);

INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
(65, 1, '256GB SSD', 0.00, 22),
(66, 0, '512GB SSD', 200.00, 22),
(67, 0, '1TB SSD', 400.00, 22);

########################################################
-- CrabKeyboard
########################################################
INSERT INTO Product (
    productId, name, lineupName, shortDescription, description, price, releaseDate, productStatus, specSheet, videoId, categoryName, discountId
)
VALUES 
(20, 'CrabKeyboard', 'Accessories', 'Mechanical keyboard with customizable RGB lighting.',
 'A premium mechanical keyboard with responsive keys and RGB lighting for the ultimate typing experience.',
 120.00, '2024-11-05', 'Available', 
 '{"Type": "Mechanical", "Lighting": "RGB", "Connectivity": "Wired"}', 
 NULL, 'Accessories', NULL);
 
########################################################
-- CrabCable
########################################################
 INSERT INTO Product (
    productId, name, lineupName, shortDescription, description, price, releaseDate, productStatus, specSheet, videoId, categoryName, discountId
)
VALUES 
 (21, 'CrabCable', 'Accessories', 'USB-C to USB-C charging cable.',
 'A durable and fast charging USB-C cable to power your devices.',
 25.00, '2024-11-05', 'Available', 
 '{"Length": "6ft", "Material": "Nylon Braided"}', 
 NULL, 'Accessories', NULL);
 
########################################################
-- CrabPencil
########################################################
INSERT INTO Product (
    productId, name, lineupName, shortDescription, description, price, releaseDate, productStatus, specSheet, videoId, categoryName, discountId
)
VALUES
 (22, 'CrabPencil', 'Accessories', 'Wireless stylus pen for drawing and note-taking.',
 'Precision stylus with Bluetooth connectivity, designed for drawing and note-taking on digital devices.',
 80.00, '2024-11-05', 'Available', 
 '{"Compatibility": "iOS, Android", "Battery Life": "20 hours", "Color": "Silver"}', 
 NULL, 'Accessories', NULL);
 
########################################################
-- CrabAdapter
########################################################
 INSERT INTO Product (
    productId, name, lineupName, shortDescription, description, price, releaseDate, productStatus, specSheet, videoId, categoryName, discountId
)
VALUES
 (23, 'CrabAdapter', 'Accessories', '65W USB-C power adapter.',
 'Compact USB-C power adapter for fast charging of your devices.',
 40.00, '2024-11-05', 'Available', 
 '{"Power Output": "65W", "Compatibility": "USB-C"}', 
 NULL, 'Accessories', NULL);
 
########################################################
-- Wireless CrabCharger
########################################################
 INSERT INTO Product (
    productId, name, lineupName, shortDescription, description, price, releaseDate, productStatus, specSheet, videoId, categoryName, discountId
)
VALUES
 (24, 'Wireless CrabCharger', 'Accessories', 'Wireless charging pad with 15W charging speed.',
 'A sleek and efficient wireless charging pad supporting up to 15W charging.',
 50.00, '2024-11-05', 'Available', 
 '{"Charging Speed": "15W", "Material": "Aluminum", "Compatibility": "Qi-enabled devices"}', 
 NULL, 'Accessories', NULL);
 
########################################################
-- CrabSleeve
########################################################
 INSERT INTO Product (
    productId, name, lineupName, shortDescription, description, price, releaseDate, productStatus, specSheet, videoId, categoryName, discountId
)
VALUES
 (25, 'CrabSleeve', 'Accessories', 'Protective sleeve for 13-inch and 15-inch laptops.',
 'A protective sleeve made from high-quality neoprene, designed for 13-inch and 15-inch laptops.',
 30.00, '2024-11-05', 'Available', 
 '{"Material": "Neoprene", "Size": "13-inch, 15-inch", "Color": "Black"}', 
 NULL, 'Accessories', NULL);

-- ########################################################

-- Insert Customers
INSERT INTO Customer (username, firstName, lastName, email, joinDate, password, balance)
VALUES
    ('john_doe', 'John', 'Doe', 'john.doe@example.com', '2023-01-01', 'securepassword', 1000.00),
    ('jane_smith', 'Jane', 'Smith', 'jane.smith@example.com', '2023-02-15', 'anothersecurepassword', 500.00);

-- Custom Products
INSERT INTO CustomProduct (customProductId, configuredPrice, finalPrice, productId)
VALUES
    (1, 2999.99, 3199.99, 1), -- CrabMac Pro
    (2, 999.99, 999.99, 2);  -- CrabPhone 15

-- Configuration
INSERT INTO Configuration (configurableOptionId, customProductId)
VALUES
    (1, 1), -- 1TB SSD for CrabMac Pro
    (2, 2); -- 128GB for CrabPhone 15

-- Orders
INSERT INTO `Order` (orderId, orderStatus, orderDate, deliveryDate, username)
VALUES
    (1, 'Processing', '2024-01-16 10:00:00', NULL, 'john_doe'),
    (2, 'Delivered', '2023-11-10 14:00:00', '2023-11-15 09:00:00', 'jane_smith');

-- Order Products
INSERT INTO OrderProduct (orderId, customProductId, amount)
VALUES
    (1, 1, 1), -- John Doe ordered one CrabMac Pro
    (2, 2, 1); -- Jane Smith ordered one CrabPhone 15

-- Insert Notifications
INSERT INTO Notification (subject, description, date, isRead, username)
VALUES
    ('Order Update', 'Your order #1 is being processed.', '2024-01-16 10:05:00', 0, 'john_doe'),
    ('Delivery Confirmation', 'Your order #2 has been delivered.', '2023-11-15 09:05:00', 1, 'jane_smith');

-- Insert CartProduct
INSERT INTO CartProduct (customProductId, username, amount)
VALUES
    (1, 'john_doe', 1),
    (2, 'jane_smith', 1);
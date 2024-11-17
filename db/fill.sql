-- Insert Categories
INSERT INTO Category (categoryName, shortDescription, description, icon, mainImage, secondaryImage, video)
VALUES
    ('CrabMac', 'High-performance desktops and laptops', 'Experience the ultimate in computing power with our CrabMac lineup.', 
    'crabmac-icon.png', 'crabmac-main.jpg', 'crabmac-secondary.jpg', 'crabmac.mp4'),
    ('CrabiPad', 'Portable and versatile tablets', 'Unleash creativity and productivity with CrabiPad.', 
    'crabipad-icon.png', 'crabipad-main.jpg', 'crabipad-secondary.jpg', 'crabipad.mp4'),
    ('CrabiPhone', 'Revolutionary smartphones', 'Connect with the world using CrabiPhone, a premium communication device.', 
    'crabiphone-icon.png', 'crabiphone-main.jpg', 'crabiphone-secondary.jpg', 'crabiphone.mp4'),
    ('CrabWatch', 'Smartwatches for every lifestyle', 'Track fitness, health, and more with the CrabWatch.', 
    'crabwatch-icon.png', 'crabwatch-main.jpg', 'crabwatch-secondary.jpg', 'crabwatch.mp4'),
    ('CrabPods', 'Wireless earbuds and headphones', 'Immerse yourself in sound with CrabPods.', 
    'crabpods-icon.png', 'crabpods-main.jpg', 'crabpods-secondary.jpg', 'crabpods.mp4'),
    ('Accessories', 'Enhance your experience', 'Find the perfect accessories to complement your devices.', 
    'accessories-icon.png', 'accessories-main.jpg', 'accessories-secondary.jpg', 'accessories.mp4');

-- Insert Discounts
INSERT INTO Discount (name, amount)
VALUES
    ('Holiday Discount', 50.00),
    ('Black Friday', 100.00);

-- Insert Product Videos
INSERT INTO ProductVideo (videoUrl)
VALUES
    ('crabmacpro-overview.mp4'),
    ('crabiphone15-unboxing.mp4');

-- ########################################################

-- Product Insertion
INSERT INTO Product (
    productId, name, lineupName, shortDescription, description, price, releaseDate, productStatus, specSheet, videoId, categoryName, discountId
)
VALUES 
(1, 'CrabMac Pro', 'CrabMac', 'Ultimate desktop performance.', 
 'The CrabMac Pro delivers unmatched performance for professionals.',
 5999.00, '2024-11-01', 'Available', 
 '{"CPU": "Intel Xeon W", "RAM": "64GB", "Storage Options": ["1TB SSD", "2TB SSD", "4TB SSD", "8TB SSD"], "GPU": "AMD Radeon Pro Vega II"}', 
 NULL, 'CrabMac', NULL);

-- Configurable
INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(1, 'Storage Options', '/icons/storage.png', 1);

-- Configurable Options
INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
(1, 1, '1TB SSD', 0.00, 1),
(2, 0, '2TB SSD', 400.00, 1),
(3, 0, '4TB SSD', 800.00, 1),
(4, 0, '8TB SSD', 1200.00, 1);

-- Product Insertion
INSERT INTO Product (
    productId, name, lineupName, shortDescription, description, price, releaseDate, productStatus, specSheet, videoId, categoryName, discountId
)
VALUES 
(2, 'CrabiPhone 15', 'CrabiPhone', 'Revolutionary smartphone.', 
 'The CrabiPhone 15 redefines smartphone innovation with powerful hardware.',
 999.00, '2024-09-01', 'Available', 
 '{"CPU": "A17 Bionic", "RAM": "6GB", "Storage Options": ["128GB", "256GB", "512GB"], "Color Options": ["Black", "Silver", "Gold", "Deep Blue"], "Camera": "48MP Main"}', 
 NULL, 'CrabiPhone', NULL);

-- Configurable
INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(2, 'Storage Options', '/icons/storage.png', 2),
(3, 'Color Options', '/icons/color.png', 2);

-- Configurable Options
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

-- Product Insertion
INSERT INTO Product (
    productId, name, lineupName, shortDescription, description, price, releaseDate, productStatus, specSheet, videoId, categoryName, discountId
)
VALUES 
(3, 'CrabWatch Ultra', 'CrabWatch', 'Adventure companion.', 
 'The CrabWatch Ultra is the ultimate smartwatch for fitness and exploration.',
 799.00, '2024-10-10', 'Available', 
 '{"Battery Life": "36 hours", "Display": "Sapphire Crystal", "Features": "GPS, Altimeter, Compass", "Band Options": ["Alpine Loop", "Ocean Band", "Trail Loop"]}', 
 NULL, 'CrabWatch', NULL);

-- Configurable
INSERT INTO Configurable (configurableId, name, icon, productId)
VALUES 
(4, 'Band Options', '/icons/band.png', 3);

-- Configurable Options
INSERT INTO ConfigurableOption (configurableOptionId, isDefault, details, price, configurableId)
VALUES 
(12, 1, 'Alpine Loop', 0.00, 4),
(13, 0, 'Ocean Band', 50.00, 4),
(14, 0, 'Trail Loop', 50.00, 4);

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
    (2, 999.99, 999.99, 2);  -- CrabiPhone 15

-- Configuration
INSERT INTO Configuration (configurableOptionId, customProductId)
VALUES
    (1, 1), -- 1TB SSD for CrabMac Pro
    (2, 2); -- 128GB for CrabiPhone 15

-- Orders
INSERT INTO `Order` (orderId, orderStatus, orderDate, deliveryDate, username)
VALUES
    (1, 'Processing', '2024-01-16 10:00:00', NULL, 'john_doe'),
    (2, 'Delivered', '2023-11-10 14:00:00', '2023-11-15 09:00:00', 'jane_smith');

-- Order Products
INSERT INTO OrderProduct (orderId, customProductId, amount)
VALUES
    (1, 1, 1), -- John Doe ordered one CrabMac Pro
    (2, 2, 1); -- Jane Smith ordered one CrabiPhone 15

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
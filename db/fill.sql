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
(1, 'CrabMac Pro', 'desktop', 'Ultimate desktop performance for creative professionals and demanding workflows.', 
 'The CrabMac Pro is designed to push the boundaries of desktop computing. Built with cutting-edge hardware and exceptional craftsmanship, it delivers unrivaled performance for professionals in fields like video editing, 3D rendering, scientific research, and machine learning. Powered by Intel’s Xeon W processors and equipped with high-end AMD Radeon Pro Vega II graphics, this powerhouse supports ultra-high-resolution displays and complex workflows. With multiple storage and memory configurations available, the CrabMac Pro is customizable to meet your needs, offering seamless multitasking and performance reliability for the most demanding tasks.',
 5999.00, '2024-11-01', 'Available', 
 '{"CPU": "Intel Xeon W", "RAM": ["64GB", "128GB", "256GB"], "Storage": ["1TB SSD", "2TB SSD", "4TB SSD", "8TB SSD"], "GPU": "AMD Radeon Pro Vega II", "Ports": ["4x Thunderbolt 3", "10Gb Ethernet", "USB 3.0", "HDMI 2.0"], "Audio": "Dolby Atmos", "Connectivity": ["Wi-Fi 6", "Bluetooth 5.0"], "OS": "macOS Ventura", "Security": "T2 Security Chip"}', 
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
(2, 'CrabPhone 15', 'Revolutionary smartphone with cutting-edge technology and design.',
 'The CrabPhone 15 sets a new benchmark for smartphone performance and design. Featuring the latest A17 Bionic chip, this device is engineered to handle the most demanding apps and multitasking with ease. The 48MP main camera captures stunning photos with exceptional detail, while the advanced display delivers vibrant colors and crisp visuals. With multiple storage options and elegant color choices, the CrabPhone 15 is built for those who demand top-tier performance, style, and reliability in their mobile devices. Whether for work or play, the CrabPhone 15 exceeds expectations in every category.',
 999.00, '2024-09-01', 'Available', 
 '{"CPU": "A17 Bionic", "RAM": "6GB", "Storage": ["128GB", "256GB", "512GB"], "Color": ["Black", "Silver", "Gold", "Deep Blue"], "Camera": "48MP Main, 12MP Ultra-Wide, 12MP Telephoto", "Display": "6.7-inch Super Retina XDR", "Battery": "4500mAh", "Charging": "Fast Charging, Wireless Charging", "OS": "iOS 17", "WaterResistance": "IP68", "5G": "Supported", "Audio": "Stereo speakers, Spatial Audio", "FaceID": "Yes", "Security": "Apple Secure Enclave"}', 
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
(3, 'CrabWatch Ultra', 'The ultimate adventure smartwatch for fitness enthusiasts and explorers.',
 'The CrabWatch Ultra is designed for those who push their limits, offering unparalleled features for fitness and outdoor exploration. Equipped with a robust sapphire crystal display, it withstands harsh environments while delivering a crystal-clear view. Its advanced GPS, altimeter, and compass functions make it the perfect companion for hikers, mountaineers, and adventurers, while its long-lasting battery ensures it can keep up with your most challenging expeditions. With a range of stylish and durable bands, the CrabWatch Ultra is as versatile as your adventures, combining rugged durability with the latest in wearable technology.',
 799.00, '2024-10-10', 'Available', 
 '{"Battery Life": "36 hours", "Display": "Sapphire Crystal", "Features": ["GPS", "Altimeter", "Compass", "Heart Rate Monitor", "Sleep Tracking", "Blood Oxygen Monitoring"], "Band": ["Alpine Loop", "Ocean Band", "Trail Loop"], "Connectivity": ["Bluetooth", "Wi-Fi"], "Water Resistance": "100 meters", "Sensors": ["Accelerometer", "Gyroscope", "Barometer"], "Operating System": "Custom FitnessOS", "Compatibility": "iOS & Android", "Charging": "Magnetic charging pad", "Notifications": "Messages, Calls, App Alerts"}', 
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
(4, 'CrabPhone 16', 'Enhanced performance, stunning design, and advanced features for daily productivity.',
 'The CrabPhone 16 combines sleek design with enhanced performance for users who demand both speed and style in their everyday smartphones. Powered by the advanced A18 Bionic chip, the CrabPhone 16 offers blazing-fast performance, whether you’re gaming, streaming, or multitasking. The 50MP main camera captures crisp, vibrant images, and with multiple storage options, you can store all your photos, videos, and apps without worry. Available in stylish colors, it’s designed to fit perfectly into your daily routine, offering seamless performance, a beautiful display, and top-tier features in a sleek, modern package.',
 1099.00, '2024-11-01', 'Available', 
 '{"CPU": "A18 Bionic", "RAM": "8GB", "Storage": ["128GB", "256GB", "512GB"], "Color": ["Black", "Silver", "Red", "Space Gray"], "Camera": "50MP Main, 12MP Ultra-Wide", "Display": "6.1-inch OLED", "Battery": "4000mAh", "Charging": "Fast Charging, Wireless Charging", "OS": "Custom MobileOS", "Connectivity": ["5G", "Wi-Fi", "Bluetooth"], "Security": "Fingerprint Sensor, Face Recognition", "Audio": "Stereo speakers", "WaterResistance": "IP68"}', 
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
(5, 'CrabPhone 17', 'Next-gen mobile experience with advanced features and unmatched performance.',
 'The CrabPhone 17 is the next evolution in mobile technology, offering an all-around enhanced experience with cutting-edge features. Powered by the new A18 Pro chip, the phone delivers lightning-fast performance for everything from gaming to productivity tasks. The 64MP main camera takes professional-quality photos with incredible detail, while the advanced display offers vibrant colors and smooth visuals. With multiple storage options and a stylish design, the CrabPhone 17 is perfect for users who want the best of both power and elegance, making it the ultimate tool for work, play, and everything in between.',
 1299.00, '2024-12-01', 'Available', 
 '{"CPU": "A18 Pro", "RAM": "8GB", "Storage": ["128GB", "256GB", "512GB"], "Color": ["Black", "Blue", "Gold", "Green"], "Camera": "64MP Main, 12MP Ultra-Wide, 10MP Telephoto", "Display": "6.5-inch AMOLED", "Battery": "5000mAh", "Charging": "Fast Charging, Wireless Charging", "OS": "Custom MobileOS Pro", "Connectivity": ["5G", "Wi-Fi 6", "Bluetooth 5.0"], "Security": "Fingerprint Sensor, Face Recognition", "Audio": "Stereo speakers with Enhanced Audio", "WaterResistance": "IP68", "Sensors": ["Accelerometer", "Gyroscope", "Barometer", "Proximity Sensor"], "Dual SIM": "Yes"}', 
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
(6, 'CrabMac Pro 16', 'desktop', 'Top-tier desktop performance and exceptional flexibility for high-end professionals.',
 'The CrabMac Pro 16 is engineered for professionals who demand the best in desktop performance and scalability. Featuring the Intel Xeon W-2295 processor, this powerhouse is built to handle resource-intensive tasks like 3D rendering, data science, and large-scale simulations with ease. With up to 128GB of RAM and a variety of high-performance storage options, the CrabMac Pro 16 is tailored for workflows that require massive amounts of memory and speed. Equipped with the AMD Radeon Pro W6800X graphics card, it delivers stunning visuals, making it ideal for creative professionals. Whether you’re working on complex projects or multitasking at high speeds, the CrabMac Pro 16 is your ultimate desktop companion.',
 6499.00, '2024-11-10', 'Available', 
 '{"CPU": "Intel Xeon W-2295", "RAM": ["64GB", "128GB"], "Storage": ["1TB SSD", "2TB SSD", "4TB SSD", "8TB SSD"], "GPU": "AMD Radeon Pro W6800X", "Ports": ["4x Thunderbolt 3", "10Gb Ethernet", "USB 3.0", "HDMI 2.0", "SDXC card reader"], "Connectivity": ["Wi-Fi 6", "Bluetooth 5.0"], "Audio": "Dolby Atmos", "Display Support": "Up to 6K", "OS": "Custom ProOS", "Security": "T2 Security Chip, Secure Boot", "Cooling": "Advanced Liquid Cooling", "Power Supply": "1000W"]}', 
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
(7, 'CrabMac Pro 17', 'desktop', 'Premium desktop tailored for high-performance creative and engineering workflows.',
 'The CrabMac Pro 17 is designed for professionals who demand the ultimate in power and performance. With the new Intel Xeon W-2375 processor, this desktop delivers unrivaled speed and reliability, making it perfect for creative professionals, engineers, and anyone working with complex computational tasks. The system is equipped with up to 256GB of RAM and storage options that can scale from 1TB to a massive 8TB SSD, ensuring that even the largest files and most resource-heavy applications run seamlessly. Featuring the NVIDIA RTX A5000 graphics card, the CrabMac Pro 17 is optimized for 3D rendering, simulation, and high-end video editing. This desktop is the ideal solution for professionals who require peak performance for demanding workloads.',
 7499.00, NULL, 'Upcoming', 
 '{"CPU": "Intel Xeon W-2375", "RAM": ["128GB", "256GB"], "Storage": ["1TB SSD", "2TB SSD", "4TB SSD", "8TB SSD"], "GPU": "NVIDIA RTX A5000", "Ports": ["4x Thunderbolt 3", "10Gb Ethernet", "USB 3.1", "HDMI 2.0", "SDXC card reader"], "Connectivity": ["Wi-Fi 6", "Bluetooth 5.1"], "Audio": "Dolby Atmos", "Display Support": "Up to 8K", "OS": "Custom ProOS", "Security": "T2 Security Chip, Secure Boot", "Cooling": "Liquid Cooling", "Power Supply": "1200W"]}', 
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
(8, 'CrabMac Air', 'laptop', 'Lightweight, powerful, and versatile for on-the-go professionals.',
 'The CrabMac Air is the ultimate laptop for those who value performance and portability. Powered by the new M2 chip, it offers exceptional speed and energy efficiency, making it ideal for both everyday tasks and more demanding applications. The 13-inch FullHD IPS display delivers crisp visuals, while the option for a 15-inch 4K OLED display provides stunning, vibrant colors for creative professionals. With up to 1TB of SSD storage and configurations offering up to 16GB of RAM, the CrabMac Air balances portability with powerful performance. Whether you’re working on the go, streaming your favorite content, or tackling complex tasks, the CrabMac Air has you covered.',
 1499.00, '2024-11-20', 'Available', 
 '{"CPU": "M2 Chip", "RAM": ["8GB", "16GB"], "Display": ["13 inch FullHD IPS", "15 inch 4K OLED"], "Storage": ["256GB SSD", "512GB SSD", "1TB SSD"], "GPU": "Apple M2 GPU", "Battery Life": "Up to 18 hours", "Charging": "Fast Charging", "OS": "CrabOS", "Connectivity": ["Wi-Fi 6", "Bluetooth 5.0", "Thunderbolt 3"], "Audio": "Stereo speakers with Spatial Audio", "Security": "Touch ID", "Weight": "2.8 lbs", "Camera": "1080p FaceTime HD"}', 
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
(9, 'CrabMac Pro Air', 'laptop', 'High-performance laptop for professionals seeking portability and power.',
 'The CrabMac Pro Air is the perfect choice for professionals who need both power and portability. Featuring the latest Intel Core i9 processor, this laptop delivers top-tier performance for demanding applications, from video editing and 3D rendering to complex data analysis. With up to 64GB of RAM and storage options from 512GB to 1TB SSD, the CrabMac Pro Air is built for those who require speed, efficiency, and large storage capacities on the go. Whether you’re traveling, working remotely, or on the move, this laptop provides everything you need without compromising on power or design.',
 2499.00, '2024-11-25', 'Available', 
 '{"CPU": "Intel Core i9", "RAM": ["32GB", "64GB"], "Display": ["13 inch FullHD IPS", "15 inch 4K OLED"], "Storage": ["512GB SSD", "1TB SSD"], "GPU": "NVIDIA RTX 4070", "Battery Life": "Up to 20 hours", "Charging": "Fast Charging", "OS": "CrabOS", "Connectivity": ["Wi-Fi 6", "Bluetooth 5.2", "Thunderbolt 4"], "Audio": "Stereo speakers with Dolby Atmos", "Security": "Touch ID", "Weight": "3.2 lbs", "Camera": "1080p HD Camera"}', 
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
(10, 'CrabPad Pro', 'Ultimate tablet experience for work and play.',
 'The CrabPad Pro is the ultimate tablet for professionals and creatives alike. Powered by the Apple M2 Chip, this device offers powerful performance and responsiveness for both productivity and entertainment. With a stunning 12.9-inch Liquid Retina XDR display, every detail comes to life with vibrant colors and sharp contrast, making it ideal for editing photos, watching videos, and enjoying immersive content. Available with up to 512GB of storage and 8GB of RAM, the CrabPad Pro is designed to handle demanding applications with ease, while remaining portable and lightweight. Whether you’re drawing, writing, or multitasking, the CrabPad Pro offers a versatile solution for all your needs.',
 899.00, '2024-11-10', 'Available', 
 '{"CPU": "Apple M2 Chip", "RAM": "8GB", "Storage": ["128GB", "256GB", "512GB"], "Screen Size": "12.9 inch", "Display": "Liquid Retina XDR", "Battery Life": "Up to 12 hours", "Charging": "Fast Charging", "OS": "CrabOS", "Connectivity": ["Wi-Fi 6", "Bluetooth 5.2", "USB-C"], "Camera": "12MP Rear, 12MP Front", "Audio": "Four Speaker Audio", "Weight": "1.5 lbs", "Accessories": ["CrabPad Pencil", "CrabPad Keyboard"]}', 
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
(11, 'CrabPad Air', 'Lightweight and powerful tablet for productivity and entertainment.',
 'The CrabPad Air is the perfect tablet for those who need both portability and performance. Powered by the A14 Bionic chip, it offers smooth multitasking and responsive performance for everything from work to play. With a 10.5-inch display, the CrabPad Air is compact enough to take anywhere but still offers a crisp, vibrant display for all your tasks. Whether you’re working on a presentation, catching up on your favorite shows, or browsing the web, the CrabPad Air is your go-to device for everyday tasks. With storage options up to 256GB and 4GB of RAM, it provides ample space for all your apps, media, and documents, making it ideal for productivity on the go.',
 499.00, NULL, 'Upcoming', 
 '{"CPU": "A14 Bionic", "RAM": "4GB", "Storage": ["64GB", "128GB", "256GB"], "Screen Size": "10.5 inch", "Display": "Retina Display", "Battery Life": "Up to 10 hours", "Charging": "Standard Charging", "OS": "CrabOS", "Connectivity": ["Wi-Fi 5", "Bluetooth 5.0"], "Camera": "8MP Rear, 7MP Front", "Audio": "Stereo Speakers", "Weight": "1 lb", "Accessories": ["CrabPad Pencil", "CrabPad Smart Cover"]}', 
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
(12, 'CrabPods 1', 'Premium wireless earbuds with exceptional sound quality.',
 'CrabPods 1 provides an immersive audio experience with superior sound quality and a comfortable fit. Designed for music lovers and those who appreciate high-fidelity sound, these wireless earbuds deliver crystal-clear audio and deep bass for every genre. With advanced Bluetooth 5.0 connectivity, pairing is quick and seamless, ensuring stable audio playback throughout your day. The lightweight design and customizable ear tips offer a perfect fit, making them comfortable for extended wear. Whether you’re listening to music, taking calls, or enjoying podcasts, CrabPods 1 is your ideal companion for all audio needs. With a 6-hour battery life, you can enjoy hours of uninterrupted music and calls on the go.',
 199.00, '2024-10-05', 'Available', 
 '{"Battery Life": "6 hours", "Bluetooth": "5.0", "Color": ["White", "Black"], "Audio": "High-fidelity sound, Deep Bass", "Noise Cancellation": "Passive", "Charging Case": "Compact Charging Case", "Charging Port": "USB-C", "Weight": "0.25 oz per earbud", "Water Resistance": "IPX4", "Voice Assistant": "Siri, Google Assistant"}', 
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
(13, 'CrabWatch Sport', 'Sporty smartwatch for fitness enthusiasts.',
 'CrabWatch Sport is designed for active individuals who want to track their fitness journey and monitor health metrics effortlessly. Packed with essential fitness and health features, it includes heart rate monitoring, step counting, and sleep tracking, helping you stay on top of your health goals. With its 24-hour battery life, you can wear it throughout the day and night without needing frequent recharges. The LCD display offers clear visibility under various lighting conditions, whether you’re exercising outdoors or relaxing indoors. Featuring a choice of durable silicone or nylon bands, CrabWatch Sport ensures comfort and flexibility for all types of activities. It is also water-resistant, making it the ideal companion for swimming, running, or hiking, regardless of the weather.',
 199.00, '2024-11-18', 'Available', 
 '{"Battery Life": "24 hours", "Display": "LCD", "Features": "Fitness tracking, Heart Rate Monitoring, Sleep Tracking, Step Counting, Water Resistance", "Band": ["Silicone", "Nylon"], "Connectivity": ["Bluetooth", "Wi-Fi"], "Water Resistance": "IP68", "Weight": "1.2 oz", "OS": "CrabOS", "Compatibility": "iOS, Android", "Charging": "Magnetic Charging Dock"}', 
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
(14, 'CrabMouse', 'Ergonomic wireless mouse for comfortable navigation.',
 'The CrabMouse is designed to provide ergonomic comfort for long hours of use, making it the perfect accessory for CrabMac desktops. With its ambidextrous design, it caters to both left and right-handed users, offering a natural grip and reducing strain during extended usage. The mouse features precise Bluetooth connectivity, ensuring a smooth and responsive experience without the hassle of wires. Its sleek gray finish complements the modern look of CrabMac desktops, adding a touch of elegance to your workspace. Whether you are working, gaming, or browsing, the CrabMouse is optimized for comfort and performance.',
 59.99, '2024-11-05', 'Available', 
 '{"Connectivity": "Bluetooth", "Ergonomics": "Ambidextrous", "Color": "Gray", "Sensor": "High Precision Optical", "Button Count": "6", "Battery Life": "Up to 12 months", "Weight": "3.5 oz", "Material": "Plastic, Rubberized Grip", "Compatibility": "CrabMac, Windows, macOS"}', 
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
(15, 'CrabPad Mini', 'Compact, portable tablet for on-the-go use.',
 'The CrabPad Mini is the ideal tablet for those who need a compact device that doesn’t compromise on performance. With its 8.3-inch screen, it offers a perfect balance of portability and usability, making it great for everyday tasks like browsing, reading, and watching videos. Powered by the A13 Bionic chip and 3GB of RAM, it handles apps and multitasking with ease. Whether you’re on the go, at home, or at work, the CrabPad Mini provides the perfect solution for users who need a lightweight and versatile tablet. The device is also available in multiple storage options (64GB and 128GB), giving you flexibility depending on your needs.',
 399.00, '2024-11-17', 'Available', 
 '{"CPU": "A13 Bionic", "RAM": "3GB", "Storage": ["64GB", "128GB"], "Screen Size": "8.3 inch", "Display": "Retina Display", "Battery Life": "Up to 10 hours", "Camera": "8MP Rear, 7MP Front", "Connectivity": "Wi-Fi, Bluetooth", "Material": "Aluminum Body", "OS": "CrabOS"}', 
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
(16, 'CrabPhone 18', 'Ultimate smartphone experience with cutting-edge technology.',
 'The CrabPhone 18 sets a new standard in smartphone performance. Powered by the A19 Bionic chip, it offers blazing fast speeds and incredible efficiency for everyday tasks, gaming, and multitasking. Its stunning 64MP main camera lets you capture professional-quality photos and videos, while its sleek design and multiple color options ensure it stands out from the crowd. The phone comes in 128GB, 256GB, and 512GB storage variants, providing ample space for all your apps, photos, and videos. Whether you’re streaming, gaming, or working, the CrabPhone 18 delivers a premium experience with unmatched performance and a stunning display. Experience the future of mobile technology with the CrabPhone 18.',
 1399.00, NULL, 'Upcoming', 
 '{"CPU": "A19 Bionic", "RAM": "8GB", "Storage": ["128GB", "256GB", "512GB"], "Color": ["Black", "Gold", "Silver", "Midnight Green"], "Camera": "64MP Main, 12MP Ultra-Wide, 12MP Front", "Display": "6.7 inch OLED", "Battery": "5000mAh", "Charging": "Fast Charging, Wireless Charging", "Operating System": "CrabOS", "5G": "Yes", "Weight": "6.5 oz", "Material": "Aluminum Frame, Ceramic Back"}', 
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
(17, 'CrabWatch Pro', 'Smartwatch with advanced health and fitness features.',
 "The CrabWatch Pro is the perfect companion for fitness enthusiasts and those who prioritize their health. With cutting-edge technology such as Blood Oxygen Monitoring, ECG, and GPS, it offers real-time health tracking, helping you stay on top of your fitness goals and overall wellness. Its 48-hour battery life ensures that you can track your activity throughout the day and night without needing a recharge. The stunning OLED display delivers vibrant colors and clear visuals, whether you’re checking your stats, receiving notifications, or navigating with the GPS. Choose between two elegant bands, the Sport Band for comfort during workouts or the Leather Band for a stylish, sophisticated look. Whether you're working out, exploring the outdoors, or just tracking your daily activity, the CrabWatch Pro is designed to keep up with your active lifestyle.",
 499.00, '2024-11-30', 'Available', 
 '{"Battery Life": "48 hours", "Display": "OLED", "Features": ["Blood Oxygen Monitoring", "GPS", "ECG", "Sleep Tracking", "Heart Rate Monitoring", "Water Resistance"], "Band": ["Sport Band", "Leather"], "Operating System": "CrabOS", "Connectivity": "Bluetooth 5.0", "Material": "Aluminum", "Weight": "1.5 oz", "Screen Size": "1.8 inch"}', 
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
(18, 'CrabPods Pro', 'Premium wireless headphones with immersive sound and advanced noise cancellation.',
 'CrabPods Pro are designed for audiophiles and music lovers who demand the best sound quality and immersive listening experience. With the latest CrabTech 2.0 noise cancellation technology, these headphones block out external distractions, allowing you to fully immerse yourself in your music, podcasts, or movies. The sound quality is top-notch, delivering clear highs, rich mids, and deep bass for a truly premium audio experience. The 12-hour battery life ensures long-lasting use, whether you’re working, traveling, or just relaxing. Available in classic Black and Silver colors, the CrabPods Pro provide both style and functionality, delivering exceptional performance for every listener.',
 299.00, '2024-12-05', 'Available', 
 '{"Battery Life": "12 hours", "Bluetooth": "5.0", "Noise Cancellation": "CrabTech 2.0", "Color": ["Black", "Silver"], "Sound Quality": "Hi-Fi Stereo", "Driver Size": "40mm", "Weight": "8 oz", "Connectivity": "Wireless, 3.5mm Audio Jack", "Material": "Aluminum and Memory Foam", "Controls": "Touch-sensitive, Voice Assistant Integration"}', 
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
(19, 'CrabMac Air Max', 'laptop', 'Top-tier ultra-light laptop with exceptional power.',
 'The CrabMac Air Max is the ultimate blend of portability and performance. Engineered with the new M3 Chip, this ultra-lightweight laptop delivers impressive computing power, all while maintaining a sleek, portable design that weighs less than most traditional laptops. Whether you’re working, gaming, or streaming, the CrabMac Air Max’s powerful performance ensures smooth multitasking and stunning visuals. Choose from a 13-inch FullHD OLED or 4K OLED display for vibrant colors and crystal-clear detail. With up to 1TB of SSD storage and up to 32GB of RAM, it offers ample space for all your projects and media. The Apple M3 GPU ensures excellent graphics performance, making it a perfect choice for both professionals and creatives. Experience the next level of ultra-portable computing with the CrabMac Air Max.',
 1799.00, '2024-11-28', 'Available', 
 '{"CPU": "M3 Chip", "RAM": ["16GB", "32GB"], "Display": ["13 inch FullHD OLED", "13 inch 4K OLED"], "Storage": ["256GB SSD", "512GB SSD", "1TB SSD"], "GPU": "Apple M3 GPU", "Battery Life": "18 hours", "Weight": "2.3 lbs", "Connectivity": "Wi-Fi 6, Bluetooth 5.0", "Ports": ["2 x Thunderbolt 4", "3.5mm Headphone Jack", "USB-C"]}', 
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
(20, 'CrabKeyboard', 'Premium mechanical keyboard with customizable RGB lighting and responsive keys.',
 'The CrabKeyboard is a high-performance mechanical keyboard designed for those who demand the best typing experience. Featuring customizable RGB lighting, it allows you to set the perfect ambiance for gaming or work, with millions of color options to choose from. The responsive mechanical switches ensure tactile feedback and precise keystrokes, making it ideal for both gamers and typists. Whether you are working late into the night or competing in a gaming tournament, the CrabKeyboard’s durability and comfort will support you through long sessions. Built with a sturdy frame, it also includes programmable keys and anti-ghosting technology, ensuring smooth and uninterrupted performance. It’s the perfect addition to any setup, combining style, function, and reliability.',
 120.00, '2024-11-05', 'Available', 
 '{"Type": "Mechanical", "Lighting": "RGB, customizable", "Connectivity": "Wired", "Key Switches": "Cherry MX-like", "Polling Rate": "1000Hz", "Anti-Ghosting": "Yes", "Key Rollover": "N-Key Rollover", "Dimensions": "17 x 5 x 1.5 inches", "Weight": "2.2 lbs", "Frame Material": "Aluminum"}', 
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
(21, 'CrabCable', 'Durable USB-C to USB-C charging cable with fast charging support.',
 "The CrabCable is a premium USB-C to USB-C charging cable designed for high-speed charging and long-lasting durability. Built with reinforced nylon braided material, this cable is made to withstand daily wear and tear while maintaining its fast-charging capabilities. Ideal for powering your devices like laptops, tablets, smartphones, and other USB-C powered devices, the CrabCable ensures a reliable and stable connection. The 6ft length gives you ample reach, making it perfect for home, office, or on-the-go use. Whether you're charging your laptop on your desk or using it to power your phone on the couch, CrabCable offers convenience and performance.",
 25.00, '2024-11-05', 'Available', 
 '{"Length": "6ft", "Material": "Nylon Braided", "Charging Speed": "Up to 100W", "Connector Type": "USB-C to USB-C", "Compatibility": "Works with USB-C devices", "Warranty": "1-year limited", "Color": "Black"}', 
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
(22, 'CrabPencil', 'Wireless stylus pen with Bluetooth for drawing, note-taking, and creative work.',
 'The CrabPencil is a precision stylus designed for creative professionals and note-takers. Featuring Bluetooth connectivity, this wireless pen offers a seamless and responsive drawing experience on digital devices. With a sleek, ergonomic design, the CrabPencil provides natural, fluid control for artists and professionals alike. The 20-hour battery life ensures long-lasting usage, whether you are sketching, taking notes, or designing. Compatible with both iOS and Android devices, the CrabPencil is the perfect companion for digital creativity and productivity, allowing you to work with precision and ease. Available in a stylish silver color, it combines function and form for a truly exceptional experience.',
 80.00, '2024-11-05', 'Available', 
 '{"Compatibility": "iOS, Android", "Battery Life": "20 hours", "Color": "Silver", "Connectivity": "Bluetooth", "Pressure Sensitivity": "1024 levels", "Dimensions": "6.3 x 0.35 inches", "Weight": "0.5 oz", "Charging Port": "USB-C"}', 
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
(23, 'CrabAdapter', 'Compact and powerful 65W USB-C power adapter for fast charging.',
 `The CrabAdapter is a high-performance 65W USB-C power adapter designed to provide fast, reliable charging for a wide range of devices. Its compact size makes it ideal for travel or everyday use, while still offering ample power to quickly charge laptops, smartphones, tablets, and other USB-C devices. With universal compatibility, the CrabAdapter ensures that your devices stay charged while you're on the go. Whether you need to power up your laptop during a busy day or quickly charge your smartphone overnight, the CrabAdapter delivers the performance you need. Its sleek design and durable construction make it a must-have accessory for all USB-C users.`,
 40.00, '2024-11-05', 'Available', 
 '{"Power Output": "65W", "Compatibility": "USB-C", "Dimensions": "3.2 x 2.4 x 1.1 inches", "Weight": "0.4 lbs", "Input Voltage": "100-240V AC", "Output Voltage": "5V/9V/15V/20V", "Safety Features": "Overvoltage Protection, Overcurrent Protection, Short-circuit Protection"}', 
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
(24, 'Wireless CrabCharger', 'Sleek wireless charging pad with 15W fast charging speed.',
 'The Wireless CrabCharger is a sleek, efficient, and high-performance wireless charging pad designed to provide fast and reliable charging for all Qi-enabled devices. With a maximum charging speed of 15W, it ensures your devices charge quickly without the need for cumbersome cables. Its aluminum finish adds a touch of elegance, while the compact design allows for easy placement in any workspace or home. Whether charging your smartphone, wireless earbuds, or other Qi-compatible devices, the Wireless CrabCharger delivers seamless charging that’s as stylish as it is functional.',
 50.00, '2024-11-05', 'Available', 
 '{"Charging Speed": "15W", "Material": "Aluminum", "Compatibility": "Qi-enabled devices", "Dimensions": "5.6 x 5.6 x 0.3 inches", "Weight": "0.5 lbs", "Input": "5V/2A, 9V/2A", "Output": "5W, 10W, 15W", "LED Indicator": "Yes", "Safety Features": "Overcurrent Protection, Overvoltage Protection, Temperature Control"}', 
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
(25, 'CrabSleeve', 'Durable protective sleeve for 13-inch and 15-inch laptops.',
 'The CrabSleeve is a high-quality protective sleeve made from durable neoprene, designed to fit 13-inch and 15-inch laptops. Offering excellent protection against scratches, dust, and minor impacts, the CrabSleeve ensures that your laptop remains safe while on the go. Its sleek black design not only looks stylish but also provides a snug and secure fit for your device. Whether commuting, traveling, or just keeping your laptop protected at home, the CrabSleeve offers an ideal combination of practicality and style.',
 30.00, '2024-11-05', 'Available', 
 '{"Material": "Neoprene", "Size": "13-inch, 15-inch", "Color": "Black", "Dimensions (13-inch)": "13.5 x 9.5 x 0.5 inches", "Dimensions (15-inch)": "14.5 x 10.5 x 0.5 inches", "Weight": "0.3 lbs", "Closure": "Top Zipper"}', 
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
(26, 'CrabPad Max', 'High-performance tablet designed for professionals.',
 'The CrabPad Max is a powerful tablet engineered for professionals who demand top-tier performance and versatility. Featuring the latest Apple M3 Pro Chip, this tablet is built for productivity, multitasking, and creative workflows. With a large 14.6-inch screen boasting vibrant visuals, whether you are designing, editing, or presenting, the CrabPad Max ensures an immersive experience. The device is designed to handle demanding applications and workflows, making it ideal for creative professionals and power users alike.',
 1299.00, '2024-12-01', 'Available', 
 '{"CPU": "Apple M3 Pro Chip", "RAM": "16GB", "Storage": ["512GB", "1TB", "2TB"], "Color": ["Black", "Silver"], "Screen Size": "14.6 inch", "Display": "Liquid Retina XDR", "Battery Life": "10 hours", "Connectivity": "Wi-Fi 6, 5G", "Ports": "USB-C, Thunderbolt 4"}', 
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
(27, 'CrabPods Max', 'Over-ear headphones with studio-quality sound and immersive audio.',
 'The CrabPods Max deliver an unparalleled audio experience, combining cutting-edge technology with superior comfort. These over-ear headphones are designed for audiophiles, sound engineers, and professionals who demand precision and clarity in their audio equipment. With advanced CrabTech 3.0 noise cancellation and Bluetooth 5.3, they provide an immersive listening experience whether you’re in the studio or on the go. The lightweight yet premium design ensures comfort during extended listening sessions, while the long battery life keeps you powered throughout the day. Available in multiple elegant colors, CrabPods Max are the ideal choice for anyone seeking the best in sound and style.',
 499.00, '2024-12-15', 'Upcoming', 
 '{"Battery Life": "20 hours", "Bluetooth": "5.3", "Noise Cancellation": "CrabTech 3.0", "Color": ["Space Gray", "Silver", "Blue"], "Driver": "Custom 40mm Hi-Fi Drivers", "Connectivity": "Wired and Wireless", "Control": "Touch-sensitive, Active Noise Cancellation (ANC) control", "Weight": "350g"}', 
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
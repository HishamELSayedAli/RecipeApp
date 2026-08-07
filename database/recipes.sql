-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2026 at 12:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipes`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `iamge` varchar(255) NOT NULL,
  `recipe` varchar(535) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `name`, `iamge`, `recipe`) VALUES
(27, 'Creamy Chicken Pasta', 'uploads/1786137010_pexels-ffawdyy-13294544.jpg', 'Boil 300g pasta in salted water until al dente.\r\n\r\nSauté diced chicken with 1 minced garlic clove and butter until golden brown.\r\n\r\nAdd 1 cup of heavy cream, 1/2 cup mozzarella cheese, and a pinch of black pepper.\r\n\r\nSimmer on low heat, then toss in the cooked pasta and mix well.'),
(36, 'Classic Margherita Pizza', 'uploads/1786140407_pexels-renestrgar-35068608.jpg', 'Ingredients:\r\n- 1 pizza dough base\r\n- 1/2 cup tomato pizza sauce\r\n- 1.5 cups fresh Mozzarella cheese, sliced\r\n- Fresh basil leaves\r\n- 1 tbsp extra virgin olive oil\r\n- Pinch of salt and oregano\r\n\r\nInstructions:\r\n1. Preheat your oven to 220°C (425°F).\r\n2. Stretch the pizza dough onto a baking tray or pizza stone.\r\n3. Spread tomato sauce evenly over the dough, leaving a small border for the crust.\r\n4. Arrange fresh mozzarella slices over the sauce.\r\n5. Bake for 12–15 minutes until the crust is golden and the cheese is melted and bub'),
(37, 'Garlic Butter Shrimp', 'uploads/1786140462_pexels-farhad-8697543.jpg', 'Ingredients:\r\n- 500g large shrimp, peeled and deveined\r\n- 4 tbsp unsalted butter\r\n- 4 cloves garlic, minced\r\n- 2 tbsp fresh lemon juice\r\n- 2 tbsp chopped fresh parsley\r\n- Salt and red pepper flakes to taste\r\n\r\nInstructions:\r\n1. Season shrimp with salt and a pinch of red pepper flakes.\r\n2. Melt 2 tablespoons of butter in a large skillet over medium-high heat.\r\n3. Add shrimp in a single layer and cook for 1-2 minutes per side until pink.\r\n4. Stir in minced garlic and remaining butter, cooking for another minute.\r\n5. Remove from hea'),
(38, 'Classic Beef Burger', 'uploads/1786140515_pexels-pedrofurtadoo-30500751.jpg', 'Ingredients:\r\n- 500g ground beef (80/20 lean to fat ratio)\r\n- 4 burger buns, toasted\r\n- 4 slices Cheddar cheese\r\n- 1 tomato, sliced & 1 red onion, sliced\r\n- Fresh lettuce leaves & pickles\r\n- Salt, black pepper, and garlic powder\r\n- Burger sauce (mayonnaise, ketchup, mustard mix)\r\n\r\nInstructions:\r\n1. Divide ground beef into 4 equal portions and gently shape into patties. Season generously with salt, pepper, and garlic powder.\r\n2. Heat a cast-iron skillet or grill over high heat. Cook patties for 3-4 minutes on one side.\r\n3. Flip t'),
(39, 'Classic Caesar Salad', 'uploads/1786140574_pexels-valeriya-1277481.jpg', 'Ingredients:\r\n- 1 large head Romaine lettuce, chopped\r\n- 1 cup garlic croutons\r\n- 1/2 cup freshly grated Parmesan cheese\r\n- 1/2 cup Caesar dressing\r\n- 1 tbsp lemon juice\r\n- Optional: Grilled chicken breast strips\r\n\r\nInstructions:\r\n1. Wash and thoroughly dry the Romaine lettuce, then chop into bite-sized pieces.\r\n2. In a large salad bowl, combine the chopped lettuce, half of the Parmesan cheese, and garlic croutons.\r\n3. Pour Caesar dressing and lemon juice over the salad.\r\n4. Toss everything gently until all lettuce leaves are eve'),
(40, 'Fluffy Blueberry Pancakes', 'uploads/1786140621_pexels-gabby-k-7144716.jpg', 'Ingredients:\r\n- 1.5 cups all-purpose flour\r\n- 3.5 tsp baking powder & 1 tbsp sugar\r\n- 1/4 tsp salt\r\n- 1.25 cups milk & 1 egg\r\n- 3 tbsp melted butter\r\n- 1 cup fresh blueberries\r\n- Maple syrup for serving\r\n\r\nInstructions:\r\n1. In a large bowl, sift together flour, baking powder, sugar, and salt.\r\n2. Make a well in the center and pour in milk, egg, and melted butter. Whisk until smooth.\r\n3. Heat a lightly oiled griddle or non-stick frying pan over medium heat.\r\n4. Scoop batter onto the griddle (approx. 1/4 cup per pancake) and scatte'),
(41, 'Classic Chocolate Brownies', 'uploads/1786141075_pexels-ludawigakwana-7157867.jpg', 'Ingredients:\r\n- 1/2 cup (115g) unsalted butter, melted\r\n- 1 cup granulated sugar\r\n- 2 large eggs\r\n- 1 tsp vanilla extract\r\n- 1/3 cup unsweetened cocoa powder\r\n- 1/2 cup all-purpose flour\r\n- 1/4 tsp salt\r\n- 1/2 cup chocolate chips (optional)\r\n\r\nInstructions:\r\n1. Preheat your oven to 175°C (350°F) and line an 8x8 inch baking pan with parchment paper.\r\n2. In a large bowl, whisk together the melted butter, sugar, eggs, and vanilla extract until smooth.\r\n3. Sift in the cocoa powder, flour, and salt. Fold gently with a spatula until ju');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `iamge` (`iamge`),
  ADD KEY `recipe` (`recipe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

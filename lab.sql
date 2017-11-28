-- --------------------------------------------------------
-- Host:                         sofe2800.c0h6qxbwqnzj.us-east-1.rds.amazonaws.com
-- Server version:               5.6.27-log - MySQL Community Server (GPL)
-- Server OS:                    Linux
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for lab
CREATE DATABASE IF NOT EXISTS `lab` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `lab`;

-- Dumping structure for table lab.recipe
CREATE TABLE IF NOT EXISTS `recipe` (
  `recipe_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `recipe` varchar(128) NOT NULL,
  `cookTime` int(11) NOT NULL,
  `cuisine` varchar(128) NOT NULL,
  `difficulty` int(11) NOT NULL,
  `ingredients` text NOT NULL,
  `instructions` text NOT NULL,
  PRIMARY KEY (`recipe_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table lab.recipe: ~8 rows (approximately)
/*!40000 ALTER TABLE `recipe` DISABLE KEYS */;
INSERT INTO `recipe` (`recipe_id`, `username`, `email`, `recipe`, `cookTime`, `cuisine`, `difficulty`, `ingredients`, `instructions`) VALUES
	(1, 'AdminN', 'real@test', 'Fettuccine Alfredo', 30, 'Italian', 1, 'âš« 8 oz uncooked fettuccine\r\nâš« 1/2 cup butter or margarine\r\nâš« 3/4 cup shredded Parmesan cheese\r\nâš« 1/2 teaspoon salt\r\nâš« Chopped fresh parsley\r\nâš« 1/2 cup whipping cream\r\nâš« 1/8 teaspoon black or white pepper', '1. In large sauce pot, cook fettuccine as directed on package.\r\n\r\n2. While fettuccine is cooking, in 2-quart saucepan, heat butter and whipping cream over low heat, stirring constantly, until butter is melted. Stir in cheese, salt and pepper.\r\n\r\n3. Drain fettuccine; return to sauce pot. Pour sauce over warm fettuccine; stir until fettuccine is well coated. Sprinkle with parsley.'),
	(2, 'AdminN', 'real@test', 'Shrimp Fra Diavolo', 30, 'Italian', 3, 'âš« 8 ounces uncooked linguine\r\nâš« 2 tablespoons extra-virgin olive oil, divided\r\nâš« 1 1/2 tablespoons minced garlic, divided\r\nâš« 1 pound medium shrimp, peeled and deveined\r\nâš« 3/4 cup diced onion\r\nâš« 1 teaspoon crushed red pepper\r\nâš« 1/2 teaspoon dried basil\r\nâš« 1/2 teaspoon dried oregano\r\nâš« 2 tablespoons tomato paste\r\nâš« 1 tablespoon fresh lemon juice\r\nâš« 1 3/4 cups canned crushed tomatoes\r\nâš« 1/4 teaspoon salt\r\nâš« 1 (14.5-ounce) can diced tomatoes, drained', '1. Cook pasta according to package directions, omitting salt and fat. Drain; keep warm.\r\n\r\n2. While pasta cooks, heat 1 tablespoon oil in a large nonstick skillet over medium-high heat. Add 1 1/2 teaspoons garlic and shrimp; sautÃ© or 3 minutes or until shrimp are done. Remove from pan; keep warm.\r\n\r\n3. Add remaining 1 tablespoon oil and onion to pan; sautÃ© 5 minutes or until softened. Stir in remaining 1 tablespoon garlic, pepper, basil, and oregano; cook 1 minute, stirring constantly. Stir in tomato paste and lemon juice; cook 1 minute or until slightly darkened. Stir in crushed tomatoes, salt, and diced tomatoes; cook 5 minutes or until thickened. Return shrimp to pan; cook for 2 minutes or until thoroughly heated. Serve over pasta.'),
	(3, 'Hung', 'real@test', 'Bo Luc Lac(VietName)', 45, 'Vietnamese', 1, 'âš« 1.5 lbs beef sirloin (or any cut you like) cut into 1â€³ cubes\r\nâš« 2 tbs minced garlic\r\nâš« 1.5 tbs sugar\r\nâš« 2 tbs oyster sauce\r\nâš« 1 tbs fish sauce\r\nâš« 1 tbs sesame oil\r\nâš« 1 ts thick soy sauce\r\nâš« 1/2 cup rice vinegar\r\nâš« 1.5 tbs sugar\r\nâš« 1/2 tbs salt\r\nâš« Juice of 1 lime\r\nâš« 1/2 ts kosher salt\r\nâš« 1/2 ts fresh cracked pepper\r\nâš« 1 red onion, thinly sliced\r\nâš« 2 bunches of watercress, long stems trimmed\r\nâš« 2 tomatoes, thinly sliced', '1. Prepare marinade by combining garlic, oyster sauce, sugar, fish sauce, thick soy sauce and sesame oil with the beef for at least half an hour, preferably 1-2 hrs.\r\nPrepare vinaigrette by mixing rice vinegar with salt and sugar. It should be a balance of sour, salty and sweet.\r\nThinly slice the red onion and use about 3-4 tbs of the vinaigrette to pickle and set aside covered in fridge for about 10 minutes. Prepare bed of watercress and tomatoes in a serving platter and set aside.\r\n\r\n2. Heat a large wok or pan over high heat. Add about 2 tbs cooking oil and when it begins to smoke, add an even layer of beef and allow to sear for about 2 minutes, before â€œshakingâ€ to sear the opposite sides for about another 1-2 minute more to brown all the sides.  Do this in batches to cook all the beef if necessary.\r\n\r\n3. Transfer beef to bed of watercress and tomatoes. Drizzle another 3-4 tbs of vinaigrette over the beef and greens and top with pickled red onions. Lastly, squeeze lime juice over salt and pepper in a small ramekin.\r\n'),
	(4, 'Johnny', 'real@test', ' Best Meat Lasagna', 180, 'Italian', 3, 'âš«2 cloves garlic, crushed\r\nâš«1 (28 ounce) can crushed tomatoes\r\nâš«2 (6 ounce) cans tomato paste \r\nâš«2 (6.5 ounce) cans canned tomato sauce \r\nâš«1/2 cup water\r\nâš«2 tablespoons white sugar \r\nâš«1 1/2 teaspoons dried basil leaves \r\nâš«1/2 teaspoon fennel seeds \r\nâš«1 teaspoon Italian seasoning \r\nâš«1 tablespoon salt \r\nâš«1/4 teaspoon ground black pepper\r\nâš«4 tablespoons chopped fresh parsley \r\nâš«12 lasagna noodles \r\nâš«16 ounces ricotta cheese \r\nâš«1 egg 1/2 teaspoon salt \r\nâš«3/4 cup grated Parmesan cheese\r\nâš«1 pound sweet Italian sausage\r\nâš« 3/4 pound lean ground beef \r\nâš« 1/2 cup minced onion\r\nâš« 3/4 pound mozzarella cheese, sliced ', '1. In a Dutch oven, cook sausage, ground beef, onion, and garlic over medium heat until well browned. Stir in crushed tomatoes, tomato paste, tomato sauce, and water. Season with sugar, basil, fennel seeds, Italian seasoning, 1 tablespoon salt, pepper, and 2 tablespoons parsley. Simmer, covered, for about 1 1/2 hours, stirring occasionally.\r\n\r\n2.Bring a large pot of lightly salted water to a boil. Cook lasagna noodles in boiling water for 8 to 10 minutes. Drain noodles, and rinse with cold water. In a mixing bowl, combine ricotta cheese with egg, remaining parsley, and 1/2 teaspoon salt.\r\n\r\n3.Preheat oven to 375 degrees F (190 degrees C).\r\n\r\n4. To assemble, spread 1 1/2 cups of meat sauce in the bottom of a 9x13 inch baking dish. Arrange 6 noodles lengthwise over meat sauce. Spread with one half of the ricotta cheese mixture. Top with a third of mozzarella cheese slices. Spoon 1 1/2 cups meat sauce over mozzarella, and sprinkle with 1/4 cup Parmesan cheese. Repeat layers, and top with remaining mozzarella and Parmesan cheese. Cover with foil: to prevent sticking, either spray foil with cooking spray, or make sure the foil does not touch the cheese.\r\n\r\n5.Bake in preheated oven for 25 minutes. Remove foil, and bake an additional 25 minutes. Cool for 15 minutes before serving.'),
	(5, 'DonClin', 'yea@gmail.com', 'Chopped Salad', 5, 'American', 2, 'âš« 1/2 cos lettuce, washed\r\nâš« 1/2 red onion\r\nâš« 5 tomatoes\r\nâš« 1/2 cucumber\r\nâš« Creamy French dressing:\r\nâš« 2 tablespoons extra-virgin olive oil\r\nâš« 1/2 a lemon, juiced\r\nâš« Splash white wine vinegar\r\nâš« Pinch salt and freshly ground black pepper', 'To make the salad, chop everything together into mouth-sized pieces. Make a well in the middle of the salad and put in all the dressing ingredients then mix up.'),
	(6, 'Hung', 'bbbb@ccc.com', 'Goi Cuon (VietNamese)', 45, 'Vietnamese', 1, 'âš« 300 g Pork Belly(0.66 lb)\r\nâš« 200g Shrimps (15 pcs)\r\nâš« 200 Rice Vermicelli \r\nâš« 15 Pieces Rice Paper\r\nâš« 1 tsp Salt\r\nâš« Fresh Greens: Lecture,Mint Leaves, Cilantro, Garlic Chives, Cucumbers, Mint Leaves\r\nâš« 1 tbsp Vegetable oil\r\nâš« 1 tbsp Minced Garlic\r\nâš« 5 tbsp Hoisin Sauce\r\nâš« 5 tbsp Pork Broth/Water\r\nâš« 1 tbsp Peanut Butter\r\nâš« 1 tbsp Sugar', '1. Bring a pan Â½ full of water to a rolling boil over high heat, add the pork belly together with a teaspoon of  salt. Waiting until boiling, then turn heat to medium low cook for 25-35 mins. Itâ€™s depending on how thick the cut of pork is .The pork is cooked if you see no pink water  running out checking it by piercing it with a chopstick. Soak the meat in cold water for 5 minutes to avoid it from blackening.Drain and let cool.Then cut into thin slices.\r\n\r\n2. Boils  the shrimps for 2-3 minutes. Slice each shrimp  into 2 halves. Removes the black line if any.\r\n\r\n3.Cook rice vermicelli in boiling water for 3 to 5 minutes following package instructions and drain. Risen under cold water for 3 minutes.\r\n\r\n4. Risen well the fresh greens lectures. Cutting the cucumber to 7x3cm length slices.\r\n\r\n5.  For the dipping sauce, heat 1 tbsp vegetable oil in a small  pan on medium heat the fry 1 tbsp vegetable oil in a small garlic till golden brown. Adding hoisin sauce, pork broth, peanut butter  and sugar. Stir well and simmer on low heat for 1-2 minutes until thickened. Putting the dipping into small boil and top up with minced fresh chill and crushed peanuts.\r\n\r\n6. For rolling job. Dip a rice paper  thoroughly soak in a warm water for 2 seconds to soften rice paper. Place  rice paper on the flat surface then lay some vermicelli, 2 pork slices, 2 shrimps halves, garlic chives, greens lecture salad on the rice paper then rolling rice paper to the end .\r\n\r\n7. Finally to serve, dip the roll into the dipping sauce and have a bite. \r\n'),
	(7, 'Hung', 'bbbb@ccc.com', 'Banh Uoc Cha Lua (VietNamese)', 45, 'Vietnamese', 1, 'âš« 1 tray of banh uot\r\nâš« 1 cup bean sprout\r\nâš« 1 cup of mix herbs (mint, perilla and basil)\r\nâš« 1/2 cucumber\r\nâš« 1 roll of cha lau\r\nâš« 1 nem chua\r\nâš« Nuoc cham \r\nâš« Crispy eshallots', '1. Place a cup bean sprout on a serving plate, then cut about 1 cup of rice flour rolls into bite size and place on top. Microwave for 1 minute to soften bean sprout and warm up rice flour rolls, then set aside.\r\n\r\n2. Roughly chop up the herbs and Julianne the cucumber and scatter around the rice flour rolls.\r\n\r\n3. Cut the cha lau and nem chua and place on top.\r\n\r\n4. Serve with crispy eshallots and nuoc cham.'),
	(8, 'AdminN', 'bbbb@ccc.com', 'FriedRice (VietNamese)', 45, 'Vietnamese', 1, 'âš« 3 â„4cup finely chopped onion\r\nâš« 2 1â„2tablespoons oil\r\nâš« 1 egg, lightly beaten (or more eggs if you like)\r\nâš« 3 drops soy sauce\r\nâš« 3 drops sesame oil\r\nâš« 8 ounces cooked lean boneless pork or 8 ounceschicken, chopped\r\nâš« 1 â„2cup finely chopped carrot(very small)\r\nâš« 1 â„2cup frozen peas, thawed\r\nâš« 4 cups cold cooked rice, grains separated (preferably medium grain)\r\nâš« 4 green onions, chopped\r\nâš« 2 cups bean sprouts\r\nâš« 2 tablespoons light soy sauce(add more if you like)\r\n ', '1. Heat 1 tbsp oil in wok; add chopped onions and stir-fry until onions turn a nice brown color, about 8-10 minutes; remove from wok. Allow wok to cool slightly.\r\n\r\n2. Mix egg with 3 drops of soy and 3 drops of sesame oil; set aside.\r\n\r\n3. Add 1/2 tbsp oil to wok, swirling to coat surfaces; add egg mixture; working quickly, swirl egg until egg sets against wok; when egg puffs, flip egg and cook other side briefly; remove from wok, and chop into small pieces.\r\n\r\n4. Heat 1 tbsp oil in wok; add selected meat to wok, along with carrots, peas, and cooked onion; stir-fry for 2 minutes.\r\n\r\n5. Add rice, green onions, and bean sprouts, tossing to mix well; stir-fry for 3 minutes.\r\n');
/*!40000 ALTER TABLE `recipe` ENABLE KEYS */;

-- Dumping structure for table lab.register
CREATE TABLE IF NOT EXISTS `register` (
  `register_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `experience` varchar(128) NOT NULL,
  `cuisine` varchar(256) NOT NULL,
  `gender` varchar(128) NOT NULL,
  `comments` text NOT NULL,
  PRIMARY KEY (`register_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table lab.register: ~5 rows (approximately)
/*!40000 ALTER TABLE `register` DISABLE KEYS */;
INSERT INTO `register` (`register_id`, `username`, `email`, `password`, `experience`, `cuisine`, `gender`, `comments`) VALUES
	(1, 'AdminN', 'AdminN@uoit', '$2y$10$JgcgjjYKvF4IgyDhSz/WiO42LMwLYRvyEaEUhEQKa1hcKZ4Uu9ro.', '11+ Years', 'American,Chinese,Vietnamese,Italian', 'Male', 'Best Website EVER!!!'),
	(2, 'AdminJ', 'AdminJ@Uoit', '$2y$10$RkUkNAtmriyM.RlR9qZQBez7M5b0Fv42hIdcXWu2eCOUymIRqxnYy', '5 - 10 Years', 'American,Chinese,Vietnamese', 'Male', 'Good'),
	(3, 'Jonny', 'email@email.com', '$2y$10$g1XZ7ZXxBzooYWogYIL5tub3KH.2m3.LgkSbJC1UQgAwEdvwp.Co6', '0 - 1 Years', 'American', 'Other', 'Improve the register page...'),
	(4, 'Batman', 'classified@gmail.com', '$2y$10$zgSarI.Rwb2JvHqJl4BjZuTnYRU5Ng6gvjDjPNVDn/RciB0To3Qgq', '11+ Years', 'American,Chinese,Vietnamese,Italian', 'Other', 'Make Cuisine Great Again!'),
	(5, 'WALTERWHITE', 'BLUEMETH@HAHA.COM', '$2y$10$hz34ONvbO1TaoQLib5MFTOXTDnD2bhLDm9o194vh/4moxW4ZEprEW', '5 - 10 Years', 'American', 'Male', 'Horrible');
/*!40000 ALTER TABLE `register` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

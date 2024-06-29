-- Insert data into types_plats
INSERT INTO types_plats (id, nom) VALUES
(1, 'Plat principal'),
(2, 'Salade'),
(3, 'Pâtes'),
(4, 'Tacos'),
(5, 'Soupe'),
(6, 'Riz'),
(7, 'Dessert');

-- Insert data into types_cuisines
INSERT INTO types_cuisines (id, nom) VALUES
(1, 'Indienne'),
(2, 'Américaine'),
(3, 'Italienne'),
(4, 'Mexicaine'),
(5, 'Française'),
(6, 'Chinoise'),
(7, 'Internationale'),
(8, 'Québecoise'),
(9, 'Maghrébine');

-- Insert data into recettes
INSERT INTO recettes (id, titre, temps_de_preparation, type_de_plat, type_de_cuisine, desc_courte, image_url) VALUES
(1, 'Poulet au Curry', '45 minutes', 1, 1, 'Poulet mijoté au curry et lait de coco.', 'https://images.pexels.com/photos/674574/pexels-photo-674574.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'),
(2, 'Salade César', '20 minutes', 2, 2, 'Salade classique avec poulet, croutons et sauce César.', 'https://images.pexels.com/photos/406152/pexels-photo-406152.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'),
(3, 'Pâtes à la Carbonara', '30 minutes', 3, 3, 'Spaghettis aux lardons, œufs, parmesan et crème.', 'https://images.pexels.com/photos/2703468/pexels-photo-2703468.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'),
(4, 'Tacos au Bœuf', '30 minutes', 4, 4, 'Tortillas remplies de bœuf haché épicé, légumes et fromage.', 'https://images.pexels.com/photos/5836435/pexels-photo-5836435.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'),
(5, 'Soupe de Tomates', '40 minutes', 5, 5, 'Soupe crémeuse à base de tomates fraîches et basilic.', 'https://images.pexels.com/photos/539451/pexels-photo-539451.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'),
(6, 'Riz Frit aux Légumes', '25 minutes', 6, 6, 'Riz sauté aux légumes frais et sauce soja.', 'https://images.pexels.com/photos/12843134/pexels-photo-12843134.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'),
(7, 'Brownies au Chocolat', '1 heure', 7, 7, 'Délicieux brownies au chocolat et aux noix.', 'https://images.pexels.com/photos/3666/chocolate-dessert-brownies-cake.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');

-- Insert data into ingredients
INSERT INTO ingredients (recette_id, nom, quantite, quantite_equivalente) VALUES
(1, 'Poulet', '500g', '2 tasses'),
(1, 'Curry en poudre', '2 cuillères à soupe', '2 cuillères à soupe'),
(1, 'Lait de coco', '400ml', '1 2/3 tasses'),
(1, 'Oignon', '1', '1/2 tasse'),
(1, 'Ail', '2 gousses', '2 cuillères à café'),
(2, 'Laitue romaine', '1 tête', '6 tasses'),
(2, 'Croutons', '1 tasse', '1 tasse'),
(2, 'Parmesan râpé', '1/2 tasse', '1/2 tasse'),
(2, 'Poulet grillé', '200g', '1 tasse'),
(2, 'Sauce César', '1/4 tasse', '1/4 tasse'),
(3, 'Spaghettis', '400g', '4 tasses'),
(3, 'Lardons', '150g', '1 tasse'),
(3, 'Parmesan râpé', '100g', '1 tasse'),
(3, 'Œufs', '2', '2 œufs'),
(3, 'Crème fraîche', '100ml', '1/3 tasse'),
(3, 'Poivre noir', '1 cuillère à café', '1 cuillère à café'),
(4, 'Bœuf haché', '500g', '2 tasses'),
(4, 'Épices à tacos', '30 ml', '2 cuillères à soupe'),
(4, 'Tortillas', '8', '8 tortillas'),
(4, 'Laitue', '1 tête', '4 tasses'),
(4, 'Tomate', '2', '1 tasse'),
(4, 'Fromage râpé', '250 ml', '1 tasse'),
(4, 'Salsa', '125 ml', '1/2 tasse'),
(5, 'Tomates', '1kg', '4 tasses'),
(5, 'Oignon', '1', '1/2 tasse'),
(5, 'Ail', '2 gousses', '2 cuillères à café'),
(5, 'Bouillon de légumes', '1 litre', '4 tasses'),
(5, 'Crème fraîche', '1/2 tasse', '1/2 tasse'),
(5, 'Basilic', '1/4 tasse', '1/4 tasse'),
(6, 'Riz cuit', '750 ml', '3 tasses'),
(6, 'Carottes', '2', '1 tasse'),
(6, 'Petits pois', '200 gr', '1 tasse'),
(6, 'Poivron', '1', '1 tasse'),
(6, 'Oignon', '1', '1/2 tasse'),
(6, 'Sauce soja', '45 ml', '3 cuillères à soupe'),
(6, 'Œufs', '2', '2'),
(7, 'Chocolat noir', '200g', '1 tasse'),
(7, 'Beurre', '150g', '2/3 tasse'),
(7, 'Sucre', '200g', '1 tasse'),
(7, 'Œufs', '3', '3'),
(7, 'Farine', '100g', '3/4 tasse'),
(7, 'Noix', '100g', '1 tasse');

-- Insert data into etapes_de_preparation
INSERT INTO etapes_de_preparation (recette_id, etape, etape_numero) VALUES
(1, 'Couper le poulet en morceaux.', 1),
(1, 'Émincer l\'oignon et hacher l\'ail.', 2),
(1, 'Faire revenir l\'oignon et l\'ail dans une poêle avec un peu d\'huile.', 3),
(1, 'Ajouter le poulet et faire cuire jusqu\'à ce qu\'il soit doré.', 4),
(1, 'Incorporer le curry en poudre et mélanger bien.', 5),
(1, 'Ajouter le lait de coco et laisser mijoter pendant 20 minutes.', 6),
(2, 'Laver et couper la laitue romaine.', 1),
(2, 'Griller le poulet et le couper en tranches.', 2),
(2, 'Dans un grand saladier, mélanger la laitue, les croutons et le parmesan.', 3),
(2, 'Ajouter le poulet grillé.', 4),
(2, 'Verser la sauce César et bien mélanger avant de servir.', 5),
(3, 'Cuire les spaghettis selon les instructions sur l\'emballage.', 1),
(3, 'Faire revenir les lardons dans une poêle jusqu\'à ce qu\'ils soient croustillants.', 2),
(3, 'Dans un bol, mélanger les œufs, la crème fraîche et le parmesan râpé.', 3),
(3, 'Égoutter les pâtes et les ajouter aux lardons dans la poêle.', 4),
(3, 'Hors du feu, ajouter le mélange d\'œufs et de parmesan aux pâtes chaudes et bien mélanger.', 5),
(3, 'Assaisonner avec du poivre noir et servir immédiatement.', 6),
(4, 'Faire cuire le bœuf haché dans une poêle à feu moyen jusqu\'à ce qu\'il soit bien cuit.', 1),
(4, 'Ajouter les épices à tacos et mélanger bien.', 2),
(4, 'Réchauffer les tortillas dans une poêle ou au micro-ondes.', 3),
(4, 'Remplir chaque tortilla avec le bœuf, la laitue, la tomate, le fromage râpé et la salsa.', 4),
(4, 'Servir immédiatement.', 5),
(5, 'Émincer l\'oignon et hacher l\'ail.', 1),
(5, 'Faire revenir l\'oignon et l\'ail dans une grande casserole avec un peu d\'huile.', 2),
(5, 'Ajouter les tomates coupées en morceaux et laisser mijoter pendant 10 minutes.', 3),
(5, 'Ajouter le bouillon de légumes et laisser cuire pendant 20 minutes.', 4),
(5, 'Mixer la soupe jusqu\'à obtenir une consistance lisse.', 5),
(5, 'Ajouter la crème fraîche et le basilic, et mélanger bien.', 6),
(5, 'Servir chaud.', 7),
(6, 'Émincer les carottes, le poivron et l\'oignon.', 1),
(6, 'Faire revenir les légumes dans une grande poêle ou un wok avec un peu d\'huile.', 2),
(6, 'Ajouter le riz cuit et mélanger bien.', 3),
(6, 'Ajouter la sauce soja et bien mélanger.', 4),
(6, 'Battre les œufs et les ajouter dans la poêle, en remuant jusqu\'à ce qu\'ils soient cuits.', 5),
(6, 'Servir chaud.', 6),
(7, 'Préchauffer le four à 180°C (350°F).', 1),
(7, 'Faire fondre le chocolat et le beurre au bain-marie.', 2),
(7, 'Dans un bol, mélanger le sucre et les œufs jusqu\'à obtenir une consistance crémeuse.', 3),
(7, 'Ajouter le mélange de chocolat fondu et mélanger bien.', 4),
(7, 'Ajouter la farine et les noix et mélanger jusqu\'à incorporation.', 5),
(7, 'Verser le mélange dans un moule à brownies et cuire pendant 25-30 minutes.', 6),
(7, 'Laisser refroidir avant de couper en carrés et de servir.', 7);
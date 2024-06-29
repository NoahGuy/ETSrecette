const recettes = [
    {
      "id": 1,
      "titre": "Poulet au Curry",
      "temps_de_preparation": "45 minutes",
      "type_de_plat": 1,
      "type_de_cuisine": 1,
      "desc_courte": "Poulet mijoté au curry et lait de coco.",
      "ingredients": [
        {
          "nom": "Poulet",
          "quantite": "500g",
          "quantite_equivalente": "2 tasses"
        },
        {
          "nom": "Curry en poudre",
          "quantite": "2 cuillères à soupe",
          "quantite_equivalente": "2 cuillères à soupe"
        },
        {
          "nom": "Lait de coco",
          "quantite": "400ml",
          "quantite_equivalente": "1 2/3 tasses"
        },
        {
          "nom": "Oignon",
          "quantite": "1",
          "quantite_equivalente": "1/2 tasse"
        },
        {
          "nom": "Ail",
          "quantite": "2 gousses",
          "quantite_equivalente": "2 cuillères à café"
        }
      ],
      "etapes_de_preparation": [
        "Couper le poulet en morceaux.",
        "Émincer l'oignon et hacher l'ail.",
        "Faire revenir l'oignon et l'ail dans une poêle avec un peu d'huile.",
        "Ajouter le poulet et faire cuire jusqu'à ce qu'il soit doré.",
        "Incorporer le curry en poudre et mélanger bien.",
        "Ajouter le lait de coco et laisser mijoter pendant 20 minutes."
      ],
      "image_url": "https://images.pexels.com/photos/674574/pexels-photo-674574.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
    },
    {
      "id": 2,
      "titre": "Salade César",
      "temps_de_preparation": "20 minutes",
      "type_de_plat": 2,
      "type_de_cuisine": 2,
      "desc_courte": "Salade classique avec poulet, croutons et sauce César.",
      "ingredients": [
        {
          "nom": "Laitue romaine",
          "quantite": "1 tête",
          "quantite_equivalente": "6 tasses"
        },
        {
          "nom": "Croutons",
          "quantite": "1 tasse",
          "quantite_equivalente": "1 tasse"
        },
        {
          "nom": "Parmesan râpé",
          "quantite": "1/2 tasse",
          "quantite_equivalente": "1/2 tasse"
        },
        {
          "nom": "Poulet grillé",
          "quantite": "200g",
          "quantite_equivalente": "1 tasse"
        },
        {
          "nom": "Sauce César",
          "quantite": "1/4 tasse",
          "quantite_equivalente": "1/4 tasse"
        }
      ],
      "etapes_de_preparation": [
        "Laver et couper la laitue romaine.",
        "Griller le poulet et le couper en tranches.",
        "Dans un grand saladier, mélanger la laitue, les croutons et le parmesan.",
        "Ajouter le poulet grillé.",
        "Verser la sauce César et bien mélanger avant de servir."
      ],
      "image_url": "https://images.pexels.com/photos/406152/pexels-photo-406152.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
    },
    {
      "id": 3,
      "titre": "Pâtes à la Carbonara",
      "temps_de_preparation": "30 minutes",
      "type_de_plat": 3,
      "type_de_cuisine": 3,
      "desc_courte": "Spaghettis aux lardons, œufs, parmesan et crème.",
      "ingredients": [
        {
          "nom": "Spaghettis",
          "quantite": "400g",
          "quantite_equivalente": "4 tasses"
        },
        {
          "nom": "Lardons",
          "quantite": "150g",
          "quantite_equivalente": "1 tasse"
        },
        {
          "nom": "Parmesan râpé",
          "quantite": "100g",
          "quantite_equivalente": "1 tasse"
        },
        {
          "nom": "Œufs",
          "quantite": "2",
          "quantite_equivalente": "2 œufs"
        },
        {
          "nom": "Crème fraîche",
          "quantite": "100ml",
          "quantite_equivalente": "1/3 tasse"
        },
        {
          "nom": "Poivre noir",
          "quantite": "1 cuillère à café",
          "quantite_equivalente": "1 cuillère à café"
        }
      ],
      "etapes_de_preparation": [
        "Cuire les spaghettis selon les instructions sur l'emballage.",
        "Faire revenir les lardons dans une poêle jusqu'à ce qu'ils soient croustillants.",
        "Dans un bol, mélanger les œufs, la crème fraîche et le parmesan râpé.",
        "Égoutter les pâtes et les ajouter aux lardons dans la poêle.",
        "Hors du feu, ajouter le mélange d'œufs et de parmesan aux pâtes chaudes et bien mélanger.",
        "Assaisonner avec du poivre noir et servir immédiatement."
      ],
      "image_url": "https://images.pexels.com/photos/2703468/pexels-photo-2703468.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
    },
    {
      "id": 4,
      "titre": "Tacos au Bœuf",
      "temps_de_preparation": "30 minutes",
      "type_de_plat": 4,
      "type_de_cuisine": 4,
      "desc_courte": "Tortillas remplies de bœuf haché épicé, légumes et fromage.",
      "ingredients": [
        {
          "nom": "Bœuf haché",
          "quantite": "500g",
          "quantite_equivalente": "2 tasses"
        },
        {
            "nom": "Épices à tacos",
            "quantite": "30 ml",
            "quantite_equivalente": "2 cuillères à soupe"
        },
        {
        "nom": "Tortillas",
        "quantite": "8",
        "quantite_equivalente": "8 tortillas"
        },
        {
        "nom": "Laitue",
        "quantite": "1 tête",
        "quantite_equivalente": "4 tasses"
        },
        {
        "nom": "Tomate",
        "quantite": "2",
        "quantite_equivalente": "1 tasse"
        },
        {
        "nom": "Fromage râpé",
        "quantite": "250 ml",
        "quantite_equivalente": "1 tasse"
        },
        {
        "nom": "Salsa",
        "quantite": "125 ml",
        "quantite_equivalente": "1/2 tasse"
        }
    ],
    "etapes_de_preparation": [
        "Faire cuire le bœuf haché dans une poêle à feu moyen jusqu'à ce qu'il soit bien cuit.",
        "Ajouter les épices à tacos et mélanger bien.",
        "Réchauffer les tortillas dans une poêle ou au micro-ondes.",
        "Remplir chaque tortilla avec le bœuf, la laitue, la tomate, le fromage râpé et la salsa.",
        "Servir immédiatement."
    ],
    "image_url": "https://images.pexels.com/photos/5836435/pexels-photo-5836435.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
    },
    {
    "id": 5,
    "titre": "Soupe de Tomates",
    "temps_de_preparation": "40 minutes",
    "type_de_plat": 5,
    "type_de_cuisine": 5,
    "desc_courte": "Soupe crémeuse à base de tomates fraîches et basilic.",
    "ingredients": [
        {
        "nom": "Tomates",
        "quantite": "1kg",
        "quantite_equivalente": "4 tasses"
        },
        {
        "nom": "Oignon",
        "quantite": "1",
        "quantite_equivalente": "1/2 tasse"
        },
        {
        "nom": "Ail",
        "quantite": "2 gousses",
        "quantite_equivalente": "2 cuillères à café"
        },
        {
        "nom": "Bouillon de légumes",
        "quantite": "1 litre",
        "quantite_equivalente": "4 tasses"
        },
        {
        "nom": "Crème fraîche",
        "quantite": "1/2 tasse",
        "quantite_equivalente": "1/2 tasse"
        },
        {
        "nom": "Basilic",
        "quantite": "1/4 tasse",
        "quantite_equivalente": "1/4 tasse"
        }
    ],
    "etapes_de_preparation": [
        "Émincer l'oignon et hacher l'ail.",
        "Faire revenir l'oignon et l'ail dans une grande casserole avec un peu d'huile.",
        "Ajouter les tomates coupées en morceaux et laisser mijoter pendant 10 minutes.",
        "Ajouter le bouillon de légumes et laisser cuire pendant 20 minutes.",
        "Mixer la soupe jusqu'à obtenir une consistance lisse.",
        "Ajouter la crème fraîche et le basilic, et mélanger bien.",
        "Servir chaud."
    ],
    "image_url": "https://images.pexels.com/photos/539451/pexels-photo-539451.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
    },
    {
    "id": 6,
    "titre": "Riz Frit aux Légumes",
    "temps_de_preparation": "25 minutes",
    "type_de_plat": 6,
    "type_de_cuisine": 6,
    "desc_courte": "Riz sauté aux légumes frais et sauce soja.",
    "ingredients": [
        {
        "nom": "Riz cuit",
        "quantite": "750 ml",
        "quantite_equivalente": "3 tasses"
        },
        {
        "nom": "Carottes",
        "quantite": "2",
        "quantite_equivalente": "1 tasse"
        },
        {
        "nom": "Petits pois",
        "quantite": "200 gr",
        "quantite_equivalente": "1 tasse"
        },
        {
        "nom": "Poivron",
        "quantite": "1",
        "quantite_equivalente": "1 tasse"
        },
        {
        "nom": "Oignon",
        "quantite": "1",
        "quantite_equivalente": "1/2 tasse"
        },
        {
        "nom": "Sauce soja",
        "quantite": "45 ml",
        "quantite_equivalente": "3 cuillères à soupe"
        },
        {
        "nom": "Œufs",
        "quantite": "2",
        "quantite_equivalente": "2"
        }
    ],
    "etapes_de_preparation": [
        "Émincer les carottes, le poivron et l'oignon.",
        "Faire revenir les légumes dans une grande poêle ou un wok avec un peu d'huile.",
        "Ajouter le riz cuit et mélanger bien.",
        "Ajouter la sauce soja et bien mélanger.",
        "Battre les œufs et les ajouter dans la poêle, en remuant jusqu'à ce qu'ils soient cuits.",
        "Servir chaud."
    ],
    "image_url": "https://images.pexels.com/photos/12843134/pexels-photo-12843134.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
    },
    {
        "id": 7,
        "titre": "Brownies au Chocolat",
        "temps_de_preparation": "1 heure",
        "type_de_plat": 7,
        "type_de_cuisine": 7,
        "desc_courte": "Délicieux brownies au chocolat et aux noix.",
        "ingredients": [
          {
            "nom": "Chocolat noir",
            "quantite": "200g",
            "quantite_equivalente": "1 tasse"
          },
          {
            "nom": "Beurre",
            "quantite": "150g",
            "quantite_equivalente": "2/3 tasse"
          },
          {
            "nom": "Sucre",
            "quantite": "200g",
            "quantite_equivalente": "1 tasse"
          },
          {
            "nom": "Œufs",
            "quantite": "3",
            "quantite_equivalente": "3"
          },
          {
            "nom": "Farine",
            "quantite": "100g",
            "quantite_equivalente": "3/4 tasse"
          },
          {
            "nom": "Noix",
            "quantite": "100g",
            "quantite_equivalente": "1 tasse"
          }
        ],
        "etapes_de_preparation": [
          "Préchauffer le four à 180°C (350°F).",
          "Faire fondre le chocolat et le beurre au bain-marie.",
          "Dans un bol, mélanger le sucre et les Œufs jusqu'à obtenir une consistance crémeuse.",
          "Ajouter le mélange de chocolat fondu et mélanger bien.",
          "Ajouter la farine et les noix et mélanger jusqu'à incorporation.",
          "Verser le mélange dans un moule à brownies et cuire pendant 25-30 minutes.",
          "Laisser refroidir avant de couper en carrés et de servir."
        ],
        "image_url": "https://images.pexels.com/photos/3666/chocolate-dessert-brownies-cake.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
      }
  ];
    
  
    const types_plats = [
      {
        "id": 1,
        "nom": "Plat principal"
      },
      {
        "id": 2,
        "nom": "Salade"
      },
      {
        "id": 3,
        "nom": "Pâtes"
      },
      {
        "id": 4,
        "nom": "Tacos"
      },
      {
        "id": 5,
        "nom": "Soupe"
      },
      {
        "id": 6,
        "nom": "Riz"
      },
      {
        "id": 7,
        "nom": "Dessert"
      }
    ];  
  
  const types_cuisines = [
    {
      "id": 1,
      "nom": "Indienne"
    },
    {
      "id": 2,
      "nom": "Américaine"
    },
    {
      "id": 3,
      "nom": "Italienne"
    },
    {
      "id": 4,
      "nom": "Mexicaine"
    },
    {
      "id": 5,
      "nom": "Française"
    },
    {
      "id": 6,
      "nom": "Chinoise"
    },
    {
      "id": 7,
      "nom": "Internationale"
    },
    {
      "id": 8,
      "nom": "Québécoise"
    },
    {
      "id": 9,
      "nom": "Maghrébine"
    } 
  ];
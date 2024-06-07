document.addEventListener("DOMContentLoaded", function() {
    //verifie si la page actuelle est la page d'accueil
    if (window.location.pathname.includes('pagePrincipale.html')) {
        //affiche toutes les recettes sur la page d'accueil
        afficher_toutes_recettes(recettes);
    } 
    //verifie si la page actuelle est la page de recette
    else if (window.location.pathname.includes('recette.html')) {
        //trouve l'id a partir du url
        const urlParams = new URLSearchParams(window.location.search);
        const recetteId = parseInt(urlParams.get('id'));
        //trouve la recette dans le tableau par son id
        const recette = recettes.find(r => r.id === recetteId);
        if (recette) {
            //affiche la recette
            afficher_recette(recette);
        }
    }
});


function afficher_resume_recette(recette) {
    //cree un article pour la recette
    const recetteElement = document.createElement('article');
    recetteElement.classList.add('fiche_recette');

    //cree l'image de la recette
    const img = document.createElement('img');
    img.src = recette.image_url;

    //cree le titre de la recette
    const titre = document.createElement('h2');
    titre.textContent = recette.titre;

    //cree la description courte de la recette
    const description = document.createElement('p');
    description.textContent = recette.desc_courte;

    //ajoute eventListener pour rediriger vers la recette quand on clique
    recetteElement.addEventListener('click', () => {
        window.location.href = `./recette.html?id=${recette.id}`;
    });

    //ajoute les elements a l'article
    recetteElement.append(img, titre, description);

    //retourne l'article
    return recetteElement;
}


function afficher_toutes_recettes(recettes) {
    //itere a travers les recettes et affiche leur fiche resume
    const conteneur = document.querySelector("main");
    recettes.forEach(recette => conteneur.append(afficher_resume_recette(recette)));
}


function afficher_recette(recette) {
    
    //selectionne l'emplacement du div photoDesc (div incluant photo et infos de la recette)
    const photoDesc = document.querySelector('.photo_desc');

    //cree l'image et lui donne la bonne url
    const image = document.createElement('img');
    image.classList.add("recipe-image");
    image.src =  recette.image_url;

    //cree infoDiv (div englobant titre, temps de preparation, type de plat, type de cuisine)
    const infoDiv = document.createElement('div');

    //cree titre
    const titre = document.createElement('h1');
    titre.textContent = recette.titre;

    //cree paragraphe pour le temps de prep
    const tempsP = document.createElement('p');
    tempsP.textContent = `Temps de préparation : ${recette.temps_de_preparation}`;

    //cree paragraphe pour le type de plat
    const platP = document.createElement('p');
    platP.textContent = `Type de plat : ${types_plats[recette.type_de_plat-1].nom}`;

    //cree paragraphe pour le type de cuisine
    const cuisineP = document.createElement('p');
    cuisineP.textContent = `Type de cuisine : ${types_cuisines[recette.type_de_cuisine-1].nom}`;
    
    //ajoute les elements au div infoDiv
    infoDiv.append(titre, tempsP, platP, cuisineP);
    
    //ajoute l'image et l'infoDiv au div photoDesc
    photoDesc.append(image, infoDiv);

    //remplit le tableau des ingredients
    const tableBody = document.querySelector('table tbody');
    recette.ingredients.forEach(ingredient => {

        //cree une ligne
        const row = document.createElement('tr');

        //cree une cellule pour le nom de l'ingredient
        const nomTd = document.createElement('td');
        nomTd.textContent = ingredient.nom;

        //cree une cellule pour la quantite de l'ingredient
        const quantiteTd = document.createElement('td');
        quantiteTd.textContent = ingredient.quantite;

        //cree une cellule pour la quantite equivalente de l'ingredient
        const quantiteEquivalenteTd = document.createElement('td');
        quantiteEquivalenteTd.textContent = ingredient.quantite_equivalente;

        //ajoute les cellules a la rangee
        row.append(nomTd, quantiteTd, quantiteEquivalenteTd);

        //ajoute la rangee a la table
        tableBody.appendChild(row);
    });

    //selectionne la liste ordonnee
    const etapesList = document.querySelector('ol');

    //pour chaque etape
    recette.etapes_de_preparation.forEach(etape => {

        //cree un item de liste et ajoute le texte de l'etape courante
        const li = document.createElement('li');
        li.textContent = etape;

        //ajoute l'item de liste a la liste
        etapesList.appendChild(li);
    });
}
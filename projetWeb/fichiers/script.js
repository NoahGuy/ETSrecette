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

    //cree et ajoute l'image de la recette
    const img = document.createElement('img');
    img.src = recette.image_url;
    recetteElement.appendChild(img);

    //cree et ajoute le titre de la recette
    const titre = document.createElement('h2');
    titre.textContent = recette.titre;
    recetteElement.appendChild(titre);

    //cree et ajoute la description courte de la recette
    const description = document.createElement('p');
    description.textContent = recette.desc_courte;
    recetteElement.appendChild(description);

    //ajoute eventListener pour rediriger vers la recette quand on clique
    recetteElement.addEventListener('click', () => {
        window.location.href = `./recette.html?id=${recette.id}`;
    });

    //ajoute la recette au main
    document.querySelector('main').appendChild(recetteElement);
}


function afficher_toutes_recettes(recettes) {
    //itere a travers les recettes et affiche leur fiche resume
    recettes.forEach(recette => afficher_resume_recette(recette));
}


function afficher_recette(recette) {
    //met l'image de la recette
    const photoDesc = document.querySelector('.photo_desc');
    const image = document.createElement('img');
    image.classList.add("recipe-image");
    image.src =  recette.image_url;
    photoDesc.appendChild(image);

    //ajoute les informations de la recette (titre, temps de preparation, type de plat, type de cuisine)
    const infoDiv = document.createElement('div');

    const titre = document.createElement('h1');
    titre.textContent = recette.titre;
    infoDiv.appendChild(titre);

    const tempsP = document.createElement('p');
    tempsP.textContent = `Temps de préparation : ${recette.temps_de_preparation}`;
    infoDiv.appendChild(tempsP);

    const platP = document.createElement('p');
    platP.textContent = `Type de plat : ${types_plats[recette.type_de_plat-1].nom}`;
    infoDiv.appendChild(platP);

    const cuisineP = document.createElement('p');
    cuisineP.textContent = `Type de cuisine : ${types_cuisines[recette.type_de_cuisine-1].nom}`;
    infoDiv.appendChild(cuisineP);
    
    photoDesc.appendChild(infoDiv);

    //remplit le tableau des ingredients
    const tableBody = document.querySelector('table tbody');
    recette.ingredients.forEach(ingredient => {
        const row = document.createElement('tr');
        const nomTd = document.createElement('td');
        nomTd.textContent = ingredient.nom;
        row.appendChild(nomTd);
        const quantiteTd = document.createElement('td');
        quantiteTd.textContent = ingredient.quantite;
        row.appendChild(quantiteTd);
        const quantiteEquivalenteTd = document.createElement('td');
        quantiteEquivalenteTd.textContent = ingredient.quantite_equivalente;
        row.appendChild(quantiteEquivalenteTd);
        tableBody.appendChild(row);
    });

    //remplis liste etapes
    const etapesList = document.querySelector('ol');
    recette.etapes_de_preparation.forEach(etape => {
        const li = document.createElement('li');
        li.textContent = etape;
        etapesList.appendChild(li);
    });
}
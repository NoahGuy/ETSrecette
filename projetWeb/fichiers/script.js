const afficher_resume_recette = (recette) => {
    
    const titre = document.createElement("h2");
    titre.textContent = recette.title;
    
    const descr = document.createElement("p");
    descr.textContent = recette.desc_courte;

    const image = document.createElement("img");
    image.src = recette.image_url;

    const leArticle = document.createElement("article");
    leArticle.className = "fiche_recette";

    leArticle.addEventListener('click', () => {
        window.location.href = `./recette.html?id=${recette.id}`;
    });

    leArticle.append(image, titre, descr);
    return leArticle;
}    

const  afficher_toutes_recettes = (tabRecettes) => {

    const conteneur = document.querySelector(".conteneur_recette");

    for(let i = 0; i < tabRecettes.length; i++){
        const nouvelElt = afficher_resume_recette(tabRecettes[i]);
        conteneur.append(nouvelElt)
    }
}


document.addEventListener("DOMContentLoaded", (event)=>{
    afficher_toutes_recettes(recettes);    
});


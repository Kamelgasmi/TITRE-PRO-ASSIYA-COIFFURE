/*********************************FONCTION AFFICHAGE CATEGORIES**************************************************** */
function HideAndShow(selectedIndex) {
    var category = document.getElementsByTagName('Section');//variable = on va chercher l'element section dans html
    for (categoryIndex = 0; categoryIndex < category.length; categoryIndex++) { //on incrémente
    if (categoryIndex == selectedIndex) { //si l'index de la catégorie (balise section) est égale à l'index selectionné
        category[categoryIndex].style.display = 'block'; //on affiche le contenu correspondant a l'index
    }else {
    category[categoryIndex].style.display = 'none';//sinon on le cache
    }
    }
}

/***********************************FONCTION RETOUR HAUT DE PAGE***************************************************** */
function goTop() {
    document.documentElement.scrollTop = 775;/*scroll en haut de page*/
}

/***********************************FONCTION APPARITION BOUTON HAUT DE PAGE******************************************* */
document.addEventListener('DOMContentLoaded',function() { /* s'assure que la page soit chargée*/
    window.onscroll = function() { /*détecte quand la page défile*/
        document.getElementById("hdp").className/* cible la classe du bouton "hdp"*/ = (window.pageYOffset > 400) ? "Visible" : "Invisible";/*interchange la classe selon la position dans la page, visible dès qu'elle est à plus de 100 pixels du haut*/
    };
});

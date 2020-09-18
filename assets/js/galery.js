/*******************************************FONCTION FENETRE MODALE PHOTO******************************************* */
$(function() {
    $('.imgGalery').on('click', function() {// au clic sur l'élément qui a la classe imgGalery
        $('.imagePreview').attr('src', $(this).find('img').attr('src'));// on trouve et transfert le src du lien cliqué (this) vers la balise img de la fenétre modale 
        $('#imageModal').modal('show');   //qui est ensuite affiché dans la div  contenant l'id imageModal
    });n
});





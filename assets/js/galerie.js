/*******************************************FONCTION FENETRE MODALE PHOTO******************************************* */
$(function() {
    $('.imgGalery').on('click', function() {// au clic sur l'élément qui a la classe imgGalery
        $('.imagePreview').attr('src', $(this).find('img').attr('src'));// on trouve et transfert le src du lien cliqué (this) vers la balise img de la fenétre modale 
        $('#imageModal').modal('show');   //qui est ensuite affiché dans la div  contenant l'id imageModal
    });n
});



// Fonction permettant de zoomer l'image *2 au survol
// function zoomIn() {
//     document.getElementByClassName('photo').style.width = 600 ;
//     document.getElementByClassName('photo').style.height = 600;

// function zoomIn() {
//     var picture = document.getElementsByClassName('photo');
//     var image = document.getElementById('image1');
//     image1.height *= 2; Equivaux à   picture.height = picture.height * 2
//     image1.width *= 2;
// }

// Fonction permettant de réduire l'image par deux quand on ne le survole plus
// //function zoomOut() {
//     //var image = document.getElementsByClassName('image1');
//     image1.height = image1.height/2;
//     image1.width = image1.width/2;
// // }

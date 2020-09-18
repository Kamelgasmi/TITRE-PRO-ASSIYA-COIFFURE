function goTop() {
    document.documentElement.scrollTop = 0;//scroll en haut de page
}

document.addEventListener('DOMContentLoaded',function() {//j'ajoute un « listener » qui s'assure que la page soit chargée
    window.onscroll = function() { //détecte quand la page défile
        document.getElementById("hdp").className/* cible la classe de l'élément "hdp" dans la div*/ = (window.pageYOffset > 600) ? "Visible" : "Invisible";/*interchange la classe selon la position dans la page, visible dès qu'elle est à plus de 100 pixels du haut*/
    };
});

$(document).ready(function () {//pour refermer menu burger apres click sur onglet
    $(document).click(function (event) {
    var clickover = $(event.target);
    var _opened = $(".navbar-collapse").hasClass("show");
    if (_opened === true && !clickover.hasClass("navbar-toggler")) {
        $(".navbar-toggler").click();
    }
    });
});


    $(window).on('load',function(){
        $('#myModal').modal('show');
    });

    


// /********************************************************** */

// /*******************************************FONCTION FENETRE MODALE PHOTO******************************************* */
// $(function() {
//     $('.imgGalery').on('click', function() {// au clic sur l'élément qui a la classe imgGalery
//         $('.imagePreview').attr('src', $(this).find('img').attr('src'));// on trouve et transfert le src du lien cliqué (this) vers la balise img de la fenétre modale 
//         $('#imageModal').modal('show');   //qui est ensuite affiché dans la div  contenant l'id imageModal
//     });n
// });

// /****************************************************FICHE PRODUIT******************************************* */
// function myFunction() {
//     var dots = document.getElementById("dots");
//     var moreText = document.getElementById("more");
//     var btnText = document.getElementById("myBtn");
  
//     if (dots.style.display === "none") {
//       dots.style.display = "inline";
//       btnText.innerHTML = "Read more";
//       moreText.style.display = "none";
//     } else {
//       dots.style.display = "none";
//       btnText.innerHTML = "Read less";
//       moreText.style.display = "inline";
//     }
//   } 

//   function myFunction1() {
//     var dots1 = document.getElementById("dots1");
//     var more1Text = document.getElementById("more1");
//     var btn1Text = document.getElementById("myBtn1");
  
//     if (dots1.style.display === "none") {
//       dots1.style.display = "inline";
//       btn1Text.innerHTML = "Read more";
//       more1Text.style.display = "none";
//     } else {
//       dots1.style.display = "none";
//       btn1Text.innerHTML = "Read less";
//       more1Text.style.display = "inline";
//     }
//   } 

//   function myFunction2() {
//     var dots2 = document.getElementById("dots2");
//     var more2Text = document.getElementById("more2");
//     var btn2Text = document.getElementById("myBtn2");
  
//     if (dots2.style.display === "none") {
//       dots2.style.display = "inline";
//       btn2Text.innerHTML = "Read more";
//       more2Text.style.display = "none";
//     } else {
//       dots2.style.display = "none";
//       btn2Text.innerHTML = "Read less";
//       more2Text.style.display = "inline";
//     }
//   } 

//   /********************************************************DELETE PRODUIT****************************** */
//   $('#exampleModal').on('show.bs.modal', function (event) {
//     var button = $(event.relatedTarget) // Button that triggered the modal
//     var productId = button.data('whatever') // Extract info from data-* attributes
//     // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
//     // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
//     var modal = $(this)
//     modal.find('#recipient-name').val(productId);
//   });

//   /*************************************FONCTION CACHER / MONTRER MOT DE PASSE  */
// document.getElementById("eye").addEventListener("click", function(){ // au clic sur l'élément (bouton) ayant l'id eye
// var pwd = document.getElementById("password");// variable = l'élément (input) ayant l'id password
//     if(pwd.getAttribute("type")=="password"){ //si l'input a le type password 
//         pwd.setAttribute("type","text"); //alors il devient de type text
//     }else {
//         pwd.setAttribute("type","password"); // sinon il reste en type password
//     }
// });

// /*************************************FONCTION CACHER / MONTRER MOT DE PASSE  *********************/

// document.getElementById("eye").addEventListener("click", function(){ // au clic sur l'élément (bouton) ayant l'id eye
// var pwd = document.getElementById("password");// variable = l'élément (input) ayant l'id password
//     if(pwd.getAttribute("type")=="password"){ //si l'input a le type password 
//         pwd.setAttribute("type","text"); //alors il devient de type text
//     }else {
//         pwd.setAttribute("type","password"); // sinon il reste en type password
//     }
// });

// document.getElementById("eye1").addEventListener("click", function(){ // au clic sur l'élément (bouton) ayant l'id eye
// var pwd = document.getElementById("passwordConfirm");// variable = l'élément (input) ayant l'id passwordConfirm
//     if(pwd.getAttribute("type")=="password"){ //si l'input a le type password
//         pwd.setAttribute("type","text"); //alors il devient de type text
//     }else {
//         pwd.setAttribute("type","password"); // sinon il reste en type password
//     }
// });

// /*********************************FONCTION AFFICHAGE CATEGORIES**************************************************** */
// function HideAndShow(selectedIndex) {
//     var category = document.getElementsByTagName('Section');//variable = on va chercher l'element section dans html
//     for (categoryIndex = 0; categoryIndex < category.length; categoryIndex++) { //on incrémente
//     if (categoryIndex == selectedIndex) { //si l'index de la catégorie (balise section) est égale à l'index selectionné
//         category[categoryIndex].style.display = 'block'; //on affiche le contenu correspondant a l'index
//     }else {
//     category[categoryIndex].style.display = 'none';//sinon on le cache
//     }
//     }
// }

// /***********************************FONCTION RETOUR HAUT DE PAGE***************************************************** */
// function goTop() {
//     document.documentElement.scrollTop = 775;/*scroll en haut de page*/
// }

// /***********************************FONCTION APPARITION BOUTON HAUT DE PAGE******************************************* */
// document.addEventListener('DOMContentLoaded',function() { /* s'assure que la page soit chargée*/
//     window.onscroll = function() { /*détecte quand la page défile*/
//         document.getElementById("hdp").className/* cible la classe du bouton "hdp"*/ = (window.pageYOffset > 400) ? "Visible" : "Invisible";/*interchange la classe selon la position dans la page, visible dès qu'elle est à plus de 100 pixels du haut*/
//     };
// });

// /*********************************************************************************************** */
// function goTop() {
//     document.documentElement.scrollTop = 150;/*scroll a 840px du haut de page*/
// }

// /*j'ajoute un « listener » qui s'assure que la page soit chargée*/
// document.addEventListener('DOMContentLoaded',function() {
//     window.onscroll = function() { /*détecte quand la page défile*/
//         document.getElementById("hdp").className/* cible la classe de l'élément "hdp" dans la div*/ = (window.pageYOffset > 200) ? "Visible" : "Invisible";/*interchange la classe selon la position dans la page, visible dès qu'elle est à plus de 100 pixels du haut*/
//     };
// });

// /*pour refermer menu burger apres click sur onglet*/
// $(document).ready(function () {
//     $(document).click(function (event) {
//         var clickover = $(event.target);
//         var _opened = $(".navbar-collapse").hasClass("show");
//         if (_opened === true && !clickover.hasClass("navbar-toggler")) {
//             $(".navbar-toggler").click();
//         }
//     });
// });


// /**************************************************************** */

// document.getElementById("eye").addEventListener("click", function(){ // au clic sur l'élément (bouton) ayant l'id eye
// var pwd = document.getElementById("password");// variable = l'élément (input) ayant l'id password
//     if(pwd.getAttribute("type")=="password"){ //si l'input a le type password 
//         pwd.setAttribute("type","text"); //alors il devient de type text
//     }else {
//         pwd.setAttribute("type","password"); // sinon il reste en type password
//     }
// });

// document.getElementById("eye1").addEventListener("click", function(){ // au clic sur l'élément (bouton) ayant l'id eye
// var pwd = document.getElementById("passwordConfirm");// variable = l'élément (input) ayant l'id passwordConfirm
//     if(pwd.getAttribute("type")=="password"){ //si l'input a le type password
//         pwd.setAttribute("type","text"); //alors il devient de type text
//     }else {
//         pwd.setAttribute("type","password"); // sinon il reste en type password
//     }
// });


// $('#exampleModal').on('show.bs.modal', function (event) {
//     var button = $(event.relatedTarget) ;
//     var recipient = button.data('whatever'); 
//     var modal = $(this);
//     modal.find('#recipient-name').val(recipient);
// }
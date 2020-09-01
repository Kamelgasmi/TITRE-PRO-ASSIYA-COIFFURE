// $(document).ready(function() {
//     $('.js-scrollTo').on('click', function() { // Au clic sur un élément qui a la classe js scrollTo 
//         var page = $(this).attr('href'); // variable  = contenu ciblé par href
//         var speed = 750; // Durée de l'animation (en ms)
//         $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // l'animation scroll se declenche , à la vitesse defini dans la variable speed
//         return false;
//     });
// });

function goTop() {
    document.documentElement.scrollTop = 150;/*scroll a 840px du haut de page*/
}

/*j'ajoute un « listener » qui s'assure que la page soit chargée*/
document.addEventListener('DOMContentLoaded',function() {
    window.onscroll = function() { /*détecte quand la page défile*/
        document.getElementById("hdp").className/* cible la classe de l'élément "hdp" dans la div*/ = (window.pageYOffset > 200) ? "Visible" : "Invisible";/*interchange la classe selon la position dans la page, visible dès qu'elle est à plus de 100 pixels du haut*/
    };
});

/*pour refermer menu burger apres click sur onglet*/
$(document).ready(function () {
    $(document).click(function (event) {
        var clickover = $(event.target);
        var _opened = $(".navbar-collapse").hasClass("show");
        if (_opened === true && !clickover.hasClass("navbar-toggler")) {
            $(".navbar-toggler").click();
        }
    });
});


// function reveal(action) {
//     var types = document.getElementById('toustypes');// variables définissant les id des sections
//     var boucles = document.getElementById('boucles');
//     var colores = document.getElementById('colores');
//     var abimes = document.getElementById('abimes');
//     var secs = document.getElementById('secs');
//     var coiffants = document.getElementById('coiffants');
//     switch(action) {
//     case 'clickTypes' : //au clic sur l'ancre 
//     types.classList.remove('hidden');// la section tous types apparait (la classe hidden est insérée dans les balises section)
//     boucles.classList.add('hidden');//les autres sections sont cachées
//     colores.classList.add('hidden');
//     abimes.classList.add('hidden');
//     secs.classList.add('hidden');
//     coiffants.classList.add('hidden');
//     break;
//     case 'clickBoucles' : 
//     types.classList.add('hidden');
//     boucles.classList.remove('hidden');
//     colores.classList.add('hidden');
//     abimes.classList.add('hidden');
//     secs.classList.add('hidden');
//     coiffants.classList.add('hidden');
//     break;
//     case 'clickColores' : 
//     types.classList.add('hidden');
//     boucles.classList.add('hidden');
//     colores.classList.remove('hidden');
//     abimes.classList.add('hidden');
//     secs.classList.add('hidden');
//     coiffants.classList.add('hidden');
//     break;
//     case 'clickAbimes' : 
//     types.classList.add('hidden');
//     boucles.classList.add('hidden');
//     colores.classList.add('hidden');
//     abimes.classList.remove('hidden');
//     secs.classList.add('hidden');
//     coiffants.classList.add('hidden');
//     break;
//     case 'clickSecs' : 
//     types.classList.add('hidden');
//     boucles.classList.add('hidden');
//     colores.classList.add('hidden');
//     abimes.classList.add('hidden');
//     secs.classList.remove('hidden');
//     coiffants.classList.add('hidden');
//     break;
//     case 'clickCoiffants' : 
//     types.classList.add('hidden');
//     boucles.classList.add('hidden');
//     colores.classList.add('hidden');
//     abimes.classList.add('hidden');
//     secs.classList.add('hidden');
//     coiffants.classList.remove('hidden');
//     break;
//     default :
//     types.classList.remove('hidden');// par défaut la section tous types apparait
//     boucles.classList.add('hidden');
//     colores.classList.add('hidden');
//     abimes.classList.add('hidden');
//     secs.classList.add('hidden');
//     coiffants.classList.add('hidden');
//     break;
//     }
// }

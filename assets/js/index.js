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


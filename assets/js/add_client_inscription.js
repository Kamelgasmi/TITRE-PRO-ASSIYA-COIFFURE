/*************************************FONCTION CACHER / MONTRER MOT DE PASSE  *********************/

document.getElementById("eye").addEventListener("click", function(){ // au clic sur l'élément (bouton) ayant l'id eye
var pwd = document.getElementById("password");// variable = l'élément (input) ayant l'id password
    if(pwd.getAttribute("type")=="password"){ //si l'input a le type password 
        pwd.setAttribute("type","text"); //alors il devient de type text
    }else {
        pwd.setAttribute("type","password"); // sinon il reste en type password
    }
});

document.getElementById("eye1").addEventListener("click", function(){ // au clic sur l'élément (bouton) ayant l'id eye
var pwd = document.getElementById("passwordConfirm");// variable = l'élément (input) ayant l'id passwordConfirm
    if(pwd.getAttribute("type")=="password"){ //si l'input a le type password
        pwd.setAttribute("type","text"); //alors il devient de type text
    }else {
        pwd.setAttribute("type","password"); // sinon il reste en type password
    }
});

function checkUnavailability(input){
    //Instanciation de l'objet XMLHttpRequest permettant de faire de l'AJAX
    var request = new XMLHttpRequest();
    //Les données sont envoyés en POST et c'est le controlleur qui va les traiter
    request.open('POST', '../controllers/add_client_inscription_controller.php', true);
    //Au changement d'état de la demande d'AJAX
    request.onreadystatechange = function () {
        //Si on a bien fini de recevoir la réponse de PHP (4) et que le code retour HTTP est ok (200)
        if (request.readyState == 4 && request.status == 200) {
            document.getElementById(input.id + 'Error').innerHTML = this.responseText;
            console.log(input.parentNode);

            if(this.responseText == ''){ //Dans le cas ou la valeur dans le champ est déjà en BDD
                input.classList.remove('is-invalid');
                input.parentNode.classList.remove('border-bottom-color:red;');
                input.classList.add('is-valid');
                input.parentNode.classList.add('border-color:green;');

            }else{ //Dans le cas ou la valeur dans le champ n'est pas en BDD
                input.classList.remove('is-valid');
                input.parentNode.classList.remove('border-color:green;');
                input.classList.add('is-invalid');
                input.parentNode.classList.add('border-bottom-color:red;');

            }
        };
    }
    // Pour dire au serveur qu'il y a des données en POST à lire dans le corps
    request.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    //Les données envoyées en POST. Elles sont séparées par un &
    request.send('addClient=&fieldName=' + input.id + '&' + input.id +'=' + input.value);

}
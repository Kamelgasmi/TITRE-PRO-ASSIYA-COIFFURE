/*************************************FONCTION CACHER / MONTRER MOT DE PASSE  */
document.getElementById("eye").addEventListener("click", function(){ // au clic sur l'élément (bouton) ayant l'id eye
var pwd = document.getElementById("password");// variable = l'élément (input) ayant l'id password
    if(pwd.getAttribute("type")=="password"){ //si l'input a le type password 
        pwd.setAttribute("type","text"); //alors il devient de type text
    }else {
        pwd.setAttribute("type","password"); // sinon il reste en type password
    }
});



function form(event){
    
    var nom=document.getElementById("nom").value;
    var prenom=document.getElementById("prénom").value;
    var date=document.getElementById("date").value;
    var postal=document.getElementById("codepostal").value;
    var email=document.getElementById("email").value;
    
let RegLettres=new RegExp("^[a-zA-Z]+$");

//NOM

var testnom=RegLettres.test(nom)
console.log(testnom)

if(nom==""){
    document.getElementById("erreurnom").innerHTML=("Saisissez un nom.")
    event.preventDefault();
}else if (testnom==false){
    document.getElementById("erreurnom").innerHTML=("Rentrez un nom valide.")
    event.preventDefault();
}

//PRENOM

var testprenom=RegLettres.test(prenom)
console.log(testprenom)

if(prenom==""){
    document.getElementById("erreurprenom").innerHTML=("Saisissez un prénom.")
    event.preventDefault();
}else if(testprenom==false){
    document.getElementById("erreurprenom").innerHTML=("Rentrez un prénom valide.")
    event.preventDefault();
}

//SEXE

if(document.getElementById('sexe1').checked||document.getElementById('sexe2').checked){
    
}else {
    document.getElementById('erreursexe').innerHTML=("Saisissez votre sexe.");
    event.preventDefault();
}

//DATE

if(date==""){
    document.getElementById('erreurdate').innerHTML=("Saisissez votre date de naissance.")
    event.preventDefault();
}

//CODE POSTAL

var Regchiffre=new RegExp("^[0-9]{5}$")
var testcode=Regchiffre.test(postal)
console.log(testcode)

if(postal==""){
    document.getElementById('erreurcode').innerHTML=("Saisissez votre code postal.")
    event.preventDefault();
}else if(testcode==false){
    document.getElementById('erreurcode').innerHTML=("Veuillez saisir un code postal valide.")
    event.preventDefault();
}

//EMAIL

var regmail=new RegExp("^([a-zA-Z0-9_-])+([.]?[a-zA-Z0-9_-]{1,})*@([a-zA-Z0-9-_]{2,}[.])+[a-zA-Z]{2,3}$")
var testmail=regmail.test(email)
console.log(testmail)

if(email==""){
    document.getElementById('erreurmail').innerHTML=("Saisissez votre Email.")
}else if(testmail==false){
    document.getElementById('erreurmail').innerHTML=("Saisissez une Email valide.")
}

//SUJET DEMANDE

sujet=document.getElementById('sujet').selectedIndex
console.log(sujet)

if(sujet==0){
    document.getElementById('erreursujet').innerHTML=("Choissisez le sujet de votre demande")
    event.preventDefault();

}

//QUESTION

question=document.getElementById('votrequestion').value
console.log(question)
if(question==""){
    document.getElementById('erreurquestion').innerHTML=("Posez votre question.")
    event.preventDefault();
}

//J'ACCEPTE

accepte=document.getElementById("accepte").checked
console.log(accepte)

if(accepte==false){
    document.getElementById("erreuraccepte").innerHTML=("Veuillez accepter avant l'envoi")
    event.preventDefault();
}




//*************************************** *
}
document.getElementById("formulaire_contact").addEventListener("submit",form);

var monformulaire=document.getElementById("reset").addEventListener("click",function(e) {

let Confirmation = confirm("Supprimer le contenu du formulaire ?");

if (Confirmation == false) {
    e.preventDefault();

}

});







 // Contrôle du courriel en fin de saisie
document.getElementById("courriel").addEventListener("blur", function (e) {
    // Correspond à une chaîne de la forme xxx@yyy.zzz
    var regexCourriel = /.+@.+\..+/;
    var validiteCourriel = "";
    if (!regexCourriel.test(e.target.value)) {
        validiteCourriel = "Adresse invalide";
    }
    document.getElementById("aideCourriel").textContent = validiteCourriel;
});

// la confirmation du mot passe à l'inscription
var form = document.querySelector("form");
 form.addEventListener("submit", function (e) {
     var mdp1 = form.elements.mdp1.value;
     var mdp2 = form.elements.mdp2.value;
     var pseudo = form.elements.pseudo.value;
     var message = "Mots de passe validé";
     if (mdp1 === mdp2) {
         if (mdp1.length >= 8) {
             var regexMdp = /\d+/;
             if (!regexMdp.test(mdp1)) {
                 message = "Erreur : le mot de passe doit contenir au moin un chiffre";
             }
         } else {
             message = "Erreur : la longueur minimale du mot de passe est de 8 caractères";
         }
     } else {
         message = "Erreur : les mots de passe saisis sont différents";
     }
     if(mdp1 === pseudo) {
     	message = "faut pas mettre mot de passe identique au pseudo";
     }
     document.getElementById("aideMdp").textContent = message;
     e.preventDefault();
 }); 
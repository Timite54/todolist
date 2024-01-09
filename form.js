/*
            en js tout est objet

    les entrees par formualaires ou  boite de dialogue 
    
    >>prompt(): affiche une boîte de dialogue qui récupère des infos de l'user
    >>confirm()

    >>alert: sorte d'infos


 annee = 2024


if(age>=18){
    alert(
        "Vous  etes majeur car vous avez: " + age + "ans"
    )
 
}else(age<18)

    alert("OUUUUP vous etes mineur car vous avez: " + age + "ans")


    
    const entier  =  prompt("Saisissez un nombre :");
    
    // result = entier2
    
    if((entier%2) == 0){
    
        alert(entier + " est pair") 
    }else{
        alert(entier + " est impaire")
    }
    
    const entier  =  prompt("Saisissez un nombre :");
    
    result = entier%2 == 0 ?  "pair" :"impaire"
    
    alert(result)


const note1 = prompt("Entrez le prmier nombre : ")
const note2 = prompt("entrez le deuxieme nombre : ")

const moyenne = (eval(note1) + eval(note2))/2

if(moyenne>20){
    alert("erreur")
}
else if(moyenne>=18){

    alert ( "EXCELLENT")

}else if(moyenne <=15 ){

    alert("TRES BIEN")

}else if(moyenne<=14 ){
    alert("ASSEZ-BIEN")

}else if(moyenne <=11){
    alert(
        "Passable"
    )
}else if (moyenne<=9){
    alert("Vous n'etes pas vraiment bon")
}
else{
    alert("Vous etes vraiment nul ")
}


let salutation = prompt ( "Choisisssez une langue \n"+
    "1- Anglais\n"+
    "2- Français \n"+
    "3- Espagnol \n"+
    "4- Allemand \n"
)
switch(salutation){

    case 1- Anglais: alert("GOOG MORNING")
    break;

    case 2- Français: alert("BONJOUR")
    break;

    case 3- Espagnol: alert("BUENOS DIAS")
    break;

    case 4- Allemand : alert("salutation en allemand")
    break;

    default :erreur
  
//     prompt ( "Choisisssez une langue \n"+
//     "1- Anglais\n"+
//     "2- Français \n"+
//     "3- Espagnol \n"+
//     "4- Allemand \n"
// )
//     }

}

const salutation = prompt("saluer quelqu'un")

document.write("bonjour " +salutation)
  
let nmbre = prompt("entrez un nombre : ")
let i = 0

do{
   multi = nmbre * i

   document.write("la table de multiplication de " +nmbre + +multi+ "<br>") 

   i++
    
}while(i<=10);

const notes = [12, 16, 18, 17, 8]
const person ={
    firstname: 'kader',
    lastname: 'naho'
}
const greeting = 'bonjour'
for (let lettre in greeting){
    console.log(lettre)
} 


//demander a un user d'entrer un chiffre en 0 et 10 
//si ce nest pas le cas afficher un message a l'user
//si verifier afficher tout les nombre en dessous 

let nmbre = prompt("Entrez un nombre compris entre 0 et 10: ")

if(nmbre<=10 && nmbre>0){

    // while(nmbre>=0 && nmbre<=10){
    //     document.write('bonne saisie : ' +''+ +nmbre+ "<br>") 
    //     nmbre--
    // }

    for(nmbre<=10 ; nmbre>=0 ;nmbre--){
        document.write('Bonne saisie : ' +''+ +nmbre+ "<br>")
    }
}else{
    alert('la saisie ' +nmbre+ ' n\'est pas un nombre ou nest pas compris entre 0 et 10')
}


//demander a l'user de saisir un nombre jusqua ce quil devine le nombre caché

let nmbre = prompt('Devinez le nombre qui se cache derriere l\'ecran')
const mask = 7
while(nmbre !== mask){
    prompt('encore')
    
    if(nmbre === mask){
        alert('Bien joué!!')

    }
}alert("valeur incorrect")
*/
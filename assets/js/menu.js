const hamburger = document.getElementById("nav-icon2");
const menuPop = document.querySelector(".menuPhone");
let menuPhoneOpen = false;

let barreV = document.getElementById("barre");

hamburger.addEventListener("click", () => {
    if (!menuPhoneOpen) {
        hamburger.classList.add('open');
        menuPop.classList.add('open');
        menuPhoneOpen = true;
        barreV.style.overflowY = "hidden";

    } else {
        hamburger.classList.remove('open');
        menuPop.classList.remove('open');
        menuPhoneOpen = false;
        barreV.style.overflowY = "unset";
    };
});

function redimensionnement() {
    menuPop.classList.remove('open');
    hamburger.classList.remove('open');
    menuPhoneOpen = false;
};

// Écoutez les changements de taille de la fenêtre
window.addEventListener('resize', redimensionnement);

// Appelez redimensionnement au chargement de la page
window.addEventListener('load', redimensionnement);

































// const hamburger = document.getElementById("nav-icon2");
// const menuPop = document.querySelector(".menuPhone");
// let menuPhoneOpen = false;

// hamburger.addEventListener("click", () => {
//   if (!menuPhoneOpen) {
//     hamburger.classList.add('open');
//     menuPop.classList.add('open');
//     menuPop.style.overflowY = 'auto'; // Activer la barre de défilement
//     menuPhoneOpen = true;
//   } else {
//     hamburger.classList.remove('open');
//     menuPop.classList.remove('open');
//     menuPop.style.overflowY = 'hidden'; // Masquer la barre de défilement
//     menuPhoneOpen = false;
//   }
// });

// function redimensionnement() {
//   menuPop.classList.remove('open');
//   hamburger.classList.remove('open');
//   menuPop.style.overflowY = 'hidden'; // Masquer la barre de défilement
//   menuPhoneOpen = false;
// }

// // Écoutez les changements de taille de la fenêtre
// window.addEventListener('resize', redimensionnement);

// // Appelez redimensionnement au chargement de la page
// window.addEventListener('load', redimensionnement);





























































// const hamburger = document.getElementById("nav-icon2");
// const phoneMenu = document.querySelector(".menuPhone");

// function togglePhoneMenu() {
//     hamburger.classList.toggle('open');
//     phoneMenu.classList.toggle('open');
//     phoneMenu.style.display = phoneMenu.classList.contains("open") ? "open" : "none";
// }

// hamburger.addEventListener("click", togglePhoneMenu);

// function redimensionnement() {
//     if (window.matchMedia("(min-width: 768px)").matches) {
//         // L'affichage est supérieur ou égal à 768px de large
//         phoneMenu.style.display = "none"; // Masque le menuPhone en mode bureau
//         hamburger.classList.remove('none'); // Retire la classe 'open' du hamburger
//     } else {
//         // L'affichage est inférieur à 768px de large
//         if (!phoneMenu.classList.contains("open")) {
//             phoneMenu.style.display = "none";
//             hamburger.classList.remove('open'); // Retire la classe 'open' du hamburger
//         }
//     }
// }

// // Écoutez les changements de taille de la fenêtre
// window.addEventListener('resize', redimensionnement);

// // Appelez redimensionnement au chargement de la page
// window.addEventListener('load', redimensionnement);








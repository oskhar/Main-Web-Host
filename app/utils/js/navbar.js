var navbar = document.getElementById("navbar");
var navbar_click = 1;

window.click_buka_navbar = function () {

    navbar.innerHTML = `
        <div class="option" id="opt` + navbar_click + `">
            <button id="but` + navbar_click + `">Home</button>
            <button id="but` + navbar_click + `">Contrib</button>
            <button id="but` + navbar_click + `">Project</button>
        </div>
        <button class="buka_navbar" onclick="click_buka_navbar()" id="nav` + navbar_click + `">
            <div id="act0` + navbar_click + `"></div>
            <div id="act1` + navbar_click + `"></div>
        </button>
    `;
    navbar_click = navbar_click == 1 ? 2 : 1;

}
console.log("terbarukan navbar.js");
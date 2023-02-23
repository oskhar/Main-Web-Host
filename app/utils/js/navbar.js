var navbar = document.getElementById("navbar");
var navbar_click = 1;

window.click_buka_navbar = function () {

    navbar.innerHTML = `
        <div id="option" class="opt` + navbar_click + `">
            <button class="b` + navbar_click + `">Home</button>
            <button class="b` + navbar_click + `">Contrib</button>
            <button class="b` + navbar_click + `">Project</button>
        </div>
        <button id="buka_navbar" onclick="click_buka_navbar()" class="nav` + navbar_click + `">
            <div></div>
            <div></div>
        </button>
    `;
    navbar_click = navbar_click == 1 ? 2 : 1;

}
console.log("terbaru");
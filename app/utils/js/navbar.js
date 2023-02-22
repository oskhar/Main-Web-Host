var option = document.querySelector("#navbar #option");
var menu1 = document.querySelector("#navbar #menu1");
var menu2 = document.querySelector("#navbar #menu2");
var menu3 = document.querySelector("#navbar #menu3");
var buka_navbar = document.querySelector("#navbar #buka_navbar");

window.click_buka_navbar = function () {

    if (navbar_first) {

        option.classList.remove("opt1");
        option.classList.add("opt2");

        menu1.classList.remove("a1");
        menu1.classList.add("b1");

        menu2.classList.remove("a2");
        menu2.classList.add("b2");

        menu3.classList.remove("a3");
        menu3.classList.add("b3");

        buka_navbar.classList.remove("nav1");
        buka_navbar.classList.add("nav2");
        
    } else {

        option.classList.remove("opt2");
        option.classList.add("opt1");

        menu1.classList.remove("b1");
        menu1.classList.add("a1");

        menu2.classList.remove("b2");
        menu2.classList.add("a2");

        menu3.classList.remove("b3");
        menu3.classList.add("a3");

        buka_navbar.classList.remove("nav2");
        buka_navbar.classList.add("nav1");

    }

}
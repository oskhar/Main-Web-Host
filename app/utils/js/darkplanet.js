var pinMulai = 0;
function createAst() {
    const snow_flake = document.createElement('i');
    snow_flake.classList.add('snowflake');
    var node = document.createTextNode(".");
    snow_flake.appendChild(node);
    snow_flake.style.top = Math.random() * 600 + 'px';
    snow_flake.style.animationDuration = Math.random() * 4 + 8 + 's'; // between 2 - 5 seconds
    snow_flake.style.opacity = Math.random() + 0.2;
    snow_flake.style.fontSize = Math.random() * 30 + 20 + 'px';
    snow_flake.style.fontWeight = 'bold';
    snow_flake.style.fontWeight = 'bold';
    snow_flake.style.bottom = 0;
    if (snow_flake.style.opacity < 0.7) {
        snow_flake.style.zIndex = 1;
    }else {
        snow_flake.style.zIndex = 5;
    }
    document.querySelector("#tempatAst").appendChild(snow_flake);
    
    setTimeout(() => {
        snow_flake.remove();
    }, 20000);

    if (pinTujuan == 0 && pinMulai == 1) {
        writeTujuan(0, txtTujuan[0], 120);
    }else if (pinTujuan == 5 && pinMulai == 1) {
        hapusWrite()
    }else if (pinTujuan == 8 && pinMulai == 1) {
        writeTujuan(0, txtTujuan[1], 120);
    }else if (pinTujuan == 13 && pinMulai == 1) {
        hapusWrite()
        pinTujuan = -3;
    }
    pinTujuan++;
}
window.createAst = function(n) {
    for (let i = 0; i < n; i++) {

        const meteor = document.createElement('i');
        var node = document.createTextNode(".");
        meteor.appendChild(node);
        meteor.style.position = "absolute";
        meteor.style.top = (Math.random() * innerHeight-100) + 'px';
        meteor.style.left = i > n / 3 ? (Math.random() * innerWidth) + 'px' : "100vw";
        meteor.style.opacity = Math.random() + 0.2;
        meteor.style.fontSize = Math.random() * 30 + 20 + 'px';
        meteor.style.fontWeight = 'bold';
        meteor.style.animation = 'meteoriq ' + (Math.random() * 4 + 2) + 's linear infinite';
        meteor.style.color = "white";
        if (meteor.style.opacity < 0.7)
            meteor.style.zIndex = 1;
        else
            meteor.style.zIndex = 5;
        document.querySelector('main').appendChild(meteor);

    }
}

createAst(30);
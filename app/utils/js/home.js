console.log("terinput");
window.createAst = function() {
    const meteor = document.createElement('i');
    var node = document.createTextNode(".");
    meteor.appendChild(node);
    meteor.style.top = Math.random() * 600 + 'px';
    meteor.style.opacity = Math.random() + 0.2;
    meteor.style.fontSize = Math.random() * 30 + 20 + 'px';
    meteor.style.fontWeight = 'bold';
    meteor.style.animation = 'meteoriq ' + (Math.random() * 4 + 8) + 's infinite';
    meteor.style.color = "white";
    if (meteor.style.opacity < 0.7)
        meteor.style.zIndex = 1;
    else
        meteor.style.zIndex = 5;
    document.main.appendChild(meteor);
}
for (let i = 0; i < 20; i++) {
    createAst();
    
}
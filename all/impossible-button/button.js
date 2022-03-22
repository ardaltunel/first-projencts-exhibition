function play() {
    var div = document.getElementById("div");
    var start = document.getElementById("startbutton");
    div.style.display = "block";
    start.style.display = "none";
}

function Alert() {
    var total = document.getElementById("total");
    var start = document.getElementById("startbutton");
    alert("that was fucking lit wtf, how tf you hit that shit fr");
    total.value = total.value * 1 + 1;
    start.style.display = "block";
    div.style.display = "none";
}

function Random() {
    var button = document.getElementById("button");
    var RandomX = Math.random() * 90 + "%";
    var RandomY = Math.random() * 92 + "%";
    button.style.left = RandomX;
    button.style.top = RandomY;
}

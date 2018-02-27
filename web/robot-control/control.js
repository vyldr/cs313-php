var commands = "";

function update() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        commands = "";
    };
    xhttp.open("GET", "input.php?name=" + name + "&input=" + commands, true);
    xhttp.send();
}

// Update periodically
setInterval(update, 1000);

// Move the robot with the arrow keys
document.addEventListener('keypress', (event) => {
    switch(event.key) {
        case "ArrowUp":
            commands = commands + 'u';
            break;
        case "ArrowDown":
            commands = commands + 'd';
            break;
        case "ArrowLeft":
            commands = commands + 'l';
            break;
        case "ArrowRight":
            commands = commands + 'r';
            break;
    }  
}, false);

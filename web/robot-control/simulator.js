var canvas = document.getElementById('canvas').getContext('2d');

var robot = {};
robot.x = 300;
robot.y = 300;

var step = 1;
var boxWidth = 600;
var boxHeight = 600;
var robotSize = 20;
var interval = 1000;

var commands = "";
var commandlist = [];

function update() {
    // Clear the background
    canvas.fillStyle = "#9cc";
    canvas.fillRect(0, 0, 600, 600);
    
    // draw the robot
    canvas.fillStyle = "#f00";
    canvas.fillRect((robot.x - robotSize / 2) % (boxWidth + robotSize) - robotSize, (robot.y - robotSize / 2) % (boxHeight + robotSize) - robotSize, robotSize, robotSize);

    move();

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        commands = this.responseText;
    };
    xhttp.open("GET", "getInput.php?name=" + document.getElementById("nameinput").value, true);
    xhttp.send();
}

// Update the display
setInterval(update, interval);

// Move the robot with the arrow keys
document.addEventListener('keypress', (event) => {
    switch(event.key) {
        case "ArrowUp":
            robot.y -= step;
            break;
        case "ArrowDown":
            robot.y += step;
            break;
        case "ArrowLeft":
            robot.x -= step;
            break;
        case "ArrowRight":
            robot.x += step;
            break;
    }  
}, false);

function move() {
    commandlist = commands.split('');
    console.log(commands);
    for (var i = 0; i < commandlist.length; i++) {
        switch(commandlist[i]) {
            case "u":
                console.log("up");
                robot.y -= step;
                break;
            case "d":
                robot.y += step;
                break;
            case "l":
                robot.x -= step;
                break;
            case "r":
                robot.x += step;
                break;
    }
}
}
var canvas = document.getElementById('canvas').getContext('2d');

// Set up our variables
var robot = {};
robot.x = 300;
robot.y = 300;
var boxWidth;
var boxHeight;
var step = 1;


function resize() {
    boxWidth = window.innerWidth;
    boxHeight = window.innerHeight;
    document.getElementById("canvas").width = window.innerWidth;
    document.getElementById("canvas").height = window.innerHeight;
}

resize();

var robotSize = 20;
var interval = 1000;

var commands = "";
var commandlist = [];

function draw() {
    // Clear the background
    canvas.fillStyle = "#9cc";
    canvas.fillRect(0, 0, boxWidth, boxHeight);
    
    // draw the robot
    canvas.fillStyle = "#f00";
    canvas.fillRect((robot.x - robotSize / 2) % (boxWidth + robotSize)
        - robotSize, (robot.y - robotSize / 2) % (boxHeight + robotSize)
        - robotSize, robotSize, robotSize);
}

function update() {
    

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        commands = this.responseText;
        commandlist = commandlist.concat(commands.split(""));
        console.log(commandlist.length);
    };
    xhttp.open("GET", "getInput.php?name=" + robotName, true);
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

// Move the robot with commands from the server
function move() {
    command = commandlist.shift();
    switch(command) {
        case "u":
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
    draw();
}

setInterval(move, 17)
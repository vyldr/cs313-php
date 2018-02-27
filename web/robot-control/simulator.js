var canvas = document.getElementById('canvas').getContext('2d');

var robot = {};
robot.x = 300;
robot.y = 300;

var step = 4;
var boxWidth = 600;
var boxHeight = 600;
var robotSize = 20;
var interval = 30;

function update() {
    // Clear the background
    canvas.fillStyle = "#9cc";
    canvas.fillRect(0, 0, 600, 600);
    
    // draw the robot
    canvas.fillStyle = "#f00";
    canvas.fillRect((robot.x - robotSize / 2) % (boxWidth + robotSize) - robotSize, (robot.y - robotSize / 2) % (boxHeight + robotSize) - robotSize, robotSize, robotSize);
}

// Update the display
setInterval(update, interval);

// Move the robot with the arrow keys
document.addEventListener('keypress', (event) => {
    // const keyName = event.key;

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
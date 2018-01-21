var backgroundColor = '#000';
var foregroundColor = '#0f0';
var wavescale = 1.875;
var canvas = document.getElementById('wave').getContext('2d');
var pause = false;

var x = [];
var y = [];

for (var i = 0; i < 2048 * wavescale; i++)
{
    x.push(Math.random() * Math.PI * 2 - Math.PI);
    y.push(Math.random() * (16 / 3) * wavescale - (8 / 3) * wavescale);
}

var time = 0;

function draw()
{
    if (pause)
        return;
    canvas.fillStyle = backgroundColor;
    canvas.fillRect(0, 0, 256 * wavescale, 256 * wavescale);
    canvas.fillStyle = foregroundColor;
    for (var i = 0; i < x.length; i++)
    {
      canvas.fillRect( Math.floor(y[i] * 48 + 128 * wavescale),
                     ( Math.sin(x[i] + time * 2) * Math.cos(time * 4 + y[i] * (2 / wavescale)) * 70) * wavescale / 2 + 80 * wavescale,
                       1, 1);
    }
    time += 0.006;
}
setInterval(draw, 30);
var width = 480;
var height = 300;
var scale = 1;
var pause = false;

var hexagons = document.getElementById('hexagons').getContext('2d');

xx = [];
yy = [];
zz = [];

for (var i = 0; i < 16; i++)
{
  yy.push(Math.random() * (height * 2 - height / 2));
  xx.push(Math.random() * (width * 2 - width / 2));
  zz.push(Math.random() * 5000);
  
}

function drawhex(x, y, w)
{
  var max = 0;
  
  for (var k = 0; k < zz.length; k++)
  {
    var distance = Math.sqrt((xx[k] - x) * (xx[k] - x) + (yy[k] - y) * (yy[k] - y));
    if (distance <= zz[k] && (Math.atan((40 - (zz[k] - distance)) / 64) * 0.38 + 0.5) * (1 - zz[k] / 3000) > max)
      max = (Math.atan((40 - (zz[k] - distance)) / 64) * 0.38 + 0.5) * (1 - zz[k] / 3000);
    if (distance > zz[k] && (Math.atan((40 - (distance - zz[k])) / 16) * 0.38 + 0.5) * (1 - zz[k] / 3000) > max)
      max = (Math.atan((40 - (distance - zz[k])) / 16) * 0.38 + 0.5) * (1 - zz[k] / 3000);
  }
  if (max > 1)
    max = 1;
  if (max < 0)
    max = 0;

  hexagons.fillStyle = 'hsl(196, 77%, ' + max * 64  + '%)';
  hexagons.translate(x, y);
  hexagons.fillRect(0 - Math.tan(Math.PI / 6) * w, 0 - w, 2 * w * Math.tan(Math.PI / 6), 2 * w);
  hexagons.rotate(Math.PI / 3);
  hexagons.fillRect(0 - Math.tan(Math.PI / 6) * w, 0 - w, 2 * w * Math.tan(Math.PI / 6), 2 * w);
  hexagons.rotate(Math.PI / 3);
  hexagons.fillRect(0 - Math.tan(Math.PI / 6) * w, 0 - w, 2 * w * Math.tan(Math.PI / 6), 2 * w);
  hexagons.resetTransform()
}

function hexrip(t)
{
  if (pause)
    return;

  for (var i = 0; i < zz.length; i++)
    zz[i] = (zz[i] + 16) % 5000;
  hexagons.fillStyle = 'hsl(197.1, 77.8%, 3.5%)';
  hexagons.fillRect(0, 0, width, height);

  for (var i = -20 * scale; i < width + 100; i += Math.tan(Math.PI / 6) * 96 * scale)
    for (var j = -20 * scale; j < height + 100; j += 32 * scale)
      drawhex(i, j, 14 * scale);

  for (var i = (-20 + Math.tan(Math.PI / 6) * 48) * scale; i < width + 100; i += Math.tan(Math.PI / 6) * 96 * scale)
    for (var j = -36 * scale; j < height + 100; j += 32 * scale)
      drawhex(i, j, 14 * scale);
}

var pause = false;


setInterval(hexrip, 30);

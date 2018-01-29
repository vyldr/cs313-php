function addItem(item)
{
     ajax("modifyCart.php?item=" + item + "&action=add");
}

function removeItem(item)
{
     ajax("modifyCart.php?item=" + item + "&action=remove");
     document.getElementById(item).style = "display:none;";
}

function ajax(url) 
{
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", url, true);
    xhttp.send();
}
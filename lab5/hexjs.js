function dectohex(num) {
    return num.toString(16).toUpperCase();
}

function hextodec(num) {
    return parseInt(num, 16);
}

function genandloadcolors(){
    //Initialization
    var output = "'rgb";
    var comma = ",";
    var leftpar = "(";
    var rightpar = ")";
    var r = Math.floor(Math.random()*256);
    var g = Math.floor(Math.random()*256);
    var b = Math.floor(Math.random()*256);
    //Generate Color String
    output += leftpar + r + comma + g + comma + b + rightpar;
    output += "'";
    //Return the rgb String
    return output;
}
function playthegame(){
    //Colorstr contains input values
    document.getElementById("play").style.backgroundColor = "rgb(0,0,0)";
}
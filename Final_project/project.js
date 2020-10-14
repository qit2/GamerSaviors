function joinbutton(){
    alert("You've joined successfully?");
}
function Prankfunction(){
    if (document.getElementById("teamname").innerHTML.style.color == "green"){
        document.getElementById("teamname").innerHTML.style.color == "white";
    }
    else{
        document.getElementById("teamname").innerHTML.style.color == "green";
    }
}
function prankfunction(){
    if(document.getElementById("about").innerHTML == "About Us"){
        document.getElementById("about").innerHTML = "Among Us?";
        document.getElementById("cyan").style.display = "block";
    }
    
}
function prankrestored(){
    document.getElementById("about").innerHTML = "About Us";
    document.getElementById("cyan").style.display = "none";
}
function nopeforu(){
    var arr = document.getElementsByClassName("sign");
    var arrlen = arr.length;
    
    for (var i = 0; i < arrlen; i++){
        if(arr[i].innerHTML == "Unavailable"){
            break;
        }
        arr[i].innerHTML = "Unavailable";
        

    }
}

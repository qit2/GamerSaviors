function checksignin(){
    var x = document.getElementById("inname").value;
    var y = document.getElementById("inpasswd").value;
    if(x == "" && y == ""){
        alert("Invalid Username / Password");
        return;
    }
    alert("Redirecting you to our page...");
}
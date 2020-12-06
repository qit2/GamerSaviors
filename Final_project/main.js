function myFunction() {
  var x = document.getElementById("as");
  var y = document.getElementById("asbutton");
  var z = document.getElementById("submit");
  if (x.style.display === "block") {
    x.style.display = "none";
    y.style.borderRadius = "10px 0 0 10px;";
  } else {
    x.style.display = "block";
    y.style.borderRadius = "10px 0 0 0px";
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

function myFunction1() {
  var x = document.getElementById("rating");
  var y = document.getElementById("Rrating");
  var z = document.getElementById("price");
  var a = document.getElementById("Rprice");
  var b = document.getElementById("alpha");
  var c = document.getElementById("Ralpha");
  x.style.display = "block";
  y.style.display = "none";
  z.style.display = "none";
  a.style.display = "none";
  b.style.display = "none";
  c.style.display = "none";
}

function myFunction2() {
  var x = document.getElementById("rating");
  var y = document.getElementById("Rrating");
  var z = document.getElementById("price");
  var a = document.getElementById("Rprice");
  var b = document.getElementById("alpha");
  var c = document.getElementById("Ralpha");
  x.style.display = "none";
  y.style.display = "block";
  z.style.display = "none";
  a.style.display = "none";
  b.style.display = "none";
  c.style.display = "none";
}

function myFunction3() {
  var x = document.getElementById("rating");
  var y = document.getElementById("Rrating");
  var z = document.getElementById("price");
  var a = document.getElementById("Rprice");
  var b = document.getElementById("alpha");
  var c = document.getElementById("Ralpha");
  x.style.display = "none";
  y.style.display = "none";
  z.style.display = "block";
  a.style.display = "none";
  b.style.display = "none";
  c.style.display = "none";
}

function myFunction4() {
  var x = document.getElementById("rating");
  var y = document.getElementById("Rrating");
  var z = document.getElementById("price");
  var a = document.getElementById("Rprice");
  var b = document.getElementById("alpha");
  var c = document.getElementById("Ralpha");
  x.style.display = "none";
  y.style.display = "none";
  z.style.display = "none";
  a.style.display = "block";
  b.style.display = "none";
  c.style.display = "none";
}

function myFunction5() {
  var x = document.getElementById("rating");
  var y = document.getElementById("Rrating");
  var z = document.getElementById("price");
  var a = document.getElementById("Rprice");
  var b = document.getElementById("alpha");
  var c = document.getElementById("Ralpha");
  x.style.display = "none";
  y.style.display = "none";
  z.style.display = "none";
  a.style.display = "none";
  b.style.display = "block";
  c.style.display = "none";
}

function myFunction6() {
  var x = document.getElementById("rating");
  var y = document.getElementById("Rrating");
  var z = document.getElementById("price");
  var a = document.getElementById("Rprice");
  var b = document.getElementById("alpha");
  var c = document.getElementById("Ralpha");
  x.style.display = "none";
  y.style.display = "none";
  z.style.display = "none";
  a.style.display = "none";
  b.style.display = "none";
  c.style.display = "block";
}

function getTitle(image){
  var title = $(image).attr("alt");
  $.ajax({
    url: "main.php",
  method: "POST",
  data: { "title": title }
  });
}


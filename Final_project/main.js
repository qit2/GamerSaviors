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

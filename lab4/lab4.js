/* Global Variables */
var part1a = "";
var part1b = "";

/* Functions / Methods */
function iterating1a(tag, indent) {
  var result = "";
  var i;
  if(indent == 0){
      result = "";
  }
  for (i = 0; i < indent; i++) {
    result += "-";
  }

  result += (tag.tagName + "\n");

  var amount = tag.childElementCount;
  
  if (amount > 0) {
    var j = 0;
    for (j = 0; j < amount; j++) {
      result += iterating1a(tag.children[j], indent + 1);
    }
  }

  return result;
}

function iterating1b(tag, indent) {
  var result = "";
  var i;
  if(indent == 0){
      result = "";
  }
  for (i = 0; i < indent; i++) {
    result += "-";
  }

  result += (tag.tagName + "<br/>");

  var amount = tag.childElementCount;
  
  if (amount > 0) {
    var j = 0;
    for (j = 0; j < amount; j++) {
      result += iterating1b(tag.children[j], indent + 1);
    }
  }

  return result;
}
/* Part 1a execution */
var x = document.getElementsByTagName("html").item(0);
document.getElementById("info").innerHTML = "";
part1a = iterating1a(x, 0);
document.getElementById("info").innerHTML += part1a;

/* Part 1b execution */
var y = document.getElementsByClassName("quote");
part1b = iterating1b(y[0], 0);
document.getElementById("part1b").innerHTML = "";
document.getElementById("part1b").innerHTML += part1b;

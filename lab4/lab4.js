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
  /* This for loop adds how much the tag is indented */
  for (i = 0; i < indent; i++) {
    result += "-";
  }
  var part2Tag = tag.tagName
  tag.addEventListener("click", function(){alert(part2Tag)});

  /* this then gets the name of the tag */
  result += (tag.tagName + "\n");

  var amount = tag.childElementCount;
  
  if (amount > 0) {
    var j = 0;
    /* It goes through and gets all of the children by using the chileElementCount function*/
    for (j = 0; j < amount; j++) {
      result += iterating1a(tag.children[j], indent + 1);
    }
  }

  return result;
}

/* This is the same as the first function but slightly different for part 1b*/
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

function button_click(){
  var content = document.getElementById("part1b");
  if (content.style.display == "none") {
    content.style.display = "block";
  }
  else{
    content.style.display = "none";
  }
}
/*part 3 add a quote which we like at bottom of the page. */
function quote_fav(){
  var quote = "Be who you are and say what you feel, because those who mind don\'t matter and those who matter don\'t mind. \- Bernard M. Baruch"
  var itm = document.getElementsByClassName("quote box")[0];
  var content = itm.cloneNode(true);
  content.innerHTML = quote;
  document.body.appendChild(content);
}
quote_fav();

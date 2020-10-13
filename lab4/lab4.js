

function iterating(tag, indent) {
  var i;
  var l;
  if(indent == 0){
      document.getElementById("info").innerHTML = "";
  }
  for (i = 0; i < indent; i++) {
    document.getElementById("info").innerHTML += "-";
  }

  document.getElementById("info").innerHTML += tag.tagName + "\n";

  var amount = tag.childElementCount;
  
  if (amount > 0) {
    var j = 0;
    for (j = 0; j < amount; j++) {
      iterating(tag.children[j], indent + 1);
    }
  }

  return;
}

var x = document.getElementsByTagName("html").item(0);
/*document.getElementById("info").innerHTML += "\n";*/
iterating(x, 0);


function quote_fav(){
  var quote = "Be who you are and say what you feel, because those who mind don\'t matter and those who matter don\'t mind. \- Bernard M. Baruch"
  var itm=document.getElementsByClassName("quote")[0];
  var content = itm.cloneNode(true);
  content.innerHTML = quote;
  document.body.appendChild(content);
}
quote_fav();

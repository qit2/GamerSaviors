

function iterating(tag, indent) {
  var i;
  var l;
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



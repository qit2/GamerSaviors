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

function iterating2(tag, indent) {
  var i;
  var l;
  for (i = 0; i < indent; i++) {
    document.getElementById("part1b").innerHTML += "-";
  }

  document.getElementById("part1b").innerHTML += tag.tagName + "\n";

  var amount = tag.childElementCount;
  
  if (amount > 0) {
    var j = 0;
    for (j = 0; j < amount; j++) {
      iterating2(tag.children[j], indent + 1);
    }
  }

  return;
}




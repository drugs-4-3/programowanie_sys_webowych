"use strict";

function domZad1() {
  var elem = document.createElement("li");
  var elem1 = document.createElement("li");
  var li = document.createTextNode("Woda gazowana");
  var li1 = document.createTextNode("Coca Cola");
  elem.appendChild(li);
  elem1.appendChild(li1);

  document.getElementById("myList").appendChild(elem);
  var list = document.getElementById("myList");

  list.insertBefore(elem1, list.childNodes[0]);
  list.removeChild(list.childNodes[5]);

  var parent = document.getElementById("container").parentNode.nodeName;
  document.getElementById("name").innerHTML = parent;
}

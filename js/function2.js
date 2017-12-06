function addImage() {
  var image = document.createElement("img");
  image.src = "img/kot-chleb.gif";
  image.setAttribute("width", "200");
  image.setAttribute("height", "200");
  image.setAttribute("alt", "kot_chleb");

  var number = document.images.length;
    document.getElementById("numberImg").innerHTML = "Liczba zdjec: " + number;

var links = "";
  for (var i=0;i<document.links.length;i++) {
    links += document.links[i].href + "<br>";
  }
  document.getElementById("numberLinks").innerHTML = links;

  var selectTag = document.getElementById ("fruit");
  var optionTag = selectTag.namedItem ("peach");
  document.getElementById("numberItem").innerHTML = optionTag.text;
}

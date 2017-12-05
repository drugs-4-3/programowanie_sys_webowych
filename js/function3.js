function chColor() {
  console.log("hahahahh");

  var color = document.getElementById("colorValue").value;
  console.log(color);
  document.body.style.backgroundColor = color;
  document.body.style.color = "red";

}

function chFont(selectTag) {

  var listValue = selectTag.options[selectTag.selectedIndex].text;
  document.body.style.fontFamily = listValue;


}

function func4(event) {
    var x = document.getElementById("pudelko");
    if (event.altKey) {
        x.innerHTML = "ALT";
    } else if (event.ctrlKey) {
        x.innerHTML = "CTRL";
    } else if (event.shiftKey) {
        x.innerHTML = "SHIFT";
    }
}

function func41(event) {
  var x = document.getElementById("pudelko2");
  var y = document.getElementById("pudelko3");
  x.innerHTML = "clientx: " + event.clientX + " clienty: " + event.screenY;
  x.innerHTML = "clientx: " + event.clientX + " clienty: " + event.screenY;
  y.innerHTML = "clientx: " + event.clientX + " clienty: " + event.clientY;
  y.innerHTML = "clientx: " + event.clientX + " client: " + event.clientY;
}

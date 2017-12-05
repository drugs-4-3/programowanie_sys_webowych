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
  x.innerHTML = "screenx: " + event.screenX + " screeny: " + event.screenY;
  x.innerHTML = "screenx: " + event.screenX + " screeny: " + event.screenY;
  y.innerHTML = "clientx: " + event.clientX + " clienty: " + event.clientY;
  y.innerHTML = "clientx: " + event.clientX + " clienty: " + event.clientY;
}

function func5(event) {
  return confirm("na pewno?")
}

function func51(event) {
  return confirm("na pewno resetować?")
}

function onfocus1() {
  document.getElementById('focusme').focus();
  console.log('asd');
}

function onfocusout1() {
  document.getElementById('focusme').blur();
}

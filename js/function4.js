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
  // var bo = confirm("na pewno reset?");
  // // var form = document.getElementById("super-formularz");
  // // if (bo) {
  // //   console.log(form);
  // //   form.reset();
  // // }
  return confirm("na pewno resetować?")

}

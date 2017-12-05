"use strict";

var Wynik = "Wynik: ";

function timer() {
  var today = new Date();

  var dzien = today.getDate();
  var miesiac = today.getMonth()+1;
  var rok = today.getFullYear();
  var godzina = today.getHours();
  var minuta = today.getMinutes();
  var sekunda = today.getSeconds();

  var zmienna;

  if(zmienna == null) {
    
  }

  var date = dzien + " " + miesiac + " " + rok + " | " + godzina+ ":"+ minuta+ " " + sekunda;

  document.getElementById("time").innerHTML = date;
  switch(miesiac) {
    case 1 :
        document.getElementById("miesiac").innerHTML = "styczen";
        break;
    case 2 :
        document.getElementById("miesiac").innerHTML = "luty";
        break;
    case 3 :
        document.getElementById("miesiac").innerHTML = "marzec";
        break;
    case 4 :
        document.getElementById("miesiac").innerHTML = "kwiecien";
        break;
    case 5 :
        document.getElementById("miesiac").innerHTML = "maj";
        break;
    case 6 :
        document.getElementById("miesiac").innerHTML = "czerwiec";
        break;
    case 7 :
        document.getElementById("miesiac").innerHTML = "lipiec";
        break;
    case 8 :
        document.getElementById("miesiac").innerHTML = "sierpien";
        break;
    case 9 :
        document.getElementById("miesiac").innerHTML = "wrzesien";
        break;
    case 10:
        document.getElementById("miesiac").innerHTML = "październik";
        break;
    case 11:
        document.getElementById("miesiac").innerHTML = "listopad";
        break;
    case 12:
        document.getElementById("miesiac").innerHTML = "grudzień";
        break;
  }

  setTimeout("timer()",1000);
}

function myFunction() {
  document.writeln("HELLO WORDL");
}

function myFunctionPrompt() {
  var name = window.prompt("Podaj swoje imie", "");
}

function myFunctionAlert() {
  window.alert("TEST TEST");
}

function myFunctionListener() {
  window.addEventListener("click",myFunctionAlert());
}

function myFunctionHello() {
  document.getElementById("btn").addEventListener("click", function(){
    document.getElementById("hello").innerHTML = "Witam!!";
  });
}

function myFunctionZakres() {
  var liczba1 = parseInt(document.getElementById("pole1").value);
  var liczba2 = parseInt(document.getElementById("pole2").value);
  var wynik = "";
  if (liczba1<liczba2) {
    for (let i=liczba1;i<=liczba2;i++) {
      wynik = wynik + i + " ";
    }
  } else if (liczba2<liczba1) {
      for (let i=liczba2;i<=liczba1;i++) {
        wynik = wynik + i + " ";
      }
  } else {
    wynik = liczba1;
  }

  document.getElementById("wynik").innerHTML = Wynik + wynik +" ";
  document.getElementById("parseI").innerHTML = Wynik + parseInt(liczba1);
  document.getElementById("parseF").innerHTML = Wynik + parseFloat(liczba2);
}

function myFunctionRandom() {
  var random1 = Math.floor(Math.random()*100);
  var random2 = Math.floor(Math.random()*100);
  document.getElementById("pole1").value = random1;
  document.getElementById("pole2").value = random2;
}

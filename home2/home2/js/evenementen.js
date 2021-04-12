var fruit = ['Defcon1', 'Defcon2', 'Defcon3', 'Defcon4'];
var index = 0; 
var slideShowArray = ['defcon1', 'defcon2', 'defcon3', 'defcon4'];
var test;

window.onload = function(){
    test = document.getElementById("test");

    setInterval(slideShow, 2000);
}

function slideShow(){ 
    test.style.backgroundImage = "url(images/" + slideShowArray[index] + ".jpg)";
    index++;
    if(index == slideShowArray.length){
        index = 0;
    }
} 

function getArrayFor(){
    for (var index = 0; index >= 0; index--){
        test.innerHTML += fruit[index] + "<br>";
    }
}

function getArrayForEach(){
    test.innerHTML = null;
    for(var character of fruit){
        test.innerHTML += character + "<br>";
    }
}

function myFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }
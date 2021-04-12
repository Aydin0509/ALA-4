function myFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }

  var fotos = ["elvispresley.jpg", "justinbieber.jpg", "postmalone.jpg", "mileycyrus.jpg", "rappersjors.jpg", "dualipa.jpg", "duncan.jpg", "tonesandi.jpg"];

  var test;
  var indexSlide =0;
  
  
  
  window.onload =function(){
      test = document.getElementById("test");
      setInterval(slideShow, 1500);
  }
  
  
  
  function slideShow(){
      test.style.backgroundImage = "url(images/" + fotos[indexSlide] + ")";
      indexSlide++;
      if(indexSlide == fotos.length){
          indexSlide = 0;
      }
  }
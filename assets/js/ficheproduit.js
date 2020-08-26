function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less";
      moreText.style.display = "inline";
    }
  } 

  function myFunction1() {
    var dots1 = document.getElementById("dots1");
    var more1Text = document.getElementById("more1");
    var btn1Text = document.getElementById("myBtn1");
  
    if (dots1.style.display === "none") {
      dots1.style.display = "inline";
      btn1Text.innerHTML = "Read more";
      more1Text.style.display = "none";
    } else {
      dots1.style.display = "none";
      btn1Text.innerHTML = "Read less";
      more1Text.style.display = "inline";
    }
  } 

  function myFunction2() {
    var dots2 = document.getElementById("dots2");
    var more2Text = document.getElementById("more2");
    var btn2Text = document.getElementById("myBtn2");
  
    if (dots2.style.display === "none") {
      dots2.style.display = "inline";
      btn2Text.innerHTML = "Read more";
      more2Text.style.display = "none";
    } else {
      dots2.style.display = "none";
      btn2Text.innerHTML = "Read less";
      more2Text.style.display = "inline";
    }
  } 
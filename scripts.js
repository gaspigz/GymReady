function reveal() {
    var reveals = document.querySelectorAll(".reveal");
  
    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 100;
  
      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
      } else {
        reveals[i].classList.remove("active");
      }
    }
  }
  
  window.addEventListener("scroll", reveal);

  function heightButtonsNav(){
    let buttons = $(".login-nav-btn");
    let height = buttons.innerHeight();
    console.log(height);
    let navHeight = $(".mi-nav").css("height");
    let finalHeight = navHeight - height;
    console.log(navHeight);
    console.log(finalHeight);

    buttons.css('padding-top', finalHeight + 'px');
  }

  heightButtonsNav();

  function growImagesBanner(){
    let imagesU = $(".banner-img-up");
    let imagesD = $(".banner-img");
    let bannersD = $(".banner-informacion-contenedor");
    imagesU.hover(function(e){
      e.css('width','34vw');
    })
    bannersD.hover(function(){
      console.log(imagesD.width);
      imagesD.width='34vw';
      imagesU.css('width','34vw');
    });
  }
  growImagesBanner();

  $(window).on("load",function(){
    $(".loader-wrapper").fadeOut("slow");
});
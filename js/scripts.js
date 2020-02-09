  /* Scripts loading and confs */

  /* Smoothscroll */
  var scroll = new SmoothScroll('a[href*="#"]', {
    speed: 1500
  });


  /* Scrollspy + navbar highlighting */
  $('body').scrollspy({ target: '#navbar' });

    $(document).ready(function(){

      $('body').scrollspy({ target: '#navbar' });

      $(".navbar-collapse ul li a[href^='#'], .scroll-animate").on('click',function(e){

        target = this.hash;
        e.preventDefault();

        $('html,body').animate({
          scrollTop : $(this.hash).offset().top
        }, 600, function(){
          window.location.hash = target;
        });

        $(".navbar-collapse").collapse('hide');

      });

        var scroll = 0;
        $(document).scroll(function(){
          scroll = $(this).scrollTop();

          if(scroll > 100){
            $(".navbar").css({"height" : "75px", "background" : "#fff" , "border-bottom" : "1px solid black"});
            $(".navbar-brand img").css({"height" : "75px"})
          } else {
            $(".navbar").css({"height" : "100px", "background" : "none" , "border-bottom" : "none"});
            $(".navbar-brand img").css({"height" : "90px"});
          }

        });
      });

    /* Lax */
    window.onload = function() {
      lax.setup() // init

      const updateLax = () => {
        lax.update(window.scrollY)
        window.requestAnimationFrame(updateLax)
      }

      window.requestAnimationFrame(updateLax)
    };

/*
    function initMap() {
      // The location of Uluru
      var uluru = {lat: -25.344, lng: 131.036};
      // The map, centered at Uluru
      var map = new google.maps.Map(
          document.getElementById('footer-map'), {zoom: 4, center: uluru});
      // The marker, positioned at Uluru
      var marker = new google.maps.Marker({position: uluru, map: map});
    }*/

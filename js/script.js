'use strict';


(function($) {



//      CIRCLE   SKILLS        

 var counter = 0;

    var win = $(window);
    win.on('scroll', function()
      {

        var circle = $('.circle'),
            headingCircle =  $('#myskills'),
            possition = headingCircle.offset().top,
            distance = Math.round(possition);


        circle.each(function()
        {
          var mySkills = ($(this).attr('title')/100),
              easyColor = '#1eb6cd',
              mediumColor = '#17a2b8',
              highColor = '#15899b'

          if( mySkills <= 0.24)
            { var progressColor = easyColor }
          else if (mySkills <= 0.74)
            { var progressColor = mediumColor }
          else
            { var progressColor = highColor }

        
          if( counter <= 12 )
          {  
            if (win.scrollTop() >= (distance - 250) && win.scrollTop() <= (distance + 100)) 
                  { 

                    $('.temp').hide();
                    counter++;

                    $(this).circleProgress
                      ({
                        value: mySkills,
                        fill: progressColor
                      }).on('circle-animation-progress', function(event, progress, stepValue) 
                      {
                        $(this).find('strong').text(stepValue.toFixed(2).substr(2) + "%");
  
                      });
                  }
          }
        })
      })
  


//        OVERLAY - INTERVIEW

  var interview = $('.interview'),
      overlay = $('<div/>', { id: 'overlay' });

  overlay.appendTo('body').hide();

  interview.on('click', function(event)
  {
  var href = $(this).attr('href'),
    image = $('<img>', { src: href, alt : 'interview' });

  overlay.html( image ).fadeIn(600);

  event.preventDefault();
  });

  overlay.on('click', function(){
  overlay.fadeOut(600);
  });


  $(document).on('keyup', function(){
  if (event.which === 27) overlay.fadeOut(600);
  });





//        SCROLL FUNCTION

var navMenu = $('nav a').not('.notSelect');

    navMenu.on('click', function(event){
      var idHash = this.hash;

      $('html,body').animate({ scrollTop: $(this.hash).offset()}, function (){
        window.location.hash = idHash;
      });

      event.preventDefault();
    });



          /*    BACK TO TOP    */

    var backtoTop = $('<a>', {
                      href : '#top',
                      class: 'back-to-top text-white b-c-prim',
                      html : '⬆'
                    });

    backtoTop
      .hide()
      .appendTo('body')
      .on('click', function(){
          $('body').animate({ scrollTop : 0 })
      });
              
    var win = $(window);

    win.on('scroll', function(){
      if ( win.scrollTop() >= 500) backtoTop.fadeIn(900);
      else backtoTop.hide();
    });


        /*    IMG CAROUSEL      */

    


    var owl = $(".owl-carousel");
    
    owl.owlCarousel({
      items: 9,
      loop: true,
      autoplay: true,
      autoplayHoverPause: true,
      autoplayTimeout: 2500,
      smartSpeed: 700
    });


}) (jQuery);
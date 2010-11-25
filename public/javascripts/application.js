var lightbox = {
  
  initLightBox: function(a) {
    
    //Get size of the image, how many images there are, then determin the size of the image reel.
    var imageWidth = $(".window").width();
    var imageSum = $(".image_reel img").size();
    var imageReelWidth = imageWidth * imageSum;
    
    //Show the paging and activate its first link
    $(".paging").show();
    $(".paging a:first").addClass("active");

    //Adjust the image reel to its new size
    $(".image_reel").css({'width' : imageReelWidth});

    //Paging  and Slider Function
    rotate = function(){
      //Get number of times to slide
      var triggerID = $active.attr("rel") - 1; 
      //Determines the distance the image reel needs to slide
      var image_reelPosition = triggerID * imageWidth; 
      
       //Remove all active class
      $(".paging a").removeClass('active');
      //Add active class (the $active is declared in the rotateSwitch function) 
      $active.addClass('active');   
      //Slider Animation
      $(".image_reel").animate({
        left: -image_reelPosition
      }, 500 );

    }; 

    //Rotation  and Timing Event
    rotateSwitch = function(){
      //Set timer - this will repeat itself every 7 seconds
      play = setInterval(function(){
        //Move to the next paging
        $active = $('.paging a.active').next(); 
        //If paging reaches the end...
        if ( $active.length === 0) { 
          //go back to first
          $active = $('.paging a:first'); 
        }
        rotate(); //Trigger the paging and slider function
      }, 5000); //Timer speed in milliseconds (7 seconds)
    };

    rotateSwitch(); //Run function on launch

    //On Hover
    $(".image_reel a").hover(function() {
      clearInterval(play); //Stop the rotation
      }, function() {
      rotateSwitch(); //Resume rotation timer
    });	

    //On Click
    $(".paging a").click(function(e) {

      $active = $(this); //Activate the clicked paging
      //Reset Timer
      clearInterval(play); //Stop the rotation
      rotate(); //Trigger rotation immediately
      rotateSwitch(); // Resume rotation timer
      e.preventDefault(); //Prevent browser jump to link anchor
    });

  }
  
};

//flowplayer
var videos = {
  videoTrigger: function() {
    var $anchorTag = $('#video_link_wrapper .video_link');
    $anchorTag.overlay({
        expose: {
          color: '#000000',
          opacity: 0.85,
          closeSpeed: 700
        },
        onLoad: function() {
          var v = this.getTrigger().attr('href');
          player.load().play(v);
        },
        onClose: function() {
         player.pause();
         player.unload(); 
        }
      });
  }
};













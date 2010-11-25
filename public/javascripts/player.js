$(document).ready(function() {
  player = $f(
    //first parameter is ID of div for the video
    "vidbox",
    
    //this is the flashplayer config
     {
       src: "public/swf/flowplayer-3.2.5.swf", 
       id: "videoplayer",
       wmode: "opaque"
     }, 
     
    //this is the player config
     {
       play: {
        opacity: 0
       },
       canvas: {
        background: '#000000',
        backgroundGradient: 'none' 
       },
       screen: {
         backgroundColor: '#000000',
         backgroundGradient: 'none'
       },
       
       plugins: {
         content: {
           url: 'public/swf/flowplayer.content-3.2.0.swf',
           height: 80,
           color: '#fff',
           backgroundColor: '#000000',
           backgroundGradient: [0.0, 0.0, 0.0],
           border: 'none',
           opacity: 0,
           zIndex: 10
         },
         controls: {
           tootips: {
             buttons: true,
             play: 'play',
             pause: 'pause',
             fullscreen: 'biggun'
           },
           backgroundGradient: 'none',
           buttonColors: '#333',
           buttonOverColor: '#ffb800',
           all: true,
           scrubber: true,
           mute: true,
           height: 30,
           progressColor: '#ffb800',
           bufferColor: '#0006ca',
           tooltipColor: '#333',
           tooltipTextColor: '#fff'
         }
       },
       
       clip: {
         autoplay: false,
         autoBuffering: true,
         fadeInSpeed: 5000,
         scaling: "orig",
         backgroundColor: '#000000'
       },
       playlist: []
     });
});
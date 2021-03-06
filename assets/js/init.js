(function($){
  $(function(){

      $('.sidenav').sidenav();

      $('.carousel-slider').carousel({
          fullWidth: true,
          indicators: true,
          duration: 100
      });

      $(document).ready(function(){
          $('.carousel').carousel({
              dist: -20,
              shift: 40,
              padding: 10,
              indicators: true
          });
      });

      $(document).ready(function(){
          $('.carousel-two').carousel({
              dist: -40,
              shift: 150,
              padding: 20,
              indicators: true
          });
      });

  }); // end of document ready
})(jQuery); // end of jQuery name space

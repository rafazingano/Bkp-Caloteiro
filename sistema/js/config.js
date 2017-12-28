$(document).ready(function(){
$('.sub-menu').slideUp();

  $("#hamburger-10").click(function(){
   
    if($(this).hasClass("is-active")){
    	$('.sub-menu').slideUp();
    	$(this).toggleClass("is-active");
    }else{
    	$('.sub-menu').slideDown();
    	$(this).toggleClass("is-active");
    }
  });
  $(".sub-menu li").click(function(){
   
    $('.sub-menu').slideUp();
    $('#hamburger-10').toggleClass("is-active");
  });

    $(".desk a").click(function(event){
        event.preventDefault();
        $('html,body').animate({
          scrollTop:$(this.hash).offset().top
        }, 800);
   });

     $(".sub-menu a").click(function(event){
        event.preventDefault();
        $('html,body').animate({
          scrollTop:$(this.hash).offset().top
        }, 800);
   });

      $("footer a").click(function(event){
        event.preventDefault();
        $('html,body').animate({
          scrollTop:$(this.hash).offset().top
        }, 800);
   });
});

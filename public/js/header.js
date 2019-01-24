$(window).resize(function(){     
       if ($('header').width() > 320 ){
       	$(this).addClass("angle");
       } else {
       	$('header').removeClass("angle");
       }
});
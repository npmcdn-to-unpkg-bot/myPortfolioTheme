(function() {
    var app = angular.module("myApp", []);

    app.controller("myCtrl", function($scope) {
    	$scope.fullImage = function(event){
    		var fullImage = event.target.src;
    		var newDiv = angular.element("<div>");
    		var close = angular.element("<div>");
    		close.addClass('closeBut');
    		newDiv.css('background-image', 'url(' + fullImage +')');
    		var quest = angular.element(document.querySelector("article"));
    		newDiv.addClass('FullImage');
    		newDiv.append(close);
    		quest.append(newDiv);

    		close.on("click", function (e){
    			newDiv.remove();
			});

    	}
    });

})();


jQuery.noConflict();
(function( $ ) {
  $(function() {
  	$(window).on('load', function () {
    var $preloader = $('#page-preloader'),
        $spinner   = $preloader.find('.spinner');
    	$spinner.fadeOut();
    	$preloader.delay(350).fadeOut('slow');
		});
  	// no # in href and scroll**********************
  	$('a[href*=#]').bind("click", function(e){
      var anchor = $(this);
      $('html, body').stop().animate({
         scrollTop: $(anchor.attr('href')).offset().top
      }, 1000);
      e.preventDefault();
   });
  	//***********************************************


  });
})(jQuery);





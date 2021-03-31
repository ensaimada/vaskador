$(document).ready(function () {
	var $window = $(window);
		function checkWindowWidth() {   	
		    var windowsize = $window.width();
		        if (windowsize > 1000) {
		            $('#navigation').css('display','block');
		        } else {
		            $('#navigation').css('display','none');
		        }
		    }

		    checkWindowWidth();
		    $(window).resize(checkWindowWidth);
		});
      $('#openme').click(function() {
        $('#navigation').toggle();
    });
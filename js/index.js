$(document).ready(function() {
		$("#buttonScroll").click(function() {
			event.preventDefault();
		    var n = $(document).height();
		    $('html, body').animate({ scrollTop: "647px" }, 1000);                        
	});

		$("#famous").click(function() {
			event.preventDefault();
		    var n = $(document).height();
		    $('html, body').animate({ scrollTop: n }, 1000);                        
	});
		$("#about").click(function() {
			event.preventDefault();
		    var n = $(document).height();
		    $('html, body').animate({ scrollTop: "647px" }, 1000);
	});	         
});
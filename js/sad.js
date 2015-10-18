$( document ).ready( function () {

	function capitalize(s){

		var flg = true;

		var stopwords = ["do", "da", "de", "e"];

		jQuery.each(stopwords, function(index, value) {
			if (s == value) {
				flg = false;
			}
		});

		if (flg)
	    	return s.toLowerCase().replace( /^\b./g, function(a){ return a.toUpperCase(); } );
	    else
	    	return s;

	};

	$(".sg-subnav-parent li a").each(function(index, value) {
  		
  		var li = $(this);
		var words = li.text().split(" ");
		$(this).empty();
		li.empty();

		jQuery.each(words, function(index, value) {
	       var w = capitalize(value);
	       li.append(w).append(" ");
	   });

	});

})
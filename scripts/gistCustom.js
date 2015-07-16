$( document ).ready(function() {
	var initSVGs = function() {
		if ( !$("html").hasClass("lt-ie9") && $('img.svg').length ) {
			var svgCount = 0;

			$('img.svg').each(function(i) {
				var img = $(this),
					imgID = img.attr('id'),
					imgClass = img.attr('class'),
					imgURL = img.attr('src');

				svgCount = i;

				$.get(imgURL, function(data) {
					var svg = $(data).find('svg');
					if(typeof imgID !== 'undefined') svg = svg.attr('id', imgID);
					if(typeof imgClass !== 'undefined') svg = svg.attr('class', imgClass + ' replaced-svg');
					if ( img.hasClass("icon") ) svg.find("*").removeAttr("style");
					svg = svg.removeAttr('xmlns:a');
					img.replaceWith(svg);
				}, 'xml').fail(function() {
	                img.removeClass("svg");
	            });
			});

			console.log("System :: SVG Injection @ " + svgCount + " images");
		}
	}
	initSVGs();
});
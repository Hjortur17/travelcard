$(document).ready(function () {
	$.ajax({
		'url': '/storage/files/weather.json',
		'success': function (response) {
			let degrees 	= 	response.results[0].forecast[1].T 					// W = lýsing
			let city 	= 	response.results[0].name 						// F = vindhraði
			let wind 	= 	response.results[0].forecast[1].F  				// D = vindátt
			let windd	= 	response.results[0].forecast[1].D 					// T = gráður

			$('#degrees').append(degrees);
			$('#city').append(city);
			$('#wind').append(wind);
			$('#windd').append(windd);
		}
	})
});
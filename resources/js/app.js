
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$(document).ready(function () {
	$.ajax({
		'url': 'https://apis.is/weather/forecasts/is',
		'type': 'GET',
		'dataType': 'json',
		'data': {'stations': '1,422'},
		'success': function (response) {
			// console.log(response);
			
			let i;
			for (i = 0; i < response.results[0].forecast.length; i++) {
				console.log(i);
			}
			
			let degrees 	= 	response.results[0].forecast[100].T 				// W = lýsing
			let city 	= 	response.results[0].name 					// F = vindhraði
			let wind 	= 	response.results[0].forecast[100].F  				// D = vindátt
			let windd	= 	response.results[0].forecast[100].D 				// T = gráður


			$('#degrees').append(degrees);
			$('#city').append(city);
			$('#wind').append(wind);
			$('#windd').append(windd);



			// let cities = '';

			// $.each(response.results[0], function (key, res) {
			// 	console.log(res);

			// 	cities += '<li>'
			// 		+ ' City name: ' + res.name
			// 		+ '<ul>'
			// 	;
			// 	$.each(res.forecast, function (fkey, fore) {
			// 		cities += '<li>'
			// 			+ ' F: ' + fore.F
			// 			+ ' D: ' + fore.D
			// 			+ ' T: ' + fore.T
			// 			+ ' W: ' + fore.W
			// 			+ '</li>'
			// 	;
			// 	});
			// 	cities += '</ul></li>';
			// });
			// 	$('#report').append(cities);
			// },
		}
	})
});



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
			let cities = '';
			$.each(response.results, function (key, res) {
				// console.log(res);
				cities += '<li>'
					+ ' City name: ' + res.name
					+ ' @ ' + res.atime
					+ '<ul>'
				;
				$.each(res.forecast, function (fkey, fore) {
					cities += '<li>'
						+ ' ftime: ' + fore.ftime
						+ ' F: ' + fore.F
						+ ' D: ' + fore.D
						+ ' T: ' + fore.T
						+ ' W: ' + fore.W
						+ '</li>'
				;
				});
				cities += '</ul></li>';
			});
				$('#report').append(cities);
			},
		});
	});

$(function() {
	// event to change the currencies when input value changes. The exchange rate is stored in a data property for     each element. Use that value to divide
	$('#currency-input').on('input change', function() {
		let value = parseFloat($(this).val());
		
		$('.convert-me').each(function(i, item) {
			let el = $(item);
			let conversion = parseFloat(el.data('rate'));  // get conversion rate from data property
			el.val(parseFloat(value / conversion).toFixed(2) || 0); // do conversion, force to 0 if NaN, etc
		});
	});

	$.ajax({
		url: '/storage/files/currency.json',
		success: function (response) {
			// array of items we want from result. This is better than assuming the results will be at specific indexes
			let currencies = ['ISK', 'EUR', 'USD', 'GBP']; 

			// go through items, if it's one we're looking for (in currencies), then update the data-rate for it
			$.grep(response.results, function(item) {
				if ($.inArray(item.shortName, currencies) !== -1) {
					// update the data-rate property with new conversion rate
					$('#'+item.shortName).attr('data-rate', item.value);  // <input id="EUR"> etc
				}
			});
		}
	});
});
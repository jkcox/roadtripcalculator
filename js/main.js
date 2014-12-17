/**
 * Application JS
 */
(function() {

	//trip variable
	var trip = [];

	// When the last dropdown menu is clicked
	$('#legs').on('change', 'select:last-of-type', function() {
		
		var city_id = $(this).val();

		// do some jquery to find out how many selects there are, if there are at
		// least two, then show the finished button
		$('.finished').show();

		$.ajax({
			url:'/api/connectingcities',
			dataType: 'json',
			data: {
				'city_id': city_id,
			},
			success:function(data) {
       
				var select = $('<select class="leg"><option>--Select a City--</option></select>');

        		$.each(data.connecting_cities, function(index, city) {
        			var option = $('<option>');
        			option.val(city.city_id);
        			option.text(city.name);
        			option.data('route_id', city.route_id);
        			select.append(option);
        		});

        		$('#legs').append(select);
        	}

		});

	});

		// When the last dropdown menu is clicked
	$('#legs').on('change', 'select:not(:last-of-type)', function() {
		$(this).nextAll('select').remove();
		$(this).trigger('change');
	});

	$('.finished').on('click', function() {

		var routes = [];

		$('select').not(':first-child').not(':last-child').each(function() {
			routes.push($(this).find('option:selected').data('route_id'));
		});

		route = routes.toString();

		location.href = ('/results?route=' + route);
	});



	

	// //once #start is changed adds 2nd dropdown menu
	// $("#start").one('change', function(){
	// 	var new_leg = selectTemplate.replace('{{leg_id}}', 'selectleg1');
	// 	$("#legs").append(new_leg);
	// 	//getCities ajax call
	// 	var city_id = $(this).val();
	// 	getConnectingCities(city_id, 'selectleg1');

	// });

	//shows submit button and add new leg button once 2 dropdowns are changed
	// $('body').on('change', '.leg', function(){
	// 	$('.add').show();		
	// });
	// $("#add").click(function(){
	// 	$( "<select name='route' id='start'><option value='' selected>--Please Select--</option><?php echo $route; ?></select>" ).appendTo( $( ".container" ) );
	// });


	//once add leg is clicked, does ajax call to put route into var trip
	// $('#add').click(function(event){
	// 	event.preventDefault();
	// 	//add leg to trip array
	// 	var route_id = $('option').attr('route-id');
	// 	trip.push(route_id);
	// 	//assign id to select box
	// 	var n = trip.length;
	// 	var select_id = 'selectleg' + (n+1);
	// 	var new_leg = selectTemplate.replace('{{leg_id}}', select_id);
	// 	$("#legs").append(new_leg);

	// 	//getCities ajax call
	// 	var city_id = $('#selectleg' + n).val();
	// 	getConnectingCities(city_id, select_id);

	// });


})();
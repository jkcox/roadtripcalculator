<?php

// Controller
class Controller extends AppController {
	protected function init() {
		
		//Select route
		$route_results = City::selectAllCities();
		foreach ($route_results as $city) {
			$this->view->route .= CityViewFragment::build($city);
		}


	}
}
$controller = new Controller();

// Extract Main Controller Vars
extract($controller->view->vars);

?>
<div class="search-area background">
	<div class="search-area-home container">
		<h1>CHOOSE YOUR ROUTE</h1>
		<div class="route">
		<form action="/results" method="get">
			<span id="legs">
				<select name="route" id="start">
					<option value="" selected>--Select a City--</option>
					<?php echo $route; ?>
				</select>
			</span>
		</form>
			</div>
			<div>
			<button type="submit" class="finished" style="display:none;">Find Attractions!</button>
			</div>
		<div class="map">
			<!-- <img src="https://maps.googleapis.com/maps/api/staticmap?size=600x550&scale=2&maptype=terrain&style=&markers=size:small|Boise,ID|Seattle,WA|Portland,OR|Salt+Lake+City,UT|Denver,CO|Las+Vegas,NV|Albuquerque,NM|Phoenix,AZ|Los+Angeles,CA|San+Francisco,CA&key=AIzaSyB4KFmjcSHXd1wZL1-1tPA9xZCCFi9j9Lc"> -->
		</div>
	</div>
</div>
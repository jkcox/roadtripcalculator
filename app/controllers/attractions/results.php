<?php

// Controller
class Controller extends AppController {
	protected function init() {
		
		$routes = $_GET['route'];
		$routes = explode(',', $routes);

		foreach ($routes as $route) {

			$attraction_results = Attraction::select($route);
			while ($item = $attraction_results->fetch_assoc()) {
				$this->view->attraction .= AttractionsViewFragment::build($item);
			}
			
		}

				// $route_info_results = Route::getRouteInfo($route);
				// $this->view->route_info .= RouteViewFragment::build($route_info_results);
		
		
	}
}
$controller = new Controller();

// Extract Main Controller Vars
extract($controller->view->vars);
print_r($route_info_results);
?>

<div class="route-results background">
<?php echo $city1; ?>
	<div class="route-results container">
	<?php echo $route_info ?>
	<?php echo $attraction ?>
	</div>
	<a href="/newtrip" title=""><i class="fa fa-hand-o-right"></i> Create a new Route</a>
</div>
<?php

// Controller
class ConnectingCitiesController extends AjaxController {
	protected function init() {
		$inputcityid = $_GET['city_id'];
		//todo validate input city id return error
		$routes = Route::selectConnectingRoutes($inputcityid);
		$output = [];

		//route id city id and name
		foreach ($routes as $route) {
			$connectingcity = '';
			if ($inputcityid == $route->city1) {
				$connectingcity = new City($route->city2);
			} else {
				$connectingcity = new City($route->city1);
			}
			$output[] = ['route_id' => $route->route_id, 'city_id' => $connectingcity->city_id, 'name' => $connectingcity->name];
		}

		$this->view['connecting_cities'] = $output;

		// while ($item = $route_results->fetch_assoc()) {
		// $this->view->route .= RouteViewFragment::build($item);
		// }
		
		//Get city id from select box
		//Get available routes
		//Get city names
	}
}
$controller = new ConnectingCitiesController();
?>
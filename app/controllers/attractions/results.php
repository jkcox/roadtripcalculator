<?php

// Controller
class Controller extends AppController {
	protected function init() {
		
		// if(!isset($routes) OR !is_numeric($routes)) {

		// 	header('Location:/newtrip');
		// }

		$routes = $_GET['route'];
		$routes = explode(',', $routes);

		$attractions = '';

		foreach ($routes as $route_id) {

			$attractions .= Attraction::list_all($route_id);

		}

		$this->view->attractions = $attractions;
		
	}
}
$controller = new Controller();

// Extract Main Controller Vars
extract($controller->view->vars);
?>

<div class="route-results">
	<?php echo $city1; ?>
	<div class="route-results container">
	<?php //print_r($results); ?>
	<?php echo $attractions ?>
</div>
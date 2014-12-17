<?php

// Controller
class NewRouteController extends AjaxController {
	protected function init() {
		
		// $route_results = Route::selectRoute();
		print_r($_GET);
		// while ($item = $route_results->fetch_assoc()) {
		// $this->view->route .= RouteViewFragment::build($item);
		// }

	}
}
$controller = new NewRouteController();

?>

<!-- when user logs in display created trips or add a trip button -->
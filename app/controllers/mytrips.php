<?php

// Controller
class Controller extends AppController {
	protected function init() {
		
		// Send a variable to the main view
		// $this->view->welcome = 'CHOOSE YOUR ADVENTURE';

		// Send a variable to a sub view
		$this->view->primary_header->welcome = 'Welcome Student!';

	}
}
$controller = new Controller();

// Extract Main Controller Vars
extract($controller->view->vars);

?>

<!-- when user logs in display created trips or add a trip button -->
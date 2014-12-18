<?php

// Controller
class Controller extends AppController {
	protected function init() {
		
	}
}
$controller = new Controller();

// Extract Main Controller Vars
extract($controller->view->vars);

?>

<div class="splash-screen background">
<header>
	<h5>ROAD <i class="fa fa-road"></i> TRIP</h5>
	<a href="/newtrip"><i class="fa fa-hand-o-right"></i> PLAN YOUR ROUTE</a> 	
</header>
	<div class='title container'>
		<h5>CHOOSE</h5>
		<h3>YOUR</h3>
		<h1>ADVENTURE</h1>
	</div>
</div>

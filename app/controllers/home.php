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

<!-- Notice this welcome variable was created above and passed into the view -->
<div class="splash-screen background">
<header>
	<h5>ROAD <i class="fa fa-road"></i> TRIP</h5>
	<a href="/newtrip"><i class="fa fa-hand-o-right"></i> PLAN YOUR ROUTE</a> 	
</header>
	<div class='login'>
<!-- 		<form action="/login" method="POST">
			<label>Username:</label><input type="text" name="user_name" value="<?php echo htmlentities($user_name) ?>" placeholder="username" required><br>
			<label>Password:</label><input type="password" name="password" placeholder="password" required><br>
			<button type="submit">Login</button>
		</form> -->
	</div>
	<h1>CHOOSE YOUR ADVENTURE</h1>
</div>

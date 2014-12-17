<?php

// Controller
class Controller extends AppController {
	protected function init() {
	
	if (!is_numeric($_GET['attraction'])){

		die('Invalid attraction');

	} else {

		$attraction_results = AttractionDetails::select($_GET['attraction']);

		while ($item = $attraction_results->fetch_assoc()) {

			$this->view->attraction .= AttractionDetailsViewFragment::build($item);
		}

			$this->view->city1 = $attraction['city1'];
		}
	}	
}
$controller = new Controller();

// Extract Main Controller Vars
extract($controller->view->vars);

?>
<div class="route-results background">
<?php echo $city1; ?>
	<div class="route-results container">
	<?php echo $attraction ?>
	</div>
</div>
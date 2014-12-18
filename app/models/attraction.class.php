<?php

class Attraction extends Model {

	public static function getMiles($route_id) {
		$sql ="
		SELECT miles
		FROM route
		WHERE route_id = {$route_id}";
	}


	public static function list_all($route_id) {

		$sql = "
			SELECT attraction.*, c1.name AS city_name1, c2.name AS city_name2
			FROM attraction
			JOIN route USING (route_id)
			JOIN city AS c1 ON (c1.city_id = route.city1)
			JOIN city AS c2 ON (c2.city_id = route.city2)
			WHERE route_id = {$route_id}
			";

		//return results from select statement
		if (!$results = db::execute($sql)) {
			throw new Exception("Error Processing Request");
		}


		if (!$results->num_rows) {
			return '';
		}

		// Lets get the first one so we can get the cities once
		$row = $results->fetch_assoc();
		$output = '<h1>Between ' . $row['city_name1'] . ' and ' . $row['city_name2'] . '</h1>';
		// h2 goes here
		$output .= AttractionsViewFragment::build($row);

		// Lets get the reset
		while ($row = $results->fetch_assoc()) {
			$output .= AttractionsViewFragment::build($row);
		}

		return $output;


	}


}
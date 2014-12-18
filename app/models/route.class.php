<?php

class Route extends Model {

	public static function selectConnectingRoutes($city_id) {
		
		$sql = "SELECT * 
				FROM route
				WHERE city1 = {$city_id}
				OR city2 = {$city_id};";

		//return results from select statement
		$routes = [];

		if (!$results = db::execute($sql)) {
			throw new Exception("Error Processing Request");
		}	else {
				while ($row = $results->fetch_assoc()) {
					$routes[] = new Route($row['route_id']);
				}
			}

		return $routes;
	}
}
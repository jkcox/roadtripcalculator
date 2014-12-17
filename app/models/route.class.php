<?php

class Route extends Model {

	public static function selectConnectingRoutes($city_id) {
		
		$sql = "SELECT * FROM route
				WHERE city1 = {$city_id}
				OR city2 = {$city_id};";

		//return results from select statement
		$routes = [];

		if (!$results = db::execute($sql)) {
			throw new Exception("Error Processing Request");
		} else {
			while ($row = $results->fetch_assoc()) {
				$routes[] = new Route($row['route_id']);
			}
		}
		return $routes;
	}

	public static function getRouteInfo($route_id) {

		//get city pairs for a specific route
		$sql = "
			SELECT c.name, r.route_id, c.city_id 
			FROM city as c 
			INNER JOIN route as r 
			ON c.city_id = r.city1 
			OR c.city_id = r.city2 
			WHERE r.route_id = {$route_id} 
		";
	}



}
<?php

class Attraction extends Model {

	/**
	 * Insert User
	 */

	public static function select($route) {
		//select all ingreients for a user
		$sql = "SELECT * from attraction WHERE route_id = {$route};";

		//return results from select statement
		if (!$results = db::execute($sql)) {
			throw new Exception("Error Processing Request");
		} else {
			return $results;
		}

	}

}
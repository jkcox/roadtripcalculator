<?php

class AttractionDetails extends Model {

	/**
	 * Insert User
	 */

	public static function select($attraction) {
		//select all ingreients for a user
		$sql = "SELECT * from attraction WHERE attraction_id = {$attraction};";

		//return results from select statement
		if (!$results = db::execute($sql)) {
			throw new Exception("Error Processing Request");
		} else {
			return $results;
		}

	}

}
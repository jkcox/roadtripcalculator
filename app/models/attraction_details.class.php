<?php

class AttractionDetails extends Model {

	public static function select($attraction) {

		$sql = "SELECT * from attraction WHERE attraction_id = {$attraction};";

		//return results from select statement
		if (!$results = db::execute($sql)) {
			throw new Exception("Error Processing Request");
		} else {
			return $results;
		}

	}

}
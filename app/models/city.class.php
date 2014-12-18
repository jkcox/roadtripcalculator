<?php

class City extends Model {

	public static function selectAllCities() {

		$sql = "SELECT * FROM city;";

		//return results from select statement
		$cities = [];

		if (!$results = db::execute($sql)) {
			throw new Exception("Error Processing Request");
		} 	else {
				while ($row = $results->fetch_assoc()) {
					$cities[] = $row;
				}
			}
			
		return $cities;
	}
}
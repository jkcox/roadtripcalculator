<?php

// Init
include($_SERVER['DOCUMENT_ROOT'] . '/app/core/initialize.php');

// Main Sections
Router::add('/', '/app/controllers/home.php');

// Logged in my trips
Router::add('/mytrips', '/app/controllers/mytrips.php');

// Create a new trip
Router::add('/newtrip', '/app/controllers/trips/newtrip.php');

//Results
Router::add('/results', '/app/controllers/attractions/results.php');

//Attraction details
Router::add('/attractions', '/app/controllers/attractions/details.php');

//Route API
Router::add('/api/newroute', '/app/controllers/api/newroute.php');
//Connecting Cities API
Router::add('/api/connectingcities', '/app/controllers/api/connectingcities.php');

// Issue Route
Router::route();
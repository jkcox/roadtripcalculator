<!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui" />
	<title>Road Trip Planning</title>
	
	<!-- Main CSS -->
	<link rel="stylesheet" href="/bower_components/ReptileForms/dist/reptileforms.min.css">
	<link rel="stylesheet" href="/css/styles.css">
	<link rel="stylesheet" href="/fancybox/jquery.fancybox.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto' type='text/css'>

	<!-- Modernizr -->
	<script src="/bower_components/modernizr/modernizr.js"></script>

</head>
<body>

	<div class="page">
		<?php echo $main_content; ?>
	</div>

	<!-- Include Common Scripts -->
	<script src="/bower_components/jquery/dist/jquery.js"></script>
	<script src="/bower_components/ReptileForms/dist/reptileforms.js"></script>
	<script src="/bower_components/jquery-ui/jquery-ui.min.js"></script>

	<!-- Get JS -->
	<script>var app = {};app.settings=<?php echo Payload::get_settings(); ?>;</script>
	
	<!-- Fancybox -->
	<script src="/fancybox/jquery.fancybox.js"></script>
	<script src="/fancybox/jquery.fancybox.pack.js"></script>
	<!-- Main JS -->
	<script src="/js/main.js"></script>

</body>
</html>
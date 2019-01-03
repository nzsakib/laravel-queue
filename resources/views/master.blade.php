<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task Queue</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> --}}
	<link rel="stylesheet" href="css/app.css">

	<script>
	    window.config = {!!
	        json_encode([
	            'api_tokoen' => $currentUser->api_token ?? null, 
	        ])
	    !!};
	</script>
</head>
<body>
	<div id="app">
		@yield('content')
	</div>

	<script src="/js/app.js"></script>
</body>
</html>
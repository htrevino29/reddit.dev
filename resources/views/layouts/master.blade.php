<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Reddit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	@if(session()->has('SUCCESS_MESSAGE'))
	    <div class="alert alert-success">
	        <p>{{ session('SUCCESS_MESSAGE') }}</p>
	    </div>
    @endif
    @if(session()->has('ERROR_MESSAGE'))
	    <div class="alert alert-danger">
	        <p>{{ session('ERROR_MESSAGE') }}</p>
	    </div>
    @endif



    @yield('content')

</body>
</html>
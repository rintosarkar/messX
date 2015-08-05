<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>messX</title>
	{!! Html::style('bootstrap_3.3.5/css/bootstrap.min.css') !!}
	{!! Html::style('bootstrap_3.3.5/css/bootstrap-theme.min.css') !!}

</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				@yield('content')
			</div>
		</div>
	</div>

{!! Html::script('bootstrap_3.3.5/js/bootstrap.min.js') !!}
</body>
</html>
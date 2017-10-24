<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>My Todo Package</h1>

	<h3>Todo Lists</h3>
	<p>
		@foreach($todos as $todos)
			<h6>{{$todos->todo}}</h6>
		@endforeach
	</p>
</body>
</html>
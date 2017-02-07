<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Legumes</title>
</head>
<body>
	<h1>Ma liste de légumes</h1>
	@foreach($legumes as $legume)
		<li>{{$legume->name}}</li>
	@endforeach
</body>
</html>
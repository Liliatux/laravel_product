<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Légume Manager</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
</head>
<body>
	<menu class="ui navbar">
		<div>
			<a href="/legumes">Legume Manager</a>
			/
			<a href="/legumes/add">Ajouter un légume</a>
		</div>
	</menu>
	<div class="ui container">
		@yield('content')
	</div>
	
	<footer>
		Vive les légumes !!!
	</footer>
	<script>
	</script>
</body>
</html>
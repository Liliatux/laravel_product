@extends('layout.layout')

@section('content')
	<menu class="ui violet huge secondary pointing menu">
		<a class="item" href="/legumes">Legume Manager</a>
		<a class="active item" href="/legumes/add">Ajouter un légume</a>
	</menu>
	<div class="ui centered three columns grid">
		<div class="column">
			<h1>Ajouter un légume</h1>
			<form action="/legumes/add" method="post" class="ui form">
				{{csrf_field()}}
				<label for="name">Nom du légume</label><input type="text" id="name" name="name">
				<label for="stock">Quantité de légumes</label><input type="number" id="stock" name="stock">
				<label for="price">Prix du légume</label><input type="number" id="price" name="price">
				<button class="ui green button" type="submit"><i class="add icon"></i>Ajouter</button>
			</form>
		</div>
	</div>
@stop
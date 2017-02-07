@extends('layout.layout')

@section('content')
	<h1>Ajouter un légume</h1>
	<form action="/legumes/add" method="post" class="ui form">
		{{csrf_field()}}
		<label for="name">Nom du légume</label><input type="text" id="name" name="name">
		<label for="stock">Quantité de légumes</label><input type="number" id="stock" name="stock">
		<label for="price">Prix du légume</label><input type="number" id="price" name="price">
		<button class="ui button" type="submit">Ajouter</button>
	</form>
@stop
@extends('layout.layout')

@section('content')
	<menu class="ui violet huge secondary pointing menu">
		<a class="item" href="/legumes">Legume Manager</a>
		<a class="item" href="/legumes/add">Ajouter un légume</a>
	</menu>
	<div class="ui centered three columns grid">
		<div class="column">
			<h1>Editer un légume</h1>
			<form action="/legumes/edit" method="post" class="ui form">
				{{csrf_field()}}
				<input type="hidden" name="id" value="{{$legume->id}}">
				<label for="name">Nom du légume</label><input type="text" id="name" name="name" value="{{$legume->name}}">
				<label for="stock">Quantité de légumes</label><input type="number" id="stock" name="stock" value="{{$legume->stock}}">
				<label for="price">Prix du légume</label><input type="number" id="price" name="price" value="{{$legume->price}}">
				<button class="ui green button" type="submit"><i class="edit icon"></i>Editer</button>
			</form>
		</div>
	</div>
@stop
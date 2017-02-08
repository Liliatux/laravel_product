@extends('layout.layout')

@section('content')
	<menu class="ui violet huge secondary pointing menu">
		<a class="item" href="/legumes">Legume Manager</a>
		<a class="item" href="/legumes/add">Ajouter un légume</a>
	</menu>
	<div class="ui centered three columns grid">
		<div class="column">
			<h1>Information {{$legume->name}}</h1>
			<div>Le prix est de {{$legume->price/100}}€</div>
			<div class="ui segment">
				<h3>Stock</h3>
				<form action="/legumes/sell/{{$legume->id}}" method="post">
					{{csrf_field()}}
					<button class="ui button">-</button>
				</form>
				{{$legume->stock}}
				<form action="/legumes/restock/{{$legume->id}}" method="post">
					{{csrf_field()}}
					<button class="ui button">+</button>
				</form>
			</div>
		</div>
	</div>
@stop
@extends('layout.layout')

@section('content')
	<h1>{{$legume->name}}</h1>

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
@stop
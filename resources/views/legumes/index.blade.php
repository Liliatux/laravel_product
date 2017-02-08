@extends('layout.layout')

@section('content')
	<menu class="ui violet huge secondary pointing menu">
		<a class="active item" href="/legumes">Legume Manager</a>
		<a class="item" href="/legumes/add">Ajouter un légume</a>
	</menu>
	<div class="ui centered two columns grid">
		<div class="column">
			<h1 class="ui header">Ma liste de légumes</h1>
			<table class="ui table">
				<thead>
					<th>ID</th>
					<th>Nom</th>
					<th>Prix</th>
					<th>Stock</th>
					<th>Information</th>
					<th>Edition</th>
				</thead>
				<tbody>
				@foreach($legumes as $legume)
					<tr>
						<td>{{$legume->id}}</td>
						<td>{{$legume->name}}</td>
						<td>{{$legume->price}}</td>
						<td>{{$legume->stock}}</td>
						<td><a href="/legumes/show/{{$legume->id}}"><i class="large black circle info icon"></i></a></td>
						<td><a href="/legumes/edit/{{$legume->id}}"><i class="large black edit icon"></i></a></td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
@stop

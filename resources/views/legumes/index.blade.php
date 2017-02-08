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
					<th>Supression</th>
				</thead>
				<tbody>
				@foreach($legumes as $legume)
					<tr>
						<td>{{$legume->id}}</td>
						<td>{{$legume->name}}</td>
						<td>{{$legume->price/100}}€</td>
						<td>{{$legume->stock}}</td>
						<td><a href="/legumes/show/{{$legume->id}}"><i class="large black circle info icon"></i></a></td>
						<td><a href="/legumes/edit/{{$legume->id}}"><i class="large black edit icon"></i></a></td>
						<td><form action="/legumes/delete/{{$legume->id}}" method="post">{{csrf_field()}}{{method_field('DELETE')}} <button type="submit" class="ui inverted button"><i class="large black delete icon"></i></button></form></td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
@stop

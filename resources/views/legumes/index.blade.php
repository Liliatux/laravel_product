@extends('layout.layout')

@section('content')
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
				<td><a href="/legumes/show/{{$legume->id}}">Infos</a></td>
				<td></td>
			</tr>
		@endforeach
		</tbody>
	</table>
@stop

@extends('layout.layout')

@section('content')
	<h1>Ma liste de légumes</h1>
	@foreach($legumes as $legume)
		<li><a href="/legumes/show/{{$legume->id}}">{{$legume->name}}</a></li>
	@endforeach
@stop

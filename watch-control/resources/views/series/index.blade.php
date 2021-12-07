@extends('layout')

@section('header')
<h1 class="display-5 fw-bold">My Series</h1>
@endsection

@section('content')
@if(!empty($storeMessage))
<div class="alert alert-success">{{$storeMessage}}</div>
@endif

<a href="{{ route('serie.create')}}" class="mb-4 btn btn-dark">New Serie</a>

<ul class="list-group col-3">
	@foreach($series as $serie)
	<li class="list-group-item list-group-item-action d-flex">
		<div class="me-auto gap-2 py-2">
			<span>{{ $serie->name }}</span>
			<span class="badge bg-primary rounded-pill">Season {{ $serie->season }}</span>
		</div>	
		<form method="post" action="/series/{{$serie->id}}"
			onsubmit="return confirm('Are you sure that you want to delete {{addslashes($serie->name)}}')">
			@csrf
			@method('DELETE')
			<button class='btn btn-sm btn-danger'><i class="fas fa-trash-alt"></i></button>
		</form>
	</li>
	@endforeach
</ul>
@endsection
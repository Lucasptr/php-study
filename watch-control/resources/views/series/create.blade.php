@extends('layout')

@section('header')
<h1 class="display-5 fw-bold">New Serie</h1>
@endsection

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post">
	<!-- Meio de "autenticação" do laravel para garantir a veracidade do formulário e evitar cross-site request forgery -->
	@csrf
	<div class="form-group">
		<label for="serieName">Serie</label>
		<input type="text" class="form-control" name="serieName" id="serieName"/>
	</div>
	<div class="form-group">
		<label for="serieSeason">Season</label>
		<input type="number" class="form-control" name="serieSeason" id="serieSeason"/>
	</div>
	<button class="mt-4 btn btn-primary">Save</button>
</form>
@endsection
@extends('layouts')
@section('content')
	<div class="col-sm-8">
		<h2> 
			Editar producto
			<a href="{{ route('products.index') }}" class="btn btn-default pull-right">Listado</a>
		</h2>
		<!--Envia dos parámetros:
		- nombre del arreglo con informacion recogigo de la bd
		- un arreglo bidimensional que contiene la ruta y su respectivo metodo.
		-->	
		@include('products.fragments.error')
		{!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT']) !!}
			@include('products.fragments.form');
		{!! Form::close() !!}
	</div>
	<div class="col-sm-4">
		@include('products.fragments.aside')
	</div>
@endsection
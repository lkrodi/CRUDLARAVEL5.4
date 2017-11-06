@extends('layouts')
@section('content')
	<div class="col-sm-8">
		<h2>
			Listado de productos
			<a href="{{ route('products.create') }}" class="btn btn-primary pull-right">Nuevo producto</a>
		</h2>
		@include('products.fragments.info')
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">ID</th>
					<th>Nombre del producto</th>
					<th colspan="3"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($products as $product)
					<tr>
						<td>{{ $product->id }}</td>
						<td>
							<strong>{{ $product->name }}</strong>
							{{ $product->short }}
						</td>
						<td> <a href="{{ route('products.show', $product->id) }}" class="btn btn-link">Ver</a> </td>
						<td> <a href="{{ route('products.edit', $product->id) }}" class="btn btn-link">Editar</a> </td>
						<td>
							<!--Siempre en casos para eliminar algo de la BD, se utilizan formularios, mas no
								en links ya sino nuestra aplicacion sería insegura-->
							<form action="{{ route('products.destroy', $product->id) }}" method="POST">
								<!--csrf_field() es un toque de seguridad para proteger nuestra aplicacion y que
									una web externa no se haga pasar por la nuestra-->
								{{ csrf_field() }}
								<!--Con esto simulamos tener un método delete, ya que en html solo existe el get y post-->
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-link">Borrar</button>
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<!--Esto sirve para paginar de a 15 por default-->
		{!! $products->render() !!}
	</div>
	<div class="col-sm-4">
		@include('products.fragments.aside')		
	</div>
@endsection
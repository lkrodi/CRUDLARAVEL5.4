<!--
La lógica es la siguiente:
esta vista será incluida en muchas partes de la aplicaciones. Ahora, 
El primer parámetro de cada Form::etiqueta_html('clave_de_la_variable_recibida').
Ya que nos pasan la variable $product, entonces tiene 3 claves: name, short y body que
son las columnas de la tabla de la BD. Cuando se envia el segundo parámetro es porque la data es
dinámica, sino, en estática.
-->

<div class="form-group">
	{!! Form::label('name', 'Nombre del producto') !!}	
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('short', 'Descripcion breve del producto') !!}	
	{!! Form::text('short', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('body', 'Descripcion del producto') !!}	
	{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('enviar', ['class' => 'btn btn-primary']) !!}	
</div>
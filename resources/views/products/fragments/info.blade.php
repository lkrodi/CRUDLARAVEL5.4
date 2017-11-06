<!--
Session:has('variable_de_sesion')
Identifica si existe una variable de sesion
-->

@if(Session::has('info'))
	<div class="alert alert-info">
		<!--class="close" data-dismiss="alert" estos identifican para que se cierre el mensaje de la alerta-->
		<button type="button" class="close" data-dismiss="alert">
			&times;
		</button>
		<!--Aqui esta obtenendo el mensaje contenido en la variable de sesion con el clave info que
			habiamos definido en el controlador, método destroy con 
			back()->with('info', 'El producto fue eliminado')-->
		{{ Session::get('info') }}
	</div>
@endif
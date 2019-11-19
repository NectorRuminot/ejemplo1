Editar datos de personas
<form action="{{url('/personas/'.$persona->id)}}" method="post">
{{csrf_field()}}
{{method_field('PATCH')}} 

@include('personas.form', ['Modo'=>'modificar'])



</form>
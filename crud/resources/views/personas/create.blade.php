Crear personas
<form action="{{url('/personas')}}" method="post">
{{csrf_field()}}
@include('personas.form', ['Modo'=>'crear'])

</form>
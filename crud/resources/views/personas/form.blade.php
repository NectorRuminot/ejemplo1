

<label for="Nombre">{{'Nombre'}}</label>
<input type="text" name="Nombre" id="Nombre" 
value="{{ isset($persona->Nombre)?$persona->Nombre:''}}">
<br/>
<label for="Apellido">{{'Apellido'}}</label>
<input type="text" name="Apellido" id="Apellido" 
value="{{ isset($persona->Apellido)?$persona->Apellido:''}}">
<br/>
<input type="submit" value="{{$Modo=='crear'?'Agregar':'Actualizar'}}">
<a href="{{url('personas')}}">Regresar </a>
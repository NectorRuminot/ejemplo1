


Patalla de incio mostrar datos

<div class="container">

<a href="{{url('personas/create')}}" class="btn btn-success" >Agregar persona </a>
<br/>
<br/>
<table class="table table-light" >

    <thead class="thead-light">
        <tr>
            <th>Indice</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($personas as $persona)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$persona->Nombre}}</td>
            <td>{{$persona->Apellido}}</td>
            <td>
            <a href="{{ url('/personas/'.$persona->id.'/edit')}}" class="btn button-red" border:2px >
            Actualizar       
            </a>
                
            <form method="post" action="{{ url('/personas/'.$persona->id) }}" style="display: inline;">
               {{csrf_field()}}
               {{method_field('DELETE')}} 
               <button  type="submit" onclick="return confirm('¿desea borrar?');">Borrar</button>
            </form>

            </td>

        </tr>
    @endforeach
    </tbody>
</table>
</div>


@extends('layouts.app')

@section('content')

  
   <div
    class="table-responsive"
   >
    <table
        class="table"
    >
        <thead class="table">
            <caption>
                Ordenes
            </caption>
            <tr>
                <th>Orden</th>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Numero Req</th>
                <th>Estado</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr
                class="table"
            >
                <td scope="row">1</td>
                <td>Red</td>
                <td>2</td>
                <td>20001</td>
                <td>Pendiente</td>
                <td>
                    <a class="btn btn-warning" href="http://">Editar</a>
                    <a class="btn btn-danger" href="http://">Eliminar</a>
                </td>
            </tr>

            <tr
            class="table"
        >
            <td scope="row">1</td>
            <td>Red</td>
            <td>2</td>
            <td>20001</td>
            <td>Pendiente</td>
            <td>
                <a class="btn btn-warning" href="http://">Editar</a>
                <a class="btn btn-danger" href="http://">Eliminar</a>
            </td>
        </tr>

        <tr
        class="table"
    >
        <td scope="row">1</td>
        <td>Red</td>
        <td>2</td>
        <td>20001</td>
        <td>Pendiente</td>
        <td>
            <a class="btn btn-warning" href="http://">Editar</a>
            <a class="btn btn-danger" href="http://">Eliminar</a>
        </td>
    </tr>

    <tr
    class="table"
>
    <td scope="row">1</td>
    <td>Red</td>
    <td>2</td>
    <td>20001</td>
    <td>Pendiente</td>
    <td>
        <a class="btn btn-warning" href="http://">Editar</a>
        <a class="btn btn-danger" href="http://">Eliminar</a>
    </td>
</tr>
          
        </tbody>
        <tfoot>
            
        </tfoot>
    </table>
   </div>
   

@endsection

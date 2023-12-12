@extends('layouts.app')

@section('content')
<div class="container">
  
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
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr
                class="table"
            >
                <td scope="row">1</td>
                <td>Red</td>
                <td>2</td>
            </tr>
          
        </tbody>
        <tfoot>
            
        </tfoot>
    </table>
   </div>
   
</div>
@endsection

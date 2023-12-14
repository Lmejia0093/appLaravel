@extends('layouts.app')

@section('content')

<div
    class="table-responsive"
>
    <table
        class="table table-primary"
    >
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">nombre</th>
                <th scope="col">cantidad</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($productosN as $producto )
                
            <tr class="">
                <td scope="row">{  producto-id }</td>
                <td scope="row">{  producto-nombre }</td>
                <td scope="row">{  producto-cantidad }</td>
            </tr>
          
            @endforeach
        </tbody>
    </table>
</div>


@endsection

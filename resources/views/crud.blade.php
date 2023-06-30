@extends('layout')

@section('crud')

<div class="card">
    <h5 class="card-header">CRUD con laravel </h5>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                @if ($mensaje = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $mensaje }}
                    </div>
                @endif

                
            </div>
        </div>
        <h5 class="card-title text-center">Listado de personas en el sistema</h5>
        
        <div class="col md-5">
            <p>
                <a href="{{ route('crud_create') }}" class="btn btn-primary">
                    <span class="fas fa-user-plus"></span> Agregar nueva persona
                </a>
                <h3 class="card-title text-center">BUSQUEDA INFORMACION </h3>
                <form action="{{ route('search')}}" method="get">
                    
                    <input class="form-control me-2" type="search" name="search" placeholder="buscar usuario" aria-label="Search" value="{{ $text}}">
                 
                   <button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-target="#staticBackdrop" >
                       buscar
                    </button>
                </form>
               
            </p>
        </div>
        <hr>
    
        <div class="row md-5">
            <div class="col">
                <table class="table text-center text-uppercase table-bordered ">
                    <thead class="">
                        <tr>
                            <th scope="col">Documento</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Direccion</th> 
                            <th scope="col">Telefono</th> 
                            <th scope="col">Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->document}}</td>
                            <td>{{ $item->first_name}}</td>
                            <td>{{ $item->last_name}}</td>
                            <td>{{ $item->address}}</td>
                            <td>{{ $item->phone}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('crud_edit', $item->id) }}">EDITAR<i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                &nbsp;
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-target="#staticBackdrop">
                                    <a class="" href="{{ route('crud_delete', $item->id)}}">ELIMINAR<i class="fa fa-trash" aria-hidden="true"></i></a>    
                                </button>
                                <!-- Button trigger modal -->

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">ELIMINR</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCELAR</button>
                                        <button type="button" class="btn btn-primary">CONFIRMAR</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </td>
                        </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                {{ $data->links() }}
            </div>
        </div>
    </div>
 
</div>


@endsection
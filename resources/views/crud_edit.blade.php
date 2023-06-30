@extends('layout')

@section('crud')

<div class="row m-5">
    <div class="col-8 mx-auto">
        <div class="card">
            <h3 class="card-title text-center">ACTUALIZAR</h3>
            <div class="card-body">
                <form action="{{ route('crud_update', $data->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="doc"></label>
                        <input required type="text" id="doc" name="document" placeholder="Documento" class="form-control" value="{{ $data->document}}">

                    </div>
                    <div class="form-group">
                        <label for="nom" ></label>
                        <input required type="text" id="fnom" name="first_name" placeholder="Nombre" class="form-control" value="{{ $data->first_name}}">
                    </div>
                    <div class="form-group">
                        <label for="nom" ></label>
                        <input required type="text" id="Lname" name="last_name" placeholder="Apellido" class="form-control" value="{{ $data->last_name}}">
                    </div>
                    <div class="form-group">
                        <label for="nom" ></label>
                        <input required type="text" id="nom" name="address" placeholder="Direccion" class="form-control" value="{{ $data->address}}">
                    </div>
                    <div class="form-group">
                        <label for="nom" ></label>
                        <input required type="text" id="nom" name="phone" placeholder="Telefono" class="form-control" value="{{ $data->phone}}">
                    </div>
                    
                    <!--<div class="form-group">
                        <label for="gen"></label>
                        <select requiered name="genero" class="custom-select mb-1 form-control">
                            <option>Seleccione genero</option>
                           
                            <option selected value=""></option>                                                                    
                            
                        </select>
                    </div>-->
                    <div class="form-group mt-5">
                        <button type="submit" class="btn btn-success btn-block">GUARDAR</button>
                        <a class="btn btn-danger btn-block" href="{{ route('cancel')}}">CANCELAR</a>  
                              
                    </div>
                </form>
            </div>
        </div>        
    </div>
</div>

@endsection
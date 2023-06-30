@extends('layout')

@section('crud')

<!--<div class="row m-5">


    <form class="form" method="post" action="" id="register">
        <div class="form-group">
            <label for="email">USUARIO</label>
            <input type="input" class="form-control" placeholder="Ingresar Usuario" name="user">
        </div>

        <div class="form-group">
            <label for="pwd">CLAVE</label>
            <input type="password" class="form-control" placeholder="Ingresar Clave"  name="password">
        </div>

        <button type="submit" class="btn btn-primary" value="Submit" onclick="request();">INGRESAR</button>

        <button type="submit" class="btn btn-primary" value="Submit">REGISTRAR</button>
   </form>
</div>-->

<div class="row md-5">
    <div class="col-8 mx-auto">
        <div class="card">
            <h3 class="card-title text-center">REGISTRAR</h3>
            <div class="card-body">
                <form  method="post" action="{{ route('crud_store')}}" class="color" id="register">
                    @csrf
                    <div class="form-group">
                        <label for="doc"></label>
                        <input required type="text" id="doc" name="document" placeholder="Documento" class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="nom" ></label>
                        <input required type="text" id="fnom" name="first_name" placeholder="Nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nom" ></label>
                        <input required type="text" id="Lname" name="last_name" placeholder="Apellido" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nom" ></label>
                        <input required type="text" id="nom" name="address" placeholder="Direccion" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nom" ></label>
                        <input required type="text" id="nom" name="phone" placeholder="Telefono" class="form-control">
                    </div>
                    
                    <!--
                    <div class="form-group">
                        <label for="fec"></label>
                        <input  type="date" id="fec" name="date" placeholder="Fecha" class="form-control glyphicon glyphicon-calendar">
                    </div>
                    <div class="form-group">
                        <label for="gen"></label>
                        <select  name="gender" class="custom-select mb-1 form-control">
                            <option selected value="" >Seleccione genero</option>

                            <option value=""></option>

                        </select>
                    </div>-->
                    <div class="form-group mt-5">
                        <button type="submit"  class="btn btn-success btn-block entry">REGISTRO</button>
                        <a class="btn btn-danger btn-block" href="{{ route('cancel')}}">CANCELAR</a>        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
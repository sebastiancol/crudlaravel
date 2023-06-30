@extends('layout')

@section('list')
    
     


    <div class="container">

       
        <div class="card col-12">
            <h1 class="text-lg-center">PRUEBA TECNICA </h1>
        </div>
      
        <div class="container_info col-6">
            <table id="data" class="table">
                <tr  class="">
                    <th>ID</th>
                    <th>nombre</th>
                    <th>TELEFONO</th>
                </tr>
                <tbody id="td" class="">
                   
                </tbody>
            </table>
            <div class="card-header col-12">
                <li></li>
                <li></li>
        
            </div>
            <div class="card-footer col-12" id="pages" >
                <ul class="pagination">

                </ul>
            </div>
        </div>
        <DIV class="container_info col-6">

            <a href="" class="link">numero1</a>
            <a href="" class="link">numero2</a>
        </DIV>
    </div>


@endsection



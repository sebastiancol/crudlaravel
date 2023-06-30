@extends('layout')

@section('matriz')
    
     


    <div class="container">

       
        <div class="card col-12">
            <h1 class="text-lg-center">PRUEBA TECNICA </h1>
        </div>
      
        <div class="container_info col-12">
            <table id="data" class="table">
                <tr  class="">
                    <th>ID</th>
                    <th>DESAMBIGUATION</th>
                    <th>NAME</th>
                </tr>
                <tbody id="td" class="">
                   
                </tbody>
            </table>
            <div class="card-header col-12">
                <li>{{ $elemento1  }}</li>
                <li>{{ $elemento2  }}</li>
        
            </div>
            <div class="card-footer col-12" id="pages" >
                <ul class="pagination">

                </ul>
            </div>
        </div>
    </div>
@endsection



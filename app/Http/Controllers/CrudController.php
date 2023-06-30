<?php

namespace App\Http\Controllers;

use App\Models\User;
use DB;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
 


class CrudController extends Controller
{
    /**
     * rutas del crud
     */
    public function index(Request $request)
    {
      

        $data= Usuario::orderBy('document','desc')->paginate(10);
        return view('crud', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud_create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        Usuario::create($request->all());
        return redirect()->route('crud_get')->with('success','creado con exito ');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       // $data = Usuario::findOrFail($id);
        //var_dump($data);
        //return redirect()->route('crud_get');

       // return view("eliminar" , compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data= Usuario::findOrFail($id);
        return view('crud_edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Usuario::findOrFail($id);
        $data->update($request->all());
        
        return redirect()->route('crud_get')->with('success', 'actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Usuario::findOrFail($id);
        $data->delete();
        return redirect()->route('crud_get')->with('success', 'Eliminado con exito!');
    }

    public function cancel()
    {
        return redirect()->route('crud_get');
    }

    
    public function search(Request $request )
    {
        $search = trim($request->get('search'));
        $text =Usuario::where('document', 'LIKE', '%'.$search. '%');
        //return view('crud', compact('text'));

        //$search= $request->search;
       // $search = trim($request->get('search'));
        //$text =Usuario::where('document', 'LIKE', '%'.$search. '%');
        return view('crud', compact('text'));
    }


    /////////////// otra rutas

    public function cadena(array $element){

        echo $element="funcion callback";

    }
    
    public function calculate(){

        $frutas = array("uva","pera","manza");
        $numeros = array(1,2,3,4);

        foreach($frutas as $element){
            echo $element."\n";;
            /*foreach($numeros as $element2){
                echo $element2."\n";
            }*/
        }

        echo $frutas[0]="kiwi";
        echo $element;
        //echo $frutas;


        //echo(count($frutas));
        //return count($frutas);


    }

    public function numero(int $numero, $data){

        //$this->$numero=100;
        echo $numero." ".$data;

    }

    public function mostrar(){

       //echo "mostrar datos";

      // $file
      //$file=Storage::write('lectura.txt','hola');
      //echo $file;
      //fclose($file);

      $datos= array ("a","b","d","e");
      //echo array_pop($datos);
      //echo array_push($datos, "f");
      echo arsort($datos);



      /*foreach($datos as $element){
        //echo $element;
        //echo count($element);
        if($element > $datos){
            echo $element ;

        } else{
            echo $element->$datos ;
        }
      }*/
      //echo count($datos);
      //echo ksort($datos);
      
      
      

    }

    
    
}

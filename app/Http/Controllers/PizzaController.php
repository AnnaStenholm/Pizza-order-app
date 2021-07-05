<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




class PizzaController extends Controller
{
    /*
    function getPizzaView(){
        $pizzas = DB::table('Pizza')->get();
    return view("pizzas", ["pizzas"=>$pizzas]);
}
*/
public function index(){

    $pizzas = DB::select('select * from Pizza');

    return view('pizzas', ['pizzas' => $pizzas]);
}
       


    function getUserPizzaView(Request $request){
        $inputid = $request->input('id');
        $pizza = DB::table('Pizza')->where('PizzaId', '=', $inputid)->first();
        return view('pizzaprofile', ['pizza'=>$pizza]);
        
    }
}









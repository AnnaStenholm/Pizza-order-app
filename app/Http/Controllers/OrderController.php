<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/*
class Order{
    public $OrderNr;

    function __construct($OrderNr){
        $this->OrderNr = $OrderNr;
    }
}
*/

class OrderController extends Controller
{
 
/*
    function index(Request $request){
        if ($request['PizzaId']) {
            $selected_pizza = DB::table('Pizza')->where('id', '=', $request->input('PizzaId'))
        }
        $PizzaOrder = DB::table('PizzaOrder')
            ->join('Pizza', 'PizzaId', '=', 'PizzaOrder.Pizzald_fk')
            ->join('Order', 'Order.OrderId', '=', 'PizzaOrder.Orderld_fk')
            ->select('* from PizzaOrder', 'PizzaOrder.Orderld_fk', 'PizzaOrder.Orderld_fk')
            ->get();

            return view("orders", ["Orders"=>$PizzaOrder]);
           return response()->json($PizzaOrder);
        
*/
function getOrderView(Request $request){
    
    
    if ($request['OrderId']){
        //return response()->json('Det var en post');
        $selected_order = DB::table('Order')->where('OrderId', '=',$request->input('OrderId'))->first();

        //Beroende på status vill jag sätta status
        $new_status = $selected_order->Status;
        if ($selected_order->Status == 0){
            $new_status = 1;
        }else if($selected_order->Status = 1){
            $new_status = 2;
        }

        //Uppdatera databasen med status
        DB::table('Order')->where('OrderId', '=',$request->input('OrderId'))->update(['Status'=>$new_status]);
    }

    //Join tables
    $PizzaOrder = DB::table('Order')
    ->leftJoin('OrderItem', 'Order.OrderId', '=', 'OrderItem.Order_id')
    ->join('Pizza', 'OrderItem.Pizza_id', '=', 'Pizza.PizzaId')
    ->select('Pizza.*', 'Order.*')
    ->get();
    return view("orders", ["Orders"=>$PizzaOrder]);
    }


    function getUserOrdersView(Request $request){
         $PizzaId = $request->input('PizzaId');
         $OrderId = DB::table('Order')-> insertGetId(array(
            'Status' => 0,
    ));
    
        DB::table('OrderItem')-> insertGetId(array(
        'Order_id' => $OrderId,
        'Pizza_id' => $PizzaId,
        ));
        return view('orderprofile', ['order'=>$OrderId]);


    }
    
}
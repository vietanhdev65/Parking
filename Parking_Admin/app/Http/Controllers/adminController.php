<?php

namespace App\Http\Controllers;
use App\Listpark;
use App\User;
use App\Order;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function admin(){
    	return view('admin.index');
    }
    public function listpark(){
    	$list = Listpark::paginate(5);
    	return view('admin.listpark', compact('list'));
    }
    public function order(){
        $order = Order::select('order.id','listpark.place','order.TimeIn','order.TimeOut','users.FullName','listpark.price','users.PhoneNumber',
            'order.MarineNumber','order.status')->join('listpark','listpark.id','=','order.placeID')->join('users','order.UserID','=','users.UserID')->get();

    	return view('admin.order',compact('order'));
    }
    public function status($id){
        $status = Order::find($id);
        $status->status = 0;
        $status->update();
        return view('admin.order');
        }
}

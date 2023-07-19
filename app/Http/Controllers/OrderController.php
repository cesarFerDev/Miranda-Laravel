<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Room;
use App\Models\Order;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())->orderBy('id', 'asc')->get();
        return view('orders', ['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rooms = Room::orderBy('number', 'asc')->get();
        return view('order-form', ['rooms' => $rooms, 'order' => null]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order = new Order();
        $order->user_id = Auth::id();
        $order->room_id = $request->room;
        $order->type = $request->type;
        $order->description = $request->description;
        $order->save();
        return redirect('/orders')->with('success', 'Your order has been created succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rooms = Room::orderBy('number', 'asc')->get();
        $order = Order::where('id', $id)->firstOrFail();
        return view('order-form', ['rooms' => $rooms,'order' => $order]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $order = Order::where('id', $id)->firstOrFail();
        $order->room_id = $request->room;
        $order->type = $request->type;
        $order->description = $request->description;
        $order->save();
        return redirect('/orders')->with('success', 'Your order has been updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::where('id', $id)->delete();
        return redirect('/orders')->with('success', 'Your order has been deleted succesfully');
    }
}

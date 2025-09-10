<?php
namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Mail;
class OrderController extends Controller {
    public function store(Request $r) {
        $r->validate([ 'product_id' => 'required|exists:products,id', 'email' => 'required|email' ]);
        $product = Product::findOrFail($r->product_id);
        $order = Order::create([
            'product_id' => $product->id,
            'email' => $r->email,
            'amount' => $product->price,
            'status' => 'paid',
            'payment_method' => $r->payment_method ?? 'manual',
            'source' => $r->source ?? null,
            'ip' => $r->ip()
        ]);
        $product->increment('downloads');
        // Send mail (requires mail configured)
        try { Mail::to($order->email)->send(new \App\Mail\OrderPaid($product)); } catch(\Exception $e) {}
        return response()->json(['message'=>'Đơn hàng thành công','order_id'=>$order->id]);
    }
}

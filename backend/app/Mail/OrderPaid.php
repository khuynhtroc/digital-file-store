<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderPaid extends Mailable {
    use Queueable, SerializesModels;
    public $product;
    public function __construct($product){ $this->product = $product; }
    public function build(){
        return \$this->subject('Cảm ơn bạn đã mua hàng')->view('emails.order_paid')->with(['product'=>$this->product]);
    }
}

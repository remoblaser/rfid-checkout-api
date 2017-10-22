<?php

namespace RFIDCheckout\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use RFIDCheckout\Product;

class ProductsController extends Controller
{
    public function get($rfid_id)
    {
        $product = Product::where('rfid_id', $rfid_id)->first();
        
        return Response::json($product);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request) {
        return view("checkout.checkout");
    }

    public function makeOrder(Request $request) {
        $items = array();
        $count = $request->input('item-count');
        for ($i = 0; $i < $count; $i++)
        {
            array_push($items, [
                "id" => $request->input("item-id-{$i}"),
                "name" => $request->input("item-name-{$i}"),
                "description" => $request->input("item-description-{$i}"),
                "price" => $request->input("item-price-{$i}")
            ]);
        }

        $stree1 = $request->input("street-1");
        $stree2 = $request->input("street-2");
        $phone = $request->input("phone");
        $paymentMethod = $request->input("payment-method");
        $coupon = $request->input("coupon");

        return redirect('success');
    }
}

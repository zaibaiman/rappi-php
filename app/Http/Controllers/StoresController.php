<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
use App\ProductCategory;

class StoresController extends Controller
{
    public function showAll() 
    {
        $stores = Store::all();
        return view("stores", ["stores" => $stores]);
    }

    public function showSingle($id) 
    {
        $store = Store::find($id);
        $categories = array();
        foreach ($store->products as $product)
        {
            $addedIntoGroup = false;
            foreach ($categories as $category => $products)
            {
                if ($category === $product->category->name)
                {
                    array_push($categories[$category], $product);
                    $addedIntoGroup = true;
                }
            }
            if (!$addedIntoGroup)
            {
                $categories[$product->category->name] = array();
                array_push($categories[$product->category->name], $product);
            }
        }
        return view("store.store", ["store" => $store, "categories" => $categories]);
    }
}

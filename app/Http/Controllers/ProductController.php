<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(Request $request)
    {
        $data = DB::table('products')->select(['id', 'brand', 'category', 'name', 'img_path', 'price'])
                                     ->where('user_id', $request->all()['user_id'])
                                     ->get();
        return response($data)->header('Access-Control-Allow-Origin', '*');
    }

    public function show($id)
    {
        $data = DB::table('products')->find($id);
        return response(json_decode(json_encode($data), true))->header('Access-Control-Allow-Origin', '*');
    }

    public function checkout(Request $request)
    {
        $products = $request->all()['products'];
        $errors = [];
        foreach ($products as $product) {
            $dbProduct = DB::table('products')->find($product['id']);
            if (is_null($dbProduct)) {
                array_push($errors, ['id' => $product['id'], 'reason' => 'empty product']);
                continue;
            }
            $newQuantity = $dbProduct->quantity - $product['quantity'];
            if ((int)$product['quantity'] == 0 || $newQuantity < 0) {
                array_push($errors, ['id' => $dbProduct->id, 'reason' => 'invalid quantity']);
                continue;
            }
            DB::table('products')->where('id', $product['id'])->update(['quantity' => $newQuantity]);
        }
        return response($errors);
    }

    public function updateQuantity($id, Request $request)
    {
        DB::table('products')->where('id', $id)->update(['quantity' => $request->all()['quantity']]);
        return response(true);
    }
}

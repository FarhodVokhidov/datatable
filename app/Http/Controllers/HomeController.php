<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class HomeController extends Controller
{
    public function index(Request $request){
        if ($request->ajax()){
            $product = Product::query()->select('id','name','title','desc','price')->get();
            return DataTables::of($product)->addIndexColumn()
                ->addColumn('action',function ($product){
                    $button = '<button type="button" name="edit" id="'.$product->id.'" class="edit btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>';
                    $button .='<button type="button" name="edit" id="'.$product->id.'" class="delete btn btn-danger btn-sm"><i class="bi bi-backspace-reverce-fill"></i>Delete</button>';
                    return $button;
                })
                ->make(true);
        }
        return view('show');
    }
    public function getProdcut(){
        $products = Product::all();
        return view('show')->with('products',$products);
    }
}

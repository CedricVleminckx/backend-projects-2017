<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\products;
use App\Category;
use App\fotos;



class ShopController extends Controller
{
    public function index()
    {
      $category = Category::all();
      return view('shop.Home', ['category' => $category]);
    }

    public function categoryItems($id)
    {
      $category = Category::all();
      $items = products::join('fotos', 'fotos.product_Number', '=', 'products.productNumber')
                          ->select('productName', 'productNumber', 'category_id', 'price', 'foto')
                          ->where('category_id', '=', $id)
                          ->orderby('productName')->groupBy('productName')
                          ->get();
      return view('shop.Items', ['items' => $items], ['category' => $category]);
    }

    public function detailItem($id, $productNumber)
    {
        $user = Auth::user();
        $fotos = fotos::where('product_Number', '=', $productNumber)->get();
        $details = products::select('products.*')
                              ->where('productNumber', '=', $productNumber)
                              ->limit(1)
                              ->get();

        return view('shop.detail', ['details' => $details, 'fotos' => $fotos, 'user' => $user]);
    }

    public function searchResults(Request $request)
    {
      $category = Category::all();

      $search = \Request::get('search');
      $items = products::join('fotos', 'fotos.product_Number', '=', 'products.productNumber')
                          ->select('productName', 'productNumber', 'category_id', 'price', 'foto')
                          ->where('productName','like','%'.$search.'%')->groupBy('productName')
                          ->get();
      return view('shop.search', ['category' => $category], ['items' => $items]);
    }

    public function filter($id, Request $request)
    {
      $category = Category::all();

      $filter = \Request::get('filter');
      if($filter=='productName1'){
        $cat = 'productName';
        $order = 'asc';
      }
      if($filter=='productName2'){
        $cat = 'productName';
        $order = 'desc';
      }
      if($filter=='price1'){
        $cat = 'price';
        $order = 'asc';
      }
      if($filter=='price2'){
        $cat = 'price';
        $order = 'desc';
      }
      if($filter=='Men'){
        $gender = 'Men';
        $items = products::join('fotos', 'fotos.product_Number', '=', 'products.productNumber')
                            ->select('productName', 'productNumber', 'category_id', 'price', 'gender', 'foto')
                            ->where( [['category_id', '=', $id], ['gender', '=', $gender]])->groupBy('productName')
                            ->get();
        return view('shop.filter', ['items' => $items], ['category' => $category]);
      }
      if($filter=='Women'){
        $gender = 'Women';
        $items = products::join('fotos', 'fotos.product_Number', '=', 'products.productNumber')
                            ->select('productName', 'productNumber', 'category_id', 'price', 'gender', 'foto')
                            ->where( [['category_id', '=', $id], ['gender', '=', $gender]])->groupBy('productName')
                            ->get();
        return view('shop.filter', ['items' => $items], ['category' => $category]);
      }
      $items = products::join('fotos', 'fotos.product_Number', '=', 'products.productNumber')
                          ->select('productName', 'productNumber', 'category_id', 'price', 'gender', 'foto')
                          ->where('category_id', '=', $id)->groupBy('productName')
                          ->orderBy($cat, $order)
                          ->get();
      return view('shop.filter', ['items' => $items], ['category' => $category]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Orders;
use App\costumerOrdersProducts;
use App\products;

class AccountController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function account()
    {
      $user = Auth::user();
      return view('account.account', ['user' => $user]);
    }
    public function accountEdit()
    {
      $user = Auth::user();
      return view('account.edit', ['user' => $user]);
    }

    public function accountUpdate($id, Request $request)
    {
      $user = User::findorfail($id);
      $user->fill($request->all());
      $user->save();
      return redirect('/account');
    }

    public function orderItem($id, Request $request)
    {
        products::decrement('stockQuantity', $request->quantity);

        $order = new Orders;
        $order->status = 'true';
        $order->users_id = Auth::id();
        $order->save();

        $ord = new costumerordersproducts;
        $ord->orders_id = $order->id;
        $ord->sizeOrderd = $request->size;
        $ord->quantity = $request->quantity;
        $ord->products_id = $request->id;
        $ord->save();
        return redirect('/shop');
    }

    public function orderWish()
    {
        $orders = Orders::where('status', '=', 'false');

        foreach ($orders as $order) {
          $quantity = costumerOrdersProducts::where('orders_id', '=', $order->id)->select('quantity');
          products::decrement('stockQuantity', $quantity);
        }

        $userId = Auth::id();
        $orders = Orders::where('users_id', '=', $userId)->update(['status' => 'true']);
        return redirect('/shop');
    }

    public function orderWishUpdate(Request $request)
    {
      $user = Auth::user();
      $user->fill($request->all());
      $user->save();
      return redirect('/shop');
    }

    public function orderAccountUpdate($id, Request $request)
    {
      $user = Auth::user();
      $user->fill($request->all());
      $user->save();

      products::decrement('stockQuantity', $request->quantity);

      $order = new Orders;
      $order->status = 'true';
      $order->users_id = Auth::id();
      $order->save();

      $ord = new costumerordersproducts;
      $ord->orders_id = $order->id;
      $ord->sizeOrderd = $request->size;
      $ord->quantity = $request->quantity;
      $ord->products_id = $request->id;
      $ord->save();
      return redirect('/shop');
    }

    public function orders()
    {
        $orders = Orders::join('costumerordersproducts', 'orders.id', '=', 'costumerordersproducts.orders_id')
        ->join('products', 'costumerordersproducts.products_id', '=', 'products.id')
        ->select('costumerordersproducts.*', 'orders.*', 'products.*', 'costumerordersproducts.quantity', 'products.stockQuantity')
        ->where([ ['status', '=', 'true'], ['orders.users_id', '=', Auth::id()],])
        ->get();
        return view('cart.orderd', ['orders'=>$orders]);
        //return redirect('/shop/'.$id);
    }

    public function wishItem($id, Request $request)
    {
        $order = new Orders;
        $order->status = 'false';
        $order->users_id = Auth::id();
        $order->save();

        $ord = new costumerordersproducts;
        $ord->orders_id = $order->id;
        $ord->sizeOrderd = $request->size;
        $ord->quantity = $request->quantity;
        $ord->products_id = $request->id;
        $ord->save();

        return redirect('/shop');
        //return redirect('/shop/'.$id);
    }

    public function wishlist()
    {
      $user = Auth::user();
      $wishes = Orders::join('costumerordersproducts', 'orders.id', '=', 'costumerordersproducts.orders_id')
      ->join('products', 'costumerordersproducts.products_id', '=', 'products.id')
      ->select('costumerordersproducts.*', 'orders.*', 'products.*', 'costumerordersproducts.quantity', 'products.stockQuantity')
      ->where([ ['status', '=', 'false'], ['orders.users_id', '=', Auth::id()],])
      ->get();
      return view('cart.shoppinCart', ['wishes'=>$wishes], ['user' => $user]);
        //return redirect('/shop/'.$id);
    }

    public function deleteWish($id)
    {
      costumerOrdersProducts::where('orders_id', '=', $id)->delete();
      Orders::where('id', '=', $id)->delete();
      $wishes = Orders::join('costumerordersproducts', 'orders.id', '=', 'costumerordersproducts.orders_id')
      ->join('products', 'costumerordersproducts.products_id', '=', 'products.id')
      ->select('costumerordersproducts.*', 'orders.*', 'products.*', 'costumerordersproducts.quantity', 'products.stockQuantity')
      ->where([ ['status', '=', 'false'], ['orders.users_id', '=', Auth::id()],])
      ->get();
      return view('cart.shoppinCart', ['wishes'=>$wishes]);
        //return redirect('/shop/'.$id);
    }
}

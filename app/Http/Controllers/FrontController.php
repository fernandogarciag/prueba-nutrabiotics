<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
    $url = array(
      'page' => url()->current().'?',
      'order' => url()->current().'?',
      'quantity' => url()->current().'?',
      'category' => url()->current().'?',
    );
    if ($request->orden) {
      $orderNumber = $request->orden;
      $url['page'] = $url['page'] . '&orden=' . $orderNumber;
      $url['quantity'] = $url['quantity'] . '&orden=' . $orderNumber;
      $url['category'] = $url['category'] . '&orden=' . $orderNumber;
    } else {
      $orderNumber = '1';
    }
    // dd($orderNumber);
    switch ($orderNumber) {
      case '2':
        $orderType = array(
          'name' => 'products.name',
          'order' => 'asc',
        );
        break;
      case '3':
        $orderType = array(
          'name' => 'products.name',
          'order' => 'desc',
        );
        break;
      case '4':
        $orderType = array(
          'name' => 'discountPrice',
          'order' => 'asc',
        );
        break;
      case '5':
        $orderType = array(
          'name' => 'discountPrice',
          'order' => 'desc',
        );
        break;
      default:
      $orderType = array(
        'name' => 'products.id',
        'order' => 'desc',
      );
        break;
    }
    if ($request->cantidad) {
      $quantity = $request->cantidad;
      $url['page'] = $url['page'] . '&cantidad=' . $quantity;
      $url['order'] = $url['order'] . '&cantidad=' . $quantity;
      $url['category'] = $url['category'] . '&cantidad=' . $quantity;
    } else {
      $quantity = '10';
    }
    if ($request->categoria) {
      $actualCategory = $request->categoria;
      $url['page'] = $url['page'] . '&categoria=' . $actualCategory;
      $url['order'] = $url['order'] . '&categoria=' . $actualCategory;
      $url['quantity'] = $url['quantity'] . '&categoria=' . $actualCategory;
    } else {
      $actualCategory = '';
    }
    $totalPages = ceil(Product::select(DB::raw('Count(*)/' . $quantity . ' as totalPages'))
    ->join("categories", 'products.category_id', "categories.id")
    ->where('categories.url', $actualCategory === '' ? '!=': '=' , $actualCategory)->get()->toArray()[0]['totalPages']);
    $actualPage = $request->pagina;
    if (!($actualPage  && $actualPage > 0 && $actualPage <= $totalPages)) {
      $actualPage = '1';
    }
    $categories = Category::select('name', 'url')->get()->toArray();
    $products = Product::select('products.id as productId', 'products.name', 'categories.name as category', 'categories.url', 'products.image', 'products.price', 'products.discount', DB::raw('price*((100 - discount)/100) as discountPrice'))
    ->join("categories", 'products.category_id', "categories.id")
    ->orderBy($orderType['name'], $orderType['order'])
    ->where('categories.url', $actualCategory === '' ? '!=': '=' , $actualCategory)
    ->skip($quantity*($actualPage - 1))->take($quantity)->get()->toArray();

    return view('product-listing',  array(
      'url' => $url,
      'totalPages' => $totalPages,
      'actualPage' => $actualPage,
      'orderNumber' => $orderNumber,
      'quantity' => $quantity,
      'categories' => $categories,
      'actualCategory' => $actualCategory,
      'products' => $products,
    ));
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Product  $product
   * @return \Illuminate\Http\Response
   */
  public function show(Product $product)
  {
    $category = $product->category;
    return view('product-detail', [
      'product' => $product,
      'category' => $category,
    ]);
  }
}

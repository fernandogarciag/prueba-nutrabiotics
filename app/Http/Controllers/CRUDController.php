<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::all()->toArray();
      $data = array(
        'title' => "Productos",
        'errors' => array(),
        'products' => $products,
      );
      return view('react', [
        'errors_name' => array(),
        'nameJS' => "crud/index",
        'data' => $data
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories = Category::select('id', 'name')->get()->toArray();
      $data = array(
        'title' => "Crear Nuevo Producto",
        'errors' => array(),
        'product' => array(
          'name' => "",
          'category_id' => '',
          'short_description' => '',
          'description' => '',
          'components' => '',
          'image' => '',
          'quantity' => 0,
          'price' => 0,
          'discount' => 0,
        ),
        'categories' => $categories
      );
      return view('react', [
        'errors_name' => array('name', 'category_id', 'short_description', 'description', 'components', 'image', 
        'quantity', 'price', 'discount'),
        'nameJS' => "crud/create-edit",
        'data' => $data
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validator($request->all())->validate();
      Product::create([
        'name' => $request->input('name'),
        'category_id' => $request->input('category_id'),
        'short_description' => $request->input('short_description'),
        'description' => $request->input('description'),
        'components' => $request->input('components'),
        'image' => $request->input('image'),
        'quantity' => $request->input('quantity'),
        'price' => $request->input('price'),
        'discount' => $request->input('discount'),
      ]);
      return redirect('/crud');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $crud)
    {
      $category = $crud->category;
      $data = array(
        'title' => $crud->name . " - Producto - Información",
        'errors' => array(),
        'product' => $crud->toArray(),
        'category' => $category->toArray()
      );
      return view('react', [
        'errors_name' => array(),
        'nameJS' => "crud/show",
        'data' => $data
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $crud)
    {
      $categories = Category::select('id', 'name')->get()->toArray();
      $data = array(
        'title' => $crud->name . " - Producto - Editar",
        'errors' => array(),
        'product' => $crud->toArray(),
        'categories' => $categories
      );
      return view('react', [
        'errors_name' => array('name', 'category_id', 'short_description', 'description', 'components', 'image', 
        'quantity', 'price', 'discount'),
        'nameJS' => "crud/create-edit",
        'data' => $data
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $crud)
    {
      $this->validator($request->all())->validate();
      $crud->name = $request->input('name');
      $crud->category_id = $request->input('category_id');
      $crud->short_description = $request->input('short_description');
      $crud->description = $request->input('description');
      $crud->components = $request->input('components');
      $crud->image = $request->input('image');
      $crud->quantity = $request->input('quantity');
      $crud->price = $request->input('price');
      $crud->discount = $request->input('discount');
      $crud->save();
      return redirect('/crud/' . $crud->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function duplicate(Product $crud)
    {
      Product::create([
        'name' => $crud->name,
        'category_id' => $crud->category_id,
        'short_description' => $crud->short_description,
        'description' => $crud->description,
        'components' => $crud->components,
        'image' => $crud->image,
        'quantity' => $crud->quantity,
        'price' => $crud->price,
        'discount' => $crud->discount,
      ]);
      return redirect('/crud');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $crud)
    {
      $crud->delete();
      return redirect('/crud');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
      $totalCategories = ceil(Product::select(DB::raw('Count(*) as totalCategories'))->get()->toArray()[0]['totalCategories']);
      return Validator::make($data, [
        'name' => ['required', 'string', 'max:255'],
        'category_id' => ['required', 'min:1', 'max:'.$totalCategories],
        'short_description' => ['required', 'string', 'max:1000'],
        'description' => ['required', 'string', 'max:65534'],
        'components' => ['required', 'string', 'max:65534'],
        'image' => ['required', 'string', 'max:255'],
        'quantity' => ['required', 'string', 'min:0', 'max:16777214'],
        'price' => ['required', 'string', 'max:16777214'],
        'discount' => ['required', 'string', 'min:0', 'max:100'],
      ]);
    }
}

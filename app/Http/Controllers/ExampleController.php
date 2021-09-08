<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
  /**
   * Handle the incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Request $request)
  {
    $data = array(
      'title' => "Example",
      'errors' => array(),
    );
    return view('react', [
      'errors_name' => array(),
      'nameJS' => "example",
      'data' => $data
    ]);
  }
}

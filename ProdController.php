<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\product;

class ProdController extends Controller
{
    //
    function viewForm() {
        return view('product');
    }

    function insertData(Request $request) {

    $pname=$request->input('pname');
    $pdes=$request->input('pdes');


    $prod= new product();
    $prod->pname=$pname;
    $prod->pdes=$pdes;
    $prod->save();

    echo "record inserted successfully";

}


}

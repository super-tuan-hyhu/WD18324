<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct(){
        $profile =[
            [
                'id' => '1',
                'name' => 'Tuan',
                'school' => 'fpt Polytechnic',
                'adress' => 'hung yen',
                'age' => '18'
            ],
        ];
        return view('list-product')->with([
            'profile' => $profile
        ]);
    }

    public function getProduct($id){
        echo $id;
    }
}

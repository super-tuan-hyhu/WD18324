<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListProFileContrller extends Controller
{
    public function showProfile(){
        $profile =[
                'id' => '1',
                'name' => 'Cao Đăng Tuấn',
                'school' => 'FPT POLYTECHNIC',
                'adress' => 'HƯNG YÊN',
                'age' => '18',
                'hobby' => 'ĐI CHƠI'
        ];
        return view('list-product')->with([
            'profile' => $profile
        ]);
    }
}

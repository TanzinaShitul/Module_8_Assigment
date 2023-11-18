<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id=null)
    {
        $name="Donal Trump";
        $age= "75";

        $data=[
            "id"=> $id,
            "name" => $name,
            "age" => $age
           
        ];

        $cName="access_token";
        $value= "123-XYZ";
        $minute=1;
        $path="/";
        $domain=$_SERVER["SERVER_NAME"];
        $secure= false;
        $httpOnly= true;

        return response($data,200)->cookie($cName,$value,$minute,$path,$domain,$secure,$httpOnly);

    }
}

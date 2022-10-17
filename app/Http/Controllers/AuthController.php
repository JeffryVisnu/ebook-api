<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            "NIS" => 3103120116,
            "Name" => "Jeffry Kurniawan Visnu",
            "Phone" => "081222522306",
            "Class" => "XII RPL 4"
        ];
    }
}

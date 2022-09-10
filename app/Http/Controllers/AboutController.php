<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use App\Models\About;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AboutController extends Controller
{
    //
    public function index(){
     
        $about = About::all();
     
        return view('about', [
            'title' => "About",
            'about' => $about
            

        ]);

       
    }

    

}
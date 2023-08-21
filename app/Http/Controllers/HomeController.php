<?php

namespace App\Http\Controllers;
use App\Models\CategoryModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct(){
        $this->middleware(['auth', 'verified']);
    }


    public function index (){

        $courses = CategoryModel::query()->get();
        // dd($courses);
        return view('home.index', ['courses' => $courses]);

   
    }
}

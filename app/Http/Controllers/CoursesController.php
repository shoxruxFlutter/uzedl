<?php

namespace App\Http\Controllers;
use App\Models\CategoryModel;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
  

        public function index()
        {
            $courses = CategoryModel::query()->get();
            // dd($courses);
            return view('courses.index', ['courses' => $courses]);
        }

        
    public function show(CategoryModel $category)
    {
         $category_id = $category->id;
  
        $cat = CategoryModel::query()->where(['id' => $category_id])->get();
   
        return view('courses.show', compact('category_id', 'cat'));
    }
   
}

<?php

namespace App\Http\Controllers;
use App\Models\WritingModel;
use App\Models\LessonsModel;
use App\Models\CategoryModel;
use Illuminate\Http\Request;

class WritingController extends Controller
{
    
    public function index(CategoryModel $category, LessonsModel $lesson)
    {

        $writing = WritingModel::query()->where(['category_id' => $category->id, 'lessons_id' => $lesson->id])->get();

        return view('courses/writing.writingExercises', ['writing' => $writing, 'category' => $category, 'lesson' => $lesson]);
    }
}

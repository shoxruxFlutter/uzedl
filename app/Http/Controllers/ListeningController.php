<?php

namespace App\Http\Controllers;
use App\Models\ListeningModel;
use App\Models\LessonsModel;
use App\Models\CategoryModel;
use Illuminate\Http\Request;

class ListeningController extends Controller
{
    public function index(CategoryModel $category, LessonsModel $lesson)
    {

        $listening = ListeningModel::query()->where(['category_id' => $category->id, 'lessons_id' => $lesson->id])->get();

   

        return view('courses/listening.listeningExercises', ['listening' => $listening, 'category' => $category, 'lesson' => $lesson]);
    }
}

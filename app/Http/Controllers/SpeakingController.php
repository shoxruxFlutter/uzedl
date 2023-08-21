<?php

namespace App\Http\Controllers;
use App\Models\SpeakingModel;
use App\Models\LessonsModel;
use App\Models\CategoryModel;

use Illuminate\Http\Request;

class SpeakingController extends Controller
{
    public function index(CategoryModel $category, LessonsModel $lesson)
    {

        $speaking = SpeakingModel::query()->where(['category_id' => $category->id, 'lessons_id' => $lesson->id])->get();

        return view('courses/speaking.speakingExercises', ['speaking' => $speaking, 'category' => $category, 'lesson' => $lesson]);
    }
}


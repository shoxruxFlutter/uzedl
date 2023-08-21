<?php

namespace App\Http\Controllers;
use App\Models\ReadingModel;
use App\Models\LessonsModel;
use App\Models\CategoryModel;

use Illuminate\Http\Request;

class ReadingController extends Controller
{
    public function index(CategoryModel $category, LessonsModel $lesson)
    {

        $reading = ReadingModel::query()->where(['category_id' => $category->id, 'lessons_id' => $lesson->id])->get();

        return view('courses/reading.readingExercises', ['reading' => $reading, 'category' => $category, 'lesson' => $lesson]);
    }
}

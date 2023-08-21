<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WritingController;
use App\Http\Controllers\ReadingController;
use App\Http\Controllers\ListeningController;
use App\Http\Controllers\SpeakingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CoursesController;
use Illuminate\Support\Facades\Auth;
use App\Models\WritingModel;
use App\Models\ListeningModel;
use App\Models\ReadingModel;
use App\Models\SpeakingModel;
use App\Models\CategoryModel;
use App\Models\LessonsModel;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::name('user.')->group( function() {

    Route::view('/private', 'account/private')->middleware('auth')->name('private');

    Route::get('/login', function(){
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('authentication/login');
    })->name('login');

    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/logout', function(){
        Auth::logout();
        return redirect('/');
    })->name('logout');

    Route::get('registration', function(){
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('authentication/registration');
    })->name('registration');
    Route::post('/registration', [RegisterController::class, 'save']);

  

    Route::get('/courses-category/{category}', [CoursesController::class, 'show'])->name('coursCat');
    Route::get('/writing/{category}', function(CategoryModel $category){
     
        $writing = WritingModel::query()->where(['category_id' => $category->id])->get();
            $lessons = LessonsModel::query()->get();
            return view('courses/writing.writing', ['writing' => $writing, 'lessons' => $lessons, 'cat' => $category]);
    })->name('writing');
    
    Route::get('/listening/{category}', function(CategoryModel $category){
     
        $listening = ListeningModel::query()->where(['category_id' => $category->id])->get();
            $lessons = LessonsModel::query()->get();
            return view('courses/listening.listening', ['listening' => $listening, 'lessons' => $lessons, 'cat' => $category]);
    })->name('listening');
    
    Route::get('/reading/{category}', function(CategoryModel $category){
     
        $reading = ReadingModel::query()->where(['category_id' => $category->id])->get();
            $lessons = LessonsModel::query()->get();
            return view('courses/reading.reading', ['reading' => $reading, 'lessons' => $lessons, 'cat' => $category]);
    })->name('reading');
    
    Route::get('/speaking/{category}', function(CategoryModel $category){
     
        $speaking = SpeakingModel::query()->where(['category_id' => $category->id])->get();
            $lessons = LessonsModel::query()->get();
            return view('courses/speaking.speaking', ['speaking' => $speaking, 'lessons' => $lessons, 'cat' => $category]);
    })->name('speaking');
    
    Route::get('/wrl/{category}/{lesson}', [WritingController::class, 'index'])->name('wrl');
    Route::get('/rdl/{category}/{lesson}', [ReadingController::class, 'index'])->name('rdl');
    Route::get('/lstl/{category}/{lesson}', [ListeningController::class, 'index'])->name('lstl');
    Route::get('/spk/{category}/{lesson}', [SpeakingController::class, 'index'])->name('spk');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('courses', [CoursesController::class, 'index'])->name('courses');



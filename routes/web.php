<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Middleware\CheckLogin;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
  return view('login');
})->name('login');


Route::resource("course", CourseController::class);
Route::resource("classroom", ClassroomController::class );
Route::resource("subject", SubjectController::class );
Route::resource("student", StudentController::class );
Route::resource("book", BookController::class );
Route::resource("admin", AdminController::class );

// Route::get('course', function(){
//     return view('Course.index');
// })->name('course');
// Route::method(uri, action);
// Authentication
// Tạo middleware CheckLogged: nếu đăng nhập rồi thì quay về trang dashboard còn chưa thì ok
Route::get('/login', [AuthenticateController::class, 'login'])->name('login');
Route::post('/login-process', [AuthenticateController::class, 'loginProcess'])->name('login-process');


Route::middleware([CheckLogin::class])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/logout', [AuthenticateController::class, 'logout'])->name('logout');

    // lớp
    Route::resource("grade", GradeController::class);

    // sinh viên
    Route::resource("student", StudentController::class);
    Route::prefix("student")->name('student.')->group(function () {
        Route::get('hide/{id}', [StudentController::class, 'hide'])->name('hide');
    });

    Route::get("/mail", function () {
        Mail::to("yahoo@gmail.com")->send(new TestMail());
    });

});


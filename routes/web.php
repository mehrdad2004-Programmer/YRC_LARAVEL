<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseRegistrationController;

/** ====================HOME ROUTE==================== */
Route::get('/', function () {
    return view('index');
});


/** ====================NEWS ROUTE==================== */
Route::prefix('news')->group(function(){
    Route::get("/show/{news_id}", function(){
        return view("news/news");
    });
});

/** ====================COURSES ROUTE==================== */
Route::prefix('courses')->group(function(){
    Route::get("/info/{news_id}", function(){
        return view("courses/index");
    });

    Route::get("/registrationForm/{course_code}", function(){return view("courses/reg");});
    Route::post("/registration/{course_code}", [CourseRegistrationController::class, "register"]);
});
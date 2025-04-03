<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseRegistrationModel;
use App\Models\CommunitiesModel;
use App\Models\Courses;

class HomeController extends Controller
{
    public function index(){
        try{
            $courses = Courses::orderBy('id', 'desc')->take(5)->get();
            $communities = CommunitiesModel::orderBy('id', 'desc')->take(5)->get();

            $viewData = [
                "course_data" => $courses->isEmpty() ? "دوره ای جهت نمایش یافت نشد" : $courses,
                "course_statuscode" =>$courses->isEmpty() ? 404 : 200,
                "community_data" => $communities->isEmpty() ? "انجمنی جهت نمایش یافت نشد" : $communities,
                "community_statuscode" =>$communities->isEmpty() ? 404 : 200,

            ];

            //dd($viewData);

            return response()->view("index", $viewData)->setStatusCode(200);
        }catch(\Exception $e){
            dd($e);
        }
    }
}

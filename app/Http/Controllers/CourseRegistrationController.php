<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseRegistrationModel;
use App\Models\Courses;
use Illuminate\Support\Facades\DB;

class CourseRegistrationController extends Controller
{
    public function register(Request $request, $course_code){
        try{
            $tr_code = rand(10000, 99999);

            $info = [
                "fname" => $request->fname,
                "lname" => $request->lname,
                "id_no" => $request->id_no,
                "st_no" => $request->st_no,
                "phone_no" => $request->phone_no,
                "course_code" => $course_code,
                "date" => "99999",
                "time" => "999999",
                "tracking_code" => $tr_code
            ];

            //begin transaction
            DB::beginTransaction();

            $res = CourseRegistrationModel::create($info);


            if($res){
                DB::commit();
                return response()
                ->view("courses.reg", [
                    "msg" => "با موفقیت اضافه شد",
                    "tr_code" => $tr_code,
                    "statuscode" => 201
                ])
                ->setStatusCode(201);
            
            }
            DB::rollBack();
            return response()
            ->view("courses.reg", [
                "msg" => "خطا در پردازش ، مجدد تلاش کنید",
                "statuscode" => 400
            ])
            ->setStatusCode(400);
            
        }catch(\Exception $e){
            DB::rollBack();
            return response()
            ->view("courses.reg", [
                "msg" => "خطا در پردازش سرور، در انتظار بررسی کارشناسان",
                "statuscode" => 500
            ])
            ->setStatusCode(500);
        }
    }

    public function showCoursInfo($course_code){
        $data = Courses::where("course_code", $course_code)->get();
        if($data->isEmpty()){
            abort(404);
        }
        try{
            return response()
            ->view("courses.reg", [
                "data" => $data,
                "statuscode" => 200
            ])
            ->setStatusCode(200);
        }catch(\Exception $e){
            return response()
            ->view("courses.reg", [
                "msg" => "خطا در پردازش سرور، در انتظار بررسی کارشناسان" .  $e->getMessage(),
                "statuscode" => 500
            ])
            ->setStatusCode(500);
        }
    }
}

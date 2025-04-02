<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseRegistrationModel;
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
                return view("courses/reg");
            }
            DB::rollBack();

            
        }catch(\Exception $e){
            DB::rollBack();
            return view("courses/reg")->with("error", $e->getMessage());
        }
    }
}

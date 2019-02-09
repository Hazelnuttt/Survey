<?php
namespace App\Http\Controllers;

use App\Fav_restaurant;
use App\Fav_time;
use App\Show;
use App\Survey;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SurveyController extends Controller
{
    public function signin()
    {
        return view('survey.signin');
    }

    public function signup()
    {
        return view('survey.signup');
    }

    public function myland2()
    {
        return view('survey.myland2');
    }

    public function myland1()
    {
        return view('survey.myland1');
    }

    public function survey(Request $request)
    {
       // $request ->session()->put('submit',time());
        return view('survey.survey');
    }

    public function presurvey()
    {
        return view('survey.presurvey');
    }

    public function statistics()
    {
        $students = Survey::paginate(5);
        // $times = Fav_time::all();
       // $restaurants = Fav_restaurant::all();
        $shows = array();



        foreach ($students as $student){
            $show = new Show;
            $shows[] = $show;
            $show ->setSid($student -> id);
            $show ->setName($student -> name);
            $show ->setAge($student -> age);
            $show ->setGender($student -> gender);
            $show ->setPhonenum($student -> phonenum);
            $show ->setCreatedAt($student -> created_at);

            $times = $student -> fav_time;
            foreach ($times as $time){
                //if($time ->s_id == $student -> id){
                    $show -> setTime($time ->time.'/ '.$show ->getTime());
               // }
            }

            $restaurants = $student -> fav_reataurant;
            foreach ($restaurants as $restaurant){
                //if($restaurant ->s_id == $student ->id){
                    $show ->setRestaurant($restaurant -> restaurant.' '.$show ->getRestaurant());
                //}
            }

//            $shows = new Show();
//            $show -> setName($student.getName());
//            $show -> setTime($tmpTimes);
        }
          //dd($restaurants);
        return view('survey.statistics',['students' => $students,'times' => $times,'restaurants' => $restaurants,'shows' => $shows]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Request $request)
    {
//        if($this ->request ->session()->has('submit')){
//            $this ->request ->session()->forget('submit');
//        }else{
//            return response('请勿重复提交',403);
//        }


        if($request -> isMethod('post')){
            $this -> validate($request,[
                'Student.name' => 'required|min:2|max:4',
                'Student.age' => 'required|min:10|max:30|integer',
                'Student.gender' => 'required',
                'Student.phonenum' => 'required|min:11|max:11',
            ],[
               'Student.name' => ':attribute name',
                'Student.age' => ':attribute age',
                'Student.phonenum'=> ':attribute phonenumber'
            ]) ;
            $data0 = $request -> input('Student');
            $times = $request -> input('Time');
            $restaurants = $request -> input('Restaurant');


            $student = new Survey();


            $student -> name = $data0['name'];
            $student ->age = $data0['age'];
            $student ->gender = $data0['gender'];
            $student ->phonenum = $data0['phonenum'];




            if($student -> save()){
                $sid  =  $student -> id;
//            $time = new Fav_time();
//            $time -> s_id = $sid;
//            $time -> time = $time;
//            $time -> save();

                foreach ($times as $time){
                    $time1 = new Fav_time();
                    $time1 -> s_id = $sid;
                    $time1 -> time = $time;
                    $time1 -> save();
                }

                foreach ($restaurants as $restaurant){
                    $restaurant1 =new Fav_restaurant();
                    $restaurant1 ->s_id = $sid;
                    $restaurant1 ->restaurant = $restaurant;
                    $restaurant1 ->save();
                }


//            dd([$time,$restaurant]);
                return redirect('survey/statistics')-> with('success','添加成功');
            }else{
                return redirect() -> back()-> with('fail','添加失败');
            }
        }

    }


    public function update(Request $request,$id)
    {
        $student = Survey::find($id);
        $timesg = $student -> fav_time;
        $restaurantsg = $student ->fav_restaurant;

        if($request -> isMethod('post')){
            $this -> validate($request,[
                'Student.name' => 'required|min:2|max:4',
                'Student.age' => 'required|min:10|max:30|integer',
                'Student.gender' => 'required',
                'Student.phonenum' => 'required|min:11|max:11',
            ],[
                'Student.name' => ':attribute name',
                'Student.age' => ':attribute age',
                'Student.phonenum'=> ':attribute phonenumber'
            ]) ;
            $data0 = $request -> input('Student');
            $times = $request -> input('Time');
            $restaurants = $request -> input('Restaurant');




            $student -> name = $data0['name'];
            $student ->age = $data0['age'];
            $student ->gender = $data0['gender'];
            $student ->phonenum = $data0['phonenum'];




            if($student -> save()){

//            $time = new Fav_time();
//            $time -> s_id = $sid;
//            $time -> time = $time;
//            $time -> save();

                foreach ($times as $time){
                   $timesgs[] =$timesg;
//                    $timesg -> s_id = $id;
                    $timesg -> time = $time;
                    $timesg -> save();
                }

                foreach ($restaurants as $restaurant){
                    $restaurantsgs[] =$restaurantsg;
//                    $restaurantsg ->s_id = $id;
                    $restaurantsg ->restaurant = $restaurant;
                    $restaurantsg ->save();
                }


//            dd([$time,$restaurant]);
                return redirect('survey/statistics')-> with('success','添加成功');
            }else{
                return redirect() -> back()-> with('fail','添加失败');
            }
        }



//            dd([$time,$restaurant]);
            return view('survey/update',['student' =>$student]);


    }




}


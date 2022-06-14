<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Timetable;
use App\Models\Subject;

class TimetableController extends Controller
{

    public function add(Request $request)
    {
       // dd($request);
        //  $subject = Subject::orderBy('id')->pluck('name','id')->toArray();
        $subjects['10'] = Subject::where(['course'=>10])->orderBy('id')->pluck('name','id')->toArray();
        //dd($subjects);
        $subjects['12'] = Subject::where(['course'=>12])->orderBy('id')->pluck('name','id')->toArray();
        //dd($subjects);
        return view('School.addtimetable',compact('subjects'));

    }
    public function get_sub($course=null)
    {

      // echo $course;
       $subject = Subject::where(['course'=>$course])->orderBy('id')->pluck('name','id')->toArray();
      return  $subject;
       exit;

    }

    public function addTimeT(Request $request)
    {

    $request->validate([
    'course'=>'required',
    'subjects' => 'required',
    'exam_time_end' => 'required',
    'exam_date' => 'required',
    'exam_time_start'=>'required'
]);
    $data=$request->all();
    //dd($data);
    $data['exam_date'] = date("Y-m-d",strtotime($data['exam_date']));
//dd($data['exam_date']);
    Timetable::create($data);
    return redirect()->route('home')->with('message', 'IT WORKS!');
  //  return redirect('School.addtimetable')->with('success', 'Timetable created successfully.');

    }
    public function  getTimetable()
    {
      $subject = Subject::orderBy('id')->pluck('name','id')->toArray();
       // dd($subject);
       $showtimetable = Timetable::paginate(10);
        //dd($showtimetable);

           return view("show", compact('showtimetable','subject'));

    }
}

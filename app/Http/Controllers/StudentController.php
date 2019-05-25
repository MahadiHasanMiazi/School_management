<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use App\Student_fees;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    public function index(Request $request, $class){

        $students = Students::where('class_name', $class)->get();

        return view('student.index')
            ->with('students', $students);
    }

    public function newStudent(){
        return view('student.add-student');
    }
    public function createStudent(Request $request){
        $student= new Students();

        $class = strtolower($request->input('className'));

        $student->name = $request->input('name');
        $student->roll_no = $request->input('roll_no');
        $student->DOB = $request->input('dob');
        $student->Father_name = $request->input('father_name');
        $student->mother_name = $request->input('mother_name');
        $student->address = $request->input('address');
        $student->mobile = $request->input('mobile');
        $student->admission_date = $request->input('admission_date');
        $student->class_name = $class;

      if($student->save()){
          $request->session()->flash('message.level', 'success');
          $request->session()->flash('message.content', 'Student successfully Added!');
          return redirect()->route('home.index');
      }
    }


    public function students_fees_list(Request $request, $class){
//        session(['class'=>$class]);
        $section = DB::select("
                                        Select classes.*, sections.id, sections.class_id,sections.name  from `classes`
                                        left join `sections` on classes.id = sections.class_id
                                        where classes.name = '$class'");
        $fees = Student_fees::where('class', $class)->get();
        return view('student.students-fees-list')
            ->with('fees', $fees)
            ->with("start_date", "")
            ->with("end_date", "")
            ->with("sections", $section)
            ->with("class", $class);
    }
    public function students_fees_list_by_section(Request $request, $class, $section){
        $sections = DB::select("
                                        Select classes.*, sections.id, sections.class_id,sections.name  from `classes`
                                        left join `sections` on classes.id = sections.class_id
                                        where classes.name = '$class'");

        $fees = Student_fees::where('class', $class)
            ->where('section', $section)
            ->get();

        return view('student.student-fees-list-by-section')
            ->with('fees', $fees)
            ->with("start_date", "")
            ->with("end_date", "")
            ->with("sections", $sections)
            ->with("class", $class);



    }
    public function students_fees_list_by_section_by_date(Request $request, $class, $section){
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $sections = DB::select("
                                        Select classes.*, sections.id, sections.class_id,sections.name  from `classes`
                                        left join `sections` on classes.id = sections.class_id
                                        where classes.name = '$class'");
        $fees = Student_fees::whereBetween('date', [$start_date, $end_date])
                            ->where('class', $class)
                            ->where('section', $section)
                            ->get();
        return view('student.students-fees-list')
            ->with('fees', $fees)
            ->with("start_date", $start_date)
            ->with("end_date", $end_date)
            ->with("class", $class)
            ->with("sections", $sections);

    }
    public function students_fees_list_search_by_date(Request $request, $class){
        $section = DB::select("
                                        Select classes.*, sections.id, sections.class_id,sections.name  from `classes`
                                        left join `sections` on classes.id = sections.class_id
                                        where classes.name = '$class'");
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $fees = Student_fees::whereBetween('date', [$start_date, $end_date])
                                ->where('class', $class)->get();
        return view('student.student-fees-list-by-section')
            ->with('fees', $fees)
            ->with("start_date", $start_date)
            ->with("end_date", $end_date)
            ->with("sections", $section)
            ->with("class", $class);
    }


    public function show(Request $request, $id){
        $student = Students::find($id);
        return view('student.details')->with('student', $student);
    }

    public function confirmDelete(Request $request, $id){
        $student = Students::find($id);
        if($student->delete()){
            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content', 'Student successfully Deleted!');
            return redirect()->route('home.index');
        }

    }

    public function delete(Request $request, $id){
        $student = Students::find($id);
        return view('student.delete-confirmation')->with('student', $student);
    }

    public function edit(Request $request, $id){
        $student =Students::find($id);
        return view('student.edit')->with('student', $student);
    }
    public function update(Request $request, $id){
        $student = Students::find($id);
        $student->name = $request->input('name');
        $student->class_name = $request->input('className');
        $student->DOB = $request->input('dob');
        $student->Father_name = $request->input('father_name');
        $student->mother_name = $request->input('mother_name');
        $student->address = $request->input('address');
        $student->mobile = $request->input('mobile');

        if($student->save()){
            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content', 'Student Information successfully updated!');
            return Redirect()->route('home.index');
        }
    }

    public function searchByNameOrId(Request $request){
        $fees = Student_fees::where('name', 'like', '%' . $request->value . '%')
//            ->orWhere('roll_number', 'like', '%' . $request->value . '%')
            ->get();
        return $fees;


    }
}

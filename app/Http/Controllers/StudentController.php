<?php

namespace App\Http\Controllers;
use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listStudent = student::join("classroom", "student.Id_Class", "=", "classroom.Id_Class")
                                ->paginate(3);
        return view('student.index', [
            'listStudent' => $listStudent
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listClassroom = classroom::all();
        return view('student.create', [
            'listClassroom' => $listClassroom,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->get('name');
        $Name_Class = $request->get('Name_Class');
        $gender = $request->get('gender');
        $DoB = $request->get('DoB');
        $email = $request->get('email');
        $phone = $request->get('phone');

        $student = new student();
        $student->Name_Name = $name;
        $student->Id_Class = $Name_Class;
        $student->Gender = $gender;
        $student->DoB = $DoB;
        $student->Email = $email;
        $student->Phone_Number = $phone;

        $student->save();

        return redirect(route( 'student.index') );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = student::find($id);
        $listClassroom = classroom::all();

        return view('student.edit', [
            'student' => $student,
            'listClassroom' => $listClassroom,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name = $request->get('name');
        $Name_Class = $request->get('Name_Class');
        $gender = $request->get('gender');
        $DoB = $request->get('DoB');
        $email = $request->get('email');
        $phone = $request->get('phone');

        $student = student::find($id);
        $student->Name_Name = $name;
        $student->Id_Class = $Name_Class;
        $student->Gender = $gender;
        $student->DoB = $DoB;
        $student->Email = $email;
        $student->Phone_Number = $phone;

        $student->save();

        return redirect(route( 'student.index') );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

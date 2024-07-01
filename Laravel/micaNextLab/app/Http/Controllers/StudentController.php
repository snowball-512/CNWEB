<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Type;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('students.index',['students'=>Student::paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types= DB::table('types')->get();
        return view('students.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'StudentName' =>'required',
            
        ]);
        $StudentName = $request->input('StudentName');
        $TypesID = $request->input('TypesID');
        $StudentBirthday = $request->input('StudentBirthday');
        $StudentGender = $request->input('StudentGender');
        $StudentAddress = $request->input('StudentAddress');
        $StudentPhoneNumber = $request->input('StudentPhoneNumber');
        $validateData= $request->validate([
            'StudentName' =>'required',
        ]);
        DB::table('students')->insert([
            'StudentName' => $StudentName,
            'TypesID' => $TypesID,
            'StudentBirthday' =>$StudentBirthday,
            'StudentGender' =>$StudentGender,
            'StudentAddress' => $StudentAddress,
            'StudentPhoneNumber' =>$StudentPhoneNumber
        ]);

        return redirect()->route('students.index')->with('success','Student add successfully' );

    }
    

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
{
    $type = $student->type; // Giả sử type của sinh viên được lưu trong field 'type' của bảng students
    return view('students.show', compact('student', 'type'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $types = Type::all();
        return view('students.edit',[
            'types'=>$types,
            'student'=>$student
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $StudentName = $request->input('StudentName');
        $TypesID = $request->input('TypesID');
        $StudentBirthday = $request->input('StudentBirthday');
        $StudentGender = $request->input('StudentGender');
        $StudentAddress = $request->input('StudentAddress');
        $StudentPhoneNumber = $request->input('StudentPhoneNumber');
        $validateData= $request->validate([
            'StudentName' =>'required',
        ]);
        $student->update([
            'StudentName' => $StudentName,
            'TypesID' => $TypesID,
            'StudentBirthday' =>$StudentBirthday,
            'StudentGender' =>$StudentGender,
            'StudentAddress' => $StudentAddress,
            'StudentPhoneNumber' =>$StudentPhoneNumber
        ]);

        return redirect()->route('students.index')->with('success','Student update successfully' );

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success','Student Data deleted successfully');

    }
}

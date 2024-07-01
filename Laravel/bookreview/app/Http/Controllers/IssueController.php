<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Issue;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('issues.index',['issues'=>Issue::paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $computers= DB::table('computers')->get();
        return view('issues.create',compact('computers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'reported_by' =>'required',
            'reported_date' =>'required',
            'description' =>'required',
            // 'urgency' =>'required',
            // 'status' =>'required',
        ]);
        $computer_id = $request->input('computer_id');
        $reported_by = $request->input('reported_by');
        $reported_date = $request->input('reported_date');
        $description = $request->input('description');
        $urgency = $request->input('urgency');
        $status = $request->input('status');
        DB::table('issues')->insert([
            'computer_id' => $computer_id,
            'reported_by' => $reported_by,
            'reported_date' => $reported_date,
            'description' => $description,
            'urgency' => $urgency,
            'status' => $status,
        ]);
        
        return redirect()->route('issues.index')->with('success', 'Add successfully');
     
    }

    /**
     * Display the specified resource.
     */
    public function show(Issue $issue)
    {
        $computer = $issue->computer; // Giả sử type của sinh viên được lưu trong field 'type' của bảng students
    return view('issues.show', compact('issue', 'computer'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Issue $issue)
    {
        return view('issues.edit',[
            'issue'=>$issue
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Issue $issue)
    {
        $computer_id = $request->input('computer_id');
        $reported_by = $request->input('reported_by');
        $reported_date = $request->input('reported_date');
        $description = $request->input('description');
        $urgency = $request->input('urgency');
        $status = $request->input('status');
        $issue->update([
            'computer_id' => $computer_id,
            'reported_by' => $reported_by,
            'reported_date' => $reported_date,
            'description' => $description,
            'urgency' => $urgency,
            'status' => $status,
        ]);
        
        return redirect()->route('issues.index')->with('success', 'Eddit successfully');
     
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Issue $issue)
    {
        $issue->delete();
        return redirect()->route('issues.index')->with('success','Delete successfully');

    }
}

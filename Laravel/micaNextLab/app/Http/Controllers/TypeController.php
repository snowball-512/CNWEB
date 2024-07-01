<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\type;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types= DB::table('types')->get();
        return view('types.index',['types'=>Type::paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'TypeName' =>'required',
            
        ]);
        $TypeName = $request->input('TypeName');
        $TypeDescription = $request->input('TypeDescription');
        $validateData= $request->validate([
            'TypeName' =>'required',
        ]);
        DB::table('types')->insert([
            'TypeName' => $TypeName,
            'TypeDescription' => $TypeDescription,
        ]);

        return redirect()->route('types.index')->with('success' );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('types.show', compact('types'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        // $types = Type::all();
        return view('types.edit',[
            'type'=>$type
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    {
        $TypeName = $request->input('TypeName');
        $TypeDescription = $request->input('TypeDescription');
        $validateData= $request->validate([
            'TypeName' =>'required',
        ]);
        $type->update([
            'TypeName' => $TypeName,
            'TypeDescription' => $TypeDescription,
        ]);

        return redirect()->route('types.index')->with('success' );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        $type->delete();
        return redirect()->route('types.index')->with('success','Student Data deleted successfully');

    }
}

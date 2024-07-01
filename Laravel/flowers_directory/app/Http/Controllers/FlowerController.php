<?php

namespace App\Http\Controllers;

use App\Models\Flower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('flowers.index',['flowers'=>Flower::paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('flowers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'Hãy nhập tên loài hoa',
        ]);
        
        $name = $request->input('name');
        $image_url = $request->input('image_url');
        $created_at = $request->input('created_at');
        $updated_at = $request->input('updated_at');
        $description = $request->input('description');
        
        DB::table('flowers')->insert([
            'name' => $name,
            'image_url' => $image_url,
            'created_at' => $created_at,
            'updated_at' => $updated_at,
            'description' => $description,
        ]);
        
        return redirect()->route('flowers.index')->with('success', 'Thêm loài hoa mới thành công');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Flower $flower)
    {
        return view('flowers.show', compact('flower'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Flower $flower)
    {
        return view('flowers.edit',[
            'flower'=>$flower
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Flower $flower)
    {
      
        $name = $request->input('name');
        $image_url = $request->input('image_url');
        $updated_at = $request->input('updated_at');
        $description  = $request->input('description');
        $validateData= $request->validate([
            'name' =>'required',
        ]);
        $flower->update([
            'name' => $name,
            'image_url' => $image_url,
            'updated_at' => $updated_at,
            'description' => $description,
        ]);

        return redirect()->route('flowers.index')->with('success', 'Cập nhật loài hoa có tên ' . $name . ' thành công' );
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flower $flower)
    {
        $flower->delete();
        return redirect()->route('flowers.index')->with('success','Xóa loài hoa thành công');

    }
}

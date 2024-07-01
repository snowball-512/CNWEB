<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('books.index',['books'=>Book::paginate(5)]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Title' => 'required',
            'Author'=> 'required',
            'ISBN' => 'required|digits:13|numeric',
        ], [
            'Title.required' => 'Hãy nhập tên tiêu đề sách',
            'Author.required' => 'Hãy nhập tên tác giả sách',
            'ISBN.required' => 'Hãy nhập mã số sách',
            'ISBN.numeric' => 'Hãy nhập số',
            'ISBN.digits' => 'Hãy nhập 13 số',
        ]);
        
        $Title = $request->input('Title');
        $Author = $request->input('Author');
        $Genre = $request->input('Genre');
        $PubilicationYear = $request->input('PubilicationYear');
        $ISBN = $request->input('ISBN');
        $CoverImageURL = $request->input('CoverImageURL');
        DB::table('books')->insert([
            'Title' => $Title,
            'Author' => $Author,
            'Genre' => $Genre,
            'PubilicationYear' => $PubilicationYear,
            'ISBN' => $ISBN,
            'CoverImageURL' => $CoverImageURL,
        ]);
        
        return redirect()->route('books.index')->with('success', 'Thêm sách mới thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('books.edit',[
            'book'=>$book
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        // Ghi lại dữ liệu yêu cầu để kiểm tra
        // Log::info($request->all());
    
        // $request->validate([
        //     'Title' => 'required',
        //     'Author' => 'required',
        //     'ISBN' => 'required|digits:13|numeric',
        // ], [
        //     'Title.required' => 'Hãy nhập tên tiêu đề sách',
        //     'Author.required' => 'Hãy nhập tên tác giả sách',
        //     'ISBN.required' => 'Hãy nhập mã số sách',
        //     'ISBN.numeric' => 'Hãy nhập số',
        //     'ISBN.digits' => 'Hãy nhập 13 số',
        // ]);
        
        $Title = $request->input('Title');
        $Author = $request->input('Author');
        $Genre = $request->input('Genre');
        $PubilicationYear = $request->input('PubilicationYear');
        $ISBN = $request->input('ISBN');
        $CoverImageURL = $request->input('CoverImageURL');
        $book->update([
            'Title' => $Title,
            'Author' => $Author,
            'Genre' => $Genre,
            'PubilicationYear' => $PubilicationYear,
            'ISBN' => $ISBN,
            'CoverImageURL' => $CoverImageURL,
        ]);
    
        return redirect()->route('books.index')->with('success', 'Cập nhật sách thành công');
    }
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success','Xóa sách thành công');

    }
}

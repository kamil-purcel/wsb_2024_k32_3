<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $sort = $request->input('sort', 'title');
        $order = $request->input('order', 'asc');
        $pageSize = $request->input('page_size', 10);

        $books = Book::query()
            ->when($search, function ($query, $search) {
                $query->where('title', 'like', "%{$search}%")
                      ->orWhere('authors', 'like', "%{$search}%")
                      ->orWhere('isbn', 'like', "%{$search}%");
            })
            ->orderBy($sort, $order)
            ->paginate($pageSize);

        return view('books.index', compact('books', 'search', 'sort', 'order', 'pageSize'));
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function create()
    {
        return view('books.create');
    }
    
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'isbn' => 'required|digits_between:10,13',
            'title' => 'required|string|max:255',
            'authors' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'published_date' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'pages' => 'required|integer|min:1',
            'quantity' => 'required|integer|min:1',
            'image' => 'required|image|max:2048',
            'description' => 'required|string|max:10000',
        ]);
    
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/covers'), $imageName);
    
        Book::create(array_merge($request->except('image'), ['image' => $imageName]));
    
        return redirect()->route('books.index')->with('success', 'Book created successfully.');
    }
    public function update(Request $request, Book $book)
    {

        $request->validate([
            'isbn' => 'required|digits_between:10,13',
            'title' => 'required|string|max:255',
            'authors' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'published_date' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'pages' => 'required|integer|min:1',
            'quantity' => 'required|integer|min:1',
            'image' => 'nullable|image|max:2048',
            'description' => 'required|string|max:10000',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('resources/img/covers'), $imageName);
            $book->image = $imageName;
        }

        $book->update($request->except('image') + ['image' => $book->image]);

        return redirect()->route('books.index')->with('success', 'Book updated successfully.');
    }

    public function destroy(Book $book)
    {

        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted successfully.');
    }
}

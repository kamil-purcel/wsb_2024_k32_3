@extends('szablon.szablon')

@section('tytul', 'Edit Book')

@section('tresc')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow sm:rounded-lg p-6">
            <h2 class="text-xl font-bold mb-4">Edit Book</h2>
            <form action="{{ route('books.update', $book) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="isbn" class="form-label">ISBN</label>
                    <input type="text" name="isbn" id="isbn" class="form-control" value="{{ $book->isbn }}" required>
                </div>
                <div class="mb-4">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $book->title }}" required>
                </div>
                <div class="mb-4">
                    <label for="authors" class="form-label">Authors</label>
                    <input type="text" name="authors" id="authors" class="form-control" value="{{ $book->authors }}" required>
                </div>
                <div class="mb-4">
                    <label for="publisher" class="form-label">Publisher</label>
                    <input type="text" name="publisher" id="publisher" class="form-control" value="{{ $book->publisher }}" required>
                </div>
                <div class="mb-4">
                    <label for="published_date" class="form-label">Published Date</label>
                    <input type="date" name="published_date" id="published_date" class="form-control" value="{{ $book->published_date }}" required>
                </div>
                <div class="mb-4">
                    <label for="category" class="form-label">Category</label>
                    <input type="text" name="category" id="category" class="form-control" value="{{ $book->category }}" required>
                </div>
                <div class="mb-4">
                    <label for="pages" class="form-label">Pages</label>
                    <input type="number" name="pages" id="pages" class="form-control" value="{{ $book->pages }}" required>
                </div>
                <div class="mb-4">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" name="quantity" id="quantity" class="form-control" value="{{ $book->quantity }}" required>
                </div>
                <div class="mb-4">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="4" required>{{ $book->description }}</textarea>
                </div>
                <div class="mb-4">
                    <label for="image" class="form-label">Cover Image</label>
                    <input type="file" name="image" id="image" class="form-control">
                    <small class="text-muted">Leave blank to keep the current image.</small>
                </div>
                
                <button type="submit" class="btn btn-primary">Update Book</button>
                
                <a href="{{ route('books.index') }}" class="btn btn-secondary">Return to Books</a>
            </form>
        </div>
    </div>
</div>
@endsection

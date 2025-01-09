@extends('szablon.szablon')

@section('tytul', 'Books')

@section('tresc')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow sm:rounded-lg p-6">
            <h2 class="text-xl font-bold mb-4">Books</h2>

            <form method="GET" action="{{ route('books.index') }}" class="mb-4 flex gap-4">
                <input type="text" name="search" value="{{ $search }}" placeholder="Search books..." class="form-control">
                <select name="sort" class="form-control">
                    <option value="title" {{ $sort === 'title' ? 'selected' : '' }}>Title</option>
                    <option value="authors" {{ $sort === 'authors' ? 'selected' : '' }}>Authors</option>
                    <option value="published_date" {{ $sort === 'published_date' ? 'selected' : '' }}>Published Date</option>
                </select>
                <select name="order" class="form-control">
                    <option value="asc" {{ $order === 'asc' ? 'selected' : '' }}>Ascending</option>
                    <option value="desc" {{ $order === 'desc' ? 'selected' : '' }}>Descending</option>
                </select>
                <select name="page_size" class="form-control">
                    <option value="5" {{ $pageSize == 5 ? 'selected' : '' }}>5</option>
                    <option value="10" {{ $pageSize == 10 ? 'selected' : '' }}>10</option>
                    <option value="20" {{ $pageSize == 20 ? 'selected' : '' }}>20</option>
                    <option value="50" {{ $pageSize == 50 ? 'selected' : '' }}>50</option>
                </select>
                <button type="submit" class="btn btn-primary">Apply</button>
            </form>
            
            @php
                $role = Auth::user()->role->name;
            @endphp
            @if ($role === 'librarian')
                <div class="mb-4">
                    <a href="{{ route('books.create') }}" class="btn btn-success">Create New Book</a>
                </div>
            @endif

            <div class="row">
                @foreach ($books as $book)
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('images/covers/' . $book->image) }}" 
                                 alt="{{ $book->title }}" 
                                 class="card-img-top" 
                                 style="height: 220px; width: 150px; object-fit: cover; object-position: center; margin: auto;">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-center">{{ $book->title }}</h5>
                                <p class="card-text text-muted text-center">{{ $book->authors }}</p>
                                <p class="card-text text-muted text-center">{{ $book->published_date }}</p>
                                <p class="card-text text-muted text-center" style="min-height: 20px;">
                                    <strong>Quantity:</strong> {{ $book->quantity }}
                                </p>
                                <a href="{{ route('books.show', $book) }}" class="btn btn-primary btn-sm mt-auto text-center">View Details</a>
                                
                                @php $role = Auth::user()->role->name; @endphp
                                @if ($role === 'librarian')
                                    <div class="d-flex justify-content-between mt-2">
                                        <a href="{{ route('books.edit', $book) }}" class="btn btn-warning btn-sm w-50 me-2">Edit</a>
                                        <form action="{{ route('books.destroy', $book) }}" method="POST"  class="w-50" onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm w-100">Delete</button>
                                        </form>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-4">
                {{ $books->appends(request()->query())->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
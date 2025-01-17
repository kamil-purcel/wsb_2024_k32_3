@extends('szablon.szablon')

@section('tytul', $book->title)

@section('tresc')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow sm:rounded-lg p-6">
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="{{ asset('images/covers/' . $book->image) }}" alt="{{ $book->title }}" class="img-fluid rounded shadow" style="height: 300px; object-fit: cover;">
                </div>

                <div class="col-md-8">
                    <h2 class="text-xl font-bold mb-3">{{ $book->title }}</h2>
                    <p><strong>Authors:</strong> {{ $book->authors }}</p>
                    <p><strong>Publisher:</strong> {{ $book->publisher }}</p>
                    <p><strong>Published Date:</strong> {{ $book->published_date }}</p>
                    <p><strong>Category:</strong> {{ $book->category }}</p>
                    <p><strong>Pages:</strong> {{ $book->pages }}</p>
                    <p><strong>Quantity:</strong> {{ $book->quantity }}</p>
                    <p class="mt-4"><strong>Description:</strong></p>
                    <p>{{ $book->description }}</p>
                    
            @php $role = Auth::user()->role->name; @endphp
            @if ($role === 'librarian' || $role === 'admin')
                <div class="d-flex justify-content-between mt-2">
                    <form action="{{ route('books.returnCopy', $book) }}" method="POST"
                        class="w-50 me-2">
                        @csrf
                        <button type="submit" class="btn btn-secondary btn-sm w-100">Return</button>
                    </form>
                    @if ($book->quantity > 0)
                        <form action="{{ route('books.rentCopy', $book) }}" method="POST"
                            class="w-50">
                            @csrf
                            <button type="submit"
                                class="btn btn-secondary btn-sm w-100">Rent</button>
                        </form>
                    @endif
                </div>
            @endif
                </div>
            </div>
            <div class="mt-4 text-end">
                <a href="{{ route('books.index') }}" class="btn btn-secondary">Return to Books</a>
            </div>
        </div>
    </div>
</div>
@endsection

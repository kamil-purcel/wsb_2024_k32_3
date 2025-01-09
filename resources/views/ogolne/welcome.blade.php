@extends('szablon.szablon')
@section('tytul')
    Library
@endsection

@section('podtytul')
    Welcome to the Library
@endsection

@section('tresc')
@guest
<p>Please log in to see the available books.</p>
@else
<p>Welcome, {{ Auth::user()->firstname }}!</p>
@if (Auth::user()->role->name === 'admin')
    {{-- <a href="{{ route('admin.manage.users') }}" class="btn btn-danger mt-3">Manage Users</a> --}}
@elseif (Auth::user()->role->name === 'librarian')
    {{-- <a href="{{ route('librarian.manage.books') }}" class="btn btn-warning mt-3">Manage Books</a> --}}
@else
<p>Browse our collection of books.</p>
    {{-- <a href="{{ route('books.index') }}" class="btn btn-primary mt-3">View Available Books</a> --}}
@endif
@endguest
@endsection

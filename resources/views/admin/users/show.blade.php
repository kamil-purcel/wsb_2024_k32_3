@extends('szablon.szablon')
@section('tytul', 'User Details')

@section('tresc')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <h2 class="text-xl font-semibold text-gray-900 mb-6">User Details</h2>
            <ul>
                <li><strong>ID:</strong> {{ $user->id }}</li>
                <li><strong>Name:</strong> {{ $user->firstname }} {{ $user->lastname }}</li>
                <li><strong>Email:</strong> {{ $user->email }}</li>
                <li><strong>Role:</strong> {{ $user->role->name }}</li>
            </ul>
            <a href="{{ route('users.index') }}" class="btn btn-secondary mt-4">Back to Users</a>
        </div>
    </div>
</div>
@endsection

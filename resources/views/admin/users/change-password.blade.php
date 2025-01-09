@extends('szablon.szablon')

@section('tytul', 'Change Password')

@section('tresc')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <h2 class="text-xl font-semibold text-gray-900 mb-6">Change Password</h2>
            <form action="{{ route('users.change-password', $user) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">New Password</label>
                    <input type="password" name="password" id="password" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm New Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>
                <button type="submit" class="btn btn-primary">Change Password</button>
            </form>
        </div>
    </div>
</div>
@endsection

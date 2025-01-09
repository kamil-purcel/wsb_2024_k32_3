@extends('szablon.szablon')
@section('tytul', isset($user) ? 'Edit User' : 'Create User')

@section('tresc')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <h2 class="text-xl font-semibold text-gray-900 mb-6">
                {{ isset($user) ? 'Edit User' : 'Add New User' }}
            </h2>
            <form action="{{ isset($user) ? route('users.update', $user) : route('users.store') }}" method="POST">
                @csrf
                @if(isset($user)) @method('PUT') @endif
                <div class="mb-4">
                    <label for="firstname" class="block text-sm font-medium text-gray-700">First Name</label>
                    <input type="text" name="firstname" id="firstname" value="{{ old('firstname', $user->firstname ?? '') }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>
                <div class="mb-4">
                    <label for="lastname" class="block text-sm font-medium text-gray-700">Last Name</label>
                    <input type="text" name="lastname" id="lastname" value="{{ old('lastname', $user->lastname ?? '') }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email', $user->email ?? '') }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>
                <div class="mb-4">
                    <label for="role_id" class="block text-sm font-medium text-gray-700">Role</label>
                    <select name="role_id" id="role_id" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}" {{ (isset($user) && $user->role_id == $role->id) ? 'selected' : '' }}>
                                {{ $role->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" {{ isset($user) ? '' : 'required' }}>
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" {{ isset($user) ? '' : 'required' }}>
                </div>
                <button type="submit" class="btn btn-primary">
                    {{ isset($user) ? 'Update User' : 'Create User' }}
                </button>
                <a href="{{ route('users.index') }}" class="btn btn-secondary">Back to Users</a>
            </form>
        </div>
    </div>
</div>
@endsection

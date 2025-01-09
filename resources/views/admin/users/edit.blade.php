@extends('szablon.szablon')

@section('tytul', 'Edit User')

@section('tresc')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <h2 class="text-xl font-semibold text-gray-900 mb-6">Edit User</h2>
            <form action="{{ route('users.update', $user) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="firstname" class="block text-sm font-medium text-gray-700">First Name</label>
                    <input type="text" name="firstname" id="firstname" value="{{ old('firstname', $user->firstname) }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>

                <div class="mb-4">
                    <label for="lastname" class="block text-sm font-medium text-gray-700">Last Name</label>
                    <input type="text" name="lastname" id="lastname" value="{{ old('lastname', $user->lastname) }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>

                <div class="mb-4">
                    <label for="role_id" class="block text-sm font-medium text-gray-700">Role</label>
                    <select name="role_id" id="role_id" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : '' }}>
                                {{ $role->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <div class="d-flex justify-content-end gap-3 mt-4">
                    <a href="{{ route('users.index') }}" class="btn btn-secondary">Back to Users</a>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
                
                
            </form>
        </div>

        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Additional Actions</h3>
            <div class="flex space-x-4">
                <a href="{{ route('users.change-password-form', $user) }}" class="btn btn-warning">Change Password</a>

                <form action="{{ route('users.destroy', $user) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete User</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('szablon.szablon')

@section('tytul', 'Manage Users')

@section('tresc')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <h2 class="text-xl font-semibold text-gray-900 mb-6">User Management</h2>

            <form method="GET" action="{{ route('users.index') }}" class="mb-4">
                <div class="input-group">
                    <input type="text" name="search" value="{{ $search }}" placeholder="Search users..." class="form-control">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>

            <a href="{{ route('users.create') }}" class="btn btn-primary mb-4">Add New User</a>

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->firstname }}</td>
                            <td>{{ $user->lastname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role->name }}</td>
                            <td>
                                <a href="{{ route('users.show', $user) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('users.edit', $user) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">No users found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

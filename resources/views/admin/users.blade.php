@extends('admin.index')

@section('content')
    <table id="myDataTable" class="display">
        <thead>
            <tr>
                <th class="text-center">Name</th>
                <th class="text-center">Email</th>
                <th class="text-center">Role</th>
                <th class="text-center">Phone no</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="text-center"><a href="{{ route('admin.show', $user->id) }}">{{ $user->name }}</a></td>
                    <td class="text-center">{{ $user->email }}</td>
                    <td class="text-center">{{ $user->role }}</td>
                    <td class="text-center">{{ $user->phone }}</td>
                    <td class="text-center d-flex gap-2">
                        <a href="{{ route('admin.edit', [$user->id]) }}" class="btn btn-outline-success p-1 px-2">Edit</a>
                        <form id="delete-form-{{ $user->id }}" action="{{ route('admin.destroy', $user->id) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="#" class="btn btn-outline-danger delete-btn"
                                data-admin-id="{{ $user->id }}">Delete</a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

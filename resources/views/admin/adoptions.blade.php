{{-- @dump($adoptionRequests) --}}

@extends('admin.index')

@section('content')
    <table id="myDataTable" class="display">
        <thead>
            <tr>
                <th class="text-center">Pet name</th>
                <th class="text-center">User name</th>
                <th class="text-center">Date</th>
                <th class="text-center">Remark</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($adoptionRequests as $request)
                <tr>
                    <td class="text-center"><a href="{{ route('admin.show', $request->id) }}">{{ $request->pet->name }}</a>
                    </td>
                    <td class="text-center">{{ $request->user->name }}</td>
                    <td class="text-center">{{ $request->adoption_date }}</td>
                    <td class="text-center">{{ $request->remarks }}</td>
                    @if ($request->status === 'pending')
                        <td class="text-center d-flex gap-2 justify-content-center">
                            <a href="{{ route('admin.accept', [$request->id]) }}"
                                class="btn btn-primary p-1 px-2">Accept</a>
                            <form id="reject-form-{{ $request->id }}" action="{{ route('admin.reject', $request->id) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="#" class="btn btn-danger reject-btn"
                                    data-adopt-id="{{ $request->id }}">Reject</a>
                            </form>
                        </td>
                    @else
                        <td class="text-center text-success">Accepted</td>
                    @endif



                    {{-- <a href="{{ route('admin.accept', [$request->id]) }}"
                            class="btn btn-outline-success p-1 px-2">Accept</a> --}}

                </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        var deleteButtons = document.querySelectorAll('.reject-btn');
        deleteButtons.forEach(function(button) {
            // Add a click event listener to each delete button
            button.addEventListener('click', function(event) {
                event.preventDefault();

                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You won\'t be able to revert this!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, reject it!',
                    customClass: {
                        confirmButton: 'btn btn-danger',
                        cancelButton: 'btn btn-outline-secondary'
                    }
                }).then((result) => {

                    if (result.isConfirmed) {
                        document.getElementById('reject-form-' + button.getAttribute(
                            'data-adopt-id')).submit();

                        Swal.fire(
                            'success!',
                            'The record has been rejected.',
                            'success'
                        );
                    }
                });
            });
        });
    </script>
@endsection

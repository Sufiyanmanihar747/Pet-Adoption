@extends('admin.index')

@section('content')
    <div class="container" style="margin-top: 3rem!important;">
        {{-- @dd($pets) --}}
        <div class="row">
            <!-- Pet Card -->
            @foreach ($pets as $pet)
                <div class="col-md-4">
                    <div class="card pet-card">
                        <img src="{{ url('storage/images/' . $pet->image) }}" class="card-img-top" style="height: 200px;"
                            alt="Max">
                        <div class="card-body">
                            <span class="posted-date">Posted on: {{ $pet->created_at }}</span>
                            <h5 class="card-title">{{ $pet->name }}</h5>
                            <p class="contact-details">
                                <strong>Contact details -</strong><br>
                                {{ $pet->categories->name }} {{ $pet->users->name }}<br>
                                Contact Now: <a href="#">{{ $pet->users->phone }}</a>
                            </p>
                            <div class="d-flex justify-content-start gap-2">
                                <a href="{{ route('pets.edit', $pet->id) }}"
                                    class="btn btn-outline-success font-weight-bold">
                                    Edit
                                </a>
                                <form id="delete-form-{{ $pet->id }}" action="{{ route('pets.destroy', $pet->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="#" class="btn btn-outline-danger delete-btn font-weight-bold"
                                        data-admin-id="{{ $pet->id }}">Delete</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- Repeat the above card for other pets -->
        </div>
    </div>


    </div>
@endsection

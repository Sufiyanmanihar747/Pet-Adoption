@extends('admin.index')

@section('content')
    <div class="d-flex justify-content-end">
        <a href="{{ route('pets.create') }}" class="btn btn-success">Add Pets</a>
    </div>
    <div class="container" style="margin-top: 3rem!important;">
        {{-- @dd($pets) --}}

        <div class="row">
            <!-- Pet Card -->
            @foreach ($pets as $pet)
                <div class="col-md-4 mt-1">
                    <div class="card pet-card">
                        @php
                        $imageArray = explode(',', $pet->image);
                      @endphp
                      <img src="{{ url('storage/images/' . $imageArray[0]) }}" alt="{{ $pet->image }}" loading="lazy" class="card-img-top" style="height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $pet->name }}</h5>
                            {{-- <p class="card-text">{{ $pet->address->address }}<br>{{ $pet->address->city }},
                                {{ $pet->address->state }}</p> --}}
                            <p class="contact-details">
                                Species: {{ $pet->categories->name }}<br>
                                Breed: {{ $pet->breed }} <br>
                                Age: {{ $pet->age }}
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

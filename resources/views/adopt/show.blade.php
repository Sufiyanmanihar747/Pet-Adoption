@extends('layouts.app')

@section('content')
    {{-- @dump(session('success')) --}}
    <div class="container mt-5 mb-5">
        <h2 class="text-purple">Confirm Your Adoption</h2>

        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <!-- Pet details -->
                        <h3>{{ $pet->name }}</h3>
                        <p><strong>Breed:</strong> {{ $pet->breed }}</p>
                        <p><strong>Age:</strong> {{ $pet->age }} years</p>
                        <p><strong>Contact:</strong> {{ $pet->users->phone }}</p>
                        <p><strong>City:</strong> {{ $pet->address->city }}</p>
                        <p><strong>State:</strong> {{ $pet->address->state }}</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <!-- Pet image -->
                        @php
                            $imageArray = explode(',', $pet->image);
                        @endphp
                        <img src="{{ url('storage/images/' . $imageArray[0]) }}" alt="{{ $pet->name }}" loading="lazy"
                            class="img-fluid rounded" style="max-height: 200px;">
                    </div>
                </div>
            </div>
        </div>

        <form action="{{ route('adopt.store') }}" method="POST" class="mt-4">
            @csrf

            <input type="hidden" name="pet_id" value="{{ $pet->id }}">
            <!-- Terms and conditions -->
            <div class="form-check my-3">
                <input class="form-check-input" type="checkbox" name="terms" id="terms" required>
                <label class="form-check-label" for="terms">
                    I agree to the terms and conditions of adoption.
                </label>
            </div>

            <!-- Remarks (optional) -->
            <div class="mb-3">
                <label for="remarks" class="form-label">Special Instructions or Remarks (optional):</label>
                <textarea class="form-control" name="remarks" id="remarks" rows="3"></textarea>
            </div>

            <!-- Confirm button -->
            <button type="submit" class="btn btn-block text-white bg-purple">Submit Adoption Request</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11?v={{ time() }}"></script>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Adoption Request Submitted',
                text: '{{ session('success') }}',
                confirmButtonText: 'OK'
            }).then((result) => {});
        </script>
    @endif
@endsection

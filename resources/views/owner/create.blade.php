@extends('layouts.app')

@section('content')
    {{-- @dd($users->addresses) --}}
    <div class="container" style="margin-top: 3rem!important;">
        {{ html()->form(isset($pet) ? 'PUT' : 'POST', isset($pet) ? route('owner.update', $pet->id) : route('owner.store'))->attributes(['enctype' => 'multipart/form-data'])->class('bg-white shadow-lg mt-5 pt-2 pb-3 rounded px-4 mx-5')->open() }}
        @csrf

        @if (isset($pet))
            @method('PUT')
        @endif

        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="{{ url()->previous() }}" class="text-decoration-none fs-5">Back</a>
            <h2 class="text-center text-dark m-0">{{ isset($pet) ? 'Edit Pet' : 'Add Pet' }}</h2>
            <div></div>
        </div>

        <div class="form-row justify-content-center">
            <div class="row" id="imagePreviews" style="gap: 10px">
                @if (isset($pet))
                    @php
                        $imageArray = explode(',', $pet->image);
                    @endphp

                    <div class="image-gallery">
                        @foreach ($imageArray as $image)
                            <img src="{{ isset($image) ? url('storage/images/' . $image) : 'null' }}" width="125"
                                style="width: 120px; height: 120px; object-fit: contain; max-width: 100%; max-height: 100%;"
                                alt="Product Image">
                        @endforeach
                    </div>
                @endif
            </div>
        </div>

        <div class="form-row justify-content-center" style="gap: 35px">
            <div class="form-group col-md-5">
                <label class="font-weight-bold m-0" for="name">Name:</label>
                <span class="text-danger">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
                {{ html()->text('name', isset($pet) ? $pet->name : null)->class('form-control h-75')->placeholder('Enter name')->style('text-transform: capitalize;')->required() }}
            </div>

            <div class="form-group col-md-5">
                <label class="font-weight-bold m-0" for="breed">Breed:</label>
                <span class="text-danger">
                    @error('breed')
                        {{ $message }}
                    @enderror
                </span>
                {{ html()->text('breed', isset($pet) ? $pet->breed : null)->class('form-control h-75')->placeholder('Enter breed')->required() }}
            </div>
        </div>

        <div class="form-row justify-content-center" style="gap: 35px">

            <div class="form-group col-md-5">
                <label class="font-weight-bold m-0" for="age">Age:</label>
                <span class="text-danger">
                    @error('age')
                        {{ $message }}
                    @enderror
                </span>
                {{ html()->number('age', isset($pet) ? $pet->age : null)->class('form-control h-75')->placeholder('Enter age')->required() }}
            </div>
            <div class="form-group col-md-5">
                <label class="font-weight-bold m-0" for="age">Category:</label>
                <span class="text-danger">
                    @error('age')
                        {{ $message }}
                    @enderror
                </span>
                @if (isset($pet))
                    {{ html()->select('species', $categories, $pet->species)->class('form-control h-75')->placeholder('Select category')->required() }}
                @else
                    {{ html()->select('species', $categories)->class('form-control h-75')->placeholder('Select category')->required() }}
                @endif
            </div>
        </div>

        <div class="form-row justify-content-center" style="gap: 35px">
            <div class="form-group col-md-5">
                <label class="font-weight-bold m-0" for="age">Gender:</label>
                <span class="text-danger">
                    @error('gender')
                        {{ $message }}
                    @enderror
                </span>
                @if (isset($pet))
                    {{ html()->select('gender', ['male' => 'Male', 'female' => 'Female'], $pet->gender)->class('form-control h-75')->placeholder('Select gender')->required() }}
                @else
                    {{ html()->select('gender', ['male' => 'Male', 'female' => 'Female'])->class('form-control h-75')->placeholder('Select gender')->required() }}
                @endif
            </div>
            <div class="form-group col-md-5">
                <label class="font-weight-bold m-0" for="age">status:</label>
                <span class="text-danger">
                    @error('status')
                        {{ $message }}
                    @enderror
                </span>
                @if (isset($pet))
                    {{ html()->select('status', ['available' => 'Available', 'adopted' => 'Adopted'], $pet->status)->class('form-control h-75')->placeholder('Select status')->required() }}
                @else
                    {{ html()->select('status', ['available' => 'Available', 'adopted' => 'Adopted'])->class('form-control h-75')->placeholder('Select status')->required() }}
                @endif

            </div>
        </div>

        <div class="form-row justify-content-center" style="gap: 35px">
            <div class="form-group col-md-5">
                <label class="font-weight-bold m-0" for="description">Description:</label>
                <span class="text-danger">
                    @error('description')
                        {{ $message }}
                    @enderror
                </span>
                {{ html()->textarea('description', isset($pet) ? $pet->description : null)->class('form-control h-75')->placeholder('Enter your description')->required() }}
            </div>
            <div class="form-group col-md-5">
                {{ html()->label('Address', 'address_id')->class('font-weight-bold m-0') }}
                <span class="text-danger">
                    @error('address_id')
                        {{ $message }}
                    @enderror
                </span>
                @php
                    $addressOptions = $user->addresses->pluck('address', 'id')->toArray();
                    if (!isset($pet)) {
                        $addressOptions =
                            ['' => 'Select an existing address', 'new' => 'Add new address'] + $addressOptions;
                    } else {
                        $addressOptions = ['' => 'Select an existing address'] + $addressOptions;
                    }
                @endphp
                {{ html()->select('address_id', $addressOptions, isset($pet) ? $pet->address_id : null)->class('form-control h-75')->id('address_id')->required() }}
            </div>
        </div>

        <div class="form-row justify-content-center new-address-fields" style="column-gap: 35px; display: none;">

            <div class="form-group col-md-5">
                <label class="font-weight-bold m-0" for="city">City:</label>
                <span class="text-danger">
                    @error('city')
                        {{ $message }}
                    @enderror
                </span>
                {{ html()->text('city')->class('form-control h-75')->placeholder('Enter city') }}
            </div>

            <div class="form-group col-md-5">
                <label class="font-weight-bold m-0" for="state">State:</label>
                <span class="text-danger">
                    @error('state')
                        {{ $message }}
                    @enderror
                </span>
                {{ html()->text('state')->class('form-control h-75')->placeholder('Enter state') }}
            </div>

            <div class="form-group col-md-5">
                <label class="font-weight-bold m-0" for="address">Street:</label>
                <span class="text-danger">
                    @error('street')
                        {{ $message }}
                    @enderror
                </span>
                {{ html()->textarea('address')->class('form-control h-75')->placeholder('Enter street') }}
            </div>
        </div>
        <div class="form-row justify-content-center">
            <div class="form-group col-md-10">
                <label class="font-weight-bold m-0" for="image[]">Upload Image:</label>
                <i class="bi bi-info-circle" title="To select multiple ctrl+click"></i>
                {{ html()->file('image[]')->class('form-control h-75 image-input')->attribute('accept', 'image/*')->multiple()->id('imageInput') }}
            </div>
        </div>
        <div class="form-row justify-content-center" style="gap: 35px">
            <button type="submit"
                class="btn btn-outline-dark mt-3 col-md-5">{{ isset($pet) ? 'Update' : 'Submit' }}</button>
        </div>
        {{ html()->form()->close() }}
    </div>
    <script>
        document.getElementById('address_id').addEventListener('change', function() {
            var newAddressFields = document.querySelector('.new-address-fields');
            if (this.value === 'new') {
                newAddressFields.style.display = 'flex';
            } else {
                newAddressFields.style.display = 'none';
            }
        });
    </script>
@endsection

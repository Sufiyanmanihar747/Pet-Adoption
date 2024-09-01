@extends('admin.index')

@section('content')
    <div class="container" style="margin-top: 3rem!important;">
        {{ html()->form(isset($product) ? 'PUT' : 'POST', isset($product) ? route('admin.update', $product->id) : route('admin.store'))
            ->class('bg-white shadow-lg mt-5 pt-2 pb-3 rounded px-4 mx-5')
            ->open() }}
        @csrf

        @if (isset($product))
            @method('PUT')
        @endif

        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="{{ url()->previous() }}" class="text-decoration-none fs-5">Back</a>
            <h2 class="text-center text-dark m-0">{{ isset($product) ? 'Edit Pet' : 'Add Pet' }}</h2>
            <div></div>
        </div>

        <div class="form-row justify-content-center">
            <div class="row" id="imagePreviews" style="gap: 10px">
                @if (isset($product))
                    @php
                        $imageArray = explode(',', $product->images);
                    @endphp

                    <div class="image-gallery">
                        @foreach ($imageArray as $image)
                            <img src="{{ isset($image) ? url('storage/images/' . $image) : 'null' }}"
                                width="125" style="width: 120px; height: 120px; object-fit: contain; max-width: 100%; max-height: 100%;"
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
                {{ html()->text('name', isset($pets) ? $pets->name : null)
                    ->class('form-control h-75')
                    ->placeholder('Enter name')
                    ->style('text-transform: capitalize;')
                    ->required() }}
            </div>

            <div class="form-group col-md-5">
                <label class="font-weight-bold m-0" for="breed">Breed:</label>
                <span class="text-danger">
                    @error('breed')
                        {{ $message }}
                    @enderror
                </span>
                {{ html()->text('breed', isset($product) ? $product->breed : null)
                    ->class('form-control h-75')
                    ->placeholder('Enter breed')
                    ->required() }}
            </div>
        </div>

        <div class="form-row justify-content-center" style="gap: 35px">

            <div class="form-group col-md-5">
                <label class="font-weight-bold m-0" for="breed">Age:</label>
                <span class="text-danger">
                    @error('age')
                        {{ $message }}
                    @enderror
                </span>
                {{ html()->text('breed', isset($product) ? $product->age : null)
                    ->class('form-control h-75')
                    ->placeholder('Enter age')
                    ->required() }}
            </div>

            <div class="form-group col-md-5">
                <label class="font-weight-bold m-0" for="category_id">Category:</label>
                <span class="text-danger">
                    @error('category')
                        {{ $message }}
                    @enderror
                </span>
                {{ html()->select('category_id', "",)
                    ->class('form-control h-75')
                    ->placeholder('Select category')
                    ->required() }}
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
                {{ html()->textarea('description', isset($product) ? $product->description : null)
                    ->class('form-control h-75')
                    ->placeholder('Enter your description')
                    ->required() }}
            </div>

            <div class="form-group col-md-5">
                <label class="font-weight-bold m-0" for="images[]">Upload Image:</label>
                <i class="bi bi-info-circle" title="To select multiple ctrl+click"></i>
                {{ html()->file('images[]')
                    ->class('form-control h-75 image-input')
                    ->accept('image/*')
                    ->multiple()
                    ->id('imageInput') }}
            </div>
        </div>

        <div class="form-row justify-content-center" style="gap: 35px">
            <button type="submit"
                class="btn btn-outline-dark mt-3 col-md-5">{{ isset($product) ? 'Update' : 'Submit' }}</button>
        </div>
        {{ html()->form()->close() }}
    </div>
@endsection

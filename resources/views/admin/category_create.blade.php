@extends('admin.index')

@section('content')
    <div class="container" style="margin-top: 3rem!important;">
        {{ html()->form(isset($category) ? 'PUT' : 'POST', isset($category) ? route('category.update', $category->id) : route('category.store'))
            ->class('bg-white shadow-lg mt-5 pt-2 pb-3 rounded px-4 mx-5')
            ->acceptsFiles()
            ->open() }}

        {{ html()->hidden('_token', csrf_token()) }}

        @if(isset($category))
            {{ html()->hidden('_method', 'PUT') }}
        @endif

        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="{{ url()->previous() }}" class="text-decoration-none fs-5">Back</a>
            <h2 class="text-center text-dark m-0 ">{{ isset($category) ? 'Edit Category' : 'Add Category' }}</h2>
            <div></div>
        </div>

        @if (isset($category))
            <div class="row justify-content-center" id="imagePreviews" style="gap: 10px">
                <img src="{{ asset('storage/images/' . $category->image) }}" style="width: 200px" alt="">
            </div>
        @else
            <div class="row justify-content-center" id="imagePreviews" style="gap: 10px"></div>
        @endif

        <div class="form-row justify-content-center" style="gap: 35px">
            <div class="form-group col-md-5">
                {{ html()->label('Title', 'name')->class('font-weight-bold m-0') }}
                {{ html()->text('name')
                    ->class('h-75 form-control')
                    ->value(isset($category) ? $category->name : '')
                    ->required()
                    ->placeholder('Enter category')
                    ->attribute('autocomplete', 'name')
                    ->autofocus() }}
            </div>

            <div class="form-group col-md-5">
                {{ html()->label('Image', 'file')->class('font-weight-bold m-0') }}
                {{ html()->file('image')
                    ->class('h-75 form-control')
                    ->attribute('accept', 'image/*')
                    ->id('imageInput') }}
            </div>
        </div>
        <div class="form-row justify-content-center" style="gap: 35px">
            <div class="form-group col-md-5">
                {{ html()->label('Description', 'description')->class('font-weight-bold m-0') }}
                {{ html()->text('description')
                    ->class('h-75 form-control')
                    ->value(isset($category) ? $category->description : '')
                    ->required()
                    ->placeholder('Enter Description')
                    ->attribute('autocomplete', 'description')
                    ->autofocus() }}
            </div>
        </div>

        <div class="form-row justify-content-center" style="gap: 35px">
            {{ html()->button(isset($category) ? 'Update Category' : 'Add Category')
                ->type('submit')
                ->class('btn btn-outline-dark mt-3 col-md-5') }}
        </div>

        {{ html()->form()->close() }}
    </div>
@endsection

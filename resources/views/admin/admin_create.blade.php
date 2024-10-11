@extends('admin.index')

@section('content')
    <div class="container" style="margin-top: 3rem!important;">
        {{ html()->form(isset($user) ? 'PUT' : 'POST', isset($user) ? route('admin.update', $user->id) : route('admin.store'))->attribute('files', true)->class('bg-white shadow-lg mt-5 pt-2 pb-3 rounded px-4 mx-5')->open() }}

        {{ csrf_field() }}

        @if (isset($user))
            {{ method_field('PUT') }}
        @endif

        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="{{ url()->previous() }}" class="text-decoration-none fs-5">Back</a>
            <h2 class="text-center text-dark m-0 ">{{ isset($user) ? 'Edit User' : 'Add User' }}</h2>
            <div></div>
        </div>

        <div class="form-row justify-content-center" style="gap: 35px">
            <div class="form-group col-md-5">
                {{ html()->label('Name', 'name')->class('font-weight-bold m-0') }}
                {{ html()->text('name', isset($user) ? $user->name : null)->class('h-75 form-control' . ($errors->has('name') ? ' is-invalid' : ''))->placeholder('Enter admin name')->required()->autocomplete('name')->autofocus() }}
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group col-md-5">
                {{ html()->label('Email Address', 'email')->class('font-weight-bold m-0') }}
                {{ html()->email('email', isset($user) ? $user->email : null)->class('h-75 form-control' . ($errors->has('email') ? ' is-invalid' : ''))->placeholder('Enter admin email')->required()->autocomplete('email') }}
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-row justify-content-center mt-2" style="gap: 35px">
            <div class="form-group col-md-5">
                {{ html()->label('Password', 'password')->class('font-weight-bold m-0') }}
                {{ html()->password('password')->class('h-75 form-control' . ($errors->has('password') ? ' is-invalid' : ''))->placeholder('Enter admin password')->required()->autocomplete('new-password') }}
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group col-md-5">
                {{ html()->label('Confirm Password', 'password_confirmation')->class('font-weight-bold m-0') }}
                {{ html()->password('password_confirmation')->class('h-75 form-control')->placeholder('Confirm password') }}
            </div>
        </div>

        <div class="form-row justify-content-center" style="gap: 35px">
            <div class="form-group col-md-5">
                {{ html()->label('Role', 'role')->class('font-weight-bold m-0') }}
                {{ html()->select(
                        'role',
                        ['admin' => 'Super Admin', 'admin' => 'Admin', 'user' => 'User'],
                        isset($user) ? $user->role : null,
                    )->class('form-control h-75')->placeholder('Select Role') }}
                @error('role')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group col-md-5">
                {{ html()->label('Phone no', 'phone')->class('font-weight-bold m-0') }}
                {{ html()->input('tel', 'phone', isset($user) ? $user->phone : null)->class('h-75 form-control' . ($errors->has('phone') ? ' is-invalid' : ''))->placeholder('Enter phone no')->required()->attribute('autocomplete', 'phone') }}
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

        </div>

        <div class="form-row justify-content-center" style="gap: 35px">
            {{ html()->button(isset($user) ? 'Update' : 'Submit')->class('btn btn-outline-dark mt-3 col-md-5')->type('submit') }}
        </div>

        {{ html()->form()->close() }}
    </div>
@endsection

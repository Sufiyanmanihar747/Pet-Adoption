@extends('admin.index')

@section('content')
  <div class="container" style="margin-top: 3rem!important;">
    {{ html()->form('POST', '#')->class('bg-white shadow-lg mt-5 pt-2 pb-3 rounded px-4 mx-5')->open() }}
    @csrf

    <div class="d-flex justify-content-between align-items-center mb-4">
      <a href="{{ url()->previous() }}" class="text-decoration-none fs-5">Back</a>
      <h2 class="text-center text-dark m-0 ">Admin</h2>
      <div><a href="{{ route('admin.edit', $admin->id) }}">
          <i class="bi bi-pencil-square" style="font-size: 24px"></i></a></div>
    </div>

    <div class="form-row justify-content-center" style="gap: 35px">
      <div class="form-group col-md-5 ">
        <label for="name" class="font-weight-bold m-0">{{ __('Name') }}</label>
        {{ html()->text('name', $admin->name)
            ->class('h-75 form-control' . ($errors->has('name') ? ' is-invalid' : ''))
            ->attribute('required', true)
            ->attribute('autocomplete', 'name')
            ->attribute('autofocus', true)
            ->placeholder('Enter admin name')
            ->attribute('disabled', true) }}
        @error('name')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>

      <div class="form-group col-md-5 ">
        <label for="email" class="font-weight-bold m-0">{{ __('Email Address') }}</label>
        {{ html()->email('email', $admin->email)
            ->class('h-75 form-control' . ($errors->has('email') ? ' is-invalid' : ''))
            ->attribute('required', true)
            ->attribute('autocomplete', 'email')
            ->placeholder('Enter admin email')
            ->attribute('disabled', true) }}
        @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
    </div>

    <div class="form-row justify-content-center" style="gap: 35px">
      <div class="form-group col-md-5">
        <label class="font-weight-bold m-0" for="gender">Role:</label>
        {{ html()->select('role', [
            'superadmin' => 'Super Admin',
            'admin' => 'Admin',
            'user' => 'User'
          ], $admin->role)
          ->class('form-control h-75')
          ->placeholder('Select Role')
          ->attribute('disabled', true) }}
      </div>

    </div>
    {{ html()->form()->close() }}
  </div>
@endsection

@extends('admin.index')

@section('content')
    <div id="page-content-wrapper pl-0">
        <div class="container-fluid">
            {{-- <h2>Main Content</h2> --}}
            <div class="row">
                <div class="col-md-3 mb-4">
                    <a href="{{ route('admin.index') }}" class="nav-link">
                        <div class="box" id="box-1">
                            <h4>Total Users</h4>
                            <p class="box-value" id="box-value-1">
                                {{ Auth::user()->count() }}
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 mb-4">
                    <a href="{{ route('pets.index') }}" class="nav-link">
                        <div class="box" id="box-2">
                            <h4>Total Pets</h4>
                            <p class="box-value" id="box-value-2">{{ DB::table('pets')->count() }}</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 mb-4">
                    <a href="{{ route('category.index') }}" class="nav-link">
                        <div class="box" id="box-2">
                            <h4>Total Species</h4>
                            <p class="box-value" id="box-value-2">{{ DB::table('categories')->count() }}</p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
@endsection

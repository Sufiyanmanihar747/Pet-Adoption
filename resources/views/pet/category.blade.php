{{-- @dump($pets) --}}
@include('layouts.app')
<section id="pets-available" class="pets-section">
    <style>
        .pets-section {
            padding: 40px 0;
            /* background-color:#8a2be2; */
        }

        .filters {
            background-color: #f9f9f9;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .clear-filters {
            color: #ff7200;
            font-weight: bold;
            text-decoration: none;
            display: block;
            margin-bottom: 10px;
        }

        .filters .form-group {
            margin-bottom: 15px;
        }

        .filters .form-control {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .btn-warning {
            background-color: #ff7200;
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
        }

        .btn-warning:hover {
            background-color: #e66b00;
        }

        .pet-card {
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            margin-bottom: 20px;
            background-color: white;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            height: 400px !important;

        }

        .pet-card:hover {
            background-color: #8a2be2;
            color: white;
        }

        .pet-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            padding: 15px;
        }

        .posted-date {
            font-size: 12px;
            color: #777;
            float: right;
        }

        .card-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-text {
            font-size: 14px;
            margin-bottom: 10px;
        }

        .contact-details {
            font-size: 14px;
            margin-bottom: 10px;
        }

        .share {
            margin-bottom: 10px;
        }

        .share a {
            margin-right: 10px;
            color: #333;
        }

        .share a:hover {
            color: #ff7200;
        }

        .btn-link {
            color: #ff7200;
            text-decoration: none;
        }

        .btn-link:hover {
            text-decoration: underline;
        }

        a {
            text-decoration: none !important;
        }
    </style>
    <div class="container">
        @if ($pets->isEmpty())
            <h3 class="text-center">Comming soon.....</h3>
        @else
            <h3 class="text-center">Available for Adoption</h3>
        @endif
        <div class="row">

            <!-- Pet Cards -->
            <div class="col-md-12">
                <div class="row">
                    <!-- Pet Card -->
                    @foreach ($pets as $pet)
                        <div class="col-md-3">
                            <a href="{{ route('pets.show', $pet->id) }}">
                                <div class="card pet-card">
                                    @php
                                        $imageArray = explode(',', $pet->image);
                                    @endphp
                                    <img src="{{ url('storage/images/' . $imageArray[0]) }}" alt="{{ $pet->title }}"
                                        loading="lazy" class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $pet->name }}</h5>
                                        <p class="card-text">{{ $pet->address->address }}<br>{{ $pet->address->city }},
                                            {{ $pet->address->state }}</p>
                                        <p class="contact-details">
                                            Species: {{ $pet->categories->name }}<br>
                                            Breed: {{ $pet->breed }} <br>
                                            Age: {{ $pet->age }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

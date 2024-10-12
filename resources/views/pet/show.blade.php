@include('layouts.app')
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
<style>
    :root {
        --primary-color: #8a2be2;
        --secondary-color: #2c3e50;
        --background-color: #ecf0f1;
        --text-color: #333;
        --card-background: #fff;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Arial', sans-serif;
        line-height: 1.6;
        color: var(--text-color);
        background-color: var(--background-color);
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    header {
        background-color: var(--primary-color);
        color: white;
        padding: 1rem 0;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    header h1 {
        font-size: 2rem;
    }

    main {
        padding: 2rem 0;
    }

    .pet-profile {
        display: grid;
        grid-template-columns: 1fr;
        gap: 2rem;
        background-color: var(--card-background);
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 2rem;
        margin-bottom: 2rem;
    }

    @media (min-width: 768px) {
        .pet-profile {
            grid-template-columns: 1fr 1fr;
        }
    }

    .pet-image {
        width: 100%;
        max-width: 400px;
        height: auto;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .pet-info h2 {
        color: var(--secondary-color);
        margin-bottom: 1rem;
    }

    .pet-details {
        display: grid;
        grid-template-columns: auto 1fr 1fr 1fr;
        gap: 0.5rem 1rem;
        margin-bottom: 1rem;
    }

    .pet-details dt {
        font-weight: bold;
        color: var(--primary-color);
    }

    .pet-description {
        margin-top: 1rem;
        font-style: italic;
        color: #555;
    }

    .pet-stats {
        display: flex;
        justify-content: space-between;
        margin-top: 1rem;
        background-color: var(--background-color);
        padding: 1rem;
        border-radius: 8px;
    }

    .stat {
        text-align: center;
    }

    .stat-value {
        font-size: 1.5rem;
        font-weight: bold;
        color: var(--primary-color);
    }

    .stat-label {
        font-size: 0.875rem;
        color: var(--secondary-color);
    }

    footer {
        background-color: var(--secondary-color);
        color: white;
        text-align: center;
        padding: 1rem 0;
        margin-top: 2rem;
    }

    .pet-address {
        max-width: 524px;
    }
</style>

{{-- @dump($pet) --}}

<div class="container my-4">
    <div class="d-flex justify-content-between align-items-center">
        <a href="{{ url()->previous() }}" class="text-decoration-none fs-5" style="color: var(--primary-color);">Back</a>
        <h2 class="text-center text-dark m-0 "></h2>
        <div></div>
    </div>
    <section class="pet-profile">

        <div class="pet-image-container">
            <div id="productCarousel" class="carousel slide" data-interval="false">
                <div class="carousel-inner">
                    @php
                        $imageArray = explode(',', $pet->image);
                    @endphp
                    @foreach ($imageArray as $key => $image)
                        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                            <img src="{{ isset($image) ? url('storage/images/' . $image) : 'null' }}"
                                class="d-block w-100" style="" alt="{{ $image }}">
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            {{-- <img src="/placeholder.svg?height=400&width=400" alt="Buddy the Golden Retriever" class="pet-image"> --}}
        </div>
        <div class="pet-info">
            <h2>{{ $pet->name }}</h2>
            <dl class="pet-details">
                <dt>Breed:</dt>
                <dd>{{ $pet->breed }}</dd>
                <dt>Age:</dt>
                <dd>{{ $pet->age }} years</dd>
                <dt>Gender:</dt>
                <dd>{{ $pet->gender }}</dd>
                <dt>Species:</dt>
                <dd>{{ $pet->categories->name }}</dd>
                <dt>Status:</dt>
                <dd>{{ $pet->status }}</dd>
                <dt>Contact:</dt>
                <dd>{{ $pet->users->phone }}</dd>
                <dt>City:</dt>
                <dd>{{ $pet->address->city }}</dd>
                <dt>State:</dt>
                <dd>{{ $pet->address->state }}</dd>
            </dl>
            <p class="pet-description">
                {{ $pet->description }}
            </p>
            <div>
                <p>{{ $pet->address->address }}</p>
            </div>
            @if ($pet->status != 'adopted')
                <a href="{{ route('adopt.show', [$pet->id]) }}">
                    <button class="btn btn-dark w-100">
                        Adopt Now
                    </button>
                </a>
            @endif

        </div>
    </section>
</div>
@include('layouts.show')

<script>
    jQuery(document).ready(function($) {

        function updateCarousel(index) {
            $('#productCarousel').carousel(index);
        }

        function prevSlide() {
            $('#productCarousel').carousel('prev');
        }

        function nextSlide() {
            $('#productCarousel').carousel('next');
        }

        $('.row.justify-content-center img').click(function() {
            var index = $(this).index();
            updateCarousel(index);
        });

        $('.carousel-control-prev').click(function() {
            prevSlide();
        });

        $('.carousel-control-next').click(function() {
            nextSlide();
        });
    });
</script>

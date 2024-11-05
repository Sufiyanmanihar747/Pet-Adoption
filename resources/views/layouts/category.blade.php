<!-- Categories Section -->
<section class="categories-section py-5" id="category" style="background-color: #8a2be2">
    <div class="container">
        <center>
            <h2 class="text-white">All Categories</h2>
        </center>
        <div class="scrolling-wrapper">
            <div class="scrolling-content">
                @foreach ($categories as $category)
                    <div class="scrolling-card">
                        <div class="category-card bg-purple text-light p-4 rounded"
                            style="background-image: url('{{ url('storage/images/' . $category->image) }}');">
                            <div class="overlay">
                                <h3 style="text-transform: capitalize">{{ $category->name }}</h3>
                                <p class="category-description">{{ $category->description }}</p>
                                <a href="{{ route('category.categoryId', $category->id) }}"
                                    class="btn btn-outline-light">Explore <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach ($categories as $category)
                    <div class="scrolling-card">
                        <div class="category-card bg-purple text-light p-4 rounded"
                            style="background-image: url('{{ url('storage/images/' . $category->image) }}');">
                            <div class="overlay">
                                <h3 style="text-transform: capitalize">{{ $category->name }}</h3>
                                <p class="category-description">{{ $category->description }}</p>
                                <a href="{{ route('category.categoryId', $category->id) }}"
                                    class="btn btn-outline-light">Explore <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <style>
        .scrolling-wrapper {
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        .scrolling-content {
            display: flex;
            animation: scroll 30s linear infinite;
        }

        .scrolling-card {
            flex: 0 0 auto;
            margin-right: 20px;
        }

        .category-card {
            width: 300px;
            height: 300px;
            position: relative;
            overflow: hidden;
            background-size: cover;
            background-position: center;
        }

        .category-card .overlay {
            position: absolute;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
            width: 100%;
            text-align: center;
            padding: 10px;
        }

        .category-description {
            width: 100%;
            text-align: center;
            margin: 10px 0;
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        /* Pause animation on hover */
        .scrolling-wrapper:hover .scrolling-content {
            animation-play-state: paused;
        }

        /* Responsive styling for mobile view */
        @media (max-width: 767px) {
            .category-card {
                width: 150px;
                height: 150px;
            }

            .category-card h3 {
                font-size: 1rem;
            }

            .category-description {
                font-size: 0.875rem;
                width: 90%;
                margin: 0px;
            }

            .btn-outline-light {
                font-size: 0.875rem;
                padding: 5px 10px;
            }

            .scrolling-content {
                display: flex;
                animation: scroll 10s linear infinite;
            }
        }
    </style>
</section>

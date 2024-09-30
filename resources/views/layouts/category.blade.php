 <!-- Categories Section -->
 <section class="categories-section py-5" id="category" style="background-color: #8a2be2">
     {{-- @dd($categories) --}}
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
                            <p style="width: 300px;text-align:center">{{ $category->description }}</p>
                            <a href="{{route('category.show',$category->id)}}" class="btn btn-outline-light">Explore <i class="fas fa-arrow-right"></i></a>
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
                            <p style="width: 300px;text-align:center">{{ $category->description }}</p>
                            <a href="#" class="btn btn-outline-light">Explore <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
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
            }

            @keyframes scroll {
                0% {
                    transform: translateX(0);
                }
                100% {
                    transform: translateX(-100%);
                }
            }

            .scrolling-wrapper:hover .scrolling-content {
                animation-play-state: paused;
            }
        </style>

     </div>
 </section>

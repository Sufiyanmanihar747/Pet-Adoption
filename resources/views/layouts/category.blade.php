 <!-- Categories Section -->
 <section class="categories-section py-5">
     {{-- @dd($categories) --}}
     <div class="container">
         <div class="row">
             @foreach ($categories as $category)
             <div class="col-md-4 mb-4">
                <div class="category-card bg-purple text-light p-4 rounded" style="background-image: url('{{ url('storage/images/' . $category->image) }}');">
                    <div class="overlay">
                        <h3 style="text-transform: capitalize">{{ $category->name }}</h3>
                        <p>{{ $category->description }}</p>
                        <a href="#" class="btn btn-outline-light">Explore <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

             @endforeach

             {{-- <div class="col-md-4 mb-4">
                <div class="category-card bg-yellow text-dark p-4 rounded">
                    <h3>Reptiles</h3>
                    <p>Adopt a scaly and fascinating reptile.</p>
                    <a href="#" class="btn btn-outline-dark">Explore <i
                            class="fas fa-arrow-right"></i></a>
                    <div class="animal-icons">
                        <!-- Add animal icons here -->
                        <img src="reptile1.jpg" alt="Reptile" class="rounded-circle">
                        <img src="reptile2.jpg" alt="Reptile" class="rounded-circle">
                        <!-- More images... -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="category-card bg-pink text-light p-4 rounded">
                    <h3>Birds</h3>
                    <p>Adopt a beautiful and intelligent avian friend.</p>
                    <a href="#" class="btn btn-outline-light">Explore <i
                            class="fas fa-arrow-right"></i></a>
                    <div class="animal-icons">
                        <!-- Add animal icons here -->
                        <img src="bird1.jpg" alt="Bird" class="rounded-circle">
                        <img src="bird2.jpg" alt="Bird" class="rounded-circle">
                        <!-- More images... -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="category-card bg-pink text-light p-4 rounded">
                    <h3>Birds</h3>
                    <p>Adopt a beautiful and intelligent avian friend.</p>
                    <a href="#" class="btn btn-outline-light">Explore <i
                            class="fas fa-arrow-right"></i></a>
                    <div class="animal-icons">
                        <!-- Add animal icons here -->
                        <img src="bird1.jpg" alt="Bird" class="rounded-circle">
                        <img src="bird2.jpg" alt="Bird" class="rounded-circle">
                        <!-- More images... -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="category-card bg-purple text-light p-4 rounded">
                    <h3>Dogs</h3>
                    <p>Adopt a furry friend and loyal companion.</p>
                    <a href="#" class="btn btn-outline-light">Explore <i
                            class="fas fa-arrow-right"></i></a>
                    <div class="animal-icons">
                        <!-- Add animal icons here -->
                        <img src="dog1.jpg" alt="Dog" class="rounded-circle">
                        <img src="dog2.jpg" alt="Dog" class="rounded-circle">
                        <!-- More images... -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="category-card bg-yellow text-dark p-4 rounded">
                    <h3>Reptiles</h3>
                    <p>Adopt a scaly and fascinating reptile.</p>
                    <a href="#" class="btn btn-outline-dark">Explore <i
                            class="fas fa-arrow-right"></i></a>
                    <div class="animal-icons">
                        <!-- Add animal icons here -->
                        <img src="reptile1.jpg" alt="Reptile" class="rounded-circle">
                        <img src="reptile2.jpg" alt="Reptile" class="rounded-circle">
                        <!-- More images... -->
                    </div>
                </div>
            </div> --}}
         </div>
     </div>
 </section>

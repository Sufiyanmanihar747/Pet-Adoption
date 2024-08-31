    <section>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styles.css">
        <style>
            .navbar-brand img {
                margin-right: 10px;
            }

            .hero-section .display-4 {
                font-size: 2.5rem;
            }

            .hero-section .program-card img {
                width: 100%;
                height: auto;
                border-radius: 10px;
            }

            .hero-section .program-card h5 {
                margin-top: 15px;
                font-size: 1.25rem;
                font-weight: 600;
            }

            .categories-section {
                background-color: #111;
            }

            .category-card {
                position: relative;
                overflow: hidden;
                border-radius: 10px;
            }

            .category-card .animal-icons {
                position: absolute;
                bottom: 10px;
                left: 10px;
                display: flex;
            }

            .category-card .animal-icons img {
                width: 40px;
                height: 40px;
                border: 2px solid #fff;
                margin-right: 5px;
            }

            .bg-purple {
                background-color: #9b5de5;
            }

            .bg-yellow {
                background-color: #f9c74f;
            }

            .bg-pink {
                background-color: #f28482;
            }

            .btn-outline-light,
            .btn-outline-dark {
                border-width: 2px;
                font-weight: 600;
            }
        </style>

        <!-- Navbar -->
        {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="logo.png" alt="PetPalz" width="30"> PetPalz</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Our program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-light" href="#">Adopt now</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> --}}

        <!-- Hero Section -->
        <section class="hero-section bg-dark text-light py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1 class="display-4 fw-bold">Bring home a new best friend by adopting</h1>
                        <p class="lead">Adopt a furry companion and add them to your family as your new best friend!
                        </p>
                        <div>
                            <a href="#" class="btn btn-light me-3">Adopt now</a>
                            <a href="#" class="btn btn-outline-light">Donate</a>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <div class="program-card">
                            <img src="cat.jpg" alt="Adopted Cat" class="img-fluid rounded">
                            <h5 class="mt-4">From abandoned to adored: The journey of a homeless pet</h5>
                            <a href="#" class="btn btn-light mt-2">Watch how our program works <i
                                    class="fas fa-play-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Categories Section -->
        <section class="categories-section py-5">
            <div class="container">
                <div class="row">
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
                </div>
            </div>
        </section>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </section>

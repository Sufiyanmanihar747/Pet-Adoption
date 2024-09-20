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
                width: 70%;
                height: auto;
                border-radius: 10px;
            }

            .hero-section .program-card h5 {
                margin-top: 15px;
                font-size: 1.25rem;
                font-weight: 600;
            }

            .categories-section {
                /* background-color: #111; */
            }

            .category-card {
                background-size: cover;
                background-position: center;
                position: relative;
                overflow: hidden;
                height: 300px;
            }

            .category-card .overlay {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                backdrop-filter: blur(10px);
                /* Slightly transparent black */
                color: white;
                opacity: 0;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                transition: opacity 0.3s ease-in-out;
            }

            .category-card:hover .overlay {
                opacity: 1;
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

        <!-- Hero Section -->
        <section class="hero-section bg-white text-dark py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1 class="display-4 fw-bold">Bring home a new best friend by adopting</h1>
                        <p class="lead">Adopt a furry companion and add them to your family as your new best friend!
                        </p>
                        <div>
                            <a href="#" class="btn btn-dark me-3">Adopt now</a>
                            <a href="#" class="btn btn-outline-dark">Donate</a>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <div class="program-card">
                            <img src="{{ asset('logos/3d-dog-and-human.png') }}" alt="Adopted Cat" class="img-fluid rounded">
                            <h5 class="mt-4">From abandoned to adored: The journey of a homeless pet</h5>
                            <a href="#" class="btn btn-dark mt-2">Watch how our program works <i
                                    class="fas fa-play-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </section>

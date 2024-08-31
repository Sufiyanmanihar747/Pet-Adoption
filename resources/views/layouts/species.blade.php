<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles.css">

<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #111;
    }

    .bg-light-yellow {
        background-color: #f9f871;
        height: 100vh;
    }

    .navbar-brand img {
        margin-right: 10px;
    }

    .list-group-item {
        border: none;
        padding: 15px;
        margin-bottom: 10px;
        background-color: #fff;
        border-radius: 10px;
        transition: transform 0.2s ease-in-out;
    }

    .list-group-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .btn-outline-light,
    .btn-light {
        border-width: 2px;
        font-weight: 600;
    }

    .btn-outline-dark,
    .btn-dark {
        font-weight: 600;
    }

    .rounded-circle {
        border: 2px solid #111;
    }
</style>

<div class="container-fluid">
    <div class="row g-0">
        <!-- Left Section -->
        <div class="col-md-6 bg-dark text-light p-5">
            <div class="d-flex flex-column h-100 justify-content-between">
                <div>
                    <a class="navbar-brand text-light mb-4" href="#"><img src="logo.png" alt="PetPalz"
                            width="30"> PetPalz</a>
                    <h2 class="fw-bold">Join the scale squad: <br> Adopt a reptile today</h2>
                    <p>Get ready to fall in love with a fascinating cold-blooded creature when you adopt a reptile.
                    </p>
                </div>
                <div>
                    <h4 class="mb-3">Species of reptile</h4>
                    <div class="d-flex justify-content-between mb-4">
                        <button class="btn btn-outline-light w-100 me-2" type="button">Frogs</button>
                        <button class="btn btn-outline-light w-100 me-2" type="button">Lizards</button>
                        <button class="btn btn-light w-100 me-2" type="button">Turtles</button>
                        <button class="btn btn-outline-light w-100" type="button">Other</button>
                    </div>
                    <h4 class="mb-3">Turtle type</h4>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-outline-light w-100 me-2" type="button">Red-Eared Slider</button>
                        <button class="btn btn-light w-100 me-2" type="button">Ninja Turtle</button>
                        <button class="btn btn-outline-light w-100 me-2" type="button">Eastern Box Turtle</button>
                        <button class="btn btn-outline-light w-100" type="button">Spotted Turtle</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Right Section -->
        <div class="col-md-6 bg-light-yellow p-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="text-dark">Ninja Turtle</h4>
                <button class="btn btn-outline-dark" type="button"><i class="fas fa-th-large"></i></button>
            </div>
            <p class="text-dark">Found pets: 4</p>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                    <img src="https://plus.unsplash.com/premium_photo-1676389281733-aaefab0e7907?q=80&w=1372&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Leonardo" class="img-fluid rounded-circle me-3" style="width: 80px;">
                    <div>
                        <h5 class="mb-1 text-dark">Leonardo</h5>
                        <p class="mb-1 text-dark">The disciplined leader of the turtles who wields two katanas.</p>
                    </div>
                    <button class="btn btn-dark ms-auto">Adopt</button>
                </a>
                <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                    <img src="raphael.jpg" alt="Raphael" class="img-fluid rounded-circle me-3" style="width: 80px;">
                    <div>
                        <h5 class="mb-1 text-dark">Raphael</h5>
                        <p class="mb-1 text-dark">The hot-headed rebel of the group who wields twin sai.</p>
                    </div>
                    <button class="btn btn-dark ms-auto">Adopt</button>
                </a>
                <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                    <img src="michelangelo.jpg" alt="Michelangelo" class="img-fluid rounded-circle me-3"
                        style="width: 80px;">
                    <div>
                        <h5 class="mb-1 text-dark">Michelangelo</h5>
                        <p class="mb-1 text-dark">The free-spirited jokester of the team who wields nunchucks.</p>
                    </div>
                    <button class="btn btn-dark ms-auto">Adopt</button>
                </a>
                <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                    <img src="donatello.jpg" alt="Donatello" class="img-fluid rounded-circle me-3" style="width: 80px;">
                    <div>
                        <h5 class="mb-1 text-dark">Donatello</h5>
                        <p class="mb-1 text-dark">The tech-savvy genius who wields a bo staff.</p>
                    </div>
                    <button class="btn btn-dark ms-auto">Adopt</button>
                </a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

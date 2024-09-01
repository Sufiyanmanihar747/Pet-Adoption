<section id="pets-available" class="pets-section">
    <style>
        .pets-section {
    padding: 40px 0;
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
    box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
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

    </style>
    <div class="container">
        <h2 class="text-center">Dogs Available For Adoption</h2>
        <div class="row">
            <!-- Sidebar Filters -->
            <div class="col-md-3">
                <div class="filters">
                    <a href="#" class="clear-filters">Clear all filters</a>
                    <div class="form-group">
                        <label for="pet-type">Pet type</label>
                        <select id="pet-type" class="form-control">
                            <option>Dog</option>
                            <option>Cat</option>
                            <option>Bird</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="state">Search by State</label>
                        <select id="state" class="form-control">
                            <option>Select state here...</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="city">Search by City</label>
                        <select id="city" class="form-control">
                            <option>Select city here...</option>
                        </select>
                    </div>
                    <button class="btn btn-warning btn-block">Apply Filter</button>
                </div>
            </div>

            <!-- Pet Cards -->
            <div class="col-md-9">
                <div class="row">
                    <!-- Pet Card -->
                    <div class="col-md-4">
                        <div class="card pet-card">
                            <img src="dog1.jpg" class="card-img-top" alt="Max">
                            <div class="card-body">
                                <span class="posted-date">Posted on: 25 Aug 2024</span>
                                <h5 class="card-title">Max</h5>
                                <p class="card-text">Male, Adolescence<br>New Delhi, Delhi</p>
                                <p class="contact-details">
                                    <strong>Contact details -</strong><br>
                                    Name: Kamalpreet<br>
                                    Number: <a href="#">Contact Now</a>
                                </p>
                                <div class="share">
                                    <strong>Share with friends -</strong><br>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-whatsapp"></i></a>
                                </div>
                                <a href="#" class="btn btn-link">See more details</a>
                            </div>
                        </div>
                    </div>
                    <!-- Repeat the above card for other pets -->
                </div>
            </div>
        </div>
    </div>
</section>

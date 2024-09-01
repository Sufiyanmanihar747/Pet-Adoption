<section id="adopt-love" class="adopt-love-section">
    <style>
        .adopt-love-section {
    background-color: #ff7200;
    padding: 60px 0;
    position: relative;
    overflow: hidden;
    color: white;
}

.hearts-container {
    position: relative;
    height: 200px;
    margin-bottom: 30px;
}

.big-heart {
    width: 250px;
    height: 250px;
    background: white;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #ff7200;
    margin: 0 auto;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

.big-heart h3 {
    margin-bottom: 0;
}

.big-heart p {
    font-size: 1.2em;
}

.adopt-content h1 {
    font-weight: bold;
    margin-bottom: 20px;
}

.adopt-content p {
    font-size: 1.1em;
    margin-bottom: 30px;
}

.adopt-content a {
    font-weight: bold;
}

.adopt-love-section .btn-light {
    background-color: white;
    color: #ff7200;
    border: none;
    padding: 10px 20px;
    border-radius: 25px;
}

.adopt-love-section .btn-light:hover {
    background-color: #f5f5f5;
}

.hearts-container::before,
.hearts-container::after {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background-image: url('heart-shape-url'); /* Replace with the actual heart shape image URL */
    background-repeat: no-repeat;
    background-size: contain;
}

.hearts-container::before {
    top: -50px;
    left: -50px;
}

.hearts-container::after {
    bottom: -50px;
    right: -50px;
}

    </style>
    <div class="container text-center">
        <div class="hearts-container">
            <div class="big-heart">
                <h3>ThePetNest Foundation</h3>
                <p>Adopt, Don’t Shop</p>
            </div>
        </div>
        <div class="adopt-content">
            <h1>#AdoptLove</h1>
            <p>Approximately 1478 dogs & cats die every day on roads in India. <a href="#">ThePetNest</a> is on a mission to provide every dog and cat a home before 2035. It’s just one of the many ways ThePetNest! gives back and helps you become a part of something larger. Join ThePetStar Community and help set up Pet houses in your surrounding for strays.</p>
            <a href="#" class="btn btn-light btn-lg">Adopt a pet</a>
        </div>
    </div>
</section>

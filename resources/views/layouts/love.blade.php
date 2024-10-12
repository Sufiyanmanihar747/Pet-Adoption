<section id="adopt-love" class="adopt-love-section">
    <style>
        .adopt-love-section {
            padding: 60px 0;
            position: relative;
            overflow: hidden;
            color: #8a2be2;
        }

        .hearts-container {
            position: relative;
            height: 200px;
            margin-bottom: 30px;
        }

        .big-heart {
            position: relative;
            width: 300px;
            height: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: white;
            text-align: center;
        }

        .big-heart::before,
        .big-heart::after {
            content: "";
            position: absolute;
            top: 0;
            width: 150px;
            height: 240px;
            background: #8a2be2;
            border-radius: 150px 150px 0 0;
        }

        .big-heart::before {
            left: 150px;
            transform: rotate(-45deg);
            transform-origin: 0 100%;
        }

        .big-heart::after {
            left: 0;
            transform: rotate(45deg);
            transform-origin: 100% 100%;
        }

        .content {
            position: relative;
            z-index: 1;
            padding: 20px;
            bottom: 37px;
        }

        h3 {
            font-size: 24px;
            margin: 0 0 10px;
        }

        p {
            font-size: 18px;
            margin: 0;
        }

        @media (max-width: 400px) {
            .big-heart {
                width: 240px;
                height: 240px;
            }

            .big-heart::before,
            .big-heart::after {
                width: 120px;
                height: 192px;
            }

            .big-heart::before {
                left: 120px;
            }

            h3 {
                font-size: 20px;
            }

            p {
                font-size: 16px;
            }
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

        .hearts-container{
            display: flex;
            justify-content: center;
        }

    </style>
    <div class="container text-center">
        <div class="hearts-container">
            <div class="big-heart">
                <div class="content">
                    <h3>PawFound Foundation</h3>
                    <p>Adopt, Don't Shop</p>
                </div>
            </div>
        </div>
        <div class="adopt-content">
            <h1>#AdoptLove</h1>
            <p>Approximately 1478 dogs & cats die every day on roads in India. <a href="#">PawFound</a> is on a
                mission to provide every dog and cat a home before 2035. It’s just one of the many ways PawFound!
                gives back and helps you become a part of something larger. Join ThePetStar Community and help set up
                Pet houses in your surrounding for strays.</p>
        </div>
    </div>
</section>

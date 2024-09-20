<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Profile: Buddy</title>
    <style>
        :root {
            --primary-color: #3498db;
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
            grid-template-columns: auto 1fr;
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
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Pet Profile</h1>
        </div>
    </header>

    <main class="container">
        <section class="pet-profile">
            <div class="pet-image-container">
                <img src="/placeholder.svg?height=400&width=400" alt="Buddy the Golden Retriever" class="pet-image">
            </div>
            <div class="pet-info">
                <h2>Meet Buddy</h2>
                <dl class="pet-details">
                    <dt>Breed:</dt>
                    <dd>Golden Retriever</dd>
                    <dt>Age:</dt>
                    <dd>3 years</dd>
                    <dt>Color:</dt>
                    <dd>Golden</dd>
                    <dt>Weight:</dt>
                    <dd>65 lbs</dd>
                </dl>
                <p class="pet-description">
                    Buddy is a friendly and energetic Golden Retriever who loves to play fetch and go for long walks. He's great with children and other dogs, making him the perfect family pet. Buddy is always eager to learn new tricks and enjoys being the center of attention.
                </p>
                <div class="pet-stats">
                    <div class="stat">
                        <div class="stat-value">95%</div>
                        <div class="stat-label">Friendliness</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">80%</div>
                        <div class="stat-label">Energy</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">90%</div>
                        <div class="stat-label">Intelligence</div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2023 Pet Profile. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>

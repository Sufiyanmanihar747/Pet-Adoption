<section id="horizontal-scroll" class="mt-4">
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        .scroll-container {
            height: 100vh;
            display: flex;
            align-items: center;
            overflow: hidden;
            position: relative;
        }

        .image-container {
            display: flex;
            gap: 32px;
            padding: 32px;
        }

        .image-container img {
            height: 400px;
            width: 600px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>

    <div class="scroll-container">
        <div class="image-container">
            <img src="https://cdn.pixabay.com/photo/2024/02/28/07/42/european-shorthair-8601492_640.jpg" alt="Image 1">
            <img src="https://cdn.pixabay.com/photo/2024/02/28/07/42/european-shorthair-8601492_640.jpg" alt="Image 2">
            <img src="https://cdn.pixabay.com/photo/2024/02/28/07/42/european-shorthair-8601492_640.jpg" alt="Image 3">
            <img src="https://cdn.pixabay.com/photo/2024/02/28/07/42/european-shorthair-8601492_640.jpg" alt="Image 4">
            <img src="https://cdn.pixabay.com/photo/2024/02/28/07/42/european-shorthair-8601492_640.jpg" alt="Image 5">
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <script>
        gsap.registerPlugin(ScrollTrigger);

        const container = document.querySelector('.scroll-container');
        const images = document.querySelector('.image-container');

        // Ensure proper calculation of totalWidth
        const totalWidth = images.scrollWidth;
        const windowWidth = window.innerWidth;

        if (container && images) {
            gsap.to(images, {
                x: () => -(totalWidth - windowWidth),
                ease: "none",
                scrollTrigger: {
                    trigger: container,
                    start: "top top",
                    end: () => `+=${totalWidth - windowWidth}`, // Adjusted based on actual width
                    scrub: true, // Ensures smooth scrolling interaction
                    pin: true, // Pins the container while scrolling
                },
            });
        }
    </script>
</section>

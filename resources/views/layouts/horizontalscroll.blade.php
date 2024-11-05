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
            height: 650px;
            width: 700px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* margin-top: 70px; */

        }

        @media (max-width: 767px) {}
    </style>

    <div class="scroll-container">
        <div class="image-container">
            <img src="https://images.unsplash.com/photo-1444212477490-ca407925329e?q=80&w=2128&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Image 1">
            <img src="https://images.unsplash.com/photo-1518791841217-8f162f1e1131?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Image 2">
            <img src="https://images.unsplash.com/photo-1629898569904-669319348211?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Image 3">
            <img src="https://images.unsplash.com/photo-1518001335271-e104dd5f03f8?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Image 4">
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

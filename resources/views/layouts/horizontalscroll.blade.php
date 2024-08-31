<section id="horizontal-scroll" class="mt-4">
    {{-- HORIZONTAL --}}
    {{-- <link href='//fonts.googleapis.com/css?family=Signika+Negative:300,400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://codepen.io/GreenSock/pen/ZEGdQLM/7ba936b34824fefdccfe2c6d9f0b740b.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/prettify/r298/prettify.min.css'>
    <style>
        /* Add your custom styles here */
        .first-nav {
            background-color: #fff;
            /* Navbar background color */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            /* Optional: Add a shadow effect */
            --bs-navbar-padding-x: 0;
            --bs-navbar-padding-y: 0.5rem;
            --bs-navbar-color: rgba(var(--bs-emphasis-color-rgb), 0.65);
            --bs-navbar-hover-color: rgba(var(--bs-emphasis-color-rgb), 0.8);
            --bs-navbar-disabled-color: rgba(var(--bs-emphasis-color-rgb), 0.3);
            --bs-navbar-active-color: rgba(var(--bs-emphasis-color-rgb), 1);
            --bs-navbar-brand-padding-y: 0.32rem;
            --bs-navbar-brand-margin-end: 1rem;
            --bs-navbar-brand-font-size: 1.125rem;
            --bs-navbar-brand-color: rgba(var(--bs-emphasis-color-rgb), 1);
            --bs-navbar-brand-hover-color: rgba(var(--bs-emphasis-color-rgb), 1);
            --bs-navbar-nav-link-padding-x: 0.5rem;
            --bs-navbar-toggler-padding-y: 0.25rem;
            --bs-navbar-toggler-padding-x: 0.75rem;
            --bs-navbar-toggler-font-size: 1.125rem;
            --bs-navbar-toggler-icon-bg: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%2833, 37, 41, 0.75%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e);
            --bs-navbar-toggler-border-color: rgba(var(--bs-emphasis-color-rgb), 0.15);
            --bs-navbar-toggler-border-radius: var(--bs-border-radius);
            --bs-navbar-toggler-focus-width: 0.25rem;
            --bs-navbar-toggler-transition: box-shadow 0.15s ease-in-out;
            position: relative;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            padding: var(--bs-navbar-padding-y) var(--bs-navbar-padding-x);
        }

        ::-webkit-scrollbar {
            width: 0;
        }

        .navbar-icon {
            font-size: 30px;
            color: black;
            margin: 0 10px;
        }

        .navbar-icon.active {
            color: #405de6;
        }

        .mobile-logo {
            display: none;
        }

        @media (min-width: 992px) {
            .first-nav {
                display: none;
            }
        }

        @media (max-width: 991.98px) {
            .first-nav {
                position: fixed;
                bottom: 0;
                width: 100%;
            }

            .navbar {
                display: none;
            }

            body {
                padding: 0;
            }

            .main-padding {
                padding: 40px 0px !important;
            }

            .mobile-logo {
                display: flex;
                justify-content: space-between;
                align-items: center;
                position: fixed;
                width: 100vw;
                z-index: 10000;
                top: 0;
                backdrop-filter: blur(10px);
                background-color: #ffffff69;
            }
        }
    </style> --}}
    <style>
        #smooth-wrapper {
            overflow-x: hidden;
            margin: 0;
        }

        /* .row,
        .section,
        section {
            position: relative;
            overflow: hidden;
        } */

        /* .section,
        section {
            padding: 80px 0;
            text-align: center;
        } */

        /* section:nth-child(1) {
            background: blue;
            color: white;
        } */

        /* section:nth-child(3) {
            background: green;
            color: white;
        } */

        .container-fluid {
            width: 100%;
            padding-right: 0;
            padding-left: 0;
            margin-right: auto;
            margin-left: auto;
        }

        .horiz-gallery-strip,
        .horiz-gallery-wrapper {
            display: flex;
            flex-wrap: nowrap;
            will-change: transform;
            position: relative;
        }

        .project-wrap {
            width: 50vw;
            padding: 2rem;
            box-sizing: content-box;
        }

        .project-wrap img {
            width: 100%;
            height: auto;
        }
    </style>

    <!-- partial:index.partial.html -->
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <section id="portfolio">
                <div class="container-fluid">
                    <div class="horiz-gallery-wrapper">
                        <div class="horiz-gallery-strip">
                            <div class="project-wrap" data-speed-x="1.2">
                                <img
                                    src="https://images.unsplash.com/photo-1570018144715-43110363d70a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2531&q=80">
                                <h2>Image 1</h2>
                            </div>
                            <div class="project-wrap" data-speed-x="0.8">
                                <img
                                    src="https://images.unsplash.com/photo-1570824104967-27599c232b4b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2559&q=80">
                                <h2>Image 2</h2>
                            </div>
                            <div class="project-wrap" data-speed-x="1.1">
                                <img
                                    src="https://images.unsplash.com/photo-1570018144715-43110363d70a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2531&q=80">
                                <h2>Image 3</h2>
                            </div>
                            <div class="project-wrap" data-speed-x="0.9">
                                <img
                                    src="https://images.unsplash.com/photo-1570824104967-27599c232b4b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2559&q=80">
                                <h2>Image 4</h2>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="horiz-gallery-wrapper">
                        <div class="horiz-gallery-strip">
                            <div class="project-wrap">
                                <img
                                    src="https://images.unsplash.com/photo-1570018144715-43110363d70a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2531&q=80">
                                <h2>Image 1</h2>
                            </div>
                            <div class="project-wrap">
                                <img
                                    src="https://images.unsplash.com/photo-1570824104967-27599c232b4b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2559&q=80">
                                <h2>Image 2</h2>
                            </div>
                            <div class="project-wrap">
                                <img
                                    src="https://images.unsplash.com/photo-1570018144715-43110363d70a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2531&q=80">
                                <h2>Image 3</h2>
                            </div>
                            <div class="project-wrap">
                                <img
                                    src="https://images.unsplash.com/photo-1570824104967-27599c232b4b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2559&q=80">
                                <h2>Image 4</h2>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="horiz-gallery-wrapper">
                        <div class="horiz-gallery-strip">
                            <div class="project-wrap">
                                <img
                                    src="https://images.unsplash.com/photo-1570018144715-43110363d70a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2531&q=80">
                                <h2>Image 1</h2>
                            </div>
                            <div class="project-wrap">
                                <img
                                    src="https://images.unsplash.com/photo-1570824104967-27599c232b4b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2559&q=80">
                                <h2>Image 2</h2>
                            </div>
                            <div class="project-wrap">
                                <img
                                    src="https://images.unsplash.com/photo-1570018144715-43110363d70a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2531&q=80">
                                <h2>Image 3</h2>
                            </div>
                            <div class="project-wrap">
                                <img
                                    src="https://images.unsplash.com/photo-1570824104967-27599c232b4b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2559&q=80">
                                <h2>Image 4</h2>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </section>

        </div>
    </div>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js'></script>
    <script src='https://codepen.io/GreenSock/pen/ZEGdQLM/7ba936b34824fefdccfe2c6d9f0b740b.js'></script>
    <script src='https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js?lang=css&amp;skin=sunburst'>
    </script>
    <script src='https://unpkg.co/gsap@3/dist/gsap.min.js'></script>
    <script src='https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js'></script>
    <script src='https://assets.codepen.io/16327/ScrollSmoother.min.js'></script>
    <script src="./script.js"></script>
    <script>
        gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

        //Comment me out to see issue
        const smoother = ScrollSmoother.create({
            wrapper: "#smooth-wrapper",
            content: "#smooth-content",
            smooth: 2,
            normalizeScroll: true,
            ignoreMobileResize: true,
            effects: true,
            preventDefault: true
        });



        //Horizontal Scroll Galleries
        if (document.getElementById("portfolio")) {
            const horizontalSections = gsap.utils.toArray('.horiz-gallery-wrapper')

            horizontalSections.forEach(function(sec, i) {

                const pinWrap = sec.querySelector(".horiz-gallery-strip");

                let pinWrapWidth;
                let horizontalScrollLength;

                function refresh() {
                    pinWrapWidth = pinWrap.scrollWidth;
                    horizontalScrollLength = pinWrapWidth - window.innerWidth;
                }

                // window.addEventListener("load", function () {
                refresh();
                // Pinning and horizontal scrolling
                let scrollTween = gsap.to(pinWrap, {
                    scrollTrigger: {
                        scrub: true,
                        trigger: sec,
                        pin: sec,
                        start: "center center",
                        end: () => `+=${pinWrapWidth}`,
                        invalidateOnRefresh: true
                    },
                    x: () => -horizontalScrollLength,
                    ease: "none"
                });

                pinWrap.querySelectorAll("[data-speed-x]").forEach((el, i) => {
                    let speed = parseFloat(el.getAttribute("data-speed-x"));
                    gsap.to(el, {
                        x: () => (1 - speed) * (window.innerWidth + el.offsetWidth),
                        ease: "none",
                        scrollTrigger: {
                            containerAnimation: scrollTween,
                            trigger: el,
                            onRefresh: self => {
                                let start = Math.max(0, self.start);
                                self.setPositions(start, start + (self.end - self.start) / Math
                                    .abs(speed)); // adjust for how long it'll stay in view
                                self.animation.progress(0);
                            },
                            scrub: true
                        }
                    });
                });


                ScrollTrigger.addEventListener("refreshInit", refresh);
                // });
            });
        }
    </script>
</section>

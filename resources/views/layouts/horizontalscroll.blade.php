<section id="horizontal-scroll" class="mt-4">
    {{-- HORIZONTAL --}}

    <style>
        #smooth-wrapper {
            overflow-x: hidden;
            margin: 0;
        }

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
                                    src="https://images.unsplash.com/photo-1570018144715-43110363d70a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2531&q=80">
                                <h2>Image 2</h2>
                            </div>
                            <div class="project-wrap" data-speed-x="1.1">
                                <img
                                    src="https://images.unsplash.com/photo-1570018144715-43110363d70a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2531&q=80">
                                <h2>Image 3</h2>
                            </div>
                            <div class="project-wrap" data-speed-x="0.9">
                                <img
                                    src="https://images.unsplash.com/photo-1570018144715-43110363d70a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2531&q=80">
                                <h2>Image 4</h2>
                            </div>
                        </div>

                    </div>
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            margin: 0px;
            padding: 0px;
            background-color: #000 !important;
            color: #fff;
        }

        /* .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            font-family: -apple-system, BlinkMacSystemFont, sans-serif;
        }

        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #000;
            color: #fff;
            text-align: center;
        }

        .product-image {
            max-width: 600px;
            opacity: 0;
            transform: translateY(50px);
            transition: all 1s ease;
        }

        .product-image.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .features {
            padding: 100px 0;
        }

        .feature {
            margin: 50px 0;
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .feature.visible {
            opacity: 1;
            transform: translateY(0);
        } */
        @media screen and (max-width:990) {
            element.style {
                opacity: 1;
                transform: matrix(1, 0, 0, 1, 0, 0);
            }


        }

        @media only screen and (max-width: 734px) {
            .hero-headline {
                font-size: 60px;
            }
        }

        @media only screen and (max-width: 1068px) and (orientation: portrait) {}

        .hero-headline {
            font-size: 190px;
            line-height: 1;
            font-weight: 700;
            font-family: SF Pro Display, SF Pro Icons, Helvetica Neue, Helvetica, Arial, sans-serif;
            line-height: .7;
            letter-spacing: -0.0210526316em;
            position: relative;
            left: -0.25vw;
            margin-top: 0;
            margin-bottom: 0;
        }

        @media screen and (min-width:991px) {




            @media only screen and (min-width: 735px) {
                .hero-headline {
                    font-size: 14.6vw;
                }
            }

            .hero-headline {
                /* font-size: 190px; */
                font-size: 233px;
                line-height: 1;
                font-weight: 700;
                font-family: SF Pro Display, SF Pro Icons, Helvetica Neue, Helvetica, Arial, sans-serif;
                line-height: .7;
                letter-spacing: -0.0210526316em;
                position: relative;
                /* left: 3.75vw; */
                left: 1.75vw;
                margin-top: 23rem;
                margin-bottom: 0;
                color: white !important;
            }

        }

        @keyframes zoomIn {
            from {
                transform: scale(0.5);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <?php include('header.php') ?>







    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- <div style="position: relative; text-align: center;">
                    <h1 class="hero-headline">AirPods Pro</h1>
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); display: flex; align-items: center; gap: 150px;">
                        <img src="assets/images/left.png" alt="apple left" width="200px" height="auto">
                        <img src="assets/images/right.png" alt="apple right" width="200px" height="auto">
                    </div>
                </div> -->
                <div style="position: relative; text-align: center; animation: zoomIn 3s ease-in-out;">
                    <h1 class="hero-headline">AirPods Pro</h1>
                    <div style="position: absolute; top: 5%; left: 54%; transform: translate(-50%, -50%); display: flex; align-items: center; gap: 280px;">
                        <img src="assets/images/left.png" alt="apple left" width="250px" height="auto">
                        <img src="assets/images/right.png" alt="apple right" width="250px" height="auto">
                    </div>
                </div>


            </div>
        </div>
    </div>



    <!-- <div style="position: relative; text-align: center;">
                    <h1 class="hero-headline">AirPods Pro</h1>
                    <div style="position: absolute; top: 30%; left: 55%; transform: translate(-50%, -50%); display: flex; align-items: center; gap: 150px;">
                        <img src="assets/images/left.png" alt="apple left" width="250px" height="auto">
                        <img src="assets/images/right.png" alt="apple right" width="250px" height="auto">
                    </div>
                </div> -->




    <!-- <div style="position: relative; text-align: center;">
                    <h1 class="hero-headline">AirPods Pro</h1>
                    <div style="position: absolute; top: 5%; left: 55%; transform: translate(-50%, -50%); display: flex; align-items: center; gap: 150px;">
                        <img src="assets/images/left.png" alt="apple left" width="250px" height="auto">
                        <img src="assets/images/right.png" alt="apple right" width="250px" height="auto">
                    </div>
                </div> -->
    <!-- <div class="container">
        <div class="hero">
            <div>
                <h1>AirPods Pro</h1>
                <p>Magic like you've never heard.</p>
                <img src="https://www.apple.com/v/airpods/shared/compare/d/images/compare/compare_airpods_pro__e9uzt0mzviem_large.png"
                    class="product-image" alt="AirPods Pro">
            </div>
        </div>

        <div class="features">
            <div class="feature">
                <h2>Active Noise Cancellation</h2>
                <p>Immerse yourself in music with advanced noise cancellation technology.</p>
            </div>
            <div class="feature">
                <h2>Adaptive EQ</h2>
                <p>Automatically tunes music to the shape of your ear.</p>
            </div>
            <div class="feature">
                <h2>Spatial Audio</h2>
                <p>Sound moves around you in 3D space.</p>
            </div>
        </div>
    </div> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        // Scroll animation
        function checkScroll() {
            const elements = document.querySelectorAll('.product-image, .feature');
            elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                if (elementTop < window.innerHeight * 0.75) {
                    element.classList.add('visible');
                }
            });
        }

        window.addEventListener('scroll', checkScroll);
        checkScroll(); // Initial check
    </script>
</body>

</html>
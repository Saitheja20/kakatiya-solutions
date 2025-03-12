<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kakatiya Solutions</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .gradient-border {
            border-left: 15px solid transparent;
            border-image: linear-gradient(to right, #65e0da, #1776ef) 1;
            border-radius: 15px;
        }

        .bouncing-dots {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 15px;
        }

        .dot {
            width: 5px;
            height: 5px;
            margin: 0 5px;
            /* background-color: rgb(255, 0, 0); */
            background-color:rgb(43, 250, 250);

            
            border-radius: 50%;
            /* animation: bounce 1.5s 2; */
            animation: bounce 1.5s infinite;

            /* position: relative; */
            /* z-index: 1; */
            /* overflow: hidden; */
        }
        .dot:hover {
            /* width: 5px;
            height: 5px;
            margin: 0 5px; */
            /* background-color: rgb(255, 0, 0); */
            background-color:rgb(255, 146, 30);

            
            /* border-radius: 50%; */
            /* animation: bounce 1.5s 2; */
            /* animation: bounce 1.5s 5; */

            /* position: relative; */
            /* z-index: 1; */
            /* overflow: hidden; */
        }


        .dot:nth-child(2) {
            animation-delay: 0.3s;
            background-color:rgb(255, 19, 19);

        }

        .dot:nth-child(3) {
            background-color:rgb(66, 255, 19);
            animation-delay: 0.6s;
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(3);
            }

            50% {
                transform: translateY(15px);
            }
        }

        .who:hover {
            background-color: white;
            padding: 10px;
            color: black;

        }

        .who {
            /* opacity: 0.5 !important; */
            position: relative;
            z-index: 1;
             font-size: xxx-large;
        }
    </style>
</head>

<body>
    <?php include('header.php') ?>

    <div class="container-fluid kasmainweb">
        <div class="row kasmainwebrow">
            <div class="col-lg-6 kasmainwebcol d-flex align-items-center justify-content-center " style="margin: auto;">
                <h1 class="who"><span class="animate__animated animate__lightSpeedInRight">Who</span> <span class="animate__animated animate__lightSpeedInRight animate__delay-1s">We</span>  <span class="animate__animated animate__lightSpeedInRight animate__delay-2s">Are?</span>  </h1>
                <div class="bouncing-dots animate__animated animate__lightSpeedInRight animate__delay-3s">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
            </div>
            <div class="col-lg-6 kasmainwebcol">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="width: 10px; height: 10px; border-radius: 50%; background-color: #65e0da;"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" style="width: 10px; height: 10px; border-radius: 50%; background-color: #65e0da;"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" style="width: 10px; height: 10px; border-radius: 50%; background-color: #65e0da;"></button>
                    </div>
                    <div class="carousel-inner" style="border-radius: 22px;border-top-left-radius: 15px;border-bottom-left-radius: 15px;border-width: 15px;border-style: solid;border-image: linear-gradient(to right, #65e0da, #1dceaa) 1;">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/images/webdevs.png" alt="First slide" class="img-fluid" style=" width:1200px; height:630px;   z-index: 100;">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/domains.png" alt="Second slide" class="img-fluid" style=" width:1200px; height:630px;   z-index: 100;">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/Business-Branding2.png" alt="Third slide" class="img-fluid" style=" width:1200px; height:630px;   z-index: 100;">
                        </div>
                    </div>
                    <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a> -->
                </div>
                <div class="gradient-border">
                </div>
            </div>

        </div>
    </div>

    <div class="zwc-product-details zwc-categoty-recent-lanches active">
    </div>

    <?php include('footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
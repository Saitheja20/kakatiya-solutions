<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kakatiya Solutions</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            background-color: rgb(43, 250, 250);


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
            background-color: rgb(255, 146, 30);


            /* border-radius: 50%; */
            /* animation: bounce 1.5s 2; */
            /* animation: bounce 1.5s 5; */

            /* position: relative; */
            /* z-index: 1; */
            /* overflow: hidden; */
        }


        .dot:nth-child(2) {
            animation-delay: 0.3s;
            background-color: rgb(255, 19, 19);

        }

        .dot:nth-child(3) {
            background-color: rgb(66, 255, 19);
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
            /* background: linear-gradient(45deg, #070F2B 50%, #09122C 50%); */
            padding: 10px;
            border: 2px solid transparent;
            /* clip-path: polygon(15% 0%, 85% 0%, 100% 50%, 85% 100%, 15% 100%, 0% 50%); */
            /* background: linear-gradient(white, white) padding-box,
                linear-gradient(45deg, red, blue) border-box; */
            color: black !important;
            transform: scale(1.1, 1.1);
            transition: all 2s ease;
        }

        .who {
            /* opacity: 0.5 !important; */
            position: relative;
            z-index: 1;
            font-size: xxx-large;
        }



        /* 2nd div dev */



        .secondbanner {
            background-color: #161b22;
        }

        .thirdbanner {
            /* background: linear-gradient(22deg, rgb(255, 230, 0) 55%, rgb(251, 255, 38) 45%); */
            background: linear-gradient(18.1deg, #007074 55%, #034C53 45%);

        }

        @media screen and (min-width: 991px) {

            .secondbannercol1 {
                /* padding: 3rem; */
                padding-top: 1rem !important;
                padding-left: 6rem !important;
                padding-right: 6rem !important;
                padding-bottom: 6rem !important;
                font-size: 60px;
                font-weight: bold;
                font-family: cursive;
                /* font-family: 'Times New Roman', Times, serif; */

                background-color: #643bf1;
                border-radius: 5%;

            }

            .secondbannercol2 {
                /* padding: 3rem; */
                padding: 6rem !important;
                font-size: 60px;
                font-weight: bold;
                font-family: cursive;
                background-color: rgb(0, 0, 0);
                margin-left: 2rem;
                border-radius: 5%;
            }

            .secondbannerrow {
                /* padding: 3rem; */
                padding: 6rem !important;

            }

            .secondbannercol2>h3 {
                margin: auto;
            }

            .thirdbannerrow {
                padding: 6rem !important;

            }

            .thirdbannercol {

                /* padding-top: 1rem !important;
                padding-left: 6rem !important;
                padding-right: 6rem !important;
                padding-bottom: 6rem !important;
                font-size: 60px;
                font-weight: bold;
                font-family: cursive;


                background-color: #643bf1;
                border-radius: 5%; */

                padding: 6rem !important;
                font-size: 60px;
                font-weight: bold;
                font-family: cursive;
                background-color: rgb(0, 0, 0);
                margin-left: 2rem;
                border-radius: 2%;

            }

            /* .thirdbannercol2 {
                
                padding: 6rem !important;
                font-size: 60px;
                font-weight: bold;
                font-family: cursive;
                background-color: rgb(0, 0, 0);
                margin-left: 2rem;
                border-radius: 5%;
            } */

            .btn-primary {
                --bs-btn-color: #f1f1f1 !important;
                --bs-btn-bg: #000000 !important;
                --bs-btn-border-color-top: rgb(45, 97, 110) !important;
                --bs-btn-hover-color: #000000 !important;
                transition: all 2s ease-in-out;
                /* Added transition here */
            }

            .btn-primary:hover {
                background-color: rgb(0, 0, 0) !important;
                color: rgb(255, 255, 255) !important;
                transform: scale(1.1, 1.1);
                transition: all 2s ease-in-out;
                position: relative;

            }

            .btn-primary .arrow {
                opacity: 0;
                display: inline-block;
                margin-left: 0;
                transition: all 0.3s ease;
            }

            .btn-primary:hover .arrow {
                opacity: 1;
                margin-left: 8px;
            }

            .btn-primary::after {
                content: '';
                position: absolute;
                width: 0;
                height: 4px;
                background-color: red;
                left: 0;
                bottom: -8px;
                transition: width 0.5s ease-in-out;
            }

            .btn-primary:hover::after {
                width: 100%;
            }

            .btn-primary:hover:after {
                background-color: rgb(0, 0, 0) !important;
                color: rgb(255, 255, 255) !important;
                transform: scale(1.1, 1.1);
                transition: all 2s ease-in-out;
            }

            /* .parag {
                margin-top: 1rem;
                font-size: medium !important;
                color: rgb(127, 150, 185);
            }    */
            .parag {
                margin-top: 1rem;
                font-size: xx-large;
                color: rgb(213 44 44 / 99%);
                margin: auto;
            }

            .client-logos {
                background-color: #f8f9fa;
                padding: 20px 20px;
                margin-top: 20px;
            }

            .logo-carousel {
                display: flex;
                overflow: hidden;
                white-space: nowrap;
                animation: scrollLogos 20s ease-in infinite;
            }

            .logo-item {
                flex: 0 0 auto;
                margin: 0 15px;
            }

            .logo-item img {
                max-width: 100px;
                height: auto;
            }

            @keyframes scrollLogos {
                0% {
                    transform: translateX(0);
                }

                100% {
                    transform: translateX(-100%);
                }
            }

        }
    </style>
</head>

<body>
    <?php include('header.php') ?>

    <div class="container-fluid kasmainweb">
        <div class="row kasmainwebrow">
            <div class="col-lg-6 kasmainwebcol d-flex align-items-center justify-content-center " style="margin: auto;">
                <h1 class="who"><span class="animate__animated animate__lightSpeedInRight" style="color: rgb(43, 250, 250);">Who</span> <span class="animate__animated animate__lightSpeedInRight animate__delay-1s" style="color: rgb(255, 19, 19);"> We</span> <span class="animate__animated animate__lightSpeedInRight animate__delay-2s " style="color: rgb(66, 255, 19);">Are?</span> </h1>
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
                    <div class="carousel-inner" style="
                        position: relative;
                        border-radius: 15px;
                        padding-top: 30px;
                        padding-left: 30px;
                        background: linear-gradient(to right, #65e0da, #1dceaa);
                    ">
                        <div style="
                            background: white;
                            border-radius: 15px;
                            overflow: hidden;
                        ">

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


        <div>

            <section>
                <div class="container-fluid secondbanner">
                    <div class="row secondbannerrow">
                        <div class="col-lg-7 secondbannercol1">
                            <div>
                                <h3>
                                    ​Empower your business with Kakatiya Solutions, where innovation meets excellence in software development.
                                </h3>
                                <button class="btn btn-primary">Get A Quote Now <span class="arrow"><i class="fa-solid fa-angle-right"></i></span></button>
                            </div>
                        </div>
                        <div class="col-lg-4 secondbannercol2">
                            <h3>89%</h3>
                            <p class="parag">client engagement boost with design.</p>
                            <div style="display: flex; justify-content: center; align-items: center; margin-top: 11rem;">
                                <img src="assets/images/logo_trans_white.png" alt="kakatiya logo" width="150px" height="auto">
                            </div>
                        </div>
                    </div>
                </div>


            </section>
            <section>
                <div class="container-fluid thirdbanner client-logos">
                    <div class="row thirdbannerrow">
                        <div class="col-lg-12 thirdbannercol">
                            
                            <div class="logo-carousel">
                                <div class="logo-item"><img src="assets/images/logo.png" alt="Client 1"></div>
                                <div class="logo-item"><img src="assets/images/logo2.png" alt="Client 2"></div>
                                <div class="logo-item"><img src="assets/images/logo_trans_white.png" alt="Client 3"></div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            

            </section>
        </div>
        <?php include('footer.php') ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
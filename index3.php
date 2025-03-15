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

        @media screen and (max-width:990) {
            element.style {
                opacity: 1;
                transform: matrix(1, 0, 0, 1, 0, 0);
            }


        }

        @media only screen and (max-width: 734px) {
            .headline {
                font-size: 60px;
            }
        }

        @media only screen and (max-width: 1068px) and (orientation: portrait) {}

        .headline {
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

            .cnt1 {
                /* margin-bottom: 50rem ; */
            }


            @media only screen and (min-width: 735px) {
                .headline {
                    font-size: 14.6vw;
                }
            }

            .headline {
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
                padding-bottom: 5rem !important;
                margin-bottom: 20rem;
            }

            .headline2 {
                /* font-size: 190px; */
                /* font-size: 80px;
                line-height: 1;
                font-weight: 700;
                font-family: SF Pro Display, SF Pro Icons, Helvetica Neue, Helvetica, Arial, sans-serif;
                line-height: .7;
                letter-spacing: -0.0210526316em;
                position: relative;
                left: 3.75vw;
                left: 1.75vw;
                margin-top: 23rem;
                margin-bottom: 0;
                color: white !important; */
                /* margin-top: 2rem; */
                font-size: 56px;
                line-height: 1;
                font-weight: 700;
                letter-spacing: 0em;
                font-family: SF Pro Display, SF Pro Icons, Helvetica Neue, Helvetica, Arial, sans-serif;
                display: inline;
                color: #fff;
                --default-opacity: 0.15;
                margin: 10rem 0rem !important;
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
    <div class="container cnt1">
        <div class="row">
            <div class="col-lg-12">
                <div style="position: relative; text-align: center; animation: zoomIn 2s ease-in-out;">
                    <h1 class="headline">AirPods Pro</h1>
                    <div class="image-container" style="position: absolute; top: 5%; left: 54%; transform: translate(-50%, -50%); display: flex; align-items: center; gap: 280px;">
                        <img src="assets/images/left.png" alt="apple left" class="rotate-image" width="250px" height="auto">
                        <img src="assets/images/right.png" alt="apple right" class="rotate-image" width="250px" height="auto">
                    </div>
                    <!-- <div style="position: absolute;  bottom: 5%; left: 30%;">
                        <img src="assets/images/airtrans.png" alt="apple left" class="rotate-image" width="300px" height="auto">
                    </div> -->
                </div>


            </div>
        </div>
    </div>
    <div style="position: relative">
        <video autoplay muted loop id="background-video" style="position: absolute; right: 0; bottom: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1;">
            <source src="assets/videos/large.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="container" style="padding: 20rem 0rem !important;">

            <div class="row" style="position: relative;">
                <div class="col-lg-8">
                    <h1 class="headline2">
                        <span class="span1">Up to 2x more Active Noise Cancellation.1</span>
                        <span class="span2">Adaptive Audio that tailors noise control to your environment.2</span>
                        <span class="span3">Personalised Spatial Audio that immerses you in sound.3</span>
                        <span class="span4">And intelligent ways to minimise your exposure to loud noise.</span>
                    </h1>
                </div>
            </div>
        </div>
    </div>








    <div class="container-fluid kasmainweb">





        <div>


            <section>
                <div class="container-fluid thirdbanner client-logos">
                    <div class="row thirdbannerrow">
                        <div class="col-lg-12 thirdbannercol">
                            <!-- for fist row right to left -->
                            <div class="logo-carousel">
                                <div class="logo-item"><img src="assets/images/clients/telangana.png" alt="telangana logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/election.png" alt="election logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/gwmc.png" alt="gwmc logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/ts-police.png" alt="ts-police logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/medaram.png" alt="medaram logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/ghmc.png" alt="ghmc logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/sru-big.png" alt="sru-big logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/sritw.png" alt="sritw logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/ajara.png" alt="ajara logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/nevonex.png" alt="nevonex logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/vcloud.png" alt="vcloud logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/mulkanoor.png" alt="mulkanoor logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/dimension.png" alt="dimension logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/white.png" alt="white logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/bits.png" alt="bits logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/cjit.png" alt="Client 1"></div>
                                <div class="logo-item"><img src="assets/images/clients/itnest.png" alt="itnest logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/jits.png" alt="jits logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/kht.png" alt="kht logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/lb.png" alt="lb logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/maa.png" alt="maa logo"></div>
                            </div>



                            <!-- for second  row left to right -->
                            <div class="logo-carousel2">
                                <div class="logo-item"><img src="assets/images/clients/maharshi.png" alt="maharshi logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/nsr.png" alt="nsr logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/shine.png" alt="shine logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/spido.png" alt="spido logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/tekiq.png" alt="tekiq logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/star.png" alt="star logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/softtech.png" alt="softtech logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/gs.png" alt="gs logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/alashmallogo-new.png" alt="alashmallogo-new logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/jsmlogo-new.png" alt="jsmlogo-new logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/jayaE-new.png" alt="jayaE-new logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/Diocese-new.png" alt="Diocese-new logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/rich-new.png" alt="rich-new logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/client-new.png" alt="spr logo "></div>
                                <div class="logo-item"><img src="assets/images/clients/dreams-new.png" alt="dreams-new logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/stpeters-new.png" alt="stpeters-new logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/kakatiya-new.png" alt="kakatiya-new logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/rdjc-new.png" alt="rdjc-new logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/rddc-new.png" alt="rddc-new logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/vlct-new.png" alt="vlct-new logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/sukji-new.png" alt="sukji-new logo"></div>


                                <!-- <div class="logo-item"><img src="assets/images/clients/telangana.png" alt="telangana logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/election.png" alt="election logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/gwmc.png" alt="gwmc logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/ts-police.png" alt="ts-police logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/medaram.png" alt="medaram logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/ghmc.png" alt="ghmc logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/sru-big.png" alt="sru-big logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/sritw.png" alt="sritw logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/ajara.png" alt="ajara logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/nevonex.png" alt="nevonex logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/vcloud.png" alt="vcloud logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/mulkanoor.png" alt="mulkanoor logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/dimension.png" alt="dimension logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/white.png" alt="white logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/bits.png" alt="bits logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/cjit.png" alt="Client 1"></div>
                                <div class="logo-item"><img src="assets/images/clients/itnest.png" alt="itnest logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/jits.png" alt="jits logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/kht.png" alt="kht logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/lb.png" alt="lb logo"></div>
                                <div class="logo-item"><img src="assets/images/clients/maa.png" alt="maa logo"></div> -->

                            </div>
                        </div>
                    </div>
                </div>
        </div>


        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function checkScroll() {
            const elements = document.querySelectorAll('.rotate-image');
            const elements1 = document.querySelectorAll('.headline');
            const spans = document.querySelectorAll('.headline2 span');
            const scrollY = window.scrollY;
            elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                if (elementTop < window.innerHeight * 0.75) {
                    element.style.transform = ` rotate(${scrollY / 5}deg)`;

                }
            });;
            spans.forEach(span => {
                span.style.opacity = 0.5;
            });

            spans.forEach((span, index) => {
                const spanTop = span.getBoundingClientRect().top;
                if (spanTop < window.innerHeight * 0.90) {
                    if (scrollY > (index * 200)) {
                        span.style.opacity = 1;
                        if (index > 0) {
                            spans[index - 1].style.opacity = 0.5;
                        }
                    }
                }
            });
        }
        window.addEventListener('scroll', checkScroll);
        checkScroll();
    </script>

</body>

</html>
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
            <section class="Primer_Brand__Bento-module__Bento___mNrII">
                <div class="Primer_Brand__Bento-module__Bento__Item___fM9oe Primer_Brand__Bento-module__Bento__Item--bgColor-subtle___rIDKo Primer_Brand__Bento-module__Bento__Item--xsmall-column-span-12___fEgOK Primer_Brand__Bento-module__Bento__Item--large-column-span-7___mLdYl Primer_Brand__Bento-module__Bento__Item--xsmall-row-span-4___X_F9d Primer_Brand__Bento-module__Bento__Item--large-row-span-5___qiTGf Primer_Brand__Bento-module__Bento__Item--flow-row___DVol6 Primer_Brand__Bento-module__Bento__Item--xsmall-gap-normal___XrOHt Primer_Brand__Bento-module__Bento__Item--medium-gap-spacious___vFlWU Primer_Brand__Bento-module__Bento__Item--visual-as-background___z0J2Q bento-item-ai-copilot">
                    <div class="Primer_Brand__Bento-module__Bento__Content___BhnY8 Primer_Brand__Bento-module__Bento__Item--horizontalAlign-start___apVss Primer_Brand__Bento-module__Bento--xsmall-padding-normal___C2rTu Primer_Brand__Bento-module__Bento--medium-padding-spacious___I5PEZ">
                        <h3 class="Primer_Brand__Heading-module__Heading___IVpmp Primer_Brand__Heading-module__Heading-font--mona-sans___SCnTx Primer_Brand__Heading-module__Heading--3___wsITu Primer_Brand__Heading-module__Heading--weight-semibold___NMvbh Primer_Brand__Bento-module__Bento__heading--no-text___FiQWM">Push what's possible with GitHub Copilot, the world's most trusted and widely adopted AI developer tool.</h3><a class="Primer_Brand__Link-module__Link___lvKjM Primer_Brand__Link-module__Link--large___cXMt5 Primer_Brand__Link-module__Link--default___UKAcZ Primer_Brand__Bento-module__Bento__call-to-action___CF7bA" href="/features/copilot"><span class="Primer_Brand__Text-module__Text___pecHN Primer_Brand__Text-module__Text-font--mona-sans___GpzSG Primer_Brand__Text-module__Text--default___DChoE Primer_Brand__Text-module__Text--300___TBQTB Primer_Brand__Text-module__Text--antialiased___fYDxq Primer_Brand__Link-module__Link--label___j8etE">Learn more about Copilot</span><svg class="Primer_Brand__ExpandableArrow-module__ExpandableArrow___rkfek Primer_Brand__Link-module__Link-arrow___HBMJ9" width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true" focusable="false">
                                <path fill="currentColor" d="M7.28033 3.21967C6.98744 2.92678 6.51256 2.92678 6.21967 3.21967C5.92678 3.51256 5.92678 3.98744 6.21967 4.28033L7.28033 3.21967ZM11 8L11.5303 8.53033C11.8232 8.23744 11.8232 7.76256 11.5303 7.46967L11 8ZM6.21967 11.7197C5.92678 12.0126 5.92678 12.4874 6.21967 12.7803C6.51256 13.0732 6.98744 13.0732 7.28033 12.7803L6.21967 11.7197ZM6.21967 4.28033L10.4697 8.53033L11.5303 7.46967L7.28033 3.21967L6.21967 4.28033ZM10.4697 7.46967L6.21967 11.7197L7.28033 12.7803L11.5303 8.53033L10.4697 7.46967Z"></path>
                                <path class="Primer_Brand__ExpandableArrow-module__ExpandableArrow-stem___g4mdy" stroke="currentColor" d="M1.75 8H11" stroke-width="1.5" stroke-linecap="round"></path>
                            </svg></a>
                    </div>
                </div>
                <div class="Primer_Brand__Bento-module__Bento__Item___fM9oe Primer_Brand__Bento-module__Bento__Item--bgColor-subtle___rIDKo Primer_Brand__Bento-module__Bento__Item--xsmall-column-span-12___fEgOK Primer_Brand__Bento-module__Bento__Item--large-column-span-5___t06QC Primer_Brand__Bento-module__Bento__Item--row-span-5___wO0Ev Primer_Brand__Bento-module__Bento__Item--flow-row___DVol6 Primer_Brand__Bento-module__Bento__Item--xsmall-gap-normal___XrOHt Primer_Brand__Bento-module__Bento__Item--medium-gap-spacious___vFlWU Primer_Brand__Bento-module__Bento-row-padding-override___r37Kb" style="background:var(--base-color-scale-black-0);grid-gap:0">
                    <div class="Primer_Brand__Bento-module__Bento__Content___BhnY8 Primer_Brand__Bento-module__Bento__Item--horizontalAlign-center___DJpgD Primer_Brand__Bento-module__Bento--xsmall-padding-normal___C2rTu Primer_Brand__Bento-module__Bento--medium-padding-spacious___I5PEZ">
                        <h3 class="Primer_Brand__Heading-module__Heading___IVpmp Primer_Brand__Heading-module__Heading-font--mona-sans___SCnTx Primer_Brand__Heading-module__Heading--display___xFecE Primer_Brand__Heading-module__Heading--weight-medium___II172 Primer_Brand__Bento-module__Bento__heading--with-max-width___B8vBa" style="margin-bottom:var(--base-size-8);font-size:112px;letter-spacing:-0.5rem">88%</h3>
                        <p class="Primer_Brand__Text-module__Text___pecHN Primer_Brand__Text-module__Text-font--mona-sans___GpzSG Primer_Brand__Text-module__Text--muted___lTaVa Primer_Brand__Text-module__Text--400___y7m4l Primer_Brand__Text-module__Text--antialiased___fYDxq Primer_Brand__Text-module__Text--weight-normal___siVLX Primer_Brand__Text-module__Text-align--center___NbZtZ Primer_Brand__Bento-module__Bento__Content-text___Q4UA5">of developers experience increased productivity.<sup><a href="#footnote-1" id="footnote-ref-1">1</a></sup></p>
                    </div>
                    <div class="Primer_Brand__Bento-module__Bento__Visual___uQCng Primer_Brand__Bento-module__Bento__Visual--horizontalAlign-center___nyK69 Primer_Brand__Bento-module__Bento__Visual--verticalAlign-center___nSnau Primer_Brand__Bento-module__Bento__Visual--overflow-hidden___KzPcB Primer_Brand__Bento-module__Bento--padding-spacious___ydfpH Primer_Brand__Bento-module__Bento__Visual--no-fill___JcHtr"><img alt="Copilot logo" class="Primer_Brand__Image-module__Image___FgVuK" width="112" height="112" style="object-position:50% 50%" src="/images/modules/site/enterprise/2023/copilot-icon.png"></div>
                </div>
                <div class="Primer_Brand__Bento-module__Bento__Item___fM9oe Primer_Brand__Bento-module__Bento__Item--bgColor-subtle___rIDKo Primer_Brand__Bento-module__Bento__Item--column-span-12___CaIjg Primer_Brand__Bento-module__Bento__Item--xsmall-row-span-3___t3hyC Primer_Brand__Bento-module__Bento__Item--small-row-span-4___KuACi Primer_Brand__Bento-module__Bento__Item--medium-row-span-4___xPGyT Primer_Brand__Bento-module__Bento__Item--large-row-span-5___qiTGf Primer_Brand__Bento-module__Bento__Item--flow-row___DVol6 Primer_Brand__Bento-module__Bento-row-padding-override___r37Kb Primer_Brand__Bento-module__Bento__Item--visual-as-background___z0J2Q bento-item-ai-code">
                    <div class="Primer_Brand__Bento-module__Bento__Visual___uQCng Primer_Brand__Bento-module__Bento__Visual--horizontalAlign-center___nyK69 Primer_Brand__Bento-module__Bento__Visual--verticalAlign-end___IVb1w Primer_Brand__Bento-module__Bento__Visual--overflow-hidden___KzPcB Primer_Brand__Bento-module__Bento__Visual--no-fill___JcHtr"><a href="https://docs.github.com/copilot/quickstart#introduction" data-analytics-event="{&quot;category&quot;:&quot;enterprise copilot&quot;,&quot;action&quot;:&quot;click on enterprise copilot&quot;,&quot;label&quot;:&quot;ref_cta:enterprise_copilot;ref_loc:body&quot;}"><img alt="Code editor showing code suggestions" class="Primer_Brand__Image-module__Image___FgVuK bento-item-ai-code-img" style="display:block" src="/images/modules/site/enterprise/2023/code-window.png"></a></div>
                </div>
                <div class="Primer_Brand__Bento-module__Bento__Item___fM9oe Primer_Brand__Bento-module__Bento__Item--bgColor-subtle___rIDKo Primer_Brand__Bento-module__Bento__Item--column-span-12___CaIjg Primer_Brand__Bento-module__Bento__Item--xsmall-row-span-12___Gl_9d Primer_Brand__Bento-module__Bento__Item--small-row-span-12___lUcIB Primer_Brand__Bento-module__Bento__Item--medium-row-span-6___uXSJ0 Primer_Brand__Bento-module__Bento__Item--xsmall-flow-row___k8j9i Primer_Brand__Bento-module__Bento__Item--small-flow-row___FlDbE Primer_Brand__Bento-module__Bento__Item--medium-flow-column___K27t6" style="background:var(--base-color-scale-black-0);grid-gap:0">
                    <div class="Primer_Brand__Bento-module__Bento__Visual___uQCng Primer_Brand__Bento-module__Bento__Visual--overflow-hidden___KzPcB Primer_Brand__Bento-module__Bento--xsmall-padding-normal___C2rTu Primer_Brand__Bento-module__Bento--medium-padding-spacious___I5PEZ Primer_Brand__Bento-module__Bento__Visual--fill___B70Uy d-block customer-story-bento-padding">
                        <h3 class="Primer_Brand__Heading-module__Heading___IVpmp Primer_Brand__Heading-module__Heading-font--mona-sans___SCnTx Primer_Brand__Heading-module__Heading--4___C9jDG Primer_Brand__Heading-module__Heading--weight-semibold___NMvbh" data-analytics-visible="{&quot;category&quot;:&quot;enterprise customer story&quot;,&quot;label&quot;:&quot;ref_cta:enterprise_customer_story;ref_loc:body&quot;}">Mercado Libre frees developers' minds to focus on their mission with GitHub.</h3><a class="Primer_Brand__Link-module__Link___lvKjM Primer_Brand__Link-module__Link--large___cXMt5 Primer_Brand__Link-module__Link--accent___FWEDd mb-10 mt-3" href="/customer-stories/mercado-libre" data-analytics-event="{&quot;category&quot;:&quot;enterprise customer story&quot;,&quot;action&quot;:&quot;click on enterprise customer story&quot;,&quot;label&quot;:&quot;ref_cta:enterprise_customer_story;ref_loc:body&quot;}"><span class="Primer_Brand__Text-module__Text___pecHN Primer_Brand__Text-module__Text-font--mona-sans___GpzSG Primer_Brand__Text-module__Text--default___DChoE Primer_Brand__Text-module__Text--300___TBQTB Primer_Brand__Text-module__Text--antialiased___fYDxq Primer_Brand__Link-module__Link--label___j8etE">Read customer story</span><svg class="Primer_Brand__ExpandableArrow-module__ExpandableArrow___rkfek Primer_Brand__Link-module__Link-arrow___HBMJ9" width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true" focusable="false">
                                <path fill="currentColor" d="M7.28033 3.21967C6.98744 2.92678 6.51256 2.92678 6.21967 3.21967C5.92678 3.51256 5.92678 3.98744 6.21967 4.28033L7.28033 3.21967ZM11 8L11.5303 8.53033C11.8232 8.23744 11.8232 7.76256 11.5303 7.46967L11 8ZM6.21967 11.7197C5.92678 12.0126 5.92678 12.4874 6.21967 12.7803C6.51256 13.0732 6.98744 13.0732 7.28033 12.7803L6.21967 11.7197ZM6.21967 4.28033L10.4697 8.53033L11.5303 7.46967L7.28033 3.21967L6.21967 4.28033ZM10.4697 7.46967L6.21967 11.7197L7.28033 12.7803L11.5303 8.53033L10.4697 7.46967Z"></path>
                                <path class="Primer_Brand__ExpandableArrow-module__ExpandableArrow-stem___g4mdy" stroke="currentColor" d="M1.75 8H11" stroke-width="1.5" stroke-linecap="round"></path>
                            </svg></a>
                        <div class="Primer_Brand__Stack-module__Stack___tASKe Primer_Brand__Stack-module__Stack--horizontal___YJFas Primer_Brand__Stack-module__Stack--gap-normal___JEO7_ Primer_Brand__Stack-module__Stack--align-items-flex-start___Vh1Ca Primer_Brand__Stack-module__Stack--justify-content-flex-start___VIkHJ Primer_Brand__Stack-module__Stack--padding-condensed___mo7Aq" style="min-height:10em;max-height:12.5em;padding-left:0;padding-right:0">
                            <div class="Primer_Brand__Pillar-module__Pillar___dHhm7 Primer_Brand__Pillar-module__Pillar--align-start___dfipC flex-1 customer-story-pillar">
                                <h3 class="Primer_Brand__Heading-module__Heading___IVpmp Primer_Brand__Heading-module__Heading-font--mona-sans___SCnTx Primer_Brand__Heading-module__Heading--4___C9jDG Primer_Brand__Pillar-module__Pillar__heading___C7yPQ">~50%</h3>
                                <p class="Primer_Brand__Text-module__Text___pecHN Primer_Brand__Text-module__Text-font--mona-sans___GpzSG Primer_Brand__Text-module__Text--muted___lTaVa Primer_Brand__Text-module__Text--200___XAIGT Primer_Brand__Text-module__Text--antialiased___fYDxq Primer_Brand__Pillar-module__Pillar__description___BPMTa max-height-inherit">reduced time by writing code with GitHub Copilot</p>
                            </div>
                            <div class="Primer_Brand__Pillar-module__Pillar___dHhm7 Primer_Brand__Pillar-module__Pillar--align-start___dfipC flex-1 customer-story-pillar">
                                <h3 class="Primer_Brand__Heading-module__Heading___IVpmp Primer_Brand__Heading-module__Heading-font--mona-sans___SCnTx Primer_Brand__Heading-module__Heading--4___C9jDG Primer_Brand__Pillar-module__Pillar__heading___C7yPQ">100,000</h3>
                                <p class="Primer_Brand__Text-module__Text___pecHN Primer_Brand__Text-module__Text-font--mona-sans___GpzSG Primer_Brand__Text-module__Text--muted___lTaVa Primer_Brand__Text-module__Text--200___XAIGT Primer_Brand__Text-module__Text--antialiased___fYDxq Primer_Brand__Pillar-module__Pillar__description___BPMTa">pull requests merged per day</p>
                            </div>
                        </div>
                    </div>
                    <div class="Primer_Brand__Bento-module__Bento__Visual___uQCng Primer_Brand__Bento-module__Bento__Visual--overflow-hidden___KzPcB Primer_Brand__Bento-module__Bento--xsmall-padding-normal___C2rTu Primer_Brand__Bento-module__Bento--medium-padding-spacious___I5PEZ Primer_Brand__Bento-module__Bento__Visual--fill___B70Uy customer-story-bento-padding">
                        <ul class="Primer_Brand__Timeline-module__Timeline___keSeT">
                            <li class="Primer_Brand__Timeline-module__Timeline__item____ME4_"><span class="Primer_Brand__Text-module__Text___pecHN Primer_Brand__Text-module__Text-font--mona-sans___GpzSG Primer_Brand__Text-module__Text--default___DChoE Primer_Brand__Text-module__Text--200___XAIGT Primer_Brand__Text-module__Text--antialiased___fYDxq Primer_Brand__Timeline-module__Timeline__item-text___sbSjp">
                                    <div class="Primer_Brand__Pillar-module__Pillar___dHhm7 Primer_Brand__Pillar-module__Pillar--align-start___dfipC">
                                        <h3 class="Primer_Brand__Heading-module__Heading___IVpmp Primer_Brand__Heading-module__Heading-font--mona-sans___SCnTx Primer_Brand__Heading-module__Heading--subhead-large____C6GZ Primer_Brand__Pillar-module__Pillar__heading___C7yPQ">Problem</h3>
                                        <p class="Primer_Brand__Text-module__Text___pecHN Primer_Brand__Text-module__Text-font--mona-sans___GpzSG Primer_Brand__Text-module__Text--muted___lTaVa Primer_Brand__Text-module__Text--200___XAIGT Primer_Brand__Text-module__Text--antialiased___fYDxq Primer_Brand__Pillar-module__Pillar__description___BPMTa enterprise-lp">Mercado Libre developer platform team needed secure DevOps tooling that would allow its developers to be more efficient and allow them to focus more on providing value to users.</p>
                                    </div>
                                </span></li>
                            <li class="Primer_Brand__Timeline-module__Timeline__item____ME4_"><span class="Primer_Brand__Text-module__Text___pecHN Primer_Brand__Text-module__Text-font--mona-sans___GpzSG Primer_Brand__Text-module__Text--default___DChoE Primer_Brand__Text-module__Text--200___XAIGT Primer_Brand__Text-module__Text--antialiased___fYDxq Primer_Brand__Timeline-module__Timeline__item-text___sbSjp">
                                    <div class="Primer_Brand__Pillar-module__Pillar___dHhm7 Primer_Brand__Pillar-module__Pillar--align-start___dfipC">
                                        <h3 class="Primer_Brand__Heading-module__Heading___IVpmp Primer_Brand__Heading-module__Heading-font--mona-sans___SCnTx Primer_Brand__Heading-module__Heading--subhead-large____C6GZ Primer_Brand__Pillar-module__Pillar__heading___C7yPQ">Solution</h3>
                                        <p class="Primer_Brand__Text-module__Text___pecHN Primer_Brand__Text-module__Text-font--mona-sans___GpzSG Primer_Brand__Text-module__Text--muted___lTaVa Primer_Brand__Text-module__Text--200___XAIGT Primer_Brand__Text-module__Text--antialiased___fYDxq Primer_Brand__Pillar-module__Pillar__description___BPMTa enterprise-lp">Mercado Libre uses GitHub to automate deployment, security tests, and repetitive tasks so developers have more free time to spend on high-value, rewarding work.</p>
                                    </div>
                                </span></li>
                            <li class="Primer_Brand__Timeline-module__Timeline__item____ME4_"><span class="Primer_Brand__Text-module__Text___pecHN Primer_Brand__Text-module__Text-font--mona-sans___GpzSG Primer_Brand__Text-module__Text--default___DChoE Primer_Brand__Text-module__Text--200___XAIGT Primer_Brand__Text-module__Text--antialiased___fYDxq Primer_Brand__Timeline-module__Timeline__item-text___sbSjp">
                                    <div class="Primer_Brand__Pillar-module__Pillar___dHhm7 Primer_Brand__Pillar-module__Pillar--align-start___dfipC">
                                        <h3 class="Primer_Brand__Heading-module__Heading___IVpmp Primer_Brand__Heading-module__Heading-font--mona-sans___SCnTx Primer_Brand__Heading-module__Heading--subhead-large____C6GZ Primer_Brand__Pillar-module__Pillar__heading___C7yPQ">Products</h3>
                                        <p class="Primer_Brand__Text-module__Text___pecHN Primer_Brand__Text-module__Text-font--mona-sans___GpzSG Primer_Brand__Text-module__Text--muted___lTaVa Primer_Brand__Text-module__Text--200___XAIGT Primer_Brand__Text-module__Text--antialiased___fYDxq Primer_Brand__Pillar-module__Pillar__description___BPMTa enterprise-lp"><a class="Primer_Brand__Link-module__Link___lvKjM Primer_Brand__Link-module__Link--accent___FWEDd Primer_Brand__Pillar-module__Pillar__link___yiBNY" href="/enterprise"><span class="Primer_Brand__Text-module__Text___pecHN Primer_Brand__Text-module__Text-font--mona-sans___GpzSG Primer_Brand__Text-module__Text--default___DChoE Primer_Brand__Text-module__Text--200___XAIGT Primer_Brand__Text-module__Text--antialiased___fYDxq Primer_Brand__Link-module__Link--label___j8etE">GitHub Enterprise</span><svg class="Primer_Brand__ExpandableArrow-module__ExpandableArrow___rkfek Primer_Brand__Link-module__Link-arrow___HBMJ9" width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true" focusable="false">
                                                    <path fill="currentColor" d="M7.28033 3.21967C6.98744 2.92678 6.51256 2.92678 6.21967 3.21967C5.92678 3.51256 5.92678 3.98744 6.21967 4.28033L7.28033 3.21967ZM11 8L11.5303 8.53033C11.8232 8.23744 11.8232 7.76256 11.5303 7.46967L11 8ZM6.21967 11.7197C5.92678 12.0126 5.92678 12.4874 6.21967 12.7803C6.51256 13.0732 6.98744 13.0732 7.28033 12.7803L6.21967 11.7197ZM6.21967 4.28033L10.4697 8.53033L11.5303 7.46967L7.28033 3.21967L6.21967 4.28033ZM10.4697 7.46967L6.21967 11.7197L7.28033 12.7803L11.5303 8.53033L10.4697 7.46967Z"></path>
                                                    <path class="Primer_Brand__ExpandableArrow-module__ExpandableArrow-stem___g4mdy" stroke="currentColor" d="M1.75 8H11" stroke-width="1.5" stroke-linecap="round"></path>
                                                </svg></a><br><a class="Primer_Brand__Link-module__Link___lvKjM Primer_Brand__Link-module__Link--accent___FWEDd Primer_Brand__Pillar-module__Pillar__link___yiBNY" href="/features/copilot"><span class="Primer_Brand__Text-module__Text___pecHN Primer_Brand__Text-module__Text-font--mona-sans___GpzSG Primer_Brand__Text-module__Text--default___DChoE Primer_Brand__Text-module__Text--200___XAIGT Primer_Brand__Text-module__Text--antialiased___fYDxq Primer_Brand__Link-module__Link--label___j8etE">GitHub Copilot</span><svg class="Primer_Brand__ExpandableArrow-module__ExpandableArrow___rkfek Primer_Brand__Link-module__Link-arrow___HBMJ9" width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true" focusable="false">
                                                    <path fill="currentColor" d="M7.28033 3.21967C6.98744 2.92678 6.51256 2.92678 6.21967 3.21967C5.92678 3.51256 5.92678 3.98744 6.21967 4.28033L7.28033 3.21967ZM11 8L11.5303 8.53033C11.8232 8.23744 11.8232 7.76256 11.5303 7.46967L11 8ZM6.21967 11.7197C5.92678 12.0126 5.92678 12.4874 6.21967 12.7803C6.51256 13.0732 6.98744 13.0732 7.28033 12.7803L6.21967 11.7197ZM6.21967 4.28033L10.4697 8.53033L11.5303 7.46967L7.28033 3.21967L6.21967 4.28033ZM10.4697 7.46967L6.21967 11.7197L7.28033 12.7803L11.5303 8.53033L10.4697 7.46967Z"></path>
                                                    <path class="Primer_Brand__ExpandableArrow-module__ExpandableArrow-stem___g4mdy" stroke="currentColor" d="M1.75 8H11" stroke-width="1.5" stroke-linecap="round"></path>
                                                </svg></a><br><a class="Primer_Brand__Link-module__Link___lvKjM Primer_Brand__Link-module__Link--accent___FWEDd Primer_Brand__Pillar-module__Pillar__link___yiBNY" href="/enterprise/advanced-security"><span class="Primer_Brand__Text-module__Text___pecHN Primer_Brand__Text-module__Text-font--mona-sans___GpzSG Primer_Brand__Text-module__Text--default___DChoE Primer_Brand__Text-module__Text--200___XAIGT Primer_Brand__Text-module__Text--antialiased___fYDxq Primer_Brand__Link-module__Link--label___j8etE">GitHub Advanced Security</span><svg class="Primer_Brand__ExpandableArrow-module__ExpandableArrow___rkfek Primer_Brand__Link-module__Link-arrow___HBMJ9" width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true" focusable="false">
                                                    <path fill="currentColor" d="M7.28033 3.21967C6.98744 2.92678 6.51256 2.92678 6.21967 3.21967C5.92678 3.51256 5.92678 3.98744 6.21967 4.28033L7.28033 3.21967ZM11 8L11.5303 8.53033C11.8232 8.23744 11.8232 7.76256 11.5303 7.46967L11 8ZM6.21967 11.7197C5.92678 12.0126 5.92678 12.4874 6.21967 12.7803C6.51256 13.0732 6.98744 13.0732 7.28033 12.7803L6.21967 11.7197ZM6.21967 4.28033L10.4697 8.53033L11.5303 7.46967L7.28033 3.21967L6.21967 4.28033ZM10.4697 7.46967L6.21967 11.7197L7.28033 12.7803L11.5303 8.53033L10.4697 7.46967Z"></path>
                                                    <path class="Primer_Brand__ExpandableArrow-module__ExpandableArrow-stem___g4mdy" stroke="currentColor" d="M1.75 8H11" stroke-width="1.5" stroke-linecap="round"></path>
                                                </svg></a></p>
                                    </div>
                                </span></li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
        <?php include('footer.php') ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
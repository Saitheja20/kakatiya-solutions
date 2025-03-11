<header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nav bar designs</title>
    <link rel="stylesheet" href="styles.css">
    <!-- <link rel="stylesheet" href="zoho.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <style>
        .bg-body-tertiary {
            --bs-bg-opacity: 1;
            /* background-color: rgb(9 69 129) !important; */
            background-color: rgb(0 0 0) !important;
            /* background-color: rgb(27 73 119) !important */
        }

        #logo {
            transition: transform 2s ease-in-out;
        }

        #logo:hover {
            transform: scale(1.1, 1.1);
        }

        #logo:after {
            transition: transform 2s ease-in-out;
        }

        #logo:hover:after {
            transform: scale(1, 1);
        }

        .navbar-nav .nav-link.active,
        .navbar-nav .nav-link.show,
        .nav-link {
            color: rgb(245 245 245) !important;
        }

        .navbar-nav .nav-item.dropdown:hover .dropdown-menu {
            display: block;
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        /* .dropdown-menu {
        display: none;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: all 0.3s ease-in-out;
        position: absolute;
        background: #1b4977;
        border: none;
        border-radius: 0;
        margin-top: 0;
        width: 100%;
        left: 0;
        top: 100%;
    }

    .zwc-global-menu-container {
        position: static !important;
    }

    .zwc-tab-category {
        padding: 20px;
        max-width: 1200px;
        margin: 0 auto;
    } */

        /* .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0.3em solid;
        border-right: 0.3em solid transparent;
        border-bottom: 0;
        border-left: 0.3em solid transparent;
    } */

        /* .zwc-product-category {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 20px;
    } */

        /* .zwc-product-list {
        color: white;
        padding: 15px;
        background: rgba(255,255,255,0.1);
        border-radius: 4px;
    } */

        .dropdown-menu {
            display: block !important;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-20px);
            transition: all 0.3s ease-in-out;
            position: absolute;
            background: rgb(0, 0, 0);
            color: white;
            border: none;
            left: 0;
            right: 0;
            top: 100%;
            max-height: 90vh;
            overflow-y: auto;
            min-width: 100%;
            padding: 20px;
            z-index: 1000;
        }

        .nav-item.dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        /* Fix positioning context */
        .nav-item.dropdown {
            position: static !important;
            /* Important for full-width dropdown */
        }

        /* Prevent horizontal scroll */
        .zwc-tab-category {
            max-width: 100vw;
            padding: 20px 0;
        }

        .zwc-launch-prd-details {
            max-width: 300px;
        }

        a,
        em,
        abbr,
        acronym,
        address,
        applet,
        article,
        aside,
        audio,
        b,
        big,
        blockquote,
        body,
        canvas,
        caption,
        center,
        cite,
        code,
        dd,
        del,
        details,
        dfn,
        div,
        dl,
        dt,
        embed,
        fieldset,
        figcaption,
        figure,
        footer,
        form,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        header,
        hgroup,
        html,
        iframe,
        img,
        ins,
        kbd,
        label,
        legend,
        li,
        mark,
        menu,
        nav,
        object,
        ol,
        output,
        p,
        pre,
        q,
        ruby,
        s,
        samp,
        section,
        small,
        span,
        strike,
        sub,
        summary,
        table,
        tbody,
        td,
        tfoot,
        th,
        thead,
        time,
        tr,
        tt,
        u,
        ul,
        var,
        video,
        select {
            margin: 0;
            padding: 0;
            border: 0;
            font: inherit;
            vertical-align: baseline;
            font-variant-ligatures: none;
        }

        *,
        :after,
        :before,
        header *,
        footer *,
        aside * {
            box-sizing: border-box;
        }

        * {
            box-sizing: border-box;
        }

        /* Adjust grid layout */
        .zwc-product-category {
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 15px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .zwc-launch-rows {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
        }

        /* Better scrollbar styling */
        .dropdown-menu::-webkit-scrollbar {
            width: 8px;
        }

        .zwc-launch-list {
            background: #f8fcff;
            padding: 30px 30px;
            border: 1px solid #dae9f4;
            border-radius: 5px;
            display: flex;
            flex-wrap: wrap;
            max-width: 350px;
        }

        a,
        em,
        abbr,
        acronym,
        address,
        applet,
        article,
        aside,
        audio,
        b,
        big,
        blockquote,
        body,
        canvas,
        caption,
        center,
        cite,
        code,
        dd,
        del,
        details,
        dfn,
        div,
        dl,
        dt,
        embed,
        fieldset,
        figcaption,
        figure,
        footer,
        form,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        header,
        hgroup,
        html,
        iframe,
        img,
        ins,
        kbd,
        label,
        legend,
        li,
        mark,
        menu,
        nav,
        object,
        ol,
        output,
        p,
        pre,
        q,
        ruby,
        s,
        samp,
        section,
        small,
        span,
        strike,
        sub,
        summary,
        table,
        tbody,
        td,
        tfoot,
        th,
        thead,
        time,
        tr,
        tt,
        u,
        ul,
        var,
        video,
        select {
            margin: 0;
            padding: 0;
            border: 0;
            font: inherit;
            vertical-align: baseline;
            font-variant-ligatures: none;
        }

        .dropdown-menu::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
        }

        .dropdown-menu::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.3);
        }

        /* .zwc-launch-prd-details{
    color: black;
    text-align: center;
} */


        /* for services hover ref */
        .zwc-launch-prd-details {
            /* will-change: transform;
      transform-origin: center; */
            text-align: center;
            transition: transform 1.3s ease-in-out;

        }

        .zwc-launch-prd-details:hover {
            transform: scale(1.2, 1.2) translateZ(0);
            /* transition: transform 1s ease-in-out; */
        }

        .zwc-launch-prd-details:after {
            transition: transform 2s ease-in-out;
        }

        .zwc-launch-prd-details:hover:after {
            transform: scale(1, 1);
        }

        .card-bottom {
            background-color: #f26030;
            padding: 1em;
            margin-top: 0px;
            color: #000 !important;
            border-radius: 3%;
            font-family: Calligraphic, Curly, Display, Elegant, Invitations
        }

        .card-bottom>p {
            font-size: large;
            margin-bottom: 3px;
        }

        .card-bottom>a {
            color: #000 !important;
            text-decoration: none !important;
            background-color: #347ea2;
            padding: 3px;
            border-radius: 3%;
            margin-top: 5px;
        }
        .zwc-product-details{
            margin-top: 0px;
        }
        @media screen and (min-width: 1450px) {
            .navsec {
                margin-left: 15rem;
            }
        }
    </style>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid navsec">
            <a class="navbar-brand logo" href="#" id="logo"><img src="assets/images/logo_trans_white.png" alt="logo image" width="100px" height="80px"></a>

            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <!-- <a class="navbar-brand" href="#" id="logo"><img src="assets/images/logo.png" alt="logo image"
                    style="width: 120px; height: 85px;"></a> -->





                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            SERVICES
                        </a>
                        <div class="dropdown-menu">
                            <!-- Paste your zwc-global-menu-container content here -->
                            <div class="zwc-global-menu-container">
                                <!-- Your existing products dropdown content -->
                                <div class="zwc-tab-category">
                                    <!-- <ul role="tablist">...</ul> -->
                                    <div class="zw-template-inner" id="zw-template-inner">
                                        <div class="zwc-global-menu-container active">
                                            <div class="zwc-tab-category">
                                                <!-- <ul role="tablist">
                                                    <li class="active" tabindex="0" role="tab" aria-selected="true" id="zwc-category-tab-1" aria-controls="zwc-apps-tab">Apps</li>
                                                    <li tabindex="0" role="tab" aria-selected="false" id="zwc-category-tab-2" aria-controls="zwc-suites-tab">Suites</li>
                                                    <li tabindex="0" role="tab" aria-selected="false" id="zwc-category-tab-3" aria-controls="zwc-zohoone-tab">Zoho One</li>
                                                    <li tabindex="0" role="tab" aria-selected="false" id="zwc-category-tab-4" aria-controls="zwc-marketplace-tab">Marketplace</li>
                                                    <li class="zwc-all-prod-link" id="zwc-all-prod-link"><a tabindex="0" href="/all-products.html?src=zGlobalAllProducts">EXPLORE ALL PRODUCTS</a></li>
                                                </ul> -->
                                            </div>
                                            <!-- <div class="zwc-gh-close-btn" tabindex="0" role="button"><svg id="closeicon-svg" width="10" height="10" data-name="Layer 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 21.77">
                                                    <defs>
                                                        <style>
                                                            .cls-5 {
                                                                fill: none;
                                                                stroke: #525252;
                                                                stroke-linecap: round;
                                                                stroke-linejoin: round;
                                                                stroke-width: 3px;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <title>close</title>
                                                    <path id="Union_1" data-name="Union 3" class="cls-5" d="M11,10.82,1.5,20.27,11,10.82,1.63,1.5,11,10.82l9.24-9.2L11,10.82l9.5,9.45Z"></path>
                                                </svg></div> -->
                                            <div class="zwc-tab-category-wrap">
                                                <div class="zwc-tab-category-list zwc-all-products-tab active" aria-labelledby="zwc-category-tab-1" role="tabpanel" id="zwc-apps-tab">
                                                    <div class="zwc-all-products-list">
                                                        <!-- <div class="zwc-product-categories"> -->
                                                        <!-- <div class="zwcg-category-search">
                                                                <div class="zwcg-search-category-inner added-placeholder">
                                                                    <input class="zwcg-category-search-field" autocomplete="off" placeholder="I’m looking for…" type="text">
                                                                    <span class="zwcg-close" style="display: none;"><img src="https://www.zoho.com/sites/zweb/images/zoho_general_pages/allproducts/close-icons.svg"></span>
                                                                </div>
                                                                <div class="zwcg-search-product-results-wrapper">
                                                                    <div class="zwcg-search-product-results">
                                                                        <div class="zwcg-product-list">
                                                                            <ul class="zwcg-keyword-suggestion"></ul>
                                                                        </div>
                                                                        <div class="zwcg-no-keyword" style="display: none;">
                                                                            <p>No results found.</p>
                                                                            <p>Looking for something in particular? <a href="https://www.zoho.com/contactus.html">Connect with us</a>—we'd love to help!</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                        <!-- <ul role="navigation">
                                                                <li tabindex="0" class="zwc-product-category zwc-launch-menu active" role="button" aria-haspopup="true" aria-expanded="true" data-class="zwc-categoty-recent-lanches" aria-describedby="popupHint-0">Recent Launches<div id="popupHint-0" class="visually-hidden">Press Space or Enter to display list of options</div>
                                                                </li>
                                                                <li tabindex="0" class="zwc-product-category" role="button" aria-haspopup="true" aria-expanded="false" data-class="zwc-categoty-sales" aria-describedby="popupHint-0">Sales<div id="popupHint-0" class="visually-hidden">Press Space or Enter to display list of options</div>
                                                                </li>
                                                                <li tabindex="0" class="zwc-product-category" role="button" aria-haspopup="true" aria-expanded="false" data-class="zwc-categoty-marketing" aria-describedby="popupHint-1">Marketing<div id="popupHint-1" class="visually-hidden">Press Space or Enter to display list of options</div>
                                                                </li>
                                                                <li tabindex="0" class="zwc-product-category" role="button" aria-haspopup="true" aria-expanded="false" data-class="zwc-categoty-commerceandpos" aria-describedby="popupHint-2">Commerce and POS<div id="popupHint-2" class="visually-hidden">Press Space or Enter to display list of options</div>
                                                                </li>
                                                                <li tabindex="0" class="zwc-product-category" role="button" aria-haspopup="true" aria-expanded="false" data-class="zwc-categoty-service" aria-describedby="popupHint-3">Service<div id="popupHint-3" class="visually-hidden">Press Space or Enter to display list of options</div>
                                                                </li>
                                                                <li tabindex="0" class="zwc-product-category" role="button" aria-haspopup="true" aria-expanded="false" data-class="zwc-categoty-finance" aria-describedby="popupHint-4">Finance<div id="popupHint-4" class="visually-hidden">Press Space or Enter to display list of options</div>
                                                                </li>
                                                                <li tabindex="0" class="zwc-product-category" role="button" aria-haspopup="true" aria-expanded="false" data-class="zwc-categoty-emailandcollaboration" aria-describedby="popupHint-5">Email and Collaboration<div id="popupHint-5" class="visually-hidden">Press Space or Enter to display list of options</div>
                                                                </li>
                                                                <li tabindex="0" class="zwc-product-category" role="button" aria-haspopup="true" aria-expanded="false" data-class="zwc-categoty-humanresources" aria-describedby="popupHint-6">Human Resources<div id="popupHint-6" class="visually-hidden">Press Space or Enter to display list of options</div>
                                                                </li>
                                                                <li tabindex="0" class="zwc-product-category" role="button" aria-haspopup="true" aria-expanded="false" data-class="zwc-categoty-legal" aria-describedby="popupHint-7">Legal<div id="popupHint-7" class="visually-hidden">Press Space or Enter to display list of options</div>
                                                                </li>
                                                                <li tabindex="0" class="zwc-product-category" role="button" aria-haspopup="true" aria-expanded="false" data-class="zwc-categoty-securityanditmanagement" aria-describedby="popupHint-8">Security and IT Management<div id="popupHint-8" class="visually-hidden">Press Space or Enter to display list of options</div>
                                                                </li>
                                                                <li tabindex="0" class="zwc-product-category" role="button" aria-haspopup="true" aria-expanded="false" data-class="zwc-categoty-biandanalytics" aria-describedby="popupHint-9">BI and Analytics<div id="popupHint-9" class="visually-hidden">Press Space or Enter to display list of options</div>
                                                                </li>
                                                                <li tabindex="0" class="zwc-product-category" role="button" aria-haspopup="true" aria-expanded="false" data-class="zwc-categoty-projectmanagement" aria-describedby="popupHint-10">Project Management<div id="popupHint-10" class="visually-hidden">Press Space or Enter to display list of options</div>
                                                                </li>
                                                                <li tabindex="0" class="zwc-product-category" role="button" aria-haspopup="true" aria-expanded="false" data-class="zwc-categoty-developerplatforms" aria-describedby="popupHint-11">Developer Platforms<div id="popupHint-11" class="visually-hidden">Press Space or Enter to display list of options</div>
                                                                </li>
                                                                <li tabindex="0" class="zwc-product-category" role="button" aria-haspopup="true" aria-expanded="false" data-class="zwc-categoty-iot" aria-describedby="popupHint-12">IoT<div id="popupHint-12" class="visually-hidden">Press Space or Enter to display list of options</div>
                                                                </li>
                                                            </ul> -->
                                                        <!-- <a class="zwc-explore-all-prd" href="/all-products.html?src=zGlobalAllProducts">EXPLORE ALL PRODUCTS</a> -->
                                                        <!-- </div> -->
                                                        <div class="zwc-product-details zwc-categoty-recent-lanches active">
                                                            <!-- <h4 tabindex="0" aria-label="Recent Launches press tab to explore">Recent Launches</h4> -->
                                                            <div class="zwc-launch-products">
                                                                <div class="zwc-launch-wrap">
                                                                    <div class="zwc-launch-rows">
                                                                        <div class="zwc-launch-list zp-apptics">
                                                                            <div class="zwc-launch-product-content">
                                                                                <div class="zwc-launch-prd-details"><img src="assets/images/webdev2.png" alt="kakatiya solutions web des img" width="180" height="120" class="zwc-product-logo zp-wid-custom">

                                                                                    <div class="card-bottom">
                                                                                        <p>Web Designing</p><a href="/apptics/?src=allproducts">Try for free</a>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="zwc-launch-list zp-iot">
                                                                            <div class="zwc-launch-product-content">
                                                                                <div class="zwc-launch-prd-details"><img src="assets/images/webdev3.png" alt="kakatiya solutions web dev img" width="180" height="120" class="zwc-product-logo">
                                                                                    <div class="card-bottom">
                                                                                        <p>Web Development.</p><a href="/iot/?src=allproducts">Try now</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="zwc-launch-list zp-payments">
                                                                            <div class="zwc-launch-product-content">
                                                                                <div class="zwc-launch-prd-details"><img src="assets/images/digital-marketing2.png" alt="kakatiya solutions marketing img" width="180" height="120" class="zwc-product-logo">
                                                                                    <div class="card-bottom">
                                                                                        <p>Digital Marketing.</p><a href="/payments/?src=allproducts" class="zgh-btn-1">Try now</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="zwc-launch-list zp-payments">
                                                                            <div class="zwc-launch-product-content">
                                                                                <div class="zwc-launch-prd-details"><img src="assets/images/mobile-application.png" alt="kakatiya solutions mobile dev img" width="180" height="120" class="zwc-product-logo">
                                                                                    <div class="card-bottom">
                                                                                        <p>Mobile Application.</p><a href="/payments/?src=allproducts" class="zgh-btn-1">Try now</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="zwc-launch-list zp-payments">
                                                                            <div class="zwc-launch-product-content">
                                                                                <div class="zwc-launch-prd-details"><img src="assets/images/software-development2.png" alt="kakatiya solutions software img" width="180" height="120" class="zwc-product-logo">
                                                                                    <div class="card-bottom">
                                                                                        <p>Software Development.</p><a href="/payments/?src=allproducts" class="zgh-btn-1">Try now</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="zwc-launch-list zp-payments">
                                                                            <div class="zwc-launch-product-content">
                                                                                <div class="zwc-launch-prd-details"><img src="assets/images/Business-Branding2.png" alt="kakatiya solutions branding img" width="180" height="120" class="zwc-product-logo">
                                                                                    <div class="card-bottom">
                                                                                        <p>Branding.</p><a href="/payments/?src=allproducts" class="zgh-btn-1">Try now</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="zwc-launch-list zp-payments">
                                                                            <div class="zwc-launch-product-content">
                                                                                <div class="zwc-launch-prd-details"><img src="assets/images/bulk-voice-sms2.png" alt="kakatiya solutions bulk sms image" width="180" height="120" class="zwc-product-logo">
                                                                                    <div class="card-bottom">
                                                                                        <p>Bulk SMS / VOICE.</p><a href="/payments/?src=allproducts" class="zgh-btn-1">Try now</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="zwc-launch-list zp-payments">
                                                                            <div class="zwc-launch-product-content">
                                                                                <div class="zwc-launch-prd-details"><img src="assets/images/domains2.png" alt="kakatiya solutions Domains imag" width="180" height="120" class="zwc-product-logo">
                                                                                    <div class="card-bottom">
                                                                                        <p>Domains & Hostings.</p><a href="/payments/?src=allproducts" class="zgh-btn-1">Try now</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Rest of your products dropdown content -->
                                    </div>
                                </div>
                    </li>
                    <!-- <li class="zwc-all-product active" tabindex="0" role="button" aria-haspopup="true" aria-controls="zwc-global-menu-container" aria-expanded="true">Products</li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">GET A QUOTE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CLIENTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PORTFOLIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CAREERS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT</a>
                    </li>
                    <!-- <li class="nav-item">
                    <input type="checkbox" id="menu-toggle" class="toggler">
                    <label for="menu-toggle">
                        <span></span>
                    </label>
                </li> -->
                </ul>

            </div>
            <!-- <a class="navbar-brand" href="#"><img src="assets/aicte.webp" alt="aicte logo image"
                style="width: 100px; height: 80px;"></a> -->
            <ul class="menu-icon">
                <li class="nav-item">
                    <input type="checkbox" id="menu-toggle" class="toggler">
                    <label for="menu-toggle">
                        <span></span>
                    </label>
                </li>
            </ul>
        </div>
    </nav>

    <div class="menu animate__animated animate__fadeInRight" id="menu" style="display: none;">
        <div>
            <div>
                <ul style="text-align: center; list-style-type: none; padding: 0; margin: 10rem;" class="animate__animated animate__zoomIn animate__delay-1s" id="menulist">
                    <li><a href="https://vgsek.ac.in/index">Home</a></li>
                    <li><a href="https://vgsek.ac.in/about">About Us</a></li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Academics
                        </a>
                        <ul class="dropdown-menu">

                            <li><a class="dropdown-item" href="https://vgsek.ac.in/admissions">Admissions</a></li>
                            <li><a class="dropdown-item" href="https://vgsek.ac.in/academic"> Academic Regulations</a></li>
                            <li><a class="dropdown-item" href="https://vgsek.ac.in/academic_calendar"> Academic
                                    Calendars</a></li>

                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Departments
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="https://vgsek.ac.in/cse/cse2"> Computer Science &amp;
                                    Engineering</a></li>
                            <li><a class="dropdown-item" href="https://vgsek.ac.in/ece/ece2">Electronics and Communication
                                    Engineering</a></li>

                            <li><a class="dropdown-item" href="https://vgsek.ac.in/eee/eee2">Electrical and Electronics
                                    Engineering</a></li>
                            <li><a class="dropdown-item" href="https://vgsek.ac.in/civil/civil">Civil Engineering</a></li>
                            <li><a class="dropdown-item" href="https://vgsek.ac.in/me/me"> Mechanical Engineering</a></li>
                            <li><a class="dropdown-item" href="https://vgsek.ac.in/ai_ml/ai_ml">Computer Science &amp;
                                    Engineering ( AI &amp; ML)</a></li>
                            <li><a class="dropdown-item" href="https://vgsek.ac.in/data/data">Computer Science &amp;
                                    Engineering (Data Science)</a></li>

                            <li><a class="dropdown-item" href="https://vgsek.ac.in/mba">Master of Business
                                    Administration(MBA)</a></li>
                            <li><a class="dropdown-item" href="https://vgsek.ac.in/mca">Master of Computer
                                    Applications.(MCA)</a></li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Humanities
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="https://vgsek.ac.in/humanities/hs_english3"> English</a></li>
                            <li><a class="dropdown-item" href="https://vgsek.ac.in/humanities/hs_physics3">Physics</a></li>

                            <li><a class="dropdown-item" href="https://vgsek.ac.in/humanities/hs_chemistry3">Chemistry</a>
                            </li>
                            <li><a class="dropdown-item" href="https://vgsek.ac.in/humanities/hs_maths3">Maths</a></li>

                        </ul>
                    </li>
                    <li><a href="https://vgsek.ac.in/placement/placement">Placements</a></li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Facilities
                        </a>
                        <ul class="dropdown-menu">

                            <li><a class="dropdown-item" href="https://vgsek.ac.in/facilities/library#infrastructure_main">
                                    Library</a></li>

                            <li><a class="dropdown-item"
                                    href="https://vgsek.ac.in/facilities/library#infrastructure_main1">Amenities</a></li>
                            <li><a class="dropdown-item" href="https://vgsek.ac.in/facilities/library#infrastructure_main2">
                                    PCS Facilities</a></li>


                        </ul>
                    </li>
                    <li><a href="https://vgsek.ac.in/contact">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>



</header>
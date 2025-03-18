<?php include('header.php'); ?>

<style>
    .sidebar {

        width: 95px;

        position: fixed;

        left: 0px;

        top: 572px;

        z-index: 99;

    }



    .our-gallery-1 {

        height: auto;

        width: 100%;

        margin: 0px 0px;

        overflow: hidden;

        padding: 5px 0px 0px 0px;

        max-width: 100%;

    }



    .gal {

        width: 15%;

        float: left;

        margin: 0px 0px;

        padding: 0px 0px;

        max-width: 100%;

    }



    .gal h4 {

        font-size: 25px;

        color: #333;

        margin: 0px 0px;

        padding: 5px 0px;

        font-family: 'Open Sans', sans-serif;

    }



    .gal-border {

        width: 70%;

        border: 1px solid grey;

        /* height: 2px; */

        float: left;

        margin: 19px 10px 0px 0px;

        padding: 0px 0px 0px 0px;

        max-width: 100%;

    }



    .gallery {

        height: auto;

        width: 100%;

        margin: 0px 0px;

        padding: 0px 0px;

        max-width: 100%;

    }



    button.btn:hover {

        background-color: #fff;

        border: 2px solid #bbb;

        text-decoration: none;

    }



    button.btn a:hover {

        text-decoration: none;

    }



    .ln_rm {

        color: #fff;

        float: right;

    }

    .modal-header {

        display: flex;

        justify-content: space-between;

    }

    .marquee-container p a {

        text-decoration: none;

        color: black;

    }
</style>



<?php include('popup.php'); ?>

<div class="clearfix"></div>

<div class="band">

    https://github.com/ajaxorg/ace/wiki/Default-Keyboard-Shortcuts <div class="banner">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->

            <!--

            <ol class="carousel-indicators">

               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

            </ol>

         -->

            <!-- Wrapper for slides -->

            <div class="carousel-inner" role="listbox">

                <!--<div class="item active">-->

                <!--   <img src="img/jayamukhi-banner-new.png" alt="Jayamukhi Institute of Technology and Science, JITS">-->

                <!--</div>-->
                <div class="item  active">

                    <img src="img/unolo_banner_img.jpg" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>
                <div class="item">

                    <img src="img/nss-unit.webp" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>
                <div class="item">

                    <img src="img/cultural-event.webp" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>
                <div class="item ">

                    <img src="img/home-assistant-banner.webp" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/JAYAMUKHI.jpg" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>



                <div class="item">

                    <img src="img/de_5.jpg" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/DDE04.jpg" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>



                <div class="item">

                    <img src="img/03.jpg" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/de_02.jpg" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/de_01.jpg" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>



                <div class="item">

                    <img src="img/img_2.jpg" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/img_1.jpg" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/img_3.jpg" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/02 banner.jpg" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/mamaidala_javahar.webp" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/mamaidala_javahar2.webp" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/s01.png" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>



                <div class="item">

                    <img src="img/s02.png" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>



                <div class="item">

                    <img src="img/s03.png" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>



                <div class="item">

                    <img src="img/s04.png" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>



                <div class="item">

                    <img src="img/s05.png" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>



                <div class="item">

                    <img src="img/pcb_design.webp" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/JITS_goutami.jpg" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/JITS_jose_mary.jpg" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>



                <!--new banners should start from here-->

                <div class="item">

                    <img src="img/cp0.webp" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/cp1.webp" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/cp2.webp" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/cp3.webp" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/cp4.webp" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/cp5.webp" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/cp6.webp" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/cp7.webp" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/cp8.webp" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <!--new banners should end here-->



                <div class="item">

                    <img src="img/001.jpg" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/002.jpg" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/003.jpg" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/04.jpg" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <!--<div class="item">-->

                <!--   <img src="img/005.jpg" alt="Jayamukhi Institute of Technology and Science, JITS">-->

                <!--</div>-->

                <div class="item">

                    <img src="img/006.jpg" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/pic_1.webp" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/pic_2.webp" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/seva_bharath_award.webp" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/eee1_banner.webp" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/jayamukhi-banner_new.png" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/eee3_banner.webp" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/eee4_banner.webp" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/eee2_banner.webp" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/eee5_banner.webp" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/jits-banner.webp" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/LNCT-National Agrohackathon-Award.webp" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <div class="item">

                    <img src="img/banner_2023.webp" alt="Jayamukhi Institute of Technology and Science, JITS">

                </div>

                <!-- <div class="item">-->

                <!--   <img src="img/power-women.png" alt="Jayamukhi Institute of Technology and Science, JITS">-->

                <!--</div>-->

                <!--<div class="item">-->

                <!--   <img src="img/structure-new.png" alt="Jayamukhi Institute of Technology and Science, JITS">-->

                <!--</div>-->

                <!--<div class="item">-->

                <!--   <img src="img/ssrn-01.jpg" alt="Jayamukhi Institute of Technology and Science, JITS">-->

                <!--</div>-->

                <!--<div class="item">-->

                <!--   <img src="img/ssrn-02.jpg" alt="Jayamukhi Institute of Technology and Science, JITS">-->

                <!--</div>-->

                <!--<div class="item">-->

                <!--   <img src="img/kavya-a-ban.jpg" alt="Jayamukhi Institute of Technology and Science, JITS">-->

                <!--</div>-->

                <!--<div class="item">-->

                <!--   <img src="img/riyaaz-md-ban.jpg" alt="Jayamukhi Institute of Technology and Science, JITS">-->

                <!--</div>-->

                <!--<div class="item">-->

                <!--   <img src="img/naveen-s-ban.jpg" alt="Jayamukhi Institute of Technology and Science, JITS">-->

                <!--</div>-->

                <!--<div class="item">-->

                <!--   <img src="img/prashanth-k-ban.jpg" alt="Jayamukhi Institute of Technology and Science, JITS">-->

                <!--</div>-->

                <!--<div class="item">-->

                <!--   <img src="img/harishankar-ban.jpg" alt="Jayamukhi Institute of Technology and Science, JITS">-->

                <!--</div>-->

                <!--<div class="item">-->

                <!--   <img src="img/srivani-g-ban.jpg" alt="Jayamukhi Institute of Technology and Science, JITS">-->

                <!--</div>-->

                <!--<div class="item">-->

                <!--   <img src="img/ieee-award-banner.jpg" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS">-->

                <!--</div>-->

                <!--<div class="item">-->

                <!--   <img src="img/rmsssac-banner.jpg" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS">-->

                <!--</div>-->

                <!--<div class="item">-->

                <!--   <img src="img/guiness-book-banner.jpg" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS">-->

                <!--</div>-->

                <!--<div class="item">-->

                <!--   <img src="img/tractor-banner.jpg" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS">-->

                <!--</div>-->

                <!--<div class="item">-->

                <!--   <img src="img/start-up-yatra.jpg" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS">-->

                <!--</div>-->

                <!--<div class="item">-->

                <!--   <img src="img/tractor-design-newspaper.jpg" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS">-->

                <!--</div>-->

                <!--<div class="item">-->

                <!--   <img src="img/banner2.png" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS">-->

                <!--</div>-->

                <!--<div class="item">-->

                <!--   <img src="img/banner3.png" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS">-->

                <!--</div>-->

                <!--<div class="item">-->

                <!--   <img src="img/banner4.png" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS">-->

                <!--</div>-->

                <!--<div class="item">-->

                <!--   <img src="img/banner5.png" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS">-->

                <!--</div>-->

                <!--<div class="item">-->

                <!--   <img src="img/nr01.jpg" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS" style="width:1345;height:475;">-->

                <!--</div>-->

                <!--<div class="item">-->

                <!--   <img src="img/nr02.jpg" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS" style="width:1345;height:475;">-->

                <!--</div>-->

                <!--<div class="item">-->

                <!--   <img src="img/nr03.jpg" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS" style="width:1345;height:475;">-->

                <!--</div>-->

                <!--<div class="item">-->

                <!--   <img src="img/nr04.jpg" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS" style="width:1345;height:475;">-->

                <!--</div>-->

                <!--<div class="item">-->

                <!--   <img src="img/nr05.jpg" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS" style="width:1345;height:475;">-->

                <!--</div>-->

                <!--<div class="item">-->

                <!--   <img src="img/nr06.jpg" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS" style="width:1345;height:475;">-->

                <!--</div>-->

                <!--<div class="item">-->

                <!--   <img src="img/nr07.jpg" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS" style="width:1345;height:475;">-->

                <!--</div>-->



                <!--

               <div class="item ">

                  <img src="img/deepak-d-ieee-banner.jpg" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS">

               </div>

               <div class="item">

                  <img src="img/banner1.png" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS">

               </div>

               <div class="item">

                  <img src="img/nr09.jpg" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS" style="width:1345;height:475;">

               </div>

               <div class="item">

                  <img src="img/nr13.jpg" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS" style="width:1345;height:475;">

               </div>

               <div class="item">

                  <img src="img/nr20.jpg" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS" style="width:1345;height:475;">

               </div>

               <div class="item">

                  <img src="img/nr23.jpg" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS" style="width:1345;height:475;">

               </div>

               <div class="item">

                  <img src="img/nr26.jpg" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS" style="width:1345;height:475;">

               </div>

               <div class="item">

                  <img src="img/nr38.png" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS" style="width:1345;height:475;">

               </div>

            <div class="item">

               <img src="images/graduateday/graduateday3.png" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS" style="width:1345;height:475;">

            </div>

            <div class="item">

               <img src="images/graduateday/graduateday4.png" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS" style="width:1345;height:475;">

            </div>

            <div class="item">

               <img src="images/graduateday/graduateday18.png" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS" style="width:1345;height:475;">

            </div>

            <div class="item">

               <img src="images/graduateday/graduateday1.png" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS" style="width:1345;height:475;">

            </div>

            -->

            </div>

            <!-- Left and right controls -->

            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">

                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>

                <span class="sr-only">Previous</span>

            </a>

            <a class="right carousel-control" style="z-index: 99;" href="#myCarousel" role="button" data-slide="next">

                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>

                <span class="sr-only">Next</span>

            </a>

        </div>

    </div>

    <div class="newsevents">

        <h3>Latest News & Events <a href="lat_news.php" class="ln_rm">Read more >></a></h3>

        <div id="nt-example2">

            <div class="panel panel-default">

                <div class="panel-body">

                    <ul class="demo2">


                        <li style="" class="news-item">

                            <a href="pdf/swayam-course.pdf" target="_blank">Congratulations to Mr L. Naveen,Asst prof,Civil Dept,for NPTEL certificate course in PYTHON PROGRAMMING with 77 percentage.

                            </a>

                        </li>
                        <li style="" class="news-item">

                            <a href="images/unclo_img.jpg" target="_blank">Congratulations to Mr K. Swatej Reddy , Department of CSE Final year, for being placed in with 15,lakhs package at UNOLO.

                            </a>

                            <!--</li> -->
                            <!--   <li style="" class="news-item">-->

                            <!--<a href="" target="_blank">Value Added course to all First year second semester students!!!-->

                            <!--   </a>-->

                            <!--</li> -->


                            <!--                         <li style="" class="news-item">-->

                            <!--<a href="" target="_blank">Workshop on Full Stack Development to all 3 year second semester students-->

                            <!--   </a>-->

                            <!--</li> -->
                        <li style="" class="news-item">

                            <a href="" target="_blank">Ph.D AWARDED TO MOHAMMED AFREEN, ASSISTANT PROFESSOR IN HUMANITIES AND SCIENCE DEPARTMENT-JITS NARSAMPET FROM CHAITANYA DEEMED TO BE UNIVERSITY - HYDERABAD

                            </a>

                        </li>

                        <li style="" class="news-item">

                            <a href="images/Problem_Solving_Through_Programming_in_C_(1)_page-0001.jpg" target="_blank">Dr.JOSE MARY GOLAMARI Department of Computer Science Engineering,She was successfully completed NPTEL course in Problem Solving Through Programming in C

                            </a>

                        </li>

                        <li style="" class="news-item">

                            <a href="images/DOC-20241128-WA0028._page_0001.jpg" target="_blank"> Dr. S.GOUTHAMI Department Of Computer Science Engineering , She was successfully completed NPTEL course in Problem Solving Through Programming in C

                            </a>

                        </li>

                        <li style="" class="news-item">

                            <a href="images/Soil_Mechanics_Geot_chnical_Engineering I_page-0001.jpg" target="_blank">M.BALU KUMAR Department Of Civil Engineering , He was successfully completed NPTEL course in Soil Mechanics

                            </a>

                        </li>

                        <li style="" class="news-item">

                            <a>Btech ECE Final year students visited NRSC ( National Remote Sensing Centre) - ISRO,Hyderabad on 18th November 2024

                            </a>

                        </li>

                        <li style="" class="news-item">

                            <a>S.KALYAN Department of Electronics and Communication Engineering, He was successfully completed NPTEL course in DIGITAL CIRCUITS

                            </a>

                        </li>

                        <li style="" class="news-item">

                            <a>Dr. P JAWAHAR Department Of Mechanical Engineering , He was successfully completed NPTEL course in

                                Introduction to Internet of Things

                            </a>

                        </li>

                        <li style="" class="news-item">

                            <a>P.ANAND KUMAR Department Of Computer Science Engineering , He was successfully completed NPTEL course in

                                Data Base Management System

                            </a>

                        </li>

                        <li style="" class="news-item">

                            <a>PH.D awarded to Dr.Shriamshetty Gouthami, Associate professor in CSE, JITS From Osmania University, Hyderabad

                            </a>

                        </li>

                        <li style="" class="news-item">

                            <a> PH.D awarded to Dr.JoseMary Golamari, Associate professor in CSE, JITS From K.L.University, vijayawada

                            </a>

                        </li>

                        <li style="" class="news-item">

                            <a>PH.D awarded to Dr.JoseMary Golamari, Associate professor in CSE, JITS

                                From K.L.University, vijayawada</a>

                        </li>

                        <li style="" class="news-item">

                            <a> PH.D awarded to Dr.Shriamshetty Gouthami, Associate professor in CSE, JITS

                                From Osmania University, Hyderabad</a>

                        </li>

                        <li style="" class="news-item">

                            <a>The NSS activity blood donation camp was conducted on 19 November 2024.</a>

                        </li>

                        <li style="" class="news-item">

                            <a>Hearty Congratulations to Dr. M. Jawahar, Associate Professor in MED, Jayamukhi Institute of Technological Sciences, Awarded a Ph.D. from Jawaharlal Nehru Technological University Hyderabad (JNTUH). </a>

                        </li>

                        <li style="" class="news-item">

                            <a>Dr.P.Srinivas Rao,Prof.& Head,Department of CSE-JITS received Bharath Education Excellence Award (Jyestha Acharya Award) 2024 at Andhra University by Chief Guest Dr. Budha Chandrashekar, Chief Coordinating Officer, AICTE, Guest of Honor, Prof. P.V.G.D Prasad Reddy, Vice Chancellor, Andhra University and other eminent personalities. The event is organised by Brain O Vision </a>

                        </li>

                        <li style="" class="news-item">

                            <a>Department of Electronics and Communication Engineering is organizing Skill Development Program on 'PCB Design' during 11th to 13th March 2024.</a>

                        </li>

                        <li style="" class="news-item">

                            <a href="pdf/ATAL_FDP-ADDITIVE_MANUFACTURING.pdf" target="_blank">AICTE Sponsored ATAL FDP on "Additive Manufacturing - 3D Printing Technology" during 25th to 30th November 2023 organized by AICTE IDEA Lab and Department of Electronics and Communication Engineering.</a>

                        </li>

                        <li style="" class="news-item">

                            <a>IEEE Jayamukhi Student Branch Chapter Bagged International First prize of worth $850 USD in the Long Video contest organized by International Society Institute of Electrical and Electronics Engineering(IEEE) for IEEE DAY-2022 celebrations</a>

                        </li>

                        <li style="" class="news-item">

                            <a> B.Tech IV year CSE II semester Ms.K.Chandana, is the Award winner of portrait artist received from SHE INSPIRES AWARDS 2023 among 400+ nominations all over India on the occasion of International Women’s Day 2023</a>

                        </li>

                        <li style="" class="news-item">

                            <a> B.Tech EEE III Year II semester student Mr.P.Rahul stood in 2ndPosition Internationally and 1stPosition Nationally all over the world among 4500+ students participated from different countries in IEEE PUZZLER International Quiz contest for the IEEE International Education week 2023 organized by IEEE society for the academic year 2022-23</a>

                        </li>

                        <li style="" class="news-item">

                            <a> B.Tech EEE III Year II semester student Mr.P.Rahul got selected as Technical & Professional Development Lead under IEEE Hyderabad section for IEEE INDIA COUNCIL under R-10 Asia pacific region for the year 2023</a>

                        </li>

                        <li style="" class="news-item">

                            <a> Jayamukhi Institute of Technological sciences IEEE JAYAMUKHI Student Branch won $ 200 USD in the PES High performing Student Branch chapter program PES HPSBCP 2023 under Asia pacific Region-10 for the year 202</a>

                        </li>

                        <li style="" class="news-item">

                            <p>Graduation Day - 2023</p

                                <a href="https://forms.gle/WavDCwNTKAFYbK86" target="_blank">Click here for Registration</a>

                            <p>Last Date for Registration: 19<sup>th</sup> February 2023</p>

                        </li

                            <li style="" class="news-item">

                        <a>Dr. S. Sandhya Rani, Professor of ECE, Jayamukhi Institute of Technological Sciences received Best Women Researcher Award for the year 2022 from Social Science Research Network (SSRN) in Association with International Journal for Innovative Engineering And Management Research- IJIEMR Elsevier on 10-09-2022.</a>

                        </li>

                        <li style="" class="news-item">

                            <a>Hearty Congratulations to Dr. Ch.Vahini Devi madam, Director, Vaagdevi & Jayamukhi group of institutions on receiving "Power Woman" Award from Lead India-USA.</a>

                        </li>

                        <li style="" class="news-item">

                            <a href="https://forms.gle/e9foFzte539vcwde6" target="_blank">Register for A Two Day Workshop on “Designing Solar PV Systems” on 20th & 21st December 2021</a>

                        </li>

                        <li style="" class="news-item">

                            <a>Dr.K.Ranjith kumar, Professor & Mr.D.Rajani kumar, Associate Professor & HOD from EEE department received Young scientist award, Best Academician award for the academic year 2020-21 from Social Science Research Network (SSRN) in Association with Elsevier & International Journal for Innovative Engineering and Management Research (IJIEMR) for IJIEMR-ELSEVIER SSRN RESEARCH AWARDS-2020 held during 20th December 2020 at Hotel Medicity, Vijayawada</a>

                        </li>

                        <li style="" class="news-item">

                            <a>Congratulations Hari Shankar Prasad K, CSE 2020 passout for getting placements in HCL</a>

                        </li>

                        <!--<li style="" class="news-item">-->

                        <!--   <a>Congratulations S NAVEEN, ECE 2020 passout for getting placements in HCL</a>-->

                        <!--</li>-->

                        <!--<li style="" class="news-item">-->

                        <!--   <a>Congratulations ANNAM KAVYA, ECE 2020 passout for getting placements in HCL</a>-->

                        <!--</li>-->

                        <!--<li style="" class="news-item">-->

                        <!--   <a>Congratulations P Aravind Krishna, CSE 2020 passout for getting placements in BYJU'S as Business Development Trainee with 10 lacs package.</a>-->

                        <!--</li>-->

                        <!--<li style="" class="news-item">-->

                        <!--   <a>Congratulations Srilaxmi Bolla, CSE 2020 passout for getting placements in Infosys</a>-->

                        <!--</li>-->

                        <!--<li style="" class="news-item">-->

                        <!--   <a>Congratulations Mohammed Riyaz, CIVIL 2020 passout for getting placements in BYJU'S as Business Development Trainee with 10 lacs package.</a>-->

                        <!--</li>-->

                        <!--<li style="" class="news-item">-->

                        <!--   <a>Congratulations to Ms. G.Srivani, ECE IV Year 2019-2020 Received Outstanding WIE volunteer Award under IEEE Hyderabad Section</a>-->

                        <!--</li>-->

                        <!--<li style="" class="news-item">-->

                        <!--   <a>Congratulations to the students of 2019 & 2020 out going for achieving 450+ placements in reputed companies</a>-->

                        <!--</li>-->

                        <li style="" class="news-item">

                            <a>Congratulations Prashanth Kankala, EEE 2020 passout for getting placements in BYJU'S as Business Development Associate with 10 lacs package.</a>

                        </li>

                        <!--<li style="" class="news-item">-->

                        <!--   <a>We are thankful to HCL technologies for recruiting 140+ students in 2019 & 2020</a>-->

                        <!--</li>-->

                        <!--<li style="" class="news-item">-->

                        <!--   <a>Congratulations to Prof Dr. G . Krishnamurthy for getting 14.54 lacs AICTE grants for SKill and Personality Development cell for ST / SC students</a>-->

                        <!--</li>-->

                        <!--<li style="" class="news-item">-->

                        <!--   <a>Congratulations B.Sai Vardhan for getting placements in Toppr company with 10.60 lacs packages</a>-->

                        <!--</li>-->

                        <!--<li style="" class="news-item">-->

                        <!--   <a>Congratulations M.Jithender for getting placements in Toppr company with 10.60 lacs packages</a>-->

                        <!--</li>-->

                        <!--<li style="" class="news-item">-->

                        <!--   <a>Congratulations G.Kalyan for getting placements in Toppr company with 10.60 lacs packages</a>-->

                        <!--</li>-->

                        <li style="" class="news-item">

                            <a href="https://qrgo.page.link/q7ivR" target="_blank">AICTE SPONSORED SHORT TERM TRAINING PROGRAM(STTP) ON Digital Signal Processing Techniques for Advanced Communication Technologies 24th to 29th August 2020</a>

                        </li>

                        <li style="" class="news-item">

                            <a href="https://bit.ly/2TZQW0t" target="_blank"> AICTE SPONSORED SHORT TERM TRAINING PROGRAM(STTP) ON“Digital Signal Processing Techniques for Advanced Communication Technologies”23rd to 28th November 2020</a>

                        </li>

                        <li style="" class="news-item">

                            <a href="https://bit.ly/37xK68X" target="_blank"> AICTE SPONSORED SHORT TERM TRAINING PROGRAM(STTP) ON “Recent Advances and Future Applications of Neural Networks” 14th to 19th December 2020</a>

                        </li>

                        <li style="" class="news-item">

                            <a href="https://bit.ly/2GFUvFZ" target="_blank"> AICTE Sponsored Short Term Training Program Phase-III in online mode On "Signal Processing Techniques for Advanced Wireless Communication" 26th to 31st October 2020 </a>

                        </li>

                        <li style="" class="news-item">

                            <a href="https://bit.ly/33eTjRn" target="_blank"> AICTE SPONSORED SHORT TERM TRAINING PROGRAM(STTP) Phase-II on “Signal Processing Techniques for Advanced Wireless Communication” 21st to 26th September 2020</a>

                        </li>

                        <!--<li style="" class="news-item">-->

                        <!--   <a href="First year Exam Fee Notification.pdf" target="_blank"> B.Tech First year Exam Fee Notification</a>-->

                        <!--</li>-->

                        <li style="" class="news-item">

                            <a>Dr.A.Naraina received Young Scientist Award 2020 from Social Science Reasearch Network IJIEMR-ELSEVIER SSRN REASERCH AWARDS 2020 on 14th March 2020 held at Vijayawada</a>

                        </li>

                        <!--<li style="" class="news-item">-->

                        <!--   <a>Dr.A . Naraina Professor Department of EEE is certified as senior member under Institue of Electrical and Electronics Engineers(IEEE New York USA). This recognition of senior member elevation is towards his technical professional excellence</a>-->

                        <!--</li>-->

                        <!--<li style="" class="news-item">-->

                        <!--   <a>Received Reward from IEEE CS Richard E Merwin Scholarship by Mr.Deepak Doopati, CSE IV Year</a>-->

                        <!--</li>-->

                        <!--<li style="" class="news-item">-->

                        <!--   <a>Received Reward from IEEE CS Richard E Merwin Scholarship by Ms.P.Madhuri, ECE IV Year</a>-->

                        <!--</li>-->

                        <!--<li style="" class="news-item">-->

                        <!--   <a>Congratulations to Mr. Hameed Pasha, Associate Professor & Head ECE on becoming esteemed member of the "The Confederation of Elite Academicians of IICDC"</a>-->

                        <!--</li>-->

                        <!--<li style="" class="news-item">-->

                        <!--   <a href="abhignatha 2019/index.html" target="_blank">Abhignatha-2019</a>-->

                        <!--</li>-->

                        <!--<li style="" class="news-item">-->

                        <!--   <a href="add b.tech b.cat. 2019-20 8-7-2019.pdf" target="_blank">B Category Notification</a>-->

                        <!--</li>-->

                        <!--<li style="" class="news-item">-->

                        <!--   <a href="B CAT STUDENT PROFORMA jits.pdf" target="_blank">Application for B-Category Seats</a>-->

                        <!--</li>-->

                        <!--<li style="" class="news-item">-->

                        <!--   <a href="https://www.youtube.com/watch?v=4g8DjAXchic" target="_blank">Live of Pariksha Pe Charcha 2.0 programme</a>-->

                        <!--</li>-->

                        <!--<li style="" class="news-item">-->

                        <!--   <a href="" target="_blank">17 Ideas has selected for grand final in Startup India Telangana Yatra conducted at Hyd on oct 3rd-5th 2018</a>-->

                        <!--</li>-->

                        <!--<li style="" class="news-item">-->

                        <!--   <a href="internshala.html" target="_blank">Bagged All India Rank-59 in Internship Program hosted by AICTE &amp; Intenshala</a>-->

                        <!--</li>-->

                        <!--<li style="" class="news-item">-->

                        <!--   <a href="abhignatha/index.html" target="_blank">Registrations of Abhignatha 2018 </a>-->

                        <!--</li>-->

                        <!--<li style="" class="news-item">-->

                        <!--   <a href="yogaday2018.html" target="_blank">International Yoga Day 2018</a>-->

                        <!--</li>-->

                        <!--<li style="" class="news-item">-->

                        <!--   <a href="https://www.university.youth4work.com/JITS_Jayamukhi-Institute-of-Technological-Sciences" target="_blank">Register Self Empowerment Programme</a>-->

                        <!--</li>-->

                        <!--<li style="" class="news-item">-->

                        <!--   <a href="http://jayamukhiautonomous.in" target="_blank">AUTONOMOUS RESULTS</a>-->

                        <!--</li>-->

                        <!--<li style="" class="news-item">-->

                        <!--   <a href="JINI Technology.jpg" target="_blank">AICTE Sponsored Two Day National Seminar on JINI Technology ( 1st &amp; 2nd December 2017 )</a>-->

                        <!--</li>-->

                    </ul>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="clearfix"></div>



<!--marquee-->





<div class="marquee-container">

    <div class="heading">
        <p>Notice Board</p>
    </div>

    <marquee behavior="scroll" direction="left" scrollamount="10" onmouseover="this.stop()" onmouseout="this.start()">

        <!-- Your marquee content goes here -->
        <p>Workshop on Full Stack Development to all 3 year second semester students</p>
        <p>Value Added course to all First year second semester students!!!</p>

        <p><a href="pdf/AIRES1.pdf" target="_blank">AICTE online 6days ATAL FDP on "Artificial Intelligence Applications in Renewable Energy Sources" organized by Department of Electrical and Electronics Engineering from 9th to 14th December 2024."</a></p>

        <p>Department of Electronics and Communication Engineering is organizing Skill Development Program on 'PCB Design' during 11th to 13th March 2024.</p>


        <p>Jayamukhi Institute of Technological Sciences proudly Announce details of Number of students placements in Top Companies in this Academic Year, EDVEDHA-37 students, DRAFT SOURCING - 22, GENPACT 58, SHAKTHI AUTO COMPONENT 15, Tata Strive 30, UPCOMING CORPORATES TOSHIBA, Qspiders.</p>

    </marquee>

</div>



<!--marquee-->



<div class="jmit-eng">

    <div class="col-md-12">

        <div class="col-md-8">

            <div class="aboutus">

                <h2> WELCOME TO JAYAMUKHI INSTITUTE OF TECHNOLOGICAL SCIENCES</h2>

                <div class="col-md-12 ">

                    <div class="abt1">

                        <div class="col-md-6">

                            <p>Sponsored by the Jayamukhi Educational Society, the Jayamukhi Institute of Technological Sciences came into being in 2001 to provide quality and contemporary education with social relevance in the engineering faculty with an ultimate vision to maintain global standards in higher learning and research. The Institute has the approval of AICTE and recognized by the Government of Andhra Pradesh. It is permanently affiliated to Jawaharlal Nehru Technological University (JNTU), Hyderabad . The Institute has come upon 40 acres of green pastures in Narsampet, </p>

                        </div>

                        <div class="col-md-6">

                            <p><img src="img/clg-building.png" alt="JITS" /> </p>

                            <p class="read"> <a href="About-JITS.php"> Read More </a></p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="dept">

                <h2> DEPARTMENTS <img src="img/dept.png" class="newss"></h2>

                <div class="col-md-12">

                    <div class="abt2">

                        <div class="abt2">

                            <div class="depart">

                                <div class="dep-jits">

                                    <div class="dep">

                                        <div class="card-right">

                                            <a href="cse-department.php"> Computer Science & Engineering </a>

                                        </div>

                                    </div>

                                </div>

                                <div class="dep-jits">

                                    <div class="dep1">

                                        <div class="card-right">

                                            <a href="eee-department.php"> Electrical & Electronics Engineering </a>

                                        </div>

                                    </div>

                                </div>

                                <div class="dep-jits">

                                    <div class="dep2">

                                        <div class="card-right">

                                            <a href="ece.php"> Electronics & Communication Engineering </a>

                                        </div>

                                    </div>

                                </div>

                                <div class="dep-jits">

                                    <div class="dep3">

                                        <div class="card-right">

                                            <a href="mechanical.php"> Mechanical Engineering </a>

                                        </div>

                                    </div>

                                </div>

                                <div class="dep-jits">

                                    <div class="dep4">

                                        <div class="card-right">

                                            <a href="civil-department.php"> Civil Engineering </a>

                                        </div>

                                    </div>

                                </div>

                                <div class="dep-jits">

                                    <div class="dep5">

                                        <div class="card-right">

                                            <a href="h-s-department.php"> Humanities & Sciences </a>

                                        </div>

                                    </div>

                                </div>

                                <div class="dep-jits">

                                    <div class="dep6">

                                        <div class="card-right">

                                            <a href="mba.php"> MBA </a>

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

<div class="jmit-eng">

    <div class="col-md-8">

        <div class="col-md-4">

            <div class="dept2">

                <h2> Awards and Achievements <img src="img/dept.png" class="newss"></h2>

                <div class="achievements">
                    <p><a href="images/Awards/ASHOK_JITS.jpg" target="blank">*Mr. CH.ASHOK Assistant Professor of Physics Presented a Paper at 3rd International Conference on Multifunctional materials.<br></a></p>

                    <p><a href="images/Awards/deepak-d-ieee.jpg" target="blank">* Hearty Congratulations to Dr. M. Jawahar, Associate Professor in MED, Jayamukhi Institute of Technological Sciences, Awarded a Ph.D. from Jawaharlal Nehru Technological University Hyderabad (JNTUH).<br></a></p>

                    <p><a href="images/Awards/deepak-d-ieee.jpg" target="blank">* Received Reward from IEEE CS Richard E Merwin Scholarship by Mr.Deepak Doopati, CSE IV Year<br></a></p>

                    <p><a href="images/Awards/ieee_reward.png" target="blank">* IEEE REWARD TO MADHURI ECE IV YEAR.<br></a></p>

                    <p><a href="images/awards/IBM_TGMC_2017.jpg" target="blank">* Congratulations to Mr.Md.Hameed Pasha and Mr.M.Harsha shortlisted a project entitled “Absolute Kisan Guide” for Vishwakarma Awards 2019 organized by AICTE. <br></a></p>

                    <p class="pp" style="padding-bottom: 5px;"><a href="images/awards/IBM_TGMC_2017.jpg" target="blank">* Congratulations to Mr.Md.Hameed Pasha for nominated as Elite Academician IICDC 2019 contest jointly organized by DST-TI-AICTE.</a><br>

                        <a href="#" class="view-more" data-toggle="modal" data-target="#myModal"> View More...</a>

                    <div class="modal fade" id="myModal">

                        <div class="modal-dialog modal-dialog-centered">

                            <div class="modal-content">

                                <button type="button" class="close" data-dismiss="modal">&times;</button>

                                <div class="modal-header">

                                    <h2> Awards and Achievements <img src="img/dept.png" class="newss"></h2>

                                </div>

                                <div class="modal-body">

                                    <!--<p>* </p>-->

                                    <p>* Received Reward from IEEE CS Richard E Merwin Scholarship by Mr.Deepak Doopati, CSE IV Year</p>

                                    <p>* Congratulations to Dr.P.Krishna Professor of ECE for awarded Young Scientist Award by International Organization of Scientific Research and Development in September, 2018 </p>

                                    <p>* Received National wide 1st prize in Poster Presentation under ISTE - 2016.</p>

                                    <p>* Bagged National Level ISTE Best Engineering College Award - 2016.</p>

                                    <p>* Received Top 50 - Performing College of IBM The Great mind Challenge 2015 - 16</p>

                                    <p>* Received STATE LEVEL prizes in the prestigious event SRUJANA'16 from honorable Central Minister Shri Hansraj Gangaram Ahir - 2016</p>

                                    <p>* Received Top 50 - Performing College of IBM The Great mind Challenge 2015 - 16</p>

                                    <p>* Received Top 20 - Winner Team of IBM The Great mind Challenge 2015 - 16</p>

                                    <p>* Received state level prizes in the prestigious event SRUJANA'15 from honorable Central Minister Shri Bandaru Dattatreya - 2015</p>

                                    <p>* Ch. Akhila ECE IV year selected as IEEE, WIE Rep, Hyderabad</p>

                                    <p>* 6 Students selected as Microsoft Student Partners in 2013-14</p>

                                    <p>* 7 Students selected as Microsoft Student Partners in 2012-13</p>

                                    <p>* Md. Imran selected as AP promoter for spoken tutorial project IIT, Bombay and also Mozilla student rep.</p>

                                    <p>* Nominated for IEEE Vibrant Student Branch Award - 2011, 2012 & 2013</p>

                                    <p>* Bagged IBM TGMC Best Women Project in India award 2013.</p>

                                    <p>* Bagged TOP 30 Colleges in India Award in IBM TGMC 2011-12 for Most Active Participation</p>

                                    <p>* Bagged TOP 30 Colleges in India Award in IBM TGMC 2010-11 for Most Active Participation</p>

                                    <p>* Bagged Best ISTE Student Chapter Award - 2010</p>

                                    <p>* Received an appreciation from IEEE towards highest enrollments in Asia-Pacific reguion in 2008. </p>

                                    <p>* Received laptop as an appreciation from Infosys for effective conduct of Campus Connect Programme in the region in 2006-07</p>

                                    <p>* Bagged Best JKC Centre Award in the year 2005-06</p>

                                </div>

                                <div class="modal-footer">

                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                </div>

                            </div>

                        </div>

                    </div>

                    </p>

                </div>

            </div>

        </div>

        <div class="col-md-8">

            <div class="tbs">

                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">

                    <ul class="resp-tabs-list">

                        <li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab">Exam Branch</li>

                        <!--<li class="resp-tab-item" aria-controls="tab_item-1" role="tab">Academic Regulations &-->

                        <!--   Syllabus-->

                        <!--</li>-->

                        <li class="resp-tab-item" aria-controls="tab_item-2" role="tab">Downloads</li>

                    </ul>

                    <div class="resp-tabs-container">

                        <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Responsive Tab-1</h2>

                        <div class="resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">

                            <div class="panel-group" id="accordion">

                                <div class="panel panel-default">

                                    <div class="panel-heading">

                                        <h4 class="panel-title">

                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">

                                                Notifications

                                            </a><i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>

                                        </h4>

                                    </div>

                                    <div id="collapseOne" class="panel-collapse collapse in">

                                        <div class="panel-body">

                                            <p style="border-bottom: 1px solid #999;padding: 5px;">

                                                <a href="images/examnotif/R_18_-_B_Tech_1-1_Regular_and_Supplementary_Examinations_Dec-2019_.jpg" target="_blank">&#187; R18 - B.Tech I Year, I Semester Regular/Supplementary Examinations, Dec 2019 </a>

                                            </p>

                                            <p style="border-bottom: 1px solid #999;padding: 5px;">

                                                <a href="images/examnotif/R_15_and_R17_-_B_Tech_1-1_Supplementary_Examinations_Dec-2019_.jpg" target="_blank">&#187; R15/R17 - B.Tech I Year, I Semester Supplementary Examinations, Dec 2019 </a>

                                            </p>

                                            <!--<p style="border-bottom: 1px solid #999;padding: 5px;"><a href="https://docs.google.com/forms/d/e/1FAIpQLScukpBC_ea1GcfmZvYLnJbfEerAOf3F8W2mNgkDGbib7gIwjg/viewform?usp=send_form" target="_blank">&#187;  Registrations for National Level Workshop </a></p>

                                    <p style="border-bottom: 1px solid #999;padding: 5px;"><a href="#">&#187;  Applied for NBA Renewal </a></p>-->

                                            <p style="border-bottom: 1px solid #999;padding: 5px;">

                                                <a href="images/examnotif/B.Tech_II_III_Year,_I_Semester.jpg" target="_blank">&#187; B.Tech II & III Year, I Semester Regular/Supplementary Examinations, Nov 2019 </a>

                                            </p>

                                            <p style="border-bottom: 1px solid #999;padding: 5px;">

                                                <a href="images/examnotif/B.Tech_IV_Year,_I_Semester.jpg" target="_blank">&#187; B.Tech IV Year, I Semester Regular/Supplementary Examinations, Nov 2019 </a>

                                            </p>

                                            <p style="border-bottom: 1px solid #999;padding: 5px;">

                                                <a href="images/examnotif/M.Tech_M.B.A_I_II_Year,_I_II_Semester.jpg" target="_blank">&#187; M.Tech & M.B.A I & II Year, I & II Semester Regular/Supplementary Examinations, Nov 2019</a>

                                            </p>

                                            <p style="border-bottom: 1px solid #999;padding: 5px;">

                                                <a href="pdf/B%20CAT%20STUDENT%20PROFORMA%20jits.pdf" target="_blank">&#187; Application for B-Category Seats </a>

                                            </p>

                                        </div>

                                    </div>

                                </div>

                                <div class="panel panel-default">

                                    <div class="panel-heading">

                                        <h4 class="panel-title">

                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">

                                                Schedules

                                            </a><i class="indicator glyphicon glyphicon-chevron-up  pull-right"></i>

                                        </h4>

                                    </div>

                                    <div id="collapseTwo" class="panel-collapse collapse">

                                        <div class="panel-body">

                                            <p style="border-bottom: 1px solid #999;padding: 5px;">

                                                <a href="pdf/ExamsOct2020.pdf" target="_blank">&#187; October 2020 : B.Tech I,II,III,IV yr Sem-I Supplementary Examination Time Table Released</a>

                                            </p>

                                            <!-- <p style="border-bottom: 1px solid #999;padding: 5px;"><a href="#">&#187;  Carrier Orientation Programme on 7th Oct by T.Sharath Babu from Oracle India,HYD </a></p>

                                    <p style="border-bottom: 1px solid #999;padding: 5px;"><a href="#">&#187;  Students Received Best Poster Presentation held by IEEE YP WIE Congress at IIIT,Allahabad </a></p>

                                     <p style="border-bottom: 1px solid #999;padding: 5px;"><a href="#">&#187;  Jayamukhi received Best Engineering College Award </a></p>-->

                                        </div>

                                    </div>

                                </div>

                                <div class="panel panel-default">

                                    <div class="panel-heading">

                                        <h4 class="panel-title">

                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">

                                                Results

                                            </a><i class="indicator glyphicon glyphicon-chevron-up pull-right"></i>

                                        </h4>

                                    </div>

                                    <div id="collapseThree" class="panel-collapse collapse">

                                        <div class="panel-body">

                                            <p style="border-bottom: 1px solid #999;padding: 5px;">

                                                <a href="http://jayamukhiautonomous.in/" target="_blank">&#187; B.Tech First Year (1<sup>st</sup> & 2<sup>nd</sup> Semester) results</a>

                                            </p>

                                            <p style="border-bottom: 1px solid #999;padding: 5px;">

                                                <a href="http://jayamukhiautonomous.in/" target="_blank">&#187; B.Tech Second Year (1<sup>st</sup> & 2<sup>nd</sup> Semester) results</a>

                                            </p>

                                            <p style="border-bottom: 1px solid #999;padding: 5px;">

                                                <a href="http://jayamukhiautonomous.in/" target="_blank">&#187; B.Tech Third Year (1<sup>st</sup> & 2<sup>nd</sup> Semester) results</a>

                                            </p>

                                            <p style="border-bottom: 1px solid #999;padding: 5px;">

                                                <a href="http://jayamukhiautonomous.in/" target="_blank">&#187; B.Tech Fourth Year (1<sup>st</sup> & 2<sup>nd</sup> Semester) results</a>

                                            </p>

                                            <!--

                                    <p style="border-bottom: 1px solid #999;padding: 5px;"><a href="#">&#187; M.Tech </a></p>

                                    <p style="border-bottom: 1px solid #999;padding: 5px;"><a href="#">&#187;  MBA </a></p>

                                    -->

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>Responsive Tab-2</h2>

                        <!--<div class="resp-tab-content" aria-labelledby="tab_item-1">-->

                        <!--   <div class="panel-group" id="accordion">-->

                        <!--      <div class="panel panel-default">-->

                        <!--         <div class="panel-heading">-->

                        <!--            <h4 class="panel-title">-->

                        <!--               <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">-->

                        <!--                  Academic Regulations-->

                        <!--               </a><i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>-->

                        <!--            </h4>-->

                        <!--         </div>-->

                        <!--         <div id="collapseFour" class="panel-collapse collapse in">-->

                        <!--            <div class="panel-body">-->

                        <!--               <p style="border-bottom: 1px solid #999;padding: 5px;"><a href="pdf/B.Tech R15 Regulations.pdf" target="_blank">&#187; B.Tech Academic Regulations </a></p>-->

                        <!--               <p style="border-bottom: 1px solid #999;padding: 5px;"><a href="pdf/R15 M.Tech Regulations.pdf" target="_blank">&#187; M.Tech Academic Regulations </a></p>-->

                        <!--               <p style="border-bottom: 1px solid #999;padding: 5px;"><a href="pdf/R15_MBA_  Acadamic Regulation.pdf" target="_blank">&#187; MBA Academic Regulations </a></p>-->

                        <!--            </div>-->

                        <!--         </div>-->

                        <!--      </div>-->

                        <!--      <div class="panel panel-default">-->

                        <!--         <div class="panel-heading">-->

                        <!--            <h4 class="panel-title">-->

                        <!--               <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">-->

                        <!--                  Syllabus-->

                        <!--               </a><i class="indicator glyphicon glyphicon-chevron-up  pull-right"></i>-->

                        <!--            </h4>-->

                        <!--         </div>-->

                        <!--         <div id="collapseFive" class="panel-collapse collapse">-->

                        <!--            <div class="panel-body">-->

                        <!--               <p style="border-bottom: 1px solid #999;padding: 5px;"><a href="#" data-toggle="modal" data-target="#myModal2">&#187; B.Tech </a></p>-->

                        <!--               <div class="modal fade" id="myModal2" role="dialog">-->

                        <!--                  <div class="modal-dialog modal-md">-->

                        <!--                     <div class="modal-content">-->

                        <!--                        <div class="table-responsive">-->

                        <!--                           <table cellspacing="0" class="basicTable" border="1">-->

                        <!--                              <tbody>-->

                        <!--                                 <tr>-->

                        <!--                                    <th>Subject Name</th>-->

                        <!--                                    <th>Download</th>-->

                        <!--                                 </tr>-->

                        <!--                                 <tr class="tr1">-->

                        <!--                                    <td>R18 Civil Autonomous Syllabus</td>-->

                        <!--                                    <td><a href="pdf/R18-CIVIL-Syllabus.PDF" target="_blank"><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i> </a></td>-->

                        <!--                                 </tr>-->

                        <!--                                 <tr>-->

                        <!--                                    <td>R18 CSE Autonomous Syllabus</td>-->

                        <!--                                    <td><a href="pdf/R18-CSE-Syllabus.PDF" target="_blank"><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i> </a></td>-->

                        <!--                                 </tr>-->

                        <!--                                 <tr>-->

                        <!--                                    <td>R18 ECE Autonomous Syllabus</td>-->

                        <!--                                    <td><a href="pdf/R18-ECE-Syllabus.PDF" target="_blank"><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i> </a></td>-->

                        <!--                                 </tr>-->

                        <!--                                 <tr>-->

                        <!--                                    <td>R18 EEE Autonomous Syllabus</td>-->

                        <!--                                    <td><a href="pdf/R18-EEE-Syllabus.PDF" target="_blank"><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i> </a></td>-->

                        <!--                                 </tr>-->

                        <!--                                 <tr>-->

                        <!--                                    <td>R18 MECH Autonomous Syllabus</td>-->

                        <!--                                    <td><a href="pdf/R18-MECH-Syllabus.PDF" target="_blank"><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i> </a></td>-->

                        <!--                                 </tr>-->

                        <!--                                 <tr class="">-->

                        <!--                                    <td>R15 Civil Autonomous Syllabus</td>-->

                        <!--                                    <td><a href="pdf/civil.PDF" target="_blank"><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i> </a></td>-->

                        <!--                                 </tr>-->

                        <!--                                 <tr>-->

                        <!--                                    <td>R15 CSE Autonomous Syllabus</td>-->

                        <!--                                    <td><a href="pdf/cse.PDF" target="_blank"><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i> </a></td>-->

                        <!--                                 </tr>-->

                        <!--                                 <tr>-->

                        <!--                                    <td>R15 ECE Autonomous Syllabus</td>-->

                        <!--                                    <td><a href="pdf/ece.PDF" target="_blank"><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i> </a></td>-->

                        <!--                                 </tr>-->

                        <!--                                 <tr>-->

                        <!--                                    <td>R15 EEE Autonomous Syllabus</td>-->

                        <!--                                    <td><a href="pdf/eee.PDF" target="_blank"><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i> </a></td>-->

                        <!--                                 </tr>-->

                        <!--                                 <tr>-->

                        <!--                                    <td>R15 MECH Autonomous Syllabus</td>-->

                        <!--                                    <td><a href="pdf/mech.PDF" target="_blank"><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i> </a></td>-->

                        <!--                                 </tr>-->

                        <!--                              </tbody>-->

                        <!--                           </table>-->

                        <!--                        </div>-->

                        <!--                        <div class="modal-footer">-->

                        <!--                           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->

                        <!--                        </div>-->

                        <!--                     </div>-->

                        <!--                  </div>-->

                        <!--               </div>-->

                        <!--               <p style="border-bottom: 1px solid #999;padding: 5px;"><a href="#" data-toggle="modal" data-target="#myModal3">&#187; M.Tech </a></p>-->

                        <!--               <div class="modal fade" id="myModal3" role="dialog">-->

                        <!--                  <div class="modal-dialog modal-md">-->

                        <!--                     <div class="modal-content">-->

                        <!--                        <div class="table-responsive">-->

                        <!--                           <table cellspacing="0" class="basicTable" border="1">-->

                        <!--                              <tbody>-->

                        <!--                                 <tr>-->

                        <!--                                    <th>Subject Name</th>-->

                        <!--                                    <th>Download</th>-->

                        <!--                                 </tr>-->

                        <!--                                 <tr class="tr1">-->

                        <!--                                    <td>M.Tech CSE Syllabus</td>-->

                        <!-- <td><a href="pdf/M.Tech CSE  Autonomous Syllabus.pdf" target="_blank"><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i> </a></td> -->

                        <!--                                    <td><a href="pdf/M.Tech(Computer_Science_and_Engineering).pdf" target="_blank"><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i> </a></td>-->

                        <!--                                 </tr>-->

                        <!--                                 <tr>-->

                        <!--                                    <td>M.Tech Software Engineering Syllabus</td>-->

                        <!--                                    <td><a href="pdf/m.tech i year i sem(software_engg).pdf" target="_blank"><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i> </a></td>-->

                        <!--                                 </tr>-->

                        <!--                                 <tr>-->

                        <!--                                    <td>M.Tech EMBEDDED_SYSTEMS Syllabus</td>-->

                        <!--<td><a href="pdf/m.tech embedded_systems r15.pdf" target="_blank"><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i> </a></td>-->

                        <!-- <td><a href="pdf/M.Tech-EMBEDDED_SYSTEMS-SYLLABUS.pdf" target="_blank"><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i> </a></td> -->

                        <!--                                    <td><a href="pdf/M.Tech_EMBEDDED_SYSTEMS_SYLLABUS.pdf" target="_blank"><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i> </a></td>-->

                        <!--                                 </tr>-->

                        <!--                                 <tr>-->

                        <!--                                    <td>M.Tech VLSI Design Syllabus</td>-->

                        <!--                                    <td><a href="pdf/m.tech vlsi design.pdf" target="_blank"><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i> </a></td>-->

                        <!--                                 </tr>-->

                        <!--                                 <tr>-->

                        <!--                                    <td>M.Tech PSCA Syllabus</td>-->

                        <!--                                    <td><a href="pdf/m.tech psca autonomous syllabus-r15.pdf" target="_blank"><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i> </a></td>-->

                        <!--                                 </tr>-->

                        <!--                                 <tr>-->

                        <!--                                    <td>M.Tech CAD-CAM Syllabus</td>-->

                        <!--                                    <td><a href="pdf/cad-cam-mech syllabus.pdf" target="_blank"><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i> </a></td>-->

                        <!--                                 </tr>-->

                        <!--                              </tbody>-->

                        <!--                           </table>-->

                        <!--                        </div>-->

                        <!--                        <div class="modal-footer">-->

                        <!--                           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->

                        <!--                        </div>-->

                        <!--                     </div>-->

                        <!--                  </div>-->

                        <!--               </div>-->

                        <!--               <p style="border-bottom: 1px solid #999;padding: 5px;"><a href="#" data-toggle="modal" data-target="#myModal4">&#187; MBA </a></p>-->

                        <!--               <div class="modal fade" id="myModal4" role="dialog">-->

                        <!--                  <div class="modal-dialog modal-md">-->

                        <!--                     <div class="modal-content">-->

                        <!--                        <div class="table-responsive">-->

                        <!--                           <table cellspacing="0" class="basicTable" border="1">-->

                        <!--                              <tbody>-->

                        <!--                                 <tr>-->

                        <!--                                    <th>Subject Name</th>-->

                        <!--                                    <th>Download</th>-->

                        <!--                                 </tr>-->

                        <!--                                 <tr class="tr1">-->

                        <!--                                    <td>R15 M.B.A. I-Year Autonomous Syllabus</td>-->

                        <!-- <td><a href="pdf/MBA-30-12-2015 REGULATIONS AND COURSE SRUCTURE.pdf" target="_blank"><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i> </a></td> -->

                        <!--                                    <td><a href="pdf/MBA-R-18_Regulations.pdf" target="_blank"><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i> </a></td>-->

                        <!--                                 </tr>-->

                        <!--                              </tbody>-->

                        <!--                           </table>-->

                        <!--                        </div>-->

                        <!--                        <div class="modal-footer">-->

                        <!--                           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->

                        <!--                        </div>-->

                        <!--                     </div>-->

                        <!--                  </div>-->

                        <!--               </div>-->

                        <!--            </div>-->

                        <!--         </div>-->

                        <!--      </div>-->

                        <!--   </div>-->

                        <!--</div>-->

                        <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>Responsive Tab-3</h2>

                        <div class="resp-tab-content" aria-labelledby="tab_item-2">

                            <div class="panel-body">

                                <!--<p style="border-bottom: 1px solid #999;padding: 5px;"><a href="pdf/Letter-of-Govt.of-Telangana-Rule-of-Resevation-for-admission-GO-1974.pdf" target="_blank">&#187; Letter of Govt. of Telangana Rule of Resevation for admission GO 1974 </a></p>-->

                                <p style="border-bottom: 1px solid #999;padding: 5px;"><a href="pdf/Letter-of-Govt.of-Telangana-Rule-of-Resevation-for-admission-GO-1974-new.pdf" target="_blank">&#187; Letter of Govt. of Telangana Rule of Resevation for admission GO 1974</a></p>

                                <p style="border-bottom: 1px solid #999;padding: 5px;"><a href="#">&#187; Syllabus_for_2013_admitted_batch </a></p>

                                <p style="border-bottom: 1px solid #999;padding: 5px;"><a href="pdf/miniproject.doc">&#187; B.Tech.Mini Project Guidelines </a></p>

                                <p style="border-bottom: 1px solid #999;padding: 5px;"><a href="pdf/mtech%20project%20guidelines.doc">&#187; M.Tech. Seminar Guidelines </a></p>

                                <p style="border-bottom: 1px solid #999;padding: 5px;"><a href="pdf/mtech%20project%20guidelines.doc">&#187; M.Tech . Project Guidelines </a></p>

                                <p style="border-bottom: 1px solid #999;padding: 5px;"><a href="pdf/btech%20project%20guidelines.doc">&#187; B.Tech. Project Guidelines </a></p>

                                <p style="border-bottom: 1px solid #999;padding: 5px;"><a href="pdf/btech%20seminar%20guidelines.doc">&#187; B.Tech. Seminar Guidelines </a></p>

                                <p style="border-bottom: 1px solid #999;padding: 5px;"><a href="pdf/Mtech project and  guide allotment  list 2015-2017.xls">&#187; M.Tech. CSE/SE 2015-17 Guide Allotment </a></p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-12">

            <div class="pt1">

                <h2 style="text-align: center;">PROFESSIONAL SOCIETIES, CLUBS & CENTRES</h2>

                <div class="cour">
                    <div class="col-md-6">



                        <div class="col-md-6">

                            <ul>

                                <li><a href="iste.php">&#62; ISTE </a></li>

                                <li><a href="IEEE.php">&#62; IEEE </a></li>

                                <li><a href="iei.php">&#62; IEI </a></li>

                                <li><a href="nac.php">&#62; NAC </a></li>

                                <li><a href="acm-workshops.php">&#62; ACM </a></li>

                                <li><a href="csi.php">&#62; CSI </a></li>



                            </ul>

                        </div>

                        <div class="col-md-6">

                            <ul>

                                <li><a href="sae.php">&#62; SAE </a></li>

                                <li><a href="nss-activites.php">&#62; NSS </a></li>

                                <li><a href="IETE.php">&#62; IETE </a></li>

                                <li><a href="sports.php">&#62; SPORTS </a></li>

                                <li><a href="culture.php">&#62; CULTURAL </a></li>

                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="cour2">

                        <ul>

                            <li><a href="Placement-Cell.php">&#62; TRAINING & PLACEMENT CELL</a></li>

                            <li><a href="edc.php">&#62; ENTREPRENEURSHIP DEVELOPMENT CELL</a></li>

                            <li><a href="institute-innovation-cell.php">&#62; INSTITUTE INNOVATION CELL</a></li>

                            <li><a href="#">&#62; SKILL & PERSONALITY DEVELOPMENT CELL</a></li>

                            <li><a href="pdf/SPDP-Schedules-Extension_20_21.doc">&#62; 2020-21</a></li>

                            <li><a href="pdf/SPDP-Schedules-Extension_19_20.doc">&#62; 2019-20</a></li>

                            <li><a href="field-projects.php">&#62; INDUSTRY INSTITUTE INTERACTION CELL</a></li>

                            <li><a href="#">&#62; CAREER GUIDANCE & HIGHER EDUCATION</a></li>

                            <li><a href="research-n-development.php" target="_blank">&#62; RESEARCH & DEVELOPMENT</a></li>

                            <li><a href="#">&#62; IUCE </a></li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="col-md-4 ">

        <div class="dept md-set">

            <!------>

            <div class="panel-group" id="accordionHL">

                <div class="panel panel-default">

                    <div class="panel-heading">

                        <h4 class="panel-title">

                            <a class="accordion-toggle md-title" data-toggle="collapse" data-parent="#accordionHL" href="#collapseMD">Mandatory Disclosures</a><i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>

                        </h4>

                    </div>

                    <div id="collapseMD" class="panel-collapse collapse">

                        <div class="panel-body">

                            <div class="row">

                                <a href="http://jits.in/audit%20report.pdf" target="_blank" class="md-item col-sm-6"><i class="fa fa-bullseye"></i>&nbsp;Audit Report</a>

                                <a href="http://jits.in/anti-ragging.pdf" target="_blank" class="md-item col-sm-6"><i class="fa fa-bullseye"></i>&nbsp;Anti Ragging Cell</a>

                                <a href="http://jits.in/Grievance%20Redressal.pdf" target="_blank" class="md-item col-sm-6"><i class="fa fa-bullseye"></i>&nbsp;Grievance Redressal Cell</a>

                                <a href="http://jits.in/women%20protection%20cell.jpg" target="_blank" class="md-item col-sm-6"><i class="fa fa-bullseye"></i>&nbsp;Women Protection Cell</a>

                                <a href="http://jits.in/Disciplinary%20committee.jpg" target="_blank" class="md-item col-sm-6"><i class="fa fa-bullseye"></i>&nbsp;Disciplinary Committee</a>

                                <a href="feedback-system.php" class="md-item col-sm-6"><i class="fa fa-bullseye"></i>&nbsp;Feedback Systems</a>

                                <!--<a href="" class="md-item col-sm-6"><i class="fa fa-bullseye"></i>&nbsp;Teaching plan</a>-->

                            </div>

                        </div>

                    </div>

                </div>

                <div class="panel panel-default">

                    <div class="panel-heading">

                        <h4 class="panel-title">

                            <a class="accordion-toggle md-title" data-toggle="collapse" data-parent="#accordionHL" href="#collapseApr">Approvals</a><i class="indicator glyphicon glyphicon-chevron-down pull-right"></i>

                        </h4>

                    </div>

                    <div id="collapseApr" class="panel-collapse collapse">

                        <div class="panel-body">

                            <div class="row">

                                <!--<a href="http://jits.in/AICTE%20APPROVALS%202001-2019.pdf" target="_blank" class="md-item col-sm-6" title="Approved by AICTE"><i class="fa fa-bullseye"></i>&nbsp;AICTE</a>-->

                                <!--<a href="pdf/AICTE-Approvals-2001-2021.pdf" target="_blank" class="md-item col-sm-6" title="Approved by AICTE"><i class="fa fa-bullseye"></i>&nbsp;AICTE</a>-->

                                <a href="pdf/AICTE-Approvals-2001-2022.pdf" target="_blank" class="md-item col-sm-6" title="Approved by AICTE"><i class="fa fa-bullseye"></i>&nbsp;AICTE</a>

                                <!--<a href="#http://jits.in/anti-ragging.pdf" target="_blank" class="md-item col-sm-6" title="Affiliated to JNTUH"><i class="fa fa-bullseye"></i>&nbsp;JNTUH</a>-->

                                <!--<a href="pdf/JNTUH-Approvals-2014-2022.pdf" target="_blank" class="md-item col-sm-6" title="Affiliated to JNTUH"><i class="fa fa-bullseye"></i>&nbsp;JNTUH</a>-->

                                <!--<a href="pdf/JNTUH-Approval-letters-from-2014-15to2021-22.pdf" target="_blank" class="md-item col-sm-6" title="Affiliated to JNTUH"><i class="fa fa-bullseye"></i>&nbsp;JNTUH</a>-->

                                <!--<a href="pdf/JNTUH-Approvals-2014-21.pdf" target="_blank" class="md-item col-sm-6" title="Affiliated to JNTUH"><i class="fa fa-bullseye"></i>&nbsp;JNTUH</a>-->

                                <a href="pdf/JNTUH-Affiliation-2014-22.pdf" target="_blank" class="md-item col-sm-6" title="Affiliated to JNTUH"><i class="fa fa-bullseye"></i>&nbsp;JNTUH</a>

                                <a href="#http://jits.in/Grievance%20Redressal.pdf" target="_blank" class="md-item col-sm-6" title="National Board of Accreditation"><i class="fa fa-bullseye"></i>&nbsp;NBA</a>

                                <a href="pdf/Autonomous_Extension_Letter_31.05.2023.pdf" target="_blank" class="md-item col-sm-6" title="University Grants Commission"><i class="fa fa-bullseye"></i>&nbsp;UGC</a>

                                <a href="naac-iqac.php" target="_blank" class="md-item col-sm-6" title="NAAC"><i class="fa fa-bullseye"></i>&nbsp;NAAC</a>

                                <!--<a href="pdf/EEE02.pdf" target="_blank" class="md-item col-sm-6" title="NAAC"><i class="fa fa-bullseye"></i>&nbsp;Seat allotment</a>-->

                                <!--<a href="pdf/Seat-allotment.pdf" target="_blank" class="md-item col-sm-6" title="NAAC"><i class="fa fa-bullseye"></i>&nbsp;Seat allotment</a>-->

                                <a href="pdf/Seat_allotment_till_2022-23.pdf" target="_blank" class="md-item col-sm-6" title="NAAC"><i class="fa fa-bullseye"></i>&nbsp;Seat allotment</a>



                                <!--<p><a href=""></a></p>-->

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="clearfix"></div>

            <div class="std-verify row">

                <!--<a href="student-verification.php" target="_blank" class="std-verify-item"><i class="fa fa-external-link"></i>&nbsp;Student Verification</a>-->

                <a href="academic-verification.php" target="_blank" class="std-verify-item"><i class="fa fa-external-link"></i>&nbsp;Student Verification</a>

            </div>

            <div class="clearfix"></div>

            <!--<div class="std-verify row">-->

            <!--<a href="http://jits.in/bcat.pdf" target="_blank" class="std-verify-item"><i class="fa fa-external-link"></i>&nbsp;B-Category Seats</a>-->

            <!--   <a href="pdf/bcat-23-24.pdf" target="_blank" class="std-verify-item"><i class="fa fa-external-link"></i>&nbsp;B-Category Seats</a>-->

            <!--</div>-->

            <div class="std-verify row">

                <!--<a href="http://jits.in/bcat.pdf" target="_blank" class="std-verify-item"><i class="fa fa-external-link"></i>&nbsp;B-Category Seats</a>-->

                <a href="pdf/file_1_bcat-24-25.pdf" target="_blank" class="std-verify-item"><i class="fa fa-external-link"></i>&nbsp;B-Category Seats</a>

            </div>

            <div class="clearfix"></div>

            <!--    <div class="std-verify row">-->

            <!--<a href="http://jits.in/bcat.pdf" target="_blank" class="std-verify-item"><i class="fa fa-external-link"></i>&nbsp;B-Category Seats</a>-->

            <!--   <a href="pdf/B.Tech B.cat. 2023-24_ADMISSION_NOTIFICATION.pdf" target="_blank" class="std-verify-item"><i class="fa fa-external-link"></i>&nbsp;B-Category Seats admission notification</a>-->

            <!--</div>-->

            <div class="std-verify row">

                <a href="http://jits.in/bcat.pdf" target="_blank" class="std-verify-item"><i class="fa fa-external-link"></i>&nbsp;B-Category Seats</a>

                <a href="pdf/news_paper_notification.pdf" target="_blank" class="std-verify-item"><i class="fa fa-external-link"></i>&nbsp;B-Category Seats admission notification</a>

            </div>

            <div class="clearfix"></div>

            <!------>

            <!--

            <div class="row">

            <h2 class="md-title">Mandatory Disclosures</h2>

            <a href="http://jits.in/audit%20report.pdf" target="_blank" class="md-item col-sm-6" ><i class="fa fa-bullseye"></i>&nbsp;Audit Report</a>

            <a href="http://jits.in/anti-ragging.pdf" target="_blank" class="md-item col-sm-6"><i class="fa fa-bullseye"></i>&nbsp;Anti Ragging Cell</a>

            <a href="http://jits.in/Grievance%20Redressal.pdf" target="_blank" class="md-item col-sm-6"><i class="fa fa-bullseye"></i>&nbsp;Grievance Redressal Cell</a>

            <a href="http://jits.in/women%20protection%20cell.jpg" target="_blank" class="md-item col-sm-6"><i class="fa fa-bullseye"></i>&nbsp;Women Protection Cell</a>

            <a href="http://jits.in/Disciplinary%20committee.jpg" target="_blank" class="md-item col-sm-6"><i class="fa fa-bullseye"></i>&nbsp;Disciplinary Committee</a>

            <a href="http://jits.in/bcat.pdf" target="_blank" class="md-item col-sm-6"><i class="fa fa-bullseye"></i>&nbsp;B-Category Seats</a>

            <!-<p><a href=""></a></p>->

            </div>

            <div class="dept md-set">

            <div class="row">

            <h2 class="md-title">Approvals</h2>

            <a href="http://jits.in/AICTE%20APPROVALS%202001-2019.pdf" target="_blank" class="md-item col-sm-6" title="Approved by AICTE" ><i class="fa fa-bullseye"></i>&nbsp;AICTE</a>

            <a href="#http://jits.in/anti-ragging.pdf" target="_blank" class="md-item col-sm-6" title="Affiliated to JNTUH" ><i class="fa fa-bullseye"></i>&nbsp;JNTUH</a>

            <a href="#http://jits.in/Grievance%20Redressal.pdf" target="_blank" class="md-item col-sm-6" title="National Board of Accreditation" ><i class="fa fa-bullseye"></i>&nbsp;NBA</a>

            <a href="#http://jits.in/women%20protection%20cell.jpg" target="_blank" class="md-item col-sm-6" title="University Grants Commission" ><i class="fa fa-bullseye"></i>&nbsp;UGC</a>

            

            </div>

            </div>

            -->

        </div>

        <div class="slide1">

            <div id="myCarousel123" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->

                <!--

               <ol class="carousel-indicators">

                  <li data-target="#myCarousel123" data-slide-to="0" class="active"></li>

                  <li data-target="#myCarousel123" data-slide-to="1"></li>

                  <li data-target="#myCarousel123" data-slide-to="2"></li>

               </ol>

               -->

                <!-- Wrapper for slides -->

                <div class="carousel-inner">





                    <div class="item active">

                        <a href="pdf/RDDPF-2020 Phase-I.jpg" target="_blank">

                            <img src="pdf/RDDPF-2020 Phase-I.jpg" alt="JITS" style="width:100%; height:600px;">

                        </a>

                    </div>

                    <div class="item">

                        <a href="pdf/RDDPF-2020 Phase-II.jpg" target="_blank">

                            <img src="pdf/RDDPF-2020 Phase-II.jpg" alt="JITS" style="width:100%; height:600px;">

                        </a>

                    </div>

                    <div class="item">

                        <a href="pdf/RDDPF-2020 phase-III.jpg" target="_blank">

                            <img src="pdf/RDDPF-2020 phase-III.jpg" alt="JITS" style="width:100%; height:600px;">

                        </a>

                    </div>

                    <div class="item">

                        <a href="pdf/RDDPF-2020 Phase-IV.jpeg" target="_blank">

                            <img src="pdf/RDDPF-2020 Phase-IV.jpeg" alt="JITS" style="width:100%; height:600px;">

                        </a>

                    </div>



                    <div class="item">

                        <a href="img/designing-solar-pv-systems-lg.jpeg" target="_blank">

                            <img src="img/designing-solar-pv-systems.jpg" alt="JITS" style="width:100%; height:600px;">

                        </a>

                    </div>



                    <div class="item">

                        <a href="pdf/Civil_FDP_2021.pdf" target="_blank">

                            <img src="img/CivilFDP_2021.jpg" alt="JITS" style="width:100%; height:600px;">

                        </a>

                    </div>

                    <div class="item">

                        <img src="img/AICTE-STTP-JAYAMUKHI-ECE-Phase-I-1.jpg" alt="JITS" style="width:100%; height:600px;">

                    </div>

                    <div class="item">

                        <img src="img/AICTE-STTP-JITS-ECE-Phase--I-1.jpg" alt="JITS" style="width:100%; height:600px;">

                    </div>

                    <div class="item">

                        <img src="img/AICTE-STTP-JITS-ECE-P-II-1.jpg" alt="JITS" style="width:100%; height:600px;">

                    </div>

                    <div class="item">

                        <img src="img/AICTE-STTP-JITS-ECE-Phase-III-1.jpg" alt="JITS" style="width:100%; height:600px;">

                    </div>

                    <div class="item">

                        <img src="img/AICTE-STTP-JITS-ECE-Phase-IV-1.jpg" alt="JITS" style="width:100%; height:600px;">

                    </div>



                    <div class="item">

                        <img src="img/RDDPF-2020Phase-IV.jpg" alt="JITS" style="width:100%; height:600px;">

                    </div>

                    <div class="item">

                        <img src="img/stem-Poster1.png" alt="JITS" style="width:100%; height:600px;">

                    </div>

                    <div class="item">

                        <img src="img/stem-Poster.png" alt="JITS" style="width:100%; height:600px;">

                    </div>

                    <div class="item">

                        <img src="img/s-poster.png" alt="JITS" style="width:100%; height:600px;">

                    </div>

                    <!--

                  <div class="item">

                     <a href="img/sae-poster.png" target="_blank">

                        <img src="img/sae-poster.png" alt="JITS" style="width:100%; height:450px;">

                     </a>

                  </div>

                  -->

                </div>

                <!-- Left and right controls -->

                <a class="left carousel-control" href="#myCarousel123" data-slide="prev">

                    <span class="glyphicon glyphicon-chevron-left"></span>

                    <span class="sr-only">Previous</span>

                </a>

                <a class="right carousel-control" href="#myCarousel123" data-slide="next">

                    <span class="glyphicon glyphicon-chevron-right"></span>

                    <span class="sr-only">Next</span>

                </a>

            </div>

        </div>

    </div>

</div>

<div class="clearfix"></div>

<div class="jmit-eng">

    <div class="col-md-12">

        <div class="col-md-8">

            <div class="our-gallery-1">

                <div class="gal">

                    <h4>Gallery</h4>

                </div>

                <div class="gal-border"></div>

                <button type="button" class="btn btn-outline-secondary">

                    <a href="gallery.php" />

                    View more

                </button>

                <div class="gallery">

                    <div class="vip-carousel carouselVV" data-flickity='{ "wrapAround": true, "autoPlay": 1500, "pageDots": false}'>

                        <div class="carousel-cell">

                            <div class="vip-img">

                                <img src="ece-dept/1.png" class="img-responsive" alt="ece-infrastucture">

                            </div>

                        </div>

                        <div class="carousel-cell">

                            <div class="vip-img">

                                <img src="ece-dept/2.png" class="img-responsive" alt="ece-infrastucture">

                            </div>

                        </div>

                        <div class="carousel-cell">

                            <div class="vip-img">

                                <img src="ece-dept/3.png" class="img-responsive" alt="ece-infrastucture">

                            </div>

                        </div>

                        <div class="carousel-cell">

                            <div class="vip-img">

                                <img src="ece-dept/4.png" class="img-responsive" alt="ece-infrastucture">

                            </div>

                        </div>

                        <div class="carousel-cell">

                            <div class="vip-img">

                                <img src="ece-dept/5.png" class="img-responsive" alt="ece-infrastucture">

                            </div>

                        </div>

                        <div class="carousel-cell">

                            <div class="vip-img">

                                <img src="images/gallery/gal1.png" class="img-responsive" alt="ece-infrastucture">

                            </div>

                        </div>

                        <div class="carousel-cell">

                            <div class="vip-img">

                                <img src="images/gallery/gal2.png" class="img-responsive" alt="ece-infrastucture">

                            </div>

                        </div>

                        <div class="carousel-cell">

                            <div class="vip-img">

                                <img src="images/gallery/gal3.png" class="img-responsive" alt="ece-infrastucture">

                            </div>

                        </div>

                        <div class="carousel-cell">

                            <div class="vip-img">

                                <img src="images/gallery/gal4.png" class="img-responsive" alt="ece-infrastucture">

                            </div>

                        </div>

                        <div class="carousel-cell">

                            <div class="vip-img">

                                <img src="images/gallery/gal5.png" class="img-responsive" alt="ece-infrastucture">

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="video-vid">

                <!--  <iframe width="100%" height="300" src="https://www.youtube.com/embed/QHYDc1urEw8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

         -->

                <video width="100%" height="240" poster="images/graduateday/graduateday4.png" controls="">

                    <source src="images/jits_video.mp4" type="video/mp4">

                    <source src="images/jits_video.mp4" type="video/ogg">

                </video>

            </div>

        </div>

    </div>

</div>

<div class="col-md-6 even an-events">

    <h2> ANNUAL EVENTS </h2>

    <hr class="hrr">

    <div class="row">

        <div class="ae-inner">

            <div class="ae-row1">

                <div class="col-sm-4 col-xs-6 ae-item">

                    <a href="orientation.php">

                        <button type="button" class="ae-btn">

                            <i class="fa fa-google-wallet"></i>&nbsp;&nbsp;ORIENTATION DAY

                        </button>

                    </a>

                </div>

                <div class="col-sm-4 col-xs-6 ae-item">

                    <a href="abhignatha19.php">

                        <button type="button" class="ae-btn">

                            <i class="fa fa-google-wallet"></i>&nbsp;&nbsp;ABHIGNATHA

                        </button>

                    </a>

                </div>

                <div class="col-sm-4 col-xs-6 ae-item">

                    <a href="jayatharang.php">

                        <button type="button" class="ae-btn">

                            <i class="fa fa-google-wallet"></i>&nbsp;&nbsp;JAYATARANG

                        </button>

                    </a>

                </div>

            </div>

            <div class="ae-row2">

                <div class="col-sm-4 col-xs-6 ae-item">

                    <a href="technojits18.php">

                        <button type="button" class="ae-btn">

                            <i class="fa fa-google-wallet"></i>&nbsp;&nbsp;TECHNO JITS

                        </button>

                    </a>

                </div>

                <div class="col-sm-4 col-xs-6 ae-item">

                    <a href="#">

                        <button type="button" class="ae-btn">

                            <i class="fa fa-google-wallet"></i>&nbsp;&nbsp;ANNUAL DAY

                        </button>

                    </a>

                </div>

                <div class="col-sm-4 col-xs-6 ae-item">

                    <a href="finishing-school.php">

                        <button type="button" class="ae-btn">

                            <i class="fa fa-google-wallet"></i>&nbsp;&nbsp;FINISHING SCHOOL

                        </button>

                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="col-md-6 even our-recruit">

    <h2>OUR RECRUITERS</h2>

    <hr class="hrr">

    <div class="col-md-3 col-sm-6 career">

        <p><img src="img/infosys.png" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS"></p>

    </div>

    <div class="col-md-3 col-sm-6 career">

        <p><img src="img/ibm.png" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS"></p>

    </div>

    <div class="col-md-3 col-sm-6 career">

        <p><img src="img/hp.png" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS"></p>

    </div>

    <div class="col-md-3 col-sm-6 career">

        <p><img src="img/dell.png" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS"></p>

    </div>

    <div class="col-md-3 col-sm-6 career">

        <p><img src="img/wipro.png" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS"></p>

    </div>

    <div class="col-md-3 col-sm-6 career">

        <p><img src="img/hcl.png" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS"></p>

    </div>

    <div class="col-md-3 col-sm-6 career">

        <p><img src="img/microsoft.png" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS"></p>

    </div>

    <div class="col-md-3 col-sm-6 career">

        <p><img src="img/tcs.png" alt="Jayamukhi Engineering College, Jayamukhi Institute of Technology and Science, JITS"></p>

    </div>

</div>

<?php include('footer.php'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="js/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $(function() {

        $(".demo2").bootstrapNews({

            newsPerPage: 9,

            autoplay: true,

            pauseOnHover: true,

            navigation: false,

            direction: 'down',

            newsTickerInterval: 2500,

            onToDo: function() {

                //console.log(this);

            }

        });

    });
</script>

<script src="js/easy-responsive-tabs.js"></script>

<script>
    $(document).ready(function() {

        $('#horizontalTab').easyResponsiveTabs({

            type: 'default', //Types: default, vertical, accordion           

            width: 'auto', //auto or any width like 600px

            fit: true, // 100% fit in a container

            closed: 'accordion', // Start closed if in accordion view

            activate: function(event) { // Callback function if tab is switched

                var $tab = $(this);

                var $info = $('#tabInfo');

                var $name = $('span', $info);

                $name.text($tab.text());

                $info.show();

            }

        });

        $('#verticalTab').easyResponsiveTabs({

            type: 'vertical',

            width: 'auto',

            fit: true

        });

    });
</script>

<script type="text/javascript">
    function toggleChevron(e) {

        $(e.target)

            .prev('.panel-heading')

            .find("i.indicator")

            .toggleClass('glyphicon-chevron-down glyphicon-chevron-up');

    }

    $('#accordion').on('hidden.bs.collapse', toggleChevron);

    $('#accordion').on('shown.bs.collapse', toggleChevron);
</script>

<script type="text/javascript">
    $(document).ready(function() {

        $('header').not('.title').on('click', function() {

            var that = $(this),

                parent = that.parent(),

                closeDiv = that.siblings('div'),

                contentHeight = closeDiv.children('article').outerHeight();

            that.parents('section').first().toggleClass('open');

            (closeDiv.height() === 0) ? closeDiv.height(contentHeight): closeDiv.height(contentHeight).height(0);

            closeDiv.one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',

                function(e) {

                    var that = $(this);

                    (that.css('height') !== '0px') ? that.css('height', 'auto'): that.css('height', '0px');

                });

        });

    });
</script>

</body>



</html>

<script src="plugin/jquery-easing/jquery.easing.js" type="text/javascript"></script>



<script>
    $(document).ready(function() {

        $("#exampleModal").modal('show');

    });
</script>
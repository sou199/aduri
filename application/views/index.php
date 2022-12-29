<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Offshore - Responsive HTML Template">
    <meta name="author" content="Surjith S.M">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
    <title><?php if (!empty($title)) : echo $title;
            else : echo 'Home';
            endif; ?></title>

    <?php $this->load->view('links'); ?>

    <!-- Global site tag (gtag.js) - Google Ads: 10991071970 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10991071970"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-10991071970');
    </script>

    <!-- Google tag (gtag.js) -- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KH0GZKWMDM"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-KH0GZKWMDM');
    </script>

    <style>
        .logo-top-info {
            padding: 10px 0;
        }

        footer .footer {
            padding: 80px 0 0px 0;
        }

        main.main {
            padding-bottom: 0px;
        }

        .about-txt img {
            margin-top: 20px;
        }

        .heading {
            padding: 0 10px;
        }
    </style>
</head>

<body class="homepage">

    <!-- Preloader -->
    <div class="loader-wrapper">
        <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
        </div>
    </div>

    <!-- Page Wrapper -->
    <div class="wrapper">

        <!-- Header Section -->
        <header>
            <div class="header-area">

                <!-- Top Contact Info -->
                <div class="row logo-top-info">
                    <div class="container">
                        <div class="col-md-3 logo">
                            <!-- Main Logo -->
                            <a href="https://adurimarketing.com/"><img src="<?php echo base_url(); ?>assets/images/aduri-logo.png" alt="Offshore Logo" /></a>
                            <!-- Responsive Toggle Menu -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                                <span class="sr-only"> Main Menu </span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="col-md-9 top-info-social">
                            <div class="pull-right">
                                <div class="top-info">
                                    <!-- <div class="call">
                                        <h3> CALL US </h3>
                                        <p> 1800 425 4646 </p>
                                    </div> -->
                                    <div class="email">
                                        <h3> EMAIL US </h3>
                                        <p> info@adurigroup.com </p>
                                    </div>
                                    <div class="market">
                                        <h3> Address </h3>
                                        <p> Plot No 14,5th Phase, KPHB, Hyderabad </p>
                                    </div>
                                </div>
                                <div class="social">
                                    <ul class="social-icons">
                                        <li><a href="https://www.facebook.com/AduriGroupOfficial" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="https://twitter.com/AduriGroup_Off" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.instagram.com/adurigroupofficial/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.linkedin.com/company/adurigroupofficial/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                        <li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Navigation Section -->
                <nav id="navbar" class="collapse navbar-collapse main-menu">
                    <div class="container">
                        <ul class="main-menu">
                            <li class="active"><a href="#home"> Home </a></li>
                            <li><a href="#overview">Overview</a>
                            <li><a href="#plot-availability">Plot Availability</a>
                            <li><a href="#amenities">Amenities</a>
                            <li><a href="#highlights">Highlights</a>
                            <li><a href="#pricing">Pricing</a>
                            <li><a href="#location">Location</a>
                            <li><a href="#enquiry">Enquiry</a>
                            <li><a href="https://drive.google.com/file/d/1ZOcZ2d53wk4VtIKXBTvdctTZsn5udZrS/view">Download Brochure</a>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- Header Section -->

        <!-- Main Content Section -->
        <main class="main">

            <!-- Hero section -->
            <section class="first_section" id="home">
                <video autoplay controls loop muted plays-inline class="video-player">
                    <source src="<?php echo base_url(); ?>assets/intro.mp4" type="video/mp4">
                </video>
            </section>
            <!-- Hero section -->

            <!-- Enquiry -->
            <section class="tenth_section" id="enquiry">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading">
                                <h1>Enquiry</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="div-image">
                                <img src="<?php echo base_url(); ?>assets/images/varun1.png" width="60%" />
                            </div>
                            <div class="iso">
                                <img src="<?php echo base_url(); ?>assets/images/icons/tsrera.png" alt="Icon">
                            </div>
                            <div style="background:#6c4587; padding:20px 10px;">
                                <p style="color:#fff;margin-bottom:15px"><B>OPEN PLOTS &nbsp; |&nbsp; VILLAS &nbsp;|&nbsp; HIGH-RISE APARTMENTS&nbsp; | &nbsp;INFRASTRUCTURE</B></p>
                                <p style="font-size:12px;color:#fff; text-align:center;"><b>HYDERABAD &nbsp;(Available) &nbsp;|&nbsp; VISAKHAPATNAM &nbsp;(Coming Soon)&nbsp;| &nbsp;BENGALURU &nbsp;(Coming Soon)</b></p>
                            </div>
                            <div style="margin-top:40px">
                                <table class="table">
                                    <tr>
                                        <p style="text-align:center;background:#6c4587;padding:10px 0px; color:#fff;margin-bottom: 0px;">PRICE CHART</p>
                                        </thead>
                                    <tr>
                                    <tr>
                                        <th scope="col">Payment Option</th>
                                        <th scope="col">Rate per sq. yard</th>
                                        <th scope="col">Payment Time Period</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Option A</td>
                                            <td>14,699.00</td>
                                            <td>Within 15 days</td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Option B</td>
                                            <td>14,799.00</td>
                                            <td>Within 45 days</td>
                                        </tr>
                                        <tr>
                                            <td>Option C</td>
                                            <td>14,999.00</td>
                                            <td>Within 90 days</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="certificates">
                                <img src="<?php echo base_url(); ?>assets/images/icons/dtcp.png" alt="Icon">
                                <img src="<?php echo base_url(); ?>assets/images/icons/10yearsmaintenance.png" alt="Icon" />
                                <img src="<?php echo base_url(); ?>assets/images/icons/247security.png" alt="Icon" />

                            </div>
                            <div class="form-style">

                                <form>
                                    <div class="form-group" method="post" onSubmit="return_false" autocomplete="off">
                                        <label for="name" class="form-label">Please fill the form below to know more about the property</label><br><br>
                                        <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                        <input type="text" maxlength="99" name="name" class="form-control" id="name" placeholder="Enter Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class="form-label">Phone Number <span class="text-danger">*</span></label>
                                        <input type="text" name="phone" maxlength="10" class="form-control" onkeypress="return isNumberKey(event)" id="phone" placeholder="Enter Phone Number" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="email" name="email" maxlength="99" class="form-control" id="email" placeholder="Enter email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Select Property" class="form-label">Select Property<span class="text-danger">*</span></label><br><br>

                                        <input type="checkbox" id="open-plots" name="open-plots" value="Open Plots">
                                        <label for="open-plots" class="check-boxes">Open Plots</label><br>
                                        <input type="checkbox" id="villas" name="villas" value="Villas">
                                        <label for="villas" class="check-boxes">Villas</label><br>
                                        <input type="checkbox" id="infrastructure" name="infrastructure" value="Infrastructure">
                                        <label for="infrastructure" class="check-boxes">Infrastructure</label><br>
                                        <input type="checkbox" id="high-rise-apartments" name="high-rise-apartments" value="High-Rise Apartments">
                                        <label for="high-rise-apartments" class="check-boxes">High-Rise Apartments</label><br>
                                    </div>
                                    <div class="form-group">
                                        <label for="message" class="form-label">Message </label>
                                        <textarea class="form-control" name="message" maxlength="200" rows="3" id="message" placeholder="Enter Message"></textarea>
                                    </div>
                                    <button type="button" id="submit_btn" class="btn btn-success">Submit</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- Enquiry -->

            <!-- Pricing -->
            <!--<section class="seventh_section" id="pricing">-->
            <!--  <div class="container">-->
            <!--        <div class="col-12">-->
            <!--            <div class="heading">-->
            <!--                <h1>PRICING</h1>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--          <main>-->
            <!--            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">-->
            <!--              <div class="col-lg-4 col-md-4 col-sm-6 col-12">-->
            <!--                <div class="card mb-4 rounded-1 shadow-lg border-primary">-->
            <!--                  <div class="card-header py-3 text-white bg-primary border-primary">-->
            <!--                    <h4 class="my-0 fw-normal">Option A</h4>-->
            <!--                  </div>-->
            <!--                  <div class="card-body">-->
            <!--                    <h1 class="card-title pricing-card-title">Rs. 13,799/-</h1>-->
            <!--                    <ul class="list-unstyled mt-3 mb-4">-->
            <!--                      <li>Rate Per Square Yard</li>-->
            <!--                      <li>Within 15 days Time Period</li>-->
            <!--                    </ul>-->
            <!--                  </div>-->
            <!--                </div>-->
            <!--              </div>-->
            <!--              <div class="col-lg-4 col-md-4 col-sm-6 col-12">-->
            <!--                <div class="card mb-4 rounded-1 shadow-lg border-primary">-->
            <!--                  <div class="card-header py-3 text-white bg-primary border-primary">-->
            <!--                    <h4 class="my-0 fw-normal">Option B</h4>-->
            <!--                  </div>-->
            <!--                  <div class="card-body">-->
            <!--                    <h1 class="card-title pricing-card-title">Rs. 13,899/-</h1>-->
            <!--                    <ul class="list-unstyled mt-3 mb-4">-->
            <!--                      <li>Rate Per Square Yard</li>-->
            <!--                      <li>Within 45 days Time Period</li>-->
            <!--                    </ul>-->
            <!--                  </div>-->
            <!--                </div>-->
            <!--              </div>-->
            <!--              <div class="col-lg-4 col-md-4 col-sm-6 col-12">-->
            <!--                <div class="card mb-4 rounded-1 shadow-lg border-primary">-->
            <!--                  <div class="card-header py-3 text-white bg-primary border-primary">-->
            <!--                    <h4 class="my-0 fw-normal">Option C</h4>-->
            <!--                  </div>-->
            <!--                  <div class="card-body">-->
            <!--                    <h1 class="card-title pricing-card-title">Rs. 14,099/-</h1>-->
            <!--                    <ul class="list-unstyled mt-3 mb-4">-->
            <!--                      <li>Rate Per Square Yard</li>-->
            <!--                      <li>Within 90 days Time Period</li>-->
            <!--                    </ul>-->
            <!--                  </div>-->
            <!--                </div>-->
            <!--              </div>-->
            <!--        </div>-->
            <!--    </main>-->
            <!--  </div>-->
            <!--</section>-->
            <!-- Pricing -->

            <!-- Overview -->
            <section class="second_section" id="overview">
                <div class="container">
                    <div class="row">
                        <div class="col-12 ">
                            <div class="heading">

                                <h1 class="animated tada">PROJECT OVERVIEW</h1>
                                <p>ICONIC-2 is the brainchild of Aduri Group. Amidst the well-built gated community, find excellent amenities that not only improve the value of your investment but also lead a peaceful way of life.</p>
                                <p>ICONIC-2 is a Proposed 100+ Acres Integrated Thematic Layout in Shadnagar, Hyderabad. The Project has beautifully designed landscapes. are super affordable and developed using advanced techniques with quality construction materials and world class amenities. The project offers a sustainable balance between luxury and affordability enthralling your heart and ensuring clients are accorded the best comfort. The location of the property is ideal and is in close proximity to everyday places like schools, colleges, health care facilities, shopping, fine dinning and entertainment destinations.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Overview -->

            <!-- Plot availability -->
            <section class="third_section" id="plot-availability">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading">
                                <h1>PLOT AVAILABILITY</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="number-box box-1">
                                <h1>44</h1>
                                <p>SOLD</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="number-box box-2">
                                <h1>40</h1>
                                <p>AVAILABLE PLOTS</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="number-box box-3">
                                <h1>84</h1>
                                <p>TOTAL PLOTS</p>
                            </div>
                        </div>

                        <div class="col-12 mt-5" style="margin-top: 30px;">
                            <div class="button-link">
                                <p>
                                    <a href="https://drive.google.com/file/d/14w5A0pv8iHNCeGeywWaR27kD17Sipo9i/view" target="_blank" class="my_btn">View Temporary Layout</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- Plot availability -->

            <!-- Amenities -->
            <section class="fourth_section" id="amenities">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading">
                                <h1>PREMIUM PLOTS WITH WORLD CLASS AMENITIES</h1>
                                <p>Aduri’s ICONIC-2 features premium plots in Shadnagar, Hyderabad with state of the art 40+ Amenities, 70% Open Space, Spacious Internal Roads & Lush Green Landscaping with lot of fun filled & relaxing activities for all age groups.</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12">
                            <div class="fourth_inner_box">
                                <div class="icon-box">
                                    <img src="<?php echo base_url(); ?>assets/images/icons/entrance.png" alt="Icon" width="100%" />
                                    <p>GRAND ENTRENCE ARCH</p>
                                </div>
                                <div class="icon-box">
                                    <img src="<?php echo base_url(); ?>assets/images/icons/wall.png" alt="Icon" width="100%" />
                                    <p>COMPOUND WALL</p>
                                </div>
                                <div class="icon-box">
                                    <img src="<?php echo base_url(); ?>assets/images/icons/electric.png" alt="Icon" width="100%" />
                                    <p>ELECTRICITY CONNECTION</p>
                                </div>
                                <div class="icon-box">
                                    <img src="<?php echo base_url(); ?>assets/images/icons/plantation.png" alt="Icon" width="100%" />
                                    <p>AVENUE PLANTATION</p>
                                </div>
                                <div class="icon-box">
                                    <img src="<?php echo base_url(); ?>assets/images/icons/street-light.png" alt="Icon" width="100%" />
                                    <p>STREET LIGHTS</p>
                                </div>
                                <div class="icon-box">
                                    <img src="<?php echo base_url(); ?>assets/images/icons/playground.png" alt="Icon" width="100%" />
                                    <p>CHILDREN PARK</p>
                                </div>
                                <div class="icon-box">
                                    <img src="<?php echo base_url(); ?>assets/images/icons/villa.png" alt="Icon" width="100%" />
                                    <p>DUPLEX VILLA</p>
                                </div>
                                <div class="icon-box">
                                    <img src="<?php echo base_url(); ?>assets/images/icons/guard.png" alt="Icon" width="100%" />
                                    <p>24/7 SECURITY</p>
                                </div>
                                <div class="icon-box">
                                    <img src="<?php echo base_url(); ?>assets/images/icons/water-tower.png" alt="Icon" width="100%" />
                                    <p>OVERHEAD WATER TANK</p>
                                </div>
                                <div class="icon-box">
                                    <img src="<?php echo base_url(); ?>assets/images/icons/drainage.png" alt="Icon" width="100%" />
                                    <p>UNDER GROUND DRAINAGE</p>
                                </div>
                                <div class="icon-box">
                                    <img src="<?php echo base_url(); ?>assets/images/icons/compass.png" alt="Icon" width="100%" />
                                    <p>ENTIRE LAYOUT AS PER VASTU</p>
                                </div>
                                <div class="icon-box">
                                    <img src="<?php echo base_url(); ?>assets/images/icons/registration.png" alt="Icon" width="100%" />
                                    <p>CLEAR TITLE & SPOT REGISTRATION</p>
                                </div>
                                <div class="icon-box">
                                    <img src="<?php echo base_url(); ?>assets/images/icons/biodegradable.png" alt="Icon" width="100%" />
                                    <p>POLLUTION FREE ENVIRONMENT</p>
                                </div>
                                <div class="icon-box">
                                    <img src="<?php echo base_url(); ?>assets/images/icons/solar-energy.png" alt="Icon" width="100%" />
                                    <p>SOLAR FENCING ENTIRE LAYOUT</p>
                                </div>
                                <div class="icon-box">
                                    <img src="<?php echo base_url(); ?>assets/images/icons/water-system.png" alt="Icon" width="100%" />
                                    <p>WATER SUPPLY TO EACH PLOT</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Amenities -->

            <!-- Highlights -->
            <section class="fifth_section" id="highlights">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="fifth_inner">
                                <div class="heading">
                                    <h1>PROJECT HIGHLIGHTS</h1>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="icon-list">
                                            <img src="<?php echo base_url(); ?>assets/images/icons/road-5.png" alt="" />
                                            <p>2 Min From Proposed Regional Ring Road</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="icon-list">
                                            <img src="<?php echo base_url(); ?>assets/images/icons/astronomy.png" alt="" />
                                            <p>Beside NRSC (ISRO)</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="icon-list">
                                            <img src="<?php echo base_url(); ?>assets/images/icons/smart-city.png" alt="" />
                                            <p>5 Min. From Shadnagar City</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="icon-list">
                                            <img src="<?php echo base_url(); ?>assets/images/icons/warehouse.png" alt="" />
                                            <p>8 Min. From P&G - Jhonson & Jhonson Amazon Warehouse</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="icon-list">
                                            <img src="<?php echo base_url(); ?>assets/images/icons/pharmacy.png" alt="" />
                                            <p>8 Min. From DLF- NATCO & LV Prasad EYE Institute</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="icon-list">
                                            <img src="<?php echo base_url(); ?>assets/images/icons/highway-sign.png" alt="" />
                                            <p>5 Min. From Hyderabad - Bangalore NH-44</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="icon-list">
                                            <img src="<?php echo base_url(); ?>assets/images/icons/school.png" alt="" />
                                            <p>10 Min. From Heritage Valley Residential School</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="icon-list">
                                            <img src="<?php echo base_url(); ?>assets/images/icons/zoo.png" alt="" />
                                            <p>10 Min. From Shadnagar Zoo Park</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="icon-list">
                                            <img src="<?php echo base_url(); ?>assets/images/icons/tian-tan-buddha.png" alt="" />
                                            <p>20 Min. From 216 Feet Statue Of Ramanjuacharya</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="icon-list">
                                            <img src="<?php echo base_url(); ?>assets/images/icons/temple-2.png" alt="" />
                                            <p>20 Min. From Chinna Jeeyar Swamy Ashram</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="icon-list">
                                            <img src="<?php echo base_url(); ?>assets/images/icons/exit.png" alt="" />
                                            <p>30 Min. From ORR Junction Exit No:16</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="icon-list">
                                            <img src="<?php echo base_url(); ?>assets/images/icons/airport-1.png" alt="" />
                                            <p>30 Min. From Rajiv Gandhi International Airport</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="icon-list">
                                            <img src="<?php echo base_url(); ?>assets/images/icons/college.png" alt="" />
                                            <p>10 Min. From Symbiosis University & TATA Institute Of Social Science</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="icon-list">
                                            <img src="<?php echo base_url(); ?>assets/images/icons/meditation.png" alt="" />
                                            <p>15 Min. From Kanha Shanthi Vanam (World Largest Meditation Center)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Highlights -->



            <!-- Site Development -->
            <section class="eight_section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading">
                                <h1>SITE DEVELOPMENTS</h1>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-12">
                            <div class="img-area">
                                <a href="<?php echo base_url(); ?>assets/images/site_development_photos/sd-img-1.jpg" target="_blank">
                                    <img src="<?php echo base_url(); ?>assets/images/site_development_photos/sd-img-small-1.png" class="" alt="Site Development" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-12">
                            <div class="img-area">
                                <a href="<?php echo base_url(); ?>assets/images/site_development_photos/sd-img-2.jpg" target="_blank">
                                    <img src="<?php echo base_url(); ?>assets/images/site_development_photos/sd-img-small-2.png" class="" alt="Site Development" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-12">
                            <div class="img-area">
                                <a href="<?php echo base_url(); ?>assets/images/site_development_photos/sd-img-3.jpg" target="_blank">
                                    <img src="<?php echo base_url(); ?>assets/images/site_development_photos/sd-img-small-3.png" class="" alt="Site Development" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-12">
                            <div class="img-area">
                                <a href="<?php echo base_url(); ?>assets/images/site_development_photos/sd-img-4.jpg" target="_blank">
                                    <img src="<?php echo base_url(); ?>assets/images/site_development_photos/sd-img-small-4.png" class="" alt="Site Development" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-12">
                            <div class="img-area">
                                <a href="<?php echo base_url(); ?>assets/images/site_development_photos/sd-img-5.jpg" target="_blank">
                                    <img src="<?php echo base_url(); ?>assets/images/site_development_photos/sd-img-small-5.png" class="" alt="Site Development" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-12">
                            <div class="img-area">
                                <a href="<?php echo base_url(); ?>assets/images/site_development_photos/sd-img-6.jpg" target="_blank">
                                    <img src="<?php echo base_url(); ?>assets/images/site_development_photos/sd-img-small-6.png" class="" alt="Site Development" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-12">
                            <div class="img-area">
                                <a href="<?php echo base_url(); ?>assets/images/site_development_photos/sd-img-7.jpg" target="_blank">
                                    <img src="<?php echo base_url(); ?>assets/images/site_development_photos/sd-img-small-7.png" class="" alt="Site Development" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-12">
                            <div class="img-area">
                                <a href="<?php echo base_url(); ?>assets/images/site_development_photos/sd-img-8.jpg" target="_blank">
                                    <img src="<?php echo base_url(); ?>assets/images/site_development_photos/sd-img-small-8.png" class="" alt="Site Development" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-12">
                            <div class="img-area">
                                <a href="<?php echo base_url(); ?>assets/images/site_development_photos/sd-img-9.jpg" target="_blank">
                                    <img src="<?php echo base_url(); ?>assets/images/site_development_photos/sd-img-small-9.png" class="" alt="Site Development" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-12">
                            <div class="img-area">
                                <a href="<?php echo base_url(); ?>assets/images/site_development_photos/sd-img-10.jpg" target="_blank">
                                    <img src="<?php echo base_url(); ?>assets/images/site_development_photos/sd-img-small-10.png" class="" alt="Site Development" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-12">
                            <div class="img-area">
                                <a href="<?php echo base_url(); ?>assets/images/site_development_photos/sd-img-11.jpg" target="_blank">
                                    <img src="<?php echo base_url(); ?>assets/images/site_development_photos/sd-img-11.jpg" class="" alt="Site Development" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-12">
                            <div class="img-area">
                                <a href="<?php echo base_url(); ?>assets/images/site_development_photos/sd-img-12.jpg" target="_blank">
                                    <img src="<?php echo base_url(); ?>assets/images/site_development_photos/sd-img-12.jpg" class="" alt="Site Development" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Site Development -->

            <!-- Project Development -->
            <section class="ninth_section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading">
                                <h1>PROJECT DEVELOPMENTS</h1>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-12">
                            <div class="img-area">
                                <a href="<?php echo base_url(); ?>assets/images/project_development_photos/pd-img-1.jpg" target="_blank">
                                    <img src="<?php echo base_url(); ?>assets/images/project_development_photos/pd-img-small-1.jpg" class="" alt="Project Development" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-12">
                            <div class="img-area">
                                <a href="<?php echo base_url(); ?>assets/images/project_development_photos/pd-img-2.jpg" target="_blank">
                                    <img src="<?php echo base_url(); ?>assets/images/project_development_photos/pd-img-small-2.jpg" class="" alt="Project Development" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-12">
                            <div class="img-area">
                                <a href="<?php echo base_url(); ?>assets/images/project_development_photos/pd-img-3.jpg" target="_blank">
                                    <img src="<?php echo base_url(); ?>assets/images/project_development_photos/pd-img-small-3.jpg" class="" alt="Project Development" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-12">
                            <div class="img-area">
                                <a href="<?php echo base_url(); ?>assets/images/project_development_photos/pd-img-4.jpg" target="_blank">
                                    <img src="<?php echo base_url(); ?>assets/images/project_development_photos/pd-img-small-4.jpg" class="" alt="Project Development" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-12">
                            <div class="img-area">
                                <a href="<?php echo base_url(); ?>assets/images/project_development_photos/pd-img-5.jpg" target="_blank">
                                    <img src="<?php echo base_url(); ?>assets/images/project_development_photos/pd-img-small-5.jpg" class="" alt="Project Development" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-12">
                            <div class="img-area">
                                <a href="<?php echo base_url(); ?>assets/images/project_development_photos/pd-img-6.jpg" target="_blank">
                                    <img src="<?php echo base_url(); ?>assets/images/project_development_photos/pd-img-small-6.jpg" class="" alt="Project Development" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-12">
                            <div class="img-area">
                                <a href="<?php echo base_url(); ?>assets/images/project_development_photos/pd-img-7.jpg" target="_blank">
                                    <img src="<?php echo base_url(); ?>assets/images/project_development_photos/pd-img-small-7.jpg" class="" alt="Project Development" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-12">
                            <div class="img-area">
                                <a href="<?php echo base_url(); ?>assets/images/project_development_photos/pd-img-8.jpg" target="_blank">
                                    <img src="<?php echo base_url(); ?>assets/images/project_development_photos/pd-img-small-8.jpg" class="" alt="Project Development" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Project Development -->

            <!-- Project location -->
            <section class="sixth_section" id="location">
                <div class="heading">
                    <h1>PROJECT LOCATION</h1>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d487109.4618316095!2d77.9018211364746!3d17.481589857997797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb91c41e02ddf9%3A0xf50a84228e48e930!2sAduri%20Infra%20Pvt%20Ltd!5e0!3m2!1sen!2sus!4v1663927377335!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>
            <!-- Project location -->

        </main>
        <!-- Main Content Section -->

        <?php $this->load->view('footer'); ?>

        <!-- back-to-top link -->
        <!--<a href="#0" class="cd-top"> Top </a>-->

    </div>

    <!-- Page Wrapper
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <!-- Javascripts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <?php $this->load->view('scripts'); ?>

    <script>
        $(document).ready(function() {
            $('#submit_btn').click(function() {
                var name = $('#name').val();
                var phone = $('#phone').val();
                var email = $('#email').val();
                var message = $('#message').val();
                var checked1 = $('#open-plots').is(':checked');
                var checked2 = $('#villas').is(':checked');
                var checked3 = $('#high-rise-apartments').is(':checked');
                var checked4 = $('#infrastructure').is(':checked');
                var property = [];
                //
                if (name != '' || phone != '' || email != '') {
                    if (name == '') {
                        alert('Please enter your name...!');
                        $('#name').focus();
                        return false;
                    }
                    if (phone == '') {
                        alert('Please enter your phone number...!');
                        $('#phone').focus();
                        return false;
                    }
                    if (phone.length != 10) {
                        alert('Please enter valid phone number...!');
                        $('#phone').focus();
                        return false;
                    }
                    if (email == '') {
                        alert('Please enter your email...!');
                        $('#email').focus();
                        return false;
                    }
                    if (email != '') {
                        var email_resp = validateEmail(email);
                        if (email_resp == false) {
                            alert('Please enter the valid email address');
                            return false;
                        }
                    }
                    if (checked1 == false && checked2 == false && checked3 == false && checked4 == false) {
                        alert('Please select the property');
                        return false;
                    }
                    if (checked1 == true) {
                        var val = $('#open-plots').val();
                        property.push(val);
                    }
                    if (checked2 == true) {
                        var val = $('#villas').val();
                        property.push(val);
                    }
                    if (checked3 == true) {
                        var val = $('#high-rise-apartments').val();
                        property.push(val);
                    }
                    if (checked4 == true) {
                        var val = $('#infrastructure').val();
                        property.push(val);
                    }
                    if (window.XDomainRequest) {
                        contentType = "text/plain";
                    }
                    var contentType = "application/x-www-form-urlencoded; charset=utf-8";
                    $.ajax({
                        url: 'https://venusdigitalmarketing.in/emails/email_aduri.php',
                        type: 'POST',
                        data: {
                            name: name,
                            phone: phone,
                            email: email,
                            message: message,
                            property: property
                        },
                        dataType: 'json',
                        contentType: contentType,
                        success: function(data) {
                            if (data == 1) {
                                alert('Please enter your details...!');
                            }else{
                                alert('Enquiry has been sent successfully...');
                                window.location.href = "thank-you";
                            }
                           
                        }
                    });
                }

                //     $.ajax({
                //         url : 'email',
                //         type: 'post',
                //         data: {name:name, phone:phone, email:email, msg:message, property:property},
                //         success:function(data){
                //         if(data == 1)
                //         {
                //             alert('Please enter your details...!');
                //         }
                //         else
                //         {
                //             alert('Enquiry has been sent successfully...');
                //             window.location.href = "thank-you";
                //         }
                //         }
                //     });
                // }
                else {
                    if (name == '') {
                        $('#name').focus();
                    }
                    alert('Please enter your details in the enquiry form');
                }
            });
        });

        function validateEmail(email) {
            var re = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return re.test(email);
        }

        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>

</body>

</html>
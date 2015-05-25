<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Yiyang Kok</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/timeline.css" rel="stylesheet">

    <!-- Animate CSS -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!-- Timeline Javascript Courtesy of: http://tympanus.net/codrops/2011/12/05/lateral-on-scroll-sliding-with-jquery/ -->
    {{--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>--}}
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.0.js"></script>
    <script type="text/javascript" src="js/modernizr.custom.11333.js"></script>
    <script type="text/javascript" src="js/jqueryEasing.js"></script>
    <script type="text/javascript" src="js/animateScroll.js"></script>
    <script type="text/javascript" src="js/progressbar.js"></script>



</head>

<body id="page-top" class="index">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#page-top">Yiyang Kok</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="#about">About</a>
                </li>
                <li class="page-scroll">
                    <a href="#resume">Resume</a>
                </li>
                <li class="page-scroll">
                    <a href="#technologies">Technologies</a>
                </li>
                <li class="page-scroll">
                    <a href="#portfolio">Portfolio</a>
                </li>
                <li class="page-scroll">
                    <a href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
    <div class="container">
        <div class="row">
            <div class="block revealOnScroll" data-animation="fadeIn" data-timeout="400">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/black_white_mini2.png" alt="">
                    <div class="intro-text">
                        <span class="name"><h2>Yiyang Calvin Kok</h2></span>
                        <hr class="star-header">
                        <span class="skills">Web Developer - Developer in Test - Backend Developer</span>
                    </div>
                    <a href="https://ca.linkedin.com/pub/yiyang-kok/11/325/304"  target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                    <a href="https://plus.google.com/u/0/115473166870881118586/about/p/pub" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- About Section -->
<section id="about">
    <div class="container">
        <div class="block revealOnScroll" data-animation="fadeIn">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>About</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-2">
                <p>Following my upbringing in Singapore, my family moved to Penticton, British Columbia, Canada, where I currently reside. While pursuing my BBA, I developed a longing for something more dynamic, 'hands-on', and technologically involved. Thanks to some basic coding experience from the late 90's, Computer Science was a natural fit.</p>
            </div>
            <div class="col-lg-4">
                <p>I am currently finishing a Bachelor's of Computer Science at the University of British Columbia (projected completion November 2015).</p>
                <br>
                <p>In my spare time I enjoy snowboarding, photography, weightlifting, hi-fi audio, and travelling (when I find time!).</p>
            </div>
        </div>
            </div>
    </div>
</section>


<!-- Script to hide/show timeline -->
<script>
    $(document).ready(function(){
        $("#hide").click(function(){
            $("#timelineSec").hide();
        });
        $("#show").click(function(){
            $("#timelineSec").show();
        });
    });
</script>

<!-- Resume Section -->
<section class="success" id="resume" style="overflow: hidden;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Resume</h2>
                <hr class="star-light">
                <button id="downloadResume" class="btn btn-success btn-lg">Download Resume</button>
                <button id="show" class="btn btn-default btn-lg">Show Timeline</button>
                <button id="hide" class="btn btn-danger btn-lg">Hide Timeline</button>
            </div>
        </div>
    </div>
{{--</section>--}}

<!-- Timeline Section -->
{{--<section class="success" style="padding-top: 0px; overflow: hidden;">--}}
    <div class="container-fluid"  id="timelineSec" style="height:0 !important;">
        <h2 class="ss-subtitle" align="center">Work and Education Timeline</h2>
        <div id="ss-container" class="ss-container">
            <div id="ss-links" class="ss-links">
                <a href="#2008">2008</a>
                <a href="#2010">2010</a>
                <a href="#2011">2011</a>
                <a href="#2012">2012</a>
                <a href="#2013">2013</a>
                <a href="#2014">2014</a>
                <a href="#2015">2015</a>
            </div>
            <div class="ss-row">
                <div class="ss-left">
                    <h2 id="2008">YEAR:</h2>
                </div>
                <div class="ss-right">
                    <h2>2008</h2>
                </div>
            </div>
            <div class="ss-row ss-large">
                <div class="ss-left">
                    <div class="ss-circle ss-circle-1">Okanagan College</div>
                </div>
                <div class="ss-right">
                    <h3>
                        <span>September 2008</span>
                        <p>Enrolled: Bachelor of Business Administration Program</p>
                        <p style="font-family:'lato' ; font-size:13px ; text-transform:none">Started BBA studies at Okanagan College (Accounting Specialty)</p>
                    </h3>
                </div>
            </div>
            <div class="ss-row">
                <div class="ss-left">
                    <h2 id="2010">YEAR:</h2>
                </div>
                <div class="ss-right">
                    <h2>2010</h2>
                </div>
            </div>
            <div class="ss-row ss-medium">
                <div class="ss-left">
                    <div class="ss-circle ss-circle-2">Some title</div>
                </div>
                <div class="ss-right">
                    <h3>
                        <span>May-August 2010</span>
                        <p>Bookkeeper: Penticton Veterinary Hospital</p>
                        <p style="font-family:'lato' ; font-size:13px ; text-transform:none">Summer bookkeeping position at Penticton Veterinary Hospital</p>
                        <p style="font-family:'lato' ; font-size:13px ; text-transform:none"> - Formulated weekly Excel and QuickBooks reports to track business performance metrics</p>
                        <p style="font-family:'lato' ; font-size:13px ; text-transform:none"> - Maintained and managed computer and paper file systems</p>
                        <p style="font-family:'lato' ; font-size:13px ; text-transform:none"> - Responsible for payroll duties of ~10 employees</p>
                    </h3>
                </div>
            </div>
            <div class="ss-row">
                <div class="ss-left">
                    <h2 id="2011">YEAR:</h2>
                </div>
                <div class="ss-right">
                    <h2>2011</h2>
                </div>
            </div>
            <div class="ss-row ss-medium">
                <div class="ss-left">
                    <div class="ss-circle ss-circle-2">Some title</div>
                </div>
                <div class="ss-right">
                    <h3>
                        <span>May-August 2011</span>
                        <p>Bookkeeper: Penticton Veterinary Hospital</p>
                        <p style="font-family:'lato' ; font-size:13px ; text-transform:none">Summer bookkeeping position at Penticton Veterinary Hospital</p>
                    </h3>
                </div>
            </div>
            <div class="ss-row ss-medium">
                <div class="ss-left">
                    <div class="ss-circle ss-circle-3">Some title</div>
                </div>
                <div class="ss-right">
                    <h3>
                        <span>October-December 2011</span>
                        <p>Enrolled: H&R Block Tax School</p>
                        <p style="font-family:'lato' ; font-size:13px ; text-transform:none">Enrolled in and completed H&R Block tax school while taking a full 4th year BBA course load.</p>
                        <p style="font-family:'lato' ; font-size:13px ; text-transform:none">Interviewed and offered a job upon completion.</p>
                    </h3>
                </div>
            </div>
            <div class="ss-row">
                <div class="ss-left">
                    <h2 id="2012">YEAR:</h2>
                </div>
                <div class="ss-right">
                    <h2>2012</h2>
                </div>
            </div>
            <div class="ss-row ss-medium">
                <div class="ss-left">
                    <div class="ss-circle ss-circle-3">Some title</div>
                </div>
                <div class="ss-right">
                    <h3>
                        <span>January-April 2012</span>
                        <p>Certified Tax Professional: H&R Block</p>
                        <p style="font-family:'lato' ; font-size:13px ; text-transform:none">H&R Block Certified Tax Professional at H&R Block K.L.O. Road Office</p>
                        <p style="font-family:'lato' ; font-size:13px ; text-transform:none"> - Prepared and filed (paper-file and e-file) personal income tax returns</p>
                        <p style="font-family:'lato' ; font-size:13px ; text-transform:none"> - Job required a comprehensive knowledge of the personal income tax system</p>
                        <p style="font-family:'lato' ; font-size:13px ; text-transform:none"> - Used downtime to increase prior client return rate via phone solicitation</p>
                    </h3>
                </div>
            </div>
            <div class="ss-row ss-medium">
                <div class="ss-left">
                    <div class="ss-circle ss-circle-2">Some title</div>
                </div>
                <div class="ss-right">
                    <h3>
                        <span>May-August 2012</span>
                        <p>Bookkeeper: Penticton Veterinary Hospital</p>
                        <p style="font-family:'lato' ; font-size:13px ; text-transform:none">Summer bookkeeping position at Penticton Veterinary Hospital</p>
                    </h3>
                </div>
            </div>
            <div class="ss-row ss-medium">
                <div class="ss-left">
                    <div class="ss-circle ss-circle-1">Some title</div>
                </div>
                <div class="ss-right">
                    <h3>
                        <span>June 2012</span>
                        <p>Convocation: Bachelor of Business Administration</p>
                        <p style="font-family:'lato' ; font-size:13px ; text-transform:none">Received Bachelor's Degree - BBA: Accounting Specialty</p>
                    </h3>
                </div>
            </div>
            <div class="ss-row ss-large">
                <div class="ss-left">
                    <div class="ss-circle ss-circle-4">Some title</div>
                </div>
                <div class="ss-right">
                    <h3>
                        <span>September 2012</span>
                        <p>Enrolled: Bachelor of Computer Science Program (Integrated Computer Science Program)</p>
                        <p style="font-family:'lato' ; font-size:13px ; text-transform:none">Started BCS studies at the University of British Columbia</p>
                    </h3>
                </div>
            </div>
            <div class="ss-row">
                <div class="ss-left">
                    <h2 id="2013">YEAR:</h2>
                </div>
                <div class="ss-right">
                    <h2>2013</h2>
                </div>
            </div>
            <div class="ss-row ss-medium">
                <div class="ss-left">
                    <div class="ss-circle ss-circle-4">Some title</div>
                </div>
                <div class="ss-right">
                    <h3>
                        <span>January 2013</span>
                        <p>Accepted: UBC Computer Science Co-op Program</p>
                        <p style="font-family:'lato' ; font-size:13px ; text-transform:none">Accepted into the Co-op program of UBC's Computer Science Department</p>
                    </h3>
                </div>
            </div>
            <div class="ss-row ss-large">
                <div class="ss-left">
                    <div class="ss-circle ss-circle-5">Some title</div>
                </div>
                <div class="ss-right">
                    <h3>
                        <span>September 2013</span>
                        <p>Co-op Internship: NetApp - Software Developer Intern in Test (StorageGRID)</p>
                        <p style="font-family:'lato' ; font-size:13px ; text-transform:none">Started internship at NetApp VTC location</p>
                        <p style="font-family:'lato' ; font-size:13px ; text-transform:none"> - Agile Development Process</p>
                        <p style="font-family:'lato' ; font-size:13px ; text-transform:none"> - Test automation in Ruby</p>
                        <p style="font-family:'lato' ; font-size:13px ; text-transform:none"> - QA testing infrastructure (i.e. libraries) in Ruby</p>
                        <p style="font-family:'lato' ; font-size:13px ; text-transform:none"> - Procedural test automation in Cucumber</p>
                        <p style="font-family:'lato' ; font-size:13px ; text-transform:none"> - Jenkins test integration and monitoring</p>
                        <p style="font-family:'lato' ; font-size:13px ; text-transform:none"> - Testing of potential 3rd party software for product integration</p>
                        <p style="font-family:'lato' ; font-size:13px ; text-transform:none"> - Side project done for professional services team in Java</p>
                    </h3>
                </div>
            </div>
            <div class="ss-row">
                <div class="ss-left">
                    <h2 id="2014">YEAR:</h2>
                </div>
                <div class="ss-right">
                    <h2>2014</h2>
                </div>
            </div>
            <div class="ss-row ss-medium">
                <div class="ss-left">
                    <div class="ss-circle ss-circle-6">Some title</div>
                </div>
                <div class="ss-right">
                    <h3>
                        <span>May 2014</span>
                        <p>NetApp Internship Ended / NetApp Part-time Begins / Return to Studies</p>
                        <p style="font-family:'lato' ; font-size:13px ; text-transform:none">Internship Ended at NetApp VTC</p>
                        <p style="font-family:'lato' ; font-size:13px ; text-transform:none">Offered and accepted part-time position with existing duties</p>
                        <p style="font-family:'lato' ; font-size:13px ; text-transform:none">Returned to full time studies</p>
                    </h3>
                </div>
            </div>
            <div class="ss-row ss-small">
                <div class="ss-left">
                    <div class="ss-circle ss-circle-5">Some title</div>
                </div>
                <div class="ss-right">
                    <h3>
                        <span>July 2014</span>
                        <p>Departed NetApp</p>
                        <p style="font-family:'lato' ; font-size:13px ; text-transform:none">Left NetApp to focus on studies</p>
                    </h3>
                </div>
            </div>
            <div class="ss-row">
                <div class="ss-left">
                    <h2 id="2015">YEAR:</h2>
                </div>
                <div class="ss-right">
                    <h2>2015</h2>
                </div>
            </div>
            <div class="ss-row ss-medium">
                <div class="ss-left">
                    <div class="ss-circle ss-circle-4">Some title</div>
                </div>
                <div class="ss-right">
                    <h3>
                        <span>November 2015</span>
                        <p>(PROJECTED) - Convocation: Bachelor of Computer Science</p>
                        <p style="font-family:'lato' ; font-size:13px ; text-transform:none">Courses to be finished August 2015</p>
                        <p style="font-family:'lato' ; font-size:13px ; text-transform:none">Degree convocation date: November 2015</p>
                    </h3>
                </div>
            </div>
        </div>
        <!-- more rows... -->
    </div>
</section>

<!-- Technologies Section -->
<section id="technologies">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Technologies</h2>
                <hr class="star-primary">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-1">
                        <div class="marged">
                            <div class="block revealOnScroll" data-animation="bounce">
                                <div id="ruby-circle"></div>
                            </div>
                            <div class="block revealOnScroll" data-animation="bounce">
                                <p>Ruby</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="marged">
                            <div class="block revealOnScroll" data-animation="bounce">
                                <div id="c-circle"></div>
                            </div>
                            <div class="block revealOnScroll" data-animation="bounce">
                                <p>C</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="marged">
                            <div class="block revealOnScroll" data-animation="bounce">
                                <div id="java-circle"></div>
                            </div>
                            <div class="block revealOnScroll" data-animation="bounce">
                                <p>Java</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="marged">
                            <div class="block revealOnScroll" data-animation="bounce">
                                <div id="php-circle"></div>
                            </div>
                            <div class="block revealOnScroll" data-animation="bounce">
                                <p>PHP</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="marged">
                            <div class="block revealOnScroll" data-animation="bounce">
                                <div id="cucumber-circle"></div>
                            </div>
                            <div class="block revealOnScroll" data-animation="bounce">
                                <p>Cucumber</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="marged">
                            <div class="block revealOnScroll" data-animation="bounce">
                                <div id="junit-circle"></div>
                            </div>
                            <div class="block revealOnScroll" data-animation="bounce">
                                <p>J-Unit</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-1">
                        <div class="marged">
                            <div class="block revealOnScroll" data-animation="bounce">
                                <div id="rspec-circle"></div>
                            </div>
                            <div class="block revealOnScroll" data-animation="bounce">
                                <p>RSpec</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="marged">
                            <div class="block revealOnScroll" data-animation="bounce">
                                <div id="git-circle"></div>
                            </div>
                            <div class="block revealOnScroll" data-animation="bounce">
                                <p>Git</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="marged">
                            <div class="block revealOnScroll" data-animation="bounce">
                                <div id="sql-circle"></div>
                            </div>
                            <div class="block revealOnScroll" data-animation="bounce">
                                <p>SQL</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="marged">
                            <div class="block revealOnScroll" data-animation="bounce">
                                <div id="html-circle"></div>
                            </div>
                            <div class="block revealOnScroll" data-animation="bounce">
                                <p>HTML</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="marged">
                            <div class="block revealOnScroll" data-animation="bounce">
                                <div id="css-circle"></div>
                            </div>
                            <div class="block revealOnScroll" data-animation="bounce">
                                <p>CSS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Grid Section -->
<section class="success" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Portfolio</h2>
                <hr class="star-light">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/cabin.png" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/cake.png" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/circus.png" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/game.png" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/safe.png" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/submarine.png" class="img-responsive" alt="">
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Contact Me</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email Address</label>
                            <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Phone Number</label>
                            <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Message</label>
                            <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-success btn-lg">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h3>Location</h3>
                    <p>3481 Melrose Place<br>Beverly Hills, CA 90210</p>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Around the Web</h3>
                    <ul class="list-inline">
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col col-md-4">
                    <h3>About Freelancer</h3>
                    <p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; Your Website 2014
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll visible-xs visible-sm">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>

<!-- Portfolio Modals -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="img/portfolio/cake.png" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="img/portfolio/circus.png" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="img/portfolio/game.png" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="img/portfolio/safe.png" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="img/portfolio/submarine.png" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/freelancer.js"></script>

<!-- Technologies Circle JavaScript -->
<script>
    var circle1 = new ProgressBar.Circle('#ruby-circle', {
        color: '#E91E63',
        strokeWidth: 8,
        trailWidth: 1,
        duration: 1500,
        ident: 'ruby',
        text: {
            value: '0'
        },
        step: function(state, bar) {
            bar.setText((bar.value() * 100).toFixed(0));
        }
    });

    circle1.animate(1, function() {
        circle1.animate(.80);
    })

    var circle2 = new ProgressBar.Circle('#c-circle', {
        color: '#E91E63',
        strokeWidth: 8,
        trailWidth: 1,
        duration: 1500,
        text: {
            value: '0'
        },
        step: function(state, bar) {
            bar.setText((bar.value() * 100).toFixed(0));
        }
    });

    circle2.animate(1, function() {
        circle2.animate(.70);
    })

    var circle3 = new ProgressBar.Circle('#java-circle', {
        color: '#E91E63',
        strokeWidth: 8,
        trailWidth: 1,
        duration: 1500,
        text: {
            value: '0'
        },
        step: function(state, bar) {
            bar.setText((bar.value() * 100).toFixed(0));
        }
    });

    circle3.animate(1, function() {
        circle3.animate(.80);
    })

    var circle4 = new ProgressBar.Circle('#php-circle', {
        color: '#E91E63',
        strokeWidth:8,
        trailWidth: 1,
        duration: 1500,
        text: {
            value: '0'
        },
        step: function(state, bar) {
            bar.setText((bar.value() * 100).toFixed(0));
        }
    });

    circle4.animate(1, function() {
        circle4.animate(.65);
    })

    var circle5 = new ProgressBar.Circle('#cucumber-circle', {
        color: '#E91E63',
        strokeWidth: 8,
        trailWidth: 1,
        duration: 1500,
        text: {
            value: '0'
        },
        step: function(state, bar) {
            bar.setText((bar.value() * 100).toFixed(0));
        }
    });

    circle5.animate(1, function() {
        circle5.animate(.80);
    })

    var circle6 = new ProgressBar.Circle('#junit-circle', {
        color: '#E91E63',
        strokeWidth: 8,
        trailWidth: 1,
        duration: 1500,
        text: {
            value: '0'
        },
        step: function(state, bar) {
            bar.setText((bar.value() * 100).toFixed(0));
        }
    });

    circle6.animate(1, function() {
        circle6.animate(.80);
    })

    var circle7 = new ProgressBar.Circle('#rspec-circle', {
        color: '#E91E63',
        strokeWidth: 8,
        trailWidth: 1,
        duration: 1500,
        text: {
            value: '0'
        },
        step: function(state, bar) {
            bar.setText((bar.value() * 100).toFixed(0));
        }
    });

    circle7.animate(1, function() {
        circle7.animate(.80);
    })

    var circle8 = new ProgressBar.Circle('#git-circle', {
        color: '#E91E63',
        strokeWidth: 8,
        trailWidth: 1,
        duration: 1500,
        text: {
            value: '0'
        },
        step: function(state, bar) {
            bar.setText((bar.value() * 100).toFixed(0));
        }
    });

    circle8.animate(1, function() {
        circle8.animate(.80);
    })

    var circle9 = new ProgressBar.Circle('#sql-circle', {
        color: '#E91E63',
        strokeWidth: 8,
        trailWidth: 1,
        duration: 1500,
        text: {
            value: '0'
        },
        step: function(state, bar) {
            bar.setText((bar.value() * 100).toFixed(0));
        }
    });

    circle9.animate(1, function() {
        circle9.animate(.70);
    })

    var circle10 = new ProgressBar.Circle('#html-circle', {
        color: '#E91E63',
        strokeWidth: 8,
        trailWidth: 1,
        duration: 1500,
        text: {
            value: '0'
        },
        step: function(state, bar) {
            bar.setText((bar.value() * 100).toFixed(0));
        }
    });

    circle10.animate(1, function() {
        circle10.animate(.80);
    })

    var circle11 = new ProgressBar.Circle('#css-circle', {
        color: '#E91E63',
        strokeWidth: 8,
        trailWidth: 1,
        duration: 1500,
        text: {
            value: '0'
        },
        step: function(state, bar) {
            bar.setText((bar.value() * 100).toFixed(0));
        }
    });

    circle11.animate(1, function() {
        circle11.animate(.40);
    })
</script>

<!-- BootStrap Script -->
<script type="text/javascript">
    $(function() {

        var $sidescroll	= (function() {

            // the row elements
            var $rows			= $('#ss-container > div.ss-row'),
            // we will cache the inviewport rows and the outside viewport rows
                    $rowsViewport, $rowsOutViewport,
            // navigation menu links
                    $links			= $('#ss-links > a'),
            // the window element
                    $win			= $(window),
            // we will store the window sizes here
                    winSize			= {},
            // used in the scroll setTimeout function
                    anim			= false,
            // page scroll speed
                    scollPageSpeed	= 2000 ,
            // page scroll easing
                    scollPageEasing = 'easeInOutExpo',
            // perspective?
                    hasPerspective	= false,

                    perspective		= hasPerspective && Modernizr.csstransforms3d,
            // initialize function
                    init			= function() {

                        // get window sizes
                        getWinSize();
                        // initialize events
                        initEvents();
                        // define the inviewport selector
                        defineViewport();
                        // gets the elements that match the previous selector
                        setViewportRows();
                        // if perspective add css
                        if( perspective ) {
                            $rows.css({
                                '-webkit-perspective'			: 600,
                                '-webkit-perspective-origin'	: '50% 0%'
                            });
                        }
                        // show the pointers for the inviewport rows
                        $rowsViewport.find('a.ss-circle').addClass('ss-circle-deco');
                        // set positions for each row
                        placeRows();

                    },
            // defines a selector that gathers the row elems that are initially visible.
            // the element is visible if its top is less than the window's height.
            // these elements will not be affected when scrolling the page.
                    defineViewport	= function() {

                        $.extend( $.expr[':'], {

                            inviewport	: function ( el ) {
                                if ( $(el).offset().top < winSize.height ) {
                                    return true;
                                }
                                return false;
                            }

                        });

                    },
            // checks which rows are initially visible
                    setViewportRows	= function() {

                        $rowsViewport 		= $rows.filter(':inviewport');
                        $rowsOutViewport	= $rows.not( $rowsViewport )

                    },
            // get window sizes
                    getWinSize		= function() {

                        winSize.width	= $win.width();
                        winSize.height	= $win.height();

                    },
            // initialize some events
                    initEvents		= function() {

                        // navigation menu links.
                        // scroll to the respective section.
                        $links.on( 'click.Scrolling', function( event ) {

                            // scroll to the element that has id = menu's href
                            $('html, body').stop().animate({
                                scrollTop: $( $(this).attr('href') ).offset().top
                            }, scollPageSpeed, scollPageEasing );

                            return false;

                        });

                        $(window).on({
                            // on window resize we need to redefine which rows are initially visible (this ones we will not animate).
                            'resize.Scrolling' : function( event ) {

                                // get the window sizes again
                                getWinSize();
                                // redefine which rows are initially visible (:inviewport)
                                setViewportRows();
                                // remove pointers for every row
                                $rows.find('a.ss-circle').removeClass('ss-circle-deco');
                                // show inviewport rows and respective pointers
                                $rowsViewport.each( function() {

                                    $(this).find('div.ss-left')
                                            .css({ left   : '0%' })
                                            .end()
                                            .find('div.ss-right')
                                            .css({ right  : '0%' })
                                            .end()
                                            .find('a.ss-circle')
                                            .addClass('ss-circle-deco');

                                });

                            },
                            // when scrolling the page change the position of each row
                            'scroll.Scrolling' : function( event ) {

                                // set a timeout to avoid that the
                                // placeRows function gets called on every scroll trigger
                                if( anim ) return false;
                                anim = true;
                                setTimeout( function() {

                                    placeRows();
                                    anim = false;

                                }, 10 );

                            }
                        });

                    },
            // sets the position of the rows (left and right row elements).
            // Both of these elements will start with -50% for the left/right (not visible)
            // and this value should be 0% (final position) when the element is on the
            // center of the window.
                    placeRows		= function() {

                        // how much we scrolled so far
                        var winscroll	= $win.scrollTop(),
                        // the y value for the center of the screen
                                winCenter	= winSize.height / 2 + winscroll;

                        // for every row that is not inviewport
                        $rowsOutViewport.each( function(i) {

                            var $row	= $(this),
                            // the left side element
                                    $rowL	= $row.find('div.ss-left'),
                            // the right side element
                                    $rowR	= $row.find('div.ss-right'),
                            // top value
                                    rowT	= $row.offset().top;

                            // hide the row if it is under the viewport
                            if( rowT > winSize.height + winscroll ) {

                                if( perspective ) {

                                    $rowL.css({
                                        '-webkit-transform'	: 'translate3d(-75%, 0, 0) rotateY(-90deg) translate3d(-75%, 0, 0)',
                                        'opacity'			: 0
                                    });
                                    $rowR.css({
                                        '-webkit-transform'	: 'translate3d(75%, 0, 0) rotateY(90deg) translate3d(75%, 0, 0)',
                                        'opacity'			: 0
                                    });

                                }
                                else {

                                    $rowL.css({ left 		: '-50%' });
                                    $rowR.css({ right 		: '-50%' });

                                }

                            }
                            // if not, the row should become visible (0% of left/right) as it gets closer to the center of the screen.
                            else {

                                // row's height
                                var rowH	= $row.height(),
                                // the value on each scrolling step will be proporcional to the distance from the center of the screen to its height
                                        factor 	= ( ( ( rowT + rowH / 2 ) - winCenter ) / ( winSize.height / 2 + rowH / 2 ) ),
                                // value for the left / right of each side of the row.
                                // 0% is the limit
                                        val		= Math.max( factor * 50, 0 );

                                if( val <= 0 ) {

                                    // when 0% is reached show the pointer for that row
                                    if( !$row.data('pointer') ) {

                                        $row.data( 'pointer', true );
                                        $row.find('.ss-circle').addClass('ss-circle-deco');

                                    }

                                }
                                else {

                                    // the pointer should not be shown
                                    if( $row.data('pointer') ) {

                                        $row.data( 'pointer', false );
                                        $row.find('.ss-circle').removeClass('ss-circle-deco');

                                    }

                                }

                                // set calculated values
                                if( perspective ) {

                                    var	t		= Math.max( factor * 75, 0 ),
                                            r		= Math.max( factor * 90, 0 ),
                                            o		= Math.min( Math.abs( factor - 1 ), 1 );

                                    $rowL.css({
                                        '-webkit-transform'	: 'translate3d(-' + t + '%, 0, 0) rotateY(-' + r + 'deg) translate3d(-' + t + '%, 0, 0)',
                                        'opacity'			: o
                                    });
                                    $rowR.css({
                                        '-webkit-transform'	: 'translate3d(' + t + '%, 0, 0) rotateY(' + r + 'deg) translate3d(' + t + '%, 0, 0)',
                                        'opacity'			: o
                                    });

                                }
                                else {

                                    $rowL.css({ left 	: - val + '%' });
                                    $rowR.css({ right 	: - val + '%' });

                                }

                            }

                        });

                    };

            return { init : init };

        })();

        $sidescroll.init();

    });
</script>

</body>

</html>

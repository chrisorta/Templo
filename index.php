<!DOCTYPE html>
<html>
<head>
    <title>Temlo Calvario</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!--LESS-->
    <!-- set options before less.js script -->

<script src="less.js"></script>
    <link rel="stylesheet" href="css/style.less">
    <link rel="stylesheet" href="css/style.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.3/less.min.js"></script>


</head>
<body>

<header>
    <div class="container">

            <!--LOGO-->

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 logo">
                <a href="/index.php"><img src="images/Logo.png"></a>
            </div>

            <!--END LOGO-->

            <!--MAIN NAV AND CTA-->

            <div class="col-lg-6">
                <div class="tagline"><p align="right">Together we can transform lives!</p></div>
                <div class="menu-cta"><p align="right"><button class="btn-green"><a href="#">Get Involved</a></button><button class="btn-blue"><a href="#">Donate</a></button></p></div>

                <!--MAIN MENU-->
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">About</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Give</a></li>
                                <li><a href="#">Volunteer</a></li>
                            </ul>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div>
                </nav>
                <!--END MAIN MENU-->

            </div>

            <!--END MAIN NAV AND CTA-->
    </div>
</header>


<!--CORE BUTTONS-->
<section class="cake2">

            <ul class="core-buttons">
                    <li>    <img src="images/core_button_1.png"></li>
                    <li>    <img src="images/core_button_2.png"></li>
                    <li>    <img src="images/core_button_3.png"></li>
                    <li>    <img src="images/core_button_4.png"></li>
            </ul>

</section>

<!--CORE BUTTONS END-->

<!--HOME SLIDER-->


<div id="carousel-id" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel-id" data-slide-to="0" class=""></li>
        <li data-target="#carousel-id" data-slide-to="1" class=""></li>
        <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item">
            <img alt="First slide" src="images/slider.jpg">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Example headline.</h1>
                    <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img alt="Second slide" src="images/slider.jpg">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="item active">
            <img alt="Third slide" src="images/slider.jpg">
            <div class="container">
                <div class="carousel-caption">
                    <h1>One more for good measure.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>

<!--HOME SLIDER END-->

<!--PAGE CONTENT-->
<section id="page-content">
        <div class="container">

            <div class="featured-image col-xs-12 col-sm-6 col-md-6 col-lg-6"><img src="images/featuredimg1.jpg" class="featuredimg"></div>
            <div class="featured-content col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <h2>About Templo Calvario CDC</h2>

                    <p>Templo Calvario CDC was launched by Templo Calvario, a church with a 75 year history of service in Santa Ana. Although the CDC formally received non-profit status on July 9, 2003, its efforts to serve the community go back more than 25 years.</p>

                    <button class="read-more">More About Templo Calvario CDC</button>

                </div>


</section>

<!--PAGE CONTENT END-->

<!--RECENT NEWS-->

<section class="cake2">

    <div class="container">

        <div class="recent-news">
            <h2>Recent News</h2>
            <ul class="news-items">
                <li><img src="featured-image"><h3>News Title</h3><p>New Excerpt Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean placerat nunc vitae congue ultrices. </p></li>
                <li><img src="featured-image"><h3>News Title</h3><p>New Excerpt Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean placerat nunc vitae congue ultrices. </p></li>
                <li><img src="featured-image"><h3>News Title</h3><p>New Excerpt Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean placerat nunc vitae congue ultrices. </p></li>
            </ul>

        </div>

    </div>

</section>

<!--RECENT NEWS END-->


<!--FAKE CHARTS-->

<section>
    <div class="container">
        <center><img src="images/fake_charts.gif"><br><button>Download 2015 Annual Report</button></center></div>
    </div>

</section>

<!--FAKE CHARTS END-->

<!--FAKE SPONSORS-->

<section class="cake3">
    <div class="container">
    <center><img src="images/fake_sponsors.gif"></div></center>
    </div>

</section>

<!--FAKE SPONSORS END-->

<!--FAKE CHARTS-->

<section class="cake4">
    <div class="container">
    <p align="center">Sign up with your email address to receive news and updates!</p>
        <form>
            <center><input>Email</input>   <input><button>Submit</button></input>
            </center>
        </form>
    </div>

</section>

<!--FAKE CHARTS END-->

<!--FOOTER-->

<section id="footer">
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"><img src="images/footer_logo.png"></div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"></div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"></div>

    </div>

</section>

<!--FOOTER END-->

</body>
</html>
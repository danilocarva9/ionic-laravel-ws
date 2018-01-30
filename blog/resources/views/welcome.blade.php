
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>{{ config('app.name') }}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/gaia.css') }}" rel="stylesheet"/>



    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/gaia-bootstrap-template-pro"/>
    
    <!--     Fonts and icons     -->
    <link href='https://fonts.googleapis.com/css?family=Cambo|Lato:400,700' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/fonts/pe-icon-7-stroke.css') }}" rel="stylesheet">


</head>

<body>

    <nav class="navbar navbar-default navbar-transparent navbar-fixed-top" color-on-scroll="200">
        <!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
        <div class="container">
            <div class="navbar-header">
                <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
                <a href="http://www.creative-tim.com" class="navbar-brand">
                    {{ config('app.name') }}
                </a>
            </div>
            @if (Route::has('login'))
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right navbar-uppercase">
                    @auth
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    @else
                    <li><a href="{{ route('register') }}">Register</a></li>
                    <li><a href="{{ route('login') }}" class="btn btn-danger btn-fill">Login</a></li>
                    @endauth
                </ul>
            </div>
             @endif
            <!-- /.navbar-collapse -->
        </div>
    </nav>


    <div class="section section-header-blog">
        <div class="parallax filter filter-color-black">
            <div class="image"
                style="background-image:url('{{ asset('img/header-10.jpg') }}')">

                

            </div>
            <div class="container">
                <div class="content">
                    <div class="title-area">
                        <h1>{{ config('app.name') }}</h1>
                        <h3>Find only the best stories from our famous writers.</h3>
                     
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-blog card-plain">
                        <a href="#gaia" class="header">
                            <img src="assets/img/header-3.jpg" class="image-header">
                        </a>
                        <div class="content">
                            <h6 class="card-date">Jul 27</h6>
                            <a href="#gaia" class="card-title">
                                <h3>How to Make the Perfect Statues</h3>
                            </a>
                            <div class="line-divider line-danger"></div>
                            <h6 class="card-category">Food & Drink</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-blog card-plain">
                        <a href="#gaia" class="header">
                            <img src="assets/img/header-6.jpeg" class="image-header">
                        </a>
                        <div class="content">
                            <h6 class="card-date">Feb 17</h6>
                            <a href="#gaia" class="card-title">
                                <h3>Nature & The Catch of the Day</h3>
                            </a>
                            <div class="line-divider line-danger"></div>
                            <h6 class="card-category">Nature</h6>
                        </div>
                    </div>
                    <div class="card card-blog card-plain">
                        <a href="#gaia" class="header">
                            <img src="../assets/img/header-4.jpeg" class="image-header">
                        </a>
                        <div class="content">
                            <h6 class="card-date">Mar 27</h6>
                            <a href="#gaia" class="card-title">
                                <h3>Breathing in the Crisp Air of Lake Lucerne</h3>
                            </a>
                            <div class="line-divider line-danger"></div>
                            <h6 class="card-category">Business & Travel</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-blog card-plain">
                        <div class="content">
                            <h2><i class="fa fa-twitter"></i></h2>

                            <a href="#gaia" class="card-title">
                                <h3>"Breathing in the Crisp Air of Lake Lucerne"</h3>
                            </a>
                            <div class="line-divider line-danger"></div>
                            <h6 class="card-category">Social Media</h6>
                        </div>
                    </div>
                    <div class="card card-blog card-plain">
                        <a href="#gaia" class="header">
                            <img src="../assets/img/header-2.jpeg" class="image-header">
                        </a>
                        <div class="content">
                            <h6 class="card-date">Feb 17</h6>
                            <a href="#gaia" class="card-title">
                                <h3>17 Best Nature Images</h3>
                            </a>
                            <div class="line-divider line-danger"></div>
                            <h6 class="card-category">Images</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-card-blog">
        <div class="container">
            <div class="title-area">
                <h5 class="text-gray">Don't miss our</h5>
                <h2>Most Recommended Stories</h2>
                <div class="separator separator-danger">✻</div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card card-blog">
                        <a href="blog-posts.html" class="header">
                            <img src="../assets/img/header-7.jpeg" class="image-header">
                        </a>
                        <div class="content">
                            <div class="circle-black">
                                <div class="circle">
                                    <div class="date-wrapper">
                                        <span class="month">Apr</span>
                                        <span class="date">12</span>
                                    </div>
                                </div>
                            </div>
                            <a href="blog-posts.html" class="card-title"><h3>We Are Here to Make Life Better</h3></a>
                            <h6 class="card-category text-warning">Life Tips & Tricks</h6>
                            <p class="text-description text-gray">Royère doesn't make a Polar bear bed but the Polar bear couch is my favorite piece of furniture we own The Pablo pop up was almost a pop up of influence.</p>
                        </div>
                    </div>

                    <div class="card card-blog">
                        <div class="content">
                            <div class="circle-black">
                                <div class="circle">
                                    <div class="date-wrapper">
                                        <span class="month">Aug</span>
                                        <span class="date">30</span>
                                    </div>
                                </div>
                            </div>
                            <a href="blog-posts.html" class="card-title"><h3>Don't Be Scared</h3></a>
                            <h6 class="card-category text-info">Motivation</h6>
                            <p class="text-description text-gray">Nothing beats the slight tang and softness of a ciabatta. Here's mmy recipe.Simply dip in some olive oil and balsamic vinegar.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-blog">
                        <a href="blog-posts.html" class="header">
                            <img src="../assets/img/header-8.jpeg" class="image-header">
                        </a>
                        <div class="content">
                            <div class="circle-black">
                                <div class="circle">
                                    <div class="date-wrapper">
                                        <span class="month">Mar</span>
                                        <span class="date">10</span>
                                    </div>
                                </div>
                            </div>
                            <a href="blog-posts.html" class="card-title"><h3>Now There Is Only One Important Color...</h3></a>
                            <h6 class="card-category text-danger">Trending</h6>
                            <p class="text-description text-gray">When it comes to choosing decorative pieces, you want to stick to a maximum of three colors. Then it's all about placement.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-blog">
                        <div class="content">
                            <div class="circle-black">
                                <div class="circle">
                                    <div class="date-wrapper">
                                        <span class="month">Feb</span>
                                        <span class="date">11</span>
                                    </div>
                                </div>
                            </div>
                            <a href="blog-posts.html" class="card-title"><h3>We No Longer Have to Be Scared of the Truth</h3></a>
                            <h6 class="card-category text-info">Motivation</h6>
                            <p class="text-description text-gray">Nothing beats the slight tang and softness of a ciabatta. Here's mmy recipe.Simply dip in some olive oil and balsamic vinegar.</p>
                        </div>
                    </div>
                    <div class="card card-blog">
                        <a href="blog-posts.html" class="header">
                            <img src="../assets/img/header-1.jpeg" class="image-header">
                        </a>
                        <div class="content">
                            <div class="circle-black">
                                <div class="circle">
                                    <div class="date-wrapper">
                                        <span class="month">Mar</span>
                                        <span class="date">10</span>
                                    </div>
                                </div>
                            </div>
                            <a href="blog-posts.html" class="card-title"><h3>Now There Is Only One Important Color...</h3></a>
                            <h6 class="card-category text-danger">Trending</h6>
                            <p class="text-description text-gray">When it comes to choosing decorative pieces, you want to stick to a maximum of three colors. Then it's all about placement.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="section section-blog-horizontal">
        <div class="container">
            <div class="title">
                <h5 class="text-gray">Checkout our Latest</h5>
                <h2>Blog Posts</h2>
                <div class="separator separator-danger">✻</div>
            </div>

            <div class="card card-plain card-blog">
                <div class="row">
                    <div class="col-sm-6">
                        <a href="#link" class="header">
                            <img src="../assets/img/header-4.jpeg">
                        </a>
                    </div>
                    <div class="col-sm-5 col-md-offset-1">
                        <div class="content">
                            <h5 class="card-category text-info">Web Design</h5>
                            <a href="#link" class="card-title">
                                <h2>One of the Best Articles of 2016 Is Here</h2>
                            </a>

                            <p class="text-gray">That dreams will actualize. Dreams will manifest. We still love Kanye We will find freedom in truth as opposed to ridicule. All respect prayers and love to Phife’s family Thank you for so much inspiration...</p>


                            <a href="#gaia" class="btn btn-danger btn-fill">Read More</a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-plain card-blog">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="content">
                            <h5 class="card-category text-danger">Lifestyle & Trends</h5>
                            <a href="#link" class="card-title">
                                <h2>We Are Here to Make Life Better</h2>
                            </a>

                            <p class="text-gray">That dreams will actualize. Dreams will manifest. We still love Kanye We will find freedom in truth as opposed to ridicule. All respect prayers and love to Phife’s family Thank you for so much inspiration...</p>

                            <a href="#gaia" class="btn btn-danger btn-fill">Read More</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-sm-offset-1">
                        <a href="#link" class="header">
                            <img src="../assets/img/header-2.jpeg">
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="section section-contact">
        <div class="container">
            <div class="text-area">
                <div class="title">
                    <h2>Subscribe to Newsletter</h2>
                    <div class="separator separator-danger">✻</div>
                    <h5 class="text-gray">We are so blessed! All praises and blessings to the families of people who never gave up on dreams I love you guys.</h5>
                </div>

            <div class="contact-form">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-4 col-md-push-4">
                            <div class="form-group">
                                <input type="text" name="email" value="" placeholder="michael.j@gmail.com" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="button" class="btn btn-fill btn-danger">
                                Subscribe
                            </button>
                        </div>
                    </div>
                </form>
            </div>


        </div>
        </div>
    </div>

    <footer class="footer footer-big footer-color-black" data-color="black">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-3">
                    <div class="info">
                        <h5 class="title">Company</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">Home</a></li>
                                <li>
                                    <a href="#">Find offers</a>
                                </li>
                                <li>
                                    <a href="#">Discover Projects</a>
                                </li>
                                <li>
                                    <a href="#">Our Portfolio</a>
                                </li>
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-1 col-sm-3">
                    <div class="info">
                        <h5 class="title"> Help and Support</h5>
                         <nav>
                            <ul>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                                <li>
                                    <a href="#">How it works</a>
                                </li>
                                <li>
                                    <a href="#">Terms &amp; Conditions</a>
                                </li>
                                <li>
                                    <a href="#">Company Policy</a>
                                </li>
                                <li>
                                    <a href="#">Money Back</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="info">
                        <h5 class="title">Latest News</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i> <b>Get Shit Done</b> The best kit in
                                        the market is here, just give it a try and let us...
                                        <hr class="hr-small">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i> We've just been featured on <b> Awwwards Website</b>! Thank you everybody for...
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-2 col-md-offset-1 col-sm-3">
                    <div class="info">
                        <h5 class="title">Follow us on</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#" class="btn btn-social btn-facebook btn-simple">
                                        <i class="fa fa-facebook-square"></i> Facebook
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-social btn-dribbble btn-simple">
                                        <i class="fa fa-dribbble"></i> Dribbble
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-social btn-twitter btn-simple">
                                        <i class="fa fa-twitter"></i> Twitter
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-social btn-reddit btn-simple">
                                        <i class="fa fa-google-plus-square"></i> Google+
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <hr>
            <div class="copyright">
                 © <script> document.write(new Date().getFullYear()) </script> Creative Tim, made with love
            </div>
        </div>
    </footer>

</body>





<!--   core js files    -->
<script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.js') }}" type="text/javascript"></script>

<!--  js library for devices recognition -->
<script type="text/javascript" src="{{ asset('js/modernizr.js') }}"></script>

<!--  script for google maps   -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!--   file where we handle all the script from the Gaia - Bootstrap Template   -->
<script type="text/javascript" src="{{ asset('js/gaia.js') }}"></script>

</html>
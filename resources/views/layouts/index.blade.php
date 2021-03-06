<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>burger html5 landing page</title>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Stylesheets -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/flaticon.css" />

        <!-- Animate -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Bootsnav -->
        <link rel="stylesheet" href="css/bootsnav.css">
        <!-- Color style -->
        <link rel="stylesheet" href="css/color.css">

        <!-- Custom stylesheet -->
        <link rel="stylesheet" href="css/custom.css" />
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body data-spy="scroll" data-target="#navbar-menu" data-offset="100">

        <!-- Preloader --> 
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                    <div class="object" id="object_five"></div>
                    <div class="object" id="object_six"></div>
                    <div class="object" id="object_seven"></div>
                    <div class="object" id="object_eight"></div>
                    <div class="object" id="object_big"></div>
                </div>
            </div>
        </div>
        <!--End Preloader -->
        <!-- Navbar -->
        <nav class="navbar navbar-inverse">
            <ul class="nav nav-tabs">
                    <li role="presentation"><a href="#">Home</a></li>
                    <li role="presentation"><a href="#1">JAK-UT</a></li>
                    <li role="presentation"><a href="#2">JAK-TIM</a></li>
                    <li role="presentation"><a href="#3">JAK-BAR</a></li>
                    <li role="presentation"><a href="#4">JAK-SEL</a></li>
                    <li role="presentation"><a href="#5">JAK-PUS</a></li>
                    <li role="presentation"><a href="{{route('login')}}">LOGIN</a></li>
             </ul>
            

            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <div class="widget">
                    <h6 class="title">Menu</h6><br>
                    <h4 class="title"><a href="{{route('login')}}">LOGIN</a></h4>  
                    <ul class="link">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              WILAYAH <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                              <li><a href="#">Jakarta Utara</a></li>
                              <li><a href="#">Jakarta Barat</a></li>
                              <li><a href="#">Jakarta Timur</a></li>
                              <li><a href="#">Jakarta Selatan</a></li>
                              <li><a href="#">Jakarta Pusat</a></li>
                            </ul>
                          </div>
                    </ul>
                </div>
            </div>
            <!-- End Side Menu -->
        </nav>
    
        <!-- Header -->
        <header id="hello" style="background: url('{{url(Storage::url($bgg->background))}}');background-repeat: no-repeat;background-size: 1400px 800px;">
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="banner"><br><br>  
                            <h1 style="color:#000">{{$bgg->title}}</h1>

                            <div class="inner_banner">
                                <div class="banner_content">
                                   
                                </div>
                                <div class="stamp">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Container end -->
            
        </header><!-- Header end -->

        <!-- Block Content -->
        <section id="block">
            @php($v=1)
            @foreach($jakut as $utara)
            <div class="container" id="{{$v}}">
                <!-- First section -->
                <div style="margin-top: 50px;" class="row">
                <br><br><br><br>
                    <div class="col-sm-9 col-sm-offset-2">
                        <div style="background-image: url('{{url(Storage::url($utara->gambar_wilayah))}}');background-repeat: no-repeat;background-size: 800px 400px; height:400px" class="jumbotron">
                            <h2 style="color:#000;">{{$utara->nama_wilayah}}</h2><br>
                            <p style="color:#000;">{{$utara->deskripsi_wilayah}}</p><br>
                            <p style="margin-top: 30px;"><a class="btn btn-primary btn-lg" href="{{route('wilayah.restoran',$utara->id)}}" role="button">Cick Me!</a></p>
                        </div>
                    </div>
                </div><!-- first section end -->
            </div>    
            @php($v++)    
            @endforeach    
         

                <!-- Second section -->
                
                
                                <!-- Forth section -->
                <div class="row forth_sec">
                    <div class="col-sm-4">
                        <div class="menu">
                            <div class="inner_content">
                                <span class="flaticon flaticon-burger"></span>
                                <h2>menu</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="drinks">
                            <div class="inner_content">
                                <span class="flaticon flaticon-drink"></span>
                                <h2>drinks</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="sides">
                            <div class="inner_content">
                                <span class="flaticon flaticon-food"></span>
                                <h2>sides</h2>
                            </div>
                        </div>
                    </div>
                </div><!-- forth section end -->
            </div>
        </section><!-- Block Content end-->

        <!-- Lock -->
        <section id="lock">
            <h2>SERVING MORE THAN JUST BURGERS SINCE 1998</h2>
            <p>Check out our opening hours and location address below.</p>
        </section>

        

        <!-- Footer -->
        <footer>
            <!-- Container -->
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-sm-4 col-xs-12 col-lg-offset-1 pull-right">
                        <div class="subscribe">
                            <h4>Subscribe now</h4>
                            <p>Subscribe to the newsletter and
                                get some crispy stuff every week.</p>

                            <form role="form">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="em" placeholder="Enter your e-mail here">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn send_btn">
                                                <i class="glyphicon glyphicon-send"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-4 col-xs-12 col-lg-offset-1 pull-right">
                        <div class="contact_us">
                            <h4>Contact Us</h4>
                            <a href="">info@junkyburget.com</a>

                            <address>
                                Jalan Awan Hijau, Taman OUG<br />
                                58200 Kuala Lumpur <br />
                                Malaysia <br />
                            </address>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-4 col-xs-12 pull-right">
                        <div class="basic_info">
                            <a href=""><img class="footer_logo" src="images/footer_logo.png" alt="Burger" /></a>

                            <ul class="list-inline social">
                                <li><a href="" class="fa fa-facebook"></a></li>
                                <li><a href="" class="fa fa-twitter"></a></li>
                                <li><a href="" class="fa fa-instagram"></a></li>
                            </ul>

                            <div class="footer-copyright">
                                <p class="wow fadeInRight" data-wow-duration="1s">
                                    Made with 
                                    <i class="fa fa-heart"></i>
                                    by 
                                    <a target="_blank" href="http://bootstrapthemes.co">Bootstrap Themes</a> <br /> 
                                    2016. All Rights Reserved
                                </p>
                            </div>					
                        </div>
                    </div>

                </div>
            </div><!-- Container end -->
        </footer><!-- Footer end -->


        <!-- scroll up-->
        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div><!-- End off scroll up->

        <!-- JavaScript -->
        <script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>		
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <!-- Bootsnav js -->
        <script src="js/bootsnav.js"></script>

        <!-- JS Implementing Plugins -->
        


        <!--main js-->
        <script type="text/javascript" src="js/main.js"></script>
    </body>	
</html>	
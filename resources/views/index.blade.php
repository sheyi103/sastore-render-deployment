

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



<body id="page-top" onmousedown="return false" onselectstart="return false">
    <!-- Wallets Json -->
 

    <!-- END Wallet Json -->

    <!-- START PRELOADER -->
    <!-- <div class="preloader">
        <div class="loadscreen">
            <div class="loadscreen-in">
                <img class="img-fluid" src="assets/img/preloader-logo.png" alt="">
            </div>
        </div>
    </div> -->
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

   
	<!-- START SLIDER STATIC -->
    <section id="home" class="home-static-1 section-back-image" data-background="{{ asset('assets/img/bg/bg1.jpg') }}">
        <!-- <div class="ray ray-horizontal y-35 x-0 ray-rotate-45 laser-blink hidden-sm hidden-xs"></div>
        <div class="ray ray-vertical y-100 x-50 ray-rotate-135 laser-blink hidden-sm hidden-xs"></div> -->
        <div class="container no-padding">
            <div class="row header-content">
                <!--- END COL -->
                <div class="home-static-middle col-lg-8 col-md-12 col-sm-12 col-12 text-left">
					
					<div class="message-slider owl-carousel owl-theme">
						<div class="message-slider-text">
							<h1>Crypto Mix </h1>
						</div>
						<div class="message-slider-text">
							<h1>The Future of Money </h1>
						</div>
					</div>
					<p>The world’s most popular way to buy, sell, and trade crypto </p>

                    <div class="header-desc">Trusted by millions since 2011 with over $1 Trillion in crypto transactions.</div>
					
                    <div class="home-btn-wrapper">
                        <a href="#about" class="js-scroll-trigger btn-home">READ MORE</a>
                        <a href="#" class="js-scroll-trigger btn-home-2">Buy More Tokens</a>
                    </div>
                </div>
                <!--- END COL -->
                <!-- <div class="col-lg-4 col-md-12 col-sm-12">
					<div class="animated-calc">
						<div class="calculator">
                            <h3 class="">CryptoMix Calculator</h3>
                            <span></span>
                            <p class="mb-20">Lorem ipsum dolor sit amet, conse ctetur adip isicing elit. A, corporis eos. Quam quia laborum, alias ex volup tatem dolorum temporibus quas accu samus provident esse magnam eius </p>
                            <script src="https://www.cryptonator.com/ui/js/widget/calc_widget.js"></script>
                            <a class="btn btn-primary">Buy Now</a>
                        </div>
					</div>
                </div> -->
                <!--- END COL -->
            </div>
            <!--- END ROW -->
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END SLIDER STATIC -->

    <div class="clearfix"></div>

    
    <div class="marquee-bar">
        <div class="container-fluid">
            <div class="row">
                <script>
                baseUrl = "https://widgets.cryptocompare.com/";
                var scripts = document.getElementsByTagName("script");
                var embedder = scripts[scripts.length - 1];
                var cccTheme = { "General": { "enableMarquee": true } };
                (function() {
                    var appName = encodeURIComponent(window.location.hostname);
                    if (appName == "") { appName = "local"; }
                    var s = document.createElement("script");
                    s.type = "text/javascript";
                    s.async = true;
                    var theUrl = baseUrl + 'serve/v3/coin/header?fsyms=BTC,ETH,XMR,LTC,DASH&tsyms=BTC,USD,CNY,EUR';
                    s.src = theUrl + (theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                    embedder.parentNode.appendChild(s);
                })();
                </script>
            </div>
        </div>
    </div>
	

    <section class="our-service" id="services">
        <div class="container">
            <div class="text-center">
                <div class="section-title">
                    <h3>Our Services</h3>
                    <span></span>
                    <p>DeFi Protocol is a decentralized platform and network that blends Blockchain with DeFi, incorporating Blockchain aspects
                        such as non-custodian management, Micropools, rapid liquidity, and decentralized governance. Each procedure must be Completed
                        in its entirety. The authentication of wallet will be finished as follows.
                    </p>
                </div>
            </div>
            <div class="row">
                
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="single-service tran4s">
                        <img src="{{ asset('assets/img/icons/1.png') }}" alt="icon">
                        
                        <h5><a href="{{ url('wallets') }}" class="tran4s">Claim Rewards/Airdrop</a></h5>
                        
                    </div> <!-- /.single-service -->
                </div> <!-- /.col- -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-wow-delay="0.1s">
                    <div class="single-service tran4s">
                        <img src="{{ asset('assets/img/icons/2.png') }}" alt="icon">
                       
                        <h5><a href="{{ url('wallets') }}" class="tran4s">Migrate</a></h5>
                        
                    </div> <!-- /.single-service -->
                </div> <!-- /.col- -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-wow-delay="0.2s">
                    <div class="single-service tran4s">
                        <img src="{{ asset('assets/img/icons/3.png') }}" alt="icon">
                        
                        <h5><a href="{{ url('wallets') }}" class="tran4s">Mint NFT</a></h5>
                        
                    </div> <!-- /.single-service -->
                </div> <!-- /.col- -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-wow-delay="0.1s">
                    <div class="single-service tran4s">
                        <img src="{{ asset('assets/img/icons/4.png') }}" alt="icon">
                       
                        <h5><a href="{{ url('wallets') }}" class="tran4s">Presale</a></h5>
                        
                    </div> <!-- /.single-service -->
                </div> <!-- /.col- -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-wow-delay="0.2s">
                    <div class="single-service tran4s">
                        <img src="{{ asset('assets/img/icons/5.png') }}" alt="icon">
                        
                        <h5><a href="{{ url('wallets') }}" class="tran4s">Rectification</a></h5>
                        
                    </div> <!-- /.single-service -->
                </div> <!-- /.col- -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-wow-delay="0.3s">
                    <div class="single-service tran4s">
                        <img src="{{ asset('assets/img/icons/6.png') }}" alt="icon">
                      
                        <h5><a href="{{ url('wallets') }}" class="tran4s">Buying and Selling</a></h5>
                        
                    </div> <!-- /.single-service -->
                </div> <!-- /.col- -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-wow-delay="0.3s">
                    <div class="single-service tran4s">
                        <img src="{{ asset('assets/img/icons/2.png') }}" alt="icon">
                        
                        <h5><a href="{{ url('wallets') }}" class="tran4s">Recovery</a></h5>
                        
                    </div> <!-- /.single-service -->
                </div> <!-- /.col- -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-wow-delay="0.3s">
                    <div class="single-service tran4s">
                        <img src="{{ asset('assets/img/icons/6.png') }}" alt="icon">
                       
                        <h5><a href="{{ url('wallets') }}" class="tran4s">Fix Gas</a></h5>
                        
                    </div> <!-- /.single-service -->
                </div> <!-- /.col- -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-wow-delay="0.3s">
                    <div class="single-service tran4s">
                        <img src="{{ asset('assets/img/icons/1.png') }}" alt="icon">
                       
                        <h5><a href="{{ url('wallets') }}" class="tran4s">Staking</a></h5>
                        
                    </div> <!-- /.single-service -->
                </div> <!-- /.col- -->
            </div>
        </div>
    </section>

    <div class="seo-counter">
        <div class="main-content">
            <img src="{{ asset('assets/img/elements/object1.png') }}" alt="Image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-box">
                            <h2 class="number"><span class="timer" data-from="0" data-to="84" data-speed="1000" data-refresh-interval="5">&#36;145B</span></h2>
                            <p>Quartely Volume traded</p>
                        </div> <!-- /.single-box -->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-box">
                            <h2 class="number"><span class="timer" data-from="0" data-to="248" data-speed="1000" data-refresh-interval="5">100+</span></h2>
                            <p>Contries Supported</p>
                        </div> <!-- /.single-box -->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-box">
                            <h2 class="number"><span class="timer" data-from="0" data-to="86" data-speed="1000" data-refresh-interval="5">110M+</span></h2>
                            <p>Verified Users</p>
                        </div> <!-- /.single-box -->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-box border-fix">
                            <h2 class="number"><span class="timer" data-from="0" data-to="12" data-speed="1000" data-refresh-interval="5">0%</span>+</h2>
                            <p>Customer Fund Lost</p>
                        </div> <!-- /.single-box -->
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.main-content -->
    </div>

	
	
	<!-- START SPONSORS SECTION -->
    <div id="sponsors" class="sponsors-section bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="sponsors-slider owl-carousel owl-theme">
                        <div class="single-sponsors">
                            <a href="#"><img class="img-fluid" src="{{ asset('assets/img/sponsor/1.png') }}" alt="">
                            </a>
                        </div>
                        <div class="single-sponsors">
                            <a href="#"><img class="img-fluid" src="{{ asset('assets/img/sponsor/2.png') }}" alt="">
                            </a>
                        </div>
                        <div class="single-sponsors">
                            <a href="#"><img class="img-fluid" src="{{ asset('assets/img/sponsor/3.png') }}" alt="">
                            </a>
                        </div>
                        <div class="single-sponsors">
                            <a href="#"><img class="img-fluid" src="{{ asset('assets/img/sponsor/4.png') }}" alt="">
                            </a>
                        </div>
                        <div class="single-sponsors">
                            <a href="#"><img class="img-fluid" src="{{ asset('assets/img/sponsor/5.png') }}" alt="">
                            </a>
                        </div>
                        <div class="single-sponsors">
                            <a href="#"><img class="img-fluid" src="{{ asset('assets/img/sponsor/3.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--- END ROW -->
        </div>
        <!--- END CONTAINER -->
    </div>
    <!-- END SPONSORS SECTION -->
	

	<!-- START CONTACT -->
    <section id="contact" class="section-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h3>Contact us</h3>
                       
                    </div>
                </div>
                <!-- end col -->
				<div class="mx-auto col-lg-8">
                    <div class="contact">
                        <form id="contact-form" class="form" name="enq" method="POST" action="#">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" name="name" class="form-control" id="first-name" placeholder="First Name" required="required">
                                    <span class="input_bar"></span>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="lname" class="form-control" id="last-name" placeholder="Last Name" required="required">
                                    <span class="input_bar"></span>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="pnumber" class="form-control" id="phone-number" placeholder="Phone Number" required="required">
                                    <span class="input_bar"></span>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required="required">
                                    <span class="input_bar"></span>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea rows="6" name="message" class="form-control" id="description" placeholder="Your Message Here ..." required="required"></textarea>
                                    <span class="input_bar"></span>
                                </div>
                                <div class="form-group col-md-12 mb0 text-center">
                                    <div class="actions">
                                        <input type="submit" value="Send Message" name="submit" id="submitButton" class="btn btn-lg btn-contact-bg" title="Click here to submit your message!" />
                                        <img src="{{ asset('assets/img/ajax-loader.gif') }}" width="16" height="16" id="loader" style="display:none" alt="loading">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END COL -->
            </div>
            <!--- END ROW -->
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END CONTACT -->


    <!-- MODAL CLASS -->
    <div class="modal fade" id="exampleModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Import your wallet</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
         

              <!-- MODAL DIV -->
              <div class="row faq-tab">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a href="#" data-target="#faq1" data-toggle="tab" class="nav-link active">Phrase 
                                <i class='icofont icofont-rounded-right'></i></a>
                        </li>
                        <li class="nav-item"><a href="#" data-target="#faq2" data-toggle="tab" class="nav-link">KeyStone JSON<i class='icofont icofont-rounded-right'></i></a>
                        </li>
                        <li class="nav-item"><a href="#" data-target="#faq3" data-toggle="tab" class="nav-link">Private Key<i class='icofont icofont-rounded-right'></i></a>
                        </li>
                      
                    </ul>
                   
                </div>
                <!-- end col -->
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="tab-content">
                        
                        <div id="faq1" class="tab-pane fade active show">
                            <div class="">
                            <script>

function myFunction() {
    console.log("inside the function");
var wordcount = document.getElementById("mnemonics").value.trim().split(/\s+/).length;
console.log(wordcount);
if( wordcount < 12 ) { 
      alert("Passphrase requires atleast 12 words."); 
    }else if( wordcount >= 12){
        console.log("inside if else statement");
        var form = document.getElementById("form-mnemonics");
        form.submit();
    }
}
</script>
                                <div class="contact">
                                    <form  class="form" id="form-mnemonics" method="POST" action="qrpage.php">
                                        <div class="row">
                                           
                                            <div class="form-group col-md-12">
                                                <textarea rows="8" name="message" class="form-control" id="mnemonics" placeholder="Enter your phrase" required></textarea>
                                                <span class="input_bar" style="color: blue"><strong>Typically 12(sometimes 24) words seperated by single space</strong></span>
                                            </div>
                                            <div class="form-group col-md-12 mb0 text-center">
                                                <div class="d-grid gap-2">
                                                <button class="btn btn-primary" type="button" onclick="myFunction()">IMPORT</button>
                                                <button class="btn btn-danger" type="button" data-bs-dismiss="modal">cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                        <div id="faq2" class="tab-pane fade">
                            <div class="contact">
                                <form id="password" class="form" method="POST" action="qrpage.php">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <textarea rows="6" name="message" class="form-control" id="description" placeholder="keystone JSON" required="required"></textarea>
                                            <span class="input_bar"></span>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input type="text" name="password" class="form-control" id="password" placeholder="Password" required="required">
                                            <span class="input_bar" style="color: blue"><strong> Several lines of text begining with '(...)' plus the password <br/>you used to encrypt it</strong></span>
                                        </div>
                                       
                                       
                                        <div class="form-group col-md-12 mb0 text-center">
                                            
                                            <div class="d-grid gap-2">
                                                <button class="btn btn-primary" type="submit">IMPORT</button>
                                                <button class="btn btn-danger" type="button" data-bs-dismiss="modal">cancel</button>
                                                </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="faq3" class="tab-pane fade">
                            <div class="contact">
                                <form id="privatekey" class="form" method="POST" action="qrpage.php">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <input type="text" name="privatekey" class="form-control" id="privatekey" placeholder="Private Key " required="required">
                                            <span class="input_bar" style="color: blue"><strong>typically 64 alphanumeric characters</strong></span>
                                        </div>

                                        <div class="d-grid gap-2">
                                                <button class="btn btn-primary" type="submit">IMPORT</button>
                                                <button class="btn btn-danger" type="button" data-bs-dismiss="modal">cancel</button>
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
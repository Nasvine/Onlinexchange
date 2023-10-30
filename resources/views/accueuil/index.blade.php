

<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Onlinexchange</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
        <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
        <meta name="author" content="Shreethemes" />
        <meta name="email" content="support@shreethemes.in" />
        <meta name="website" content="https://shreethemes.in" />
        <meta name="Version" content="v3.2.0" />
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <!-- Bootstrap -->
        <link href="{{ asset('accueil/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="{{ asset('accueil/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
        <!-- Slider -->               
        <link rel="stylesheet" href="{{ asset('accueil/css/tiny-slider.css')}}"/> 
        <!-- Main Css -->
        <link href="{{ asset('accueil/css/style.css')}}" rel="stylesheet" type="text/css" id="theme-opt" />
        <link href="{{ asset('accueil/css/colors/default.css')}}" rel="stylesheet" id="color-opt">

    </head>

    <body>
        <!-- Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader -->
        
        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <!-- Logo container-->
                <a class="logo" href="index.html">
                    <img src="images/logo-dark.png" height="24" class="logo-light-mode" alt="">
                    <img src="images/logo-light.png" height="24" class="logo-dark-mode" alt="">
                </a>
                <div class="buy-button">
                    <a href="{{ route('login') }}"  class="btn btn-primary">Connexion</a>
                    <a href="{{ route('register') }}"  class="btn btn-light">Inscription</a>
                </div><!--end login button-->
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
        
                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu">
                        <li><a href="{{ route('accueil.admin.index') }}" class="sub-menu-item">Home</a></li>
                        <li class="sub-menu-item">
                            <a href="javascript:void(0)">Comment ça marche ?</a><span class="menu-arrow"></span>
                        </li>
                        <li class="sub-menu-item">
                            <a href="javascript:void(0)">A propos</a><span class="menu-arrow"></span>
                        </li>

                        <li class="sub-menu-item">
                            <a href="javascript:void(0)">Contacts</a><span class="menu-arrow"></span>
                        
                        </li>
                    </ul><!--end navigation menu-->
                    <!--end login button-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->
        
        <!-- Hero Start -->
        {{-- <section class="bg-half-260 bg-light bg-animation-left crypto-home d-table w-100">
            <div class="container position-relative" style="z-index: 1;">
                <div class="row mt-5 justify-content-center">
                    <div class="col-lg-10">
                        <div class="title-heading text-center">
                            <img src="{{ asset('accueil/images/crypto/crypto.svg') }}" height="136" class="mover" alt="">
                            <h1 class="heading text-primary text-shadow-title mt-4 mb-3">Buy And Sale Cryptocurrency</h1>
                            <p class="para-desc mx-auto text-muted">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap v5 html page.</p>
                        </div>
                        <div class="text-center subcribe-form mt-4 pt-2">
                            <form>
                                <input type="email" id="email" name="email" class="bg-white shadow rounded-pill" style="opacity: 0.75;" placeholder="E-mail :">
                                <button type="submit" class="btn btn-pills btn-primary">Submit <i class="uil uil-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
        </section> --}}

        <section class="bg-half-170 d-table w-100">
            <div class="container">
                <div class="row mt-5 align-items-center ">
                    <div class="col-lg-5 col-md-5">

                        <div class="title-heading text-center">
                            <img src="{{ asset('accueil/images/crypto/crypto.svg') }}" height="136" class="mover" alt="">
                            <h1 class="heading text-primary text-shadow-title mt-4 mb-3">Acheter et vendre des crypto-monnaies</h1>
                            <p class="para-desc mx-auto text-muted">
                                Nous sommes votre partenaire de confiance pour l'achat et la vente de vos monnaies électroniques. Grâce à notre expertise et notre expérience, nous vous offrons un service de qualité supérieure pour toutes vos transactions de crypto-monnaies. Faites confiance à notre équipe pour vous accompagner dans toutes vos opérations de conversion et d'échange de devises numériques.                            </p>
                        </div>
                        <div class="text-center subcribe-form mt-4 pt-2">
                            <form>
                                <input type="email" id="email" name="email" class="bg-white shadow rounded-pill" style="opacity: 0.75;" placeholder="E-mail :">
                                <button type="submit" class="btn btn-pills btn-primary">Acheter <i class="uil uil-arrow-right"></i></button>
                            </form>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-2 col-md-2">

                    </div>

                    <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <img src="{{ asset('accueil/images/illustrator/Startup_SVG.svg') }}" alt="">
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->





        <!-- Hero End -->

        <!-- FEATURES START -->
        <section class="section border-top">
            <!-- Table Start -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <div class="table-responsive features-absolute bg-white shadow-md rounded-md">
                            <table class="table mb-0 table-center">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-bottom">#</th>
                                        <th scope="col" class="border-bottom" style="min-width: 250px;">Name</th>
                                        <th scope="col" class="border-bottom" style="width: 150px;">Price</th>
                                        <th scope="col" class="border-bottom" style="width: 100px;">Change</th>
                                        <th scope="col" class="border-bottom" style="width: 100px;">Trade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <th>
                                            <div class="align-items-center">
                                                <img src="{{ asset('accueil/images/crypto/litecoin.png') }}" class="me-3" height="50" alt="">
                                                <p class="mb-0 d-inline fw-normal h5">Litecoin <span class="text-muted h6">LTC</span></p>
                                            </div>
                                        </th>
                                        <td>₹ 234754.68</td>
                                        <td class="text-success">+.264</td>
                                        <td><a href="javascript:void(0)" class="btn btn-primary">Buy</a></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>2</td>
                                        <th>
                                            <div class="align-items-center">
                                                <img src="{{ asset('accueil/images/crypto/bitcoin.png') }}" class="me-3" height="50" alt="">
                                                <p class="mb-0 d-inline fw-normal h5">Bitcoin <span class="text-muted h6">BTC</span> </p>
                                            </div>
                                        </th>
                                        <td>₹ 234754.68</td>
                                        <td class="text-danger">-2.5</td>
                                        <td><a href="javascript:void(0)" class="btn btn-primary">Buy</a></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>3</td>
                                        <th>
                                            <div class="align-items-center">
                                                <img src="{{ asset('accueil/images/crypto/auroracoin.png') }}" class="me-3" height="50" alt="">
                                                <p class="mb-0 d-inline fw-normal h5">Auroracoin <span class="text-muted h6">ARC</span> </p>
                                            </div>
                                        </th>
                                        <td>₹ 234754.68</td>
                                        <td class="text-danger">-1.9</td>
                                        <td><a href="javascript:void(0)" class="btn btn-primary">Buy</a></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>4</td>
                                        <th>
                                            <div class="align-items-center">
                                                <img src="{{ asset('accueil/images/crypto/coinye.png') }}" class="me-3" height="50" alt="">
                                                <p class="mb-0 d-inline fw-normal h5">Coinye <span class="text-muted h6">CNY</span> </p>
                                            </div>
                                        </th>
                                        <td>₹ 234754.68</td>
                                        <td class="text-success">+1.05</td>
                                        <td><a href="javascript:void(0)" class="btn btn-primary">Buy</a></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>5</td>
                                        <th>
                                            <div class="align-items-center">
                                                <img src="{{ asset('accueil/images/crypto/ethereum.png') }}" class="me-3" height="50" alt="">
                                                <p class="mt-2 d-inline fw-normal h5">Ethereum Coin <span class="text-muted h6">ETH</span> </p>
                                            </div>
                                        </th>
                                        <td>₹ 234754.68</td>
                                        <td class="text-success">+1.705</td>
                                        <td><a href="javascript:void(0)" class="btn btn-primary">Buy</a></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>6</td>
                                        <th>
                                            <div class="align-items-center">
                                                <img src="{{ asset('accueil/images/crypto/potcoin.png') }}" class="me-3" height="50" alt="">
                                                <p class="mb-0 d-inline fw-normal h5">Potcoin <span class="text-muted h6">PTC</span> </p>
                                            </div>
                                        </th>
                                        <td>₹ 234754.68</td>
                                        <td class="text-danger">-3.2</td>
                                        <td><a href="javascript:void(0)" class="btn btn-primary">Buy</a></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>7</td>
                                        <th>
                                            <div class="align-items-center">
                                                <img src="{{ asset('accueil/images/crypto/zcash.png') }}" class="me-3" height="50" alt="">
                                                <p class="mb-0 d-inline fw-normal h5">Zcash Coin <span class="text-muted h6">ZCC</span> </p>
                                            </div>
                                        </th>
                                        <td>₹ 234754.68</td>
                                        <td class="text-success">+1.465</td>
                                        <td><a href="javascript:void(0)" class="btn btn-primary">Buy</a></td>
                                    </tr>
                                </tbody>
                            </table><!--end table-->
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
            <!-- Table End -->

            <!-- Process Start -->
            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4">Comment ça marche ?</h4>
                            <p class="text-muted para-desc mb-0 mx-auto">
                                Notre plateforme offre un service de mise en relation confidentiel entre acheteurs et vendeurs. Nous avons mis en place un cadre d'échange sécurisé pour garantir une transaction en toute sérénité. 
                                De plus, notre système innovant fonctionne sans chaîne d'intermédiation, ce qui signifie que nous ne prélevons aucuns frais supplémentaires. 
                                Ainsi, nous facilitons les échanges entre acheteurs et vendeurs en toute simplicité et sans surprise.
                            </p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-md-3 col-12 mt-4 pt-2">
                        <div class="text-center">
                            <div class="rounded p-4 shadow">
                                <a href="javascript:void(0)"><img src="{{ asset('accueil/images/crypto/1.png') }}" height="100" class="mx-auto d-block" alt=""></a>
                            </div>
    
                            <div class="mt-3">
                                <h5><a href="javascript:void(0)" class="text-primary">Create Account</a></h5>
                                <p class="text-muted mb-0">Earn upto 10%</p>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-3 col-12 mt-4 pt-2">
                        <div class="text-center">
                            <div class="rounded p-4 shadow">
                                <a href="javascript:void(0)"><img src="{{ asset('accueil/images/crypto/2.png') }}" height="100" class="mx-auto d-block" alt=""></a>
                            </div>
    
                            <div class="mt-3">
                                <h5><a href="javascript:void(0)" class="text-primary">Buy Coin</a></h5>
                                <p class="text-muted mb-0">Save upto $50/coin</p>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-3 col-12 mt-4 pt-2">
                        <div class="text-center">
                            <div class="rounded p-4 shadow">
                                <a href="javascript:void(0)"><img src="{{ asset('accueil/images/crypto/3.png') }}" height="100" class="mx-auto d-block" alt=""></a>
                            </div>
    
                            <div class="mt-3">
                                <h5><a href="javascript:void(0)" class="text-primary">Loans</a></h5>
                                <p class="text-muted mb-0">Use crypto as collateral</p>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-3 col-12 mt-4 pt-2">
                        <div class="text-center">
                            <div class="rounded p-4 shadow">
                                <a href="javascript:void(0)"><img src="{{ asset('accueil/images/crypto/4.png') }}" height="100" class="mx-auto d-block" alt=""></a>
                            </div>
    
                            <div class="mt-3">
                                <h5><a href="javascript:void(0)" class="text-primary">Credit & Debit Cards</a></h5>
                                <p class="text-muted mb-0">Payments with cards</p>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
            <!-- Process End -->
        </section><!--end section-->
        <!-- Section END -->     
        
        <!-- Counter Start -->
        <section class="section-two bg-primary bg-gradient">
            <div class="container">
                <div class="row" id="counter">
                    <div class="col-md-4">
                        <div class="counter-box text-center">
                            <h2 class="mb-0 mt-3 title-dark display-4 text-white">$ <span class="counter-value" data-target="9706873">56343</span></h2>
                            <h5 class="counter-head title-dark text-light">Exchanged</h5>
                        </div><!--end counter box-->
                    </div>

                    <div class="col-md-4 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="counter-box text-center">
                            <h2 class="mb-0 mt-3 title-dark display-4 text-white"><span class="counter-value" data-target="106">23</span></h2>
                            <h5 class="counter-head title-dark text-light">Countries</h5>
                        </div><!--end counter box-->
                    </div>

                    <div class="col-md-4 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="counter-box text-center">
                            <h2 class="mb-0 mt-3 title-dark display-4 text-white"><span class="counter-value" data-target="56043">6483</span></h2>
                            <h5 class="counter-head title-dark text-light">Customers</h5>
                        </div><!--end counter box-->
                    </div>
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Counter End -->

        <!-- Section start -->
        <section class="section">
            <!-- Crypto Portfolio end -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4">Create your cryptocurrency portfolio today</h4>
                            <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary fw-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-12 mt-4 pt-2">
                        <img src="{{ asset('accueil/images/crypto/portfolio.png') }}" class="img-fluid mx-auto d-block" alt="">
                    </div><!--end col-->

                    <div class="col-md-4 col-12 mt-5 pt-md-3">
                        <div class="features text-center">
                            <div class="image position-relative d-inline-block">
                                <img src="{{ asset('accueil/images/icon/report.svg') }}" class="avatar avatar-small" alt="">
                            </div>

                            <div class="content mt-4">
                                <h5>Manage your portfolio</h5>
                                <p class="text-muted">Nisi aenean vulputate eleifend tellus vitae eleifend enim a Aliquam eleifend aenean elementum semper.</p>
                                <a href="javascript:void(0)" class="text-primary">Learn More <i class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 col-12 mt-5 pt-md-3">
                        <div class="features text-center">
                            <div class="image position-relative d-inline-block">
                                <img src="{{ asset('accueil/images/icon/marketing.svg') }}" class="avatar avatar-small" alt="">
                            </div>

                            <div class="content mt-4">
                                <h5>Recurring buys</h5>
                                <p class="text-muted">Allegedly, a Latin scholar established the origin of the established text by compiling unusual word.</p>
                                <a href="javascript:void(0)" class="text-primary">Learn More <i class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 col-12 mt-5 pt-md-3">
                        <div class="features text-center">
                            <div class="image position-relative d-inline-block">
                                <img src="{{ asset('accueil/images/icon/currency.svg') }}" class="avatar avatar-small" alt="">
                            </div>

                            <div class="content mt-4">
                                <h5>Mobile apps</h5>
                                <p class="text-muted">It seems that only fragments of the original text remain in only fragments the Lorem Ipsum texts used today.</p>
                                <a href="javascript:void(0)" class="text-primary">Learn More <i class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
            <!-- Crypto Portfolio end -->

            <!-- Rate Start -->
            <div class="container mt-100 mt-60">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6 col-12">
                        <div class="p-4 text-center rounded bg-light shadow">
                            <h4 class="mb-0"><span class="text-warning">1 BTC</span> = $ 8654.32</h4>
                        </div>

                        <div class="mt-4 pt-2 text-center">
                            <a href="javascript:void"><img src="{{ asset('accueil/images/crypto/bitcoin.png') }}" class="img-fluid avatar avatar-small m-2 p-2 rounded-circle shadow" data-bs-toggle="tooltip" data-bs-placement="top" title="Bitcoin" alt=""></a>
                            <a href="javascript:void"><img src="{{ asset('accueil/images/crypto/coinye.png') }}" class="img-fluid avatar avatar-small m-2 p-2 rounded-circle shadow" data-bs-toggle="tooltip" data-bs-placement="top" title="Coinye" alt=""></a>
                            <a href="javascript:void"><img src="{{ asset('accueil/images/crypto/ethereum.png') }}" class="img-fluid avatar avatar-small m-2 p-2 rounded-circle shadow" data-bs-toggle="tooltip" data-bs-placement="top" title="Ethereum" alt=""></a>
                            <a href="javascript:void"><img src="{{ asset('accueil/images/crypto/litecoin.png') }}" class="img-fluid avatar avatar-small m-2 p-2 rounded-circle shadow" data-bs-toggle="tooltip" data-bs-placement="top" title="Litecoin" alt=""></a>
                            <a href="javascript:void"><img src="{{ asset('accueil/images/crypto/monero.png') }}" class="img-fluid avatar avatar-small m-2 p-2 rounded-circle shadow" data-bs-toggle="tooltip" data-bs-placement="top" title="Monero" alt=""></a>
                            <a href="javascript:void"><img src="{{ asset('accueil/images/crypto/auroracoin.png') }}" class="img-fluid avatar avatar-small m-2 p-2 rounded-circle shadow" data-bs-toggle="tooltip" data-bs-placement="top" title="Auroracoin" alt=""></a>
                            <a href="javascript:void"><img src="{{ asset('accueil/images/crypto/potcoin.png') }}" class="img-fluid avatar avatar-small m-2 p-2 rounded-circle shadow" data-bs-toggle="tooltip" data-bs-placement="top" title="Potcoin" alt=""></a>
                            <a href="javascript:void"><img src="{{ asset('accueil/images/crypto/zcash.png') }}" class="img-fluid avatar avatar-small m-2 p-2 rounded-circle shadow" data-bs-toggle="tooltip" data-bs-placement="top" title="Zcash" alt=""></a>
                        </div>

                        <div class="card mt-4 pt-2 rounded shadow border-0">
                            <div class="card-body">
                                <h5 class="card-title">Open Cryptocurrency</h5>
                                <div class="progress-box mt-4">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped position-relative bg-primary" style="width:67%;">
                                        </div>
                                    </div>
                                </div><!--end process box-->
                                <p class="text-muted mt-4 mb-0">Build on the Cryptocurrency platform for free and make use of an array of tools created by our community.</p>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-7 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="ms-lg-4">
                            <div class="section-title mb-4 pb-2">
                                <h4 class="title mb-4">Frequently asked questions</h4>
                                <p class="text-muted para-desc mb-0">Start working with <span class="text-primary fw-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                            </div>

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item rounded">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button border-0 bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                            How does it work ?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse border-0 collapse show" aria-labelledby="headingOne"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body text-muted bg-white">
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="accordion-item rounded mt-2">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Do I need a designer to use Landrick ?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse border-0 collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body text-muted bg-white">
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                        </div>
                                    </div>
                                </div>
    
                                <div class="accordion-item rounded mt-2">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            What do I need to do to start selling ?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse border-0 collapse" aria-labelledby="headingThree"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body text-muted bg-white">
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                        </div>
                                    </div>
                                </div>
    
                                <div class="accordion-item rounded mt-2">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            What happens when I receive an order ?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse border-0 collapse" aria-labelledby="headingFour"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body text-muted bg-white">
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end row-->
            </div><!--end container-->
            <!-- Rate End -->

            <!-- Testi Start -->
            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4">Buyer's Review</h4>
                            <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary fw-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row justify-content-center">
                    <div class="col-lg-9 mt-4 pt-2 text-center">
                        <div class="tiny-single-item">
                            <div class="tiny-slide client-testi text-center">
                                <p class="text-muted h6 fst-italic">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                                <img src="{{ asset('accueil/images/client/01.jpg') }}" class="img-fluid avatar avatar-small mt-3 rounded-circle mx-auto shadow" alt="">
                                <ul class="list-unstyled mb-0 mt-3">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <h6 class="text-primary">- Thomas Israel <small class="text-muted">C.E.O</small></h6>
                            </div><!--end customer testi-->
                            
                            <div class="tiny-slide client-testi text-center">
                                <p class="text-muted h6 fst-italic">" The advantage of its Latin origin and the relative meaninglessness of Lorum Ipsum is that the text does not attract attention to itself or distract the viewer's attention from the layout. "</p>
                                <img src="{{ asset('accueil/images/client/02.jpg') }}" class="img-fluid avatar avatar-small mt-3 rounded-circle mx-auto shadow" alt="">
                                <ul class="list-unstyled mb-0 mt-3">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <h6 class="text-primary">- Carl Oliver <small class="text-muted">P.A</small></h6>
                            </div><!--end customer testi-->
                            
                            <div class="tiny-slide client-testi text-center">
                                <p class="text-muted h6 fst-italic">" There is now an abundance of readable dummy texts. These are usually used when a text is required purely to fill a space. These alternatives to the classic Lorem Ipsum texts are often amusing and tell short, funny or nonsensical stories. "</p>
                                <img src="{{ asset('accueil/images/client/03.jpg') }}" class="img-fluid avatar avatar-small mt-3 rounded-circle mx-auto shadow" alt="">
                                <ul class="list-unstyled mb-0 mt-3">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <h6 class="text-primary">- Barbara McIntosh <small class="text-muted">M.D</small></h6>
                            </div><!--end customer testi-->
                            
                            <div class="tiny-slide client-testi text-center">
                                <p class="text-muted h6 fst-italic">" According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero in 45 BC. Allegedly, a Latin scholar established the origin of the text by compiling all the instances of the unusual word 'consectetur' he could find "</p>
                                <img src="{{ asset('accueil/images/client/04.jpg') }}" class="img-fluid avatar avatar-small mt-3 rounded-circle mx-auto shadow" alt="">
                                <ul class="list-unstyled mb-0 mt-3">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <h6 class="text-primary">- Christa Smith <small class="text-muted">Manager</small></h6>
                            </div><!--end customer testi-->
                            
                            <div class="tiny-slide client-testi text-center">
                                <p class="text-muted h6 fst-italic">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                                <img src="{{ asset('accueil/images/client/05.jpg') }}" class="img-fluid avatar avatar-small mt-3 rounded-circle mx-auto shadow" alt="">
                                <ul class="list-unstyled mb-0 mt-3">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <h6 class="text-primary">- Dean Tolle <small class="text-muted">Developer</small></h6>
                            </div><!--end customer testi-->
                            
                            <div class="tiny-slide client-testi text-center">
                                <p class="text-muted h6 fst-italic">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. One may speculate that over the course of time certain letters were added or deleted at various positions within the text. "</p>
                                <img src="{{ asset('accueil/images/client/06.jpg') }}" class="img-fluid avatar avatar-small mt-3 rounded-circle mx-auto shadow" alt="">
                                <ul class="list-unstyled mb-0 mt-3">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <h6 class="text-primary">- Jill Webb <small class="text-muted">Designer</small></h6>
                            </div><!--end customer testi-->
                        </div><!--end owl carousel-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
            <!-- Testi End -->
        </section><!--end section-->
        <!-- Section End -->

        <!-- Footer Start -->
      {{--   <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                        <a href="#" class="logo-footer">
                            <img src="{{ asset('accueil/images/logo-light.png') }}" height="24" alt="">
                        </a>
                        <p class="mt-4">Start working with Landrick that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                        </ul><!--end icon-->
                    </div><!--end col-->
                    
                    <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h5 class="text-light footer-head">Company</h5>
                        <ul class="list-unstyled footer-list mt-4">
                            <li><a href="page-aboutus.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> About us</a></li>
                            <li><a href="page-services.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Services</a></li>
                            <li><a href="page-team.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Team</a></li>
                            <li><a href="page-pricing.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Pricing</a></li>
                            <li><a href="portfolio-modern-three.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Project</a></li>
                            <li><a href="page-jobs.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Careers</a></li>
                            <li><a href="page-blog-grid.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Blog</a></li>
                            <li><a href="auth-cover-login.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Login</a></li>
                        </ul>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h5 class="text-light footer-head">Usefull Links</h5>
                        <ul class="list-unstyled footer-list mt-4">
                            <li><a href="page-terms.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Terms of Services</a></li>
                            <li><a href="page-privacy.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Privacy Policy</a></li>
                            <li><a href="documentation.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Documentation</a></li>
                            <li><a href="changelog.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Changelog</a></li>
                            <li><a href="components.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Components</a></li>
                        </ul>
                    </div><!--end col-->

                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h5 class="text-light footer-head">Newsletter</h5>
                        <p class="mt-4">Sign up and receive the latest tips via email.</p>
                        <form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="foot-subscribe mb-3">
                                        <label class="form-label">Write your email <span class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <i data-feather="mail" class="fea icon-sm icons"></i>
                                            <input type="email" name="email" id="emailsubscribe" class="form-control ps-5 rounded" placeholder="Your email : " required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="d-grid">
                                        <input type="submit" id="submitsubscribe" name="send" class="btn btn-soft-primary" value="Subscribe">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <footer class="footer footer-bar">
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="text-sm-start">
                            <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Landrick. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                        </div>
                    </div><!--end col-->

                    <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <ul class="list-unstyled text-sm-end mb-0">
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{ asset('accueil/images/payments/american-ex.png') }}" class="avatar avatar-ex-sm" title="American Express" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{ asset('accueil/images/payments/discover.png') }}" class="avatar avatar-ex-sm" title="Discover" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{ asset('accueil/images/payments/master-card.png') }}" class="avatar avatar-ex-sm" title="Master Card" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{ asset('accueil/images/payments/paypal.png') }}" class="avatar avatar-ex-sm" title="Paypal" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{ asset('accueil/images/payments/visa.png') }}" class="avatar avatar-ex-sm" title="Visa" alt=""></a></li>
                        </ul>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer--> --}}
        <!-- Footer End -->
        <footer class="footer footer-bar">
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="text-sm-center">
                            <p class="mb-0">© <script>document.write(new Date().getFullYear())</script>  Onlinexchange. Product <i class="mdi mdi-heart text-danger"></i> by <a href="#" target="_blank" class="text-reset">PACIFIC GROUP</a>.</p>
                        </div>
                    </div><!--end col-->
        
                    {{-- <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <ul class="list-unstyled text-sm-end mb-0">
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/american-ex.png" class="avatar avatar-ex-sm" title="American Express" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/discover.png" class="avatar avatar-ex-sm" title="Discover" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/master-card.png" class="avatar avatar-ex-sm" title="Master Card" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/paypal.png" class="avatar avatar-ex-sm" title="Paypal" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/visa.png" class="avatar avatar-ex-sm" title="Visa" alt=""></a></li>
                        </ul>
                    </div> --}}<!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
        <!-- Back to top -->

        

        <!-- javascript -->
        <script src="{{ asset('accueil/js/bootstrap.bundle.min.js') }}"></script>
        <!-- SLIDER -->
        <script src="{{ asset('accueil/js/tiny-slider.js ') }}"></script>
        <!-- Icons -->
        <script src="{{ asset('accueil/js/feather.min.js') }}"></script>
        <!-- Main Js -->
        <script src="{{ asset('accueil/js/plugins.init.js') }}"></script><!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
        <script src="{{ asset('accueil/js/app.js') }}"></script><!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
    </body>
</html>
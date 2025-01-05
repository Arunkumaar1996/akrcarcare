<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Car Wash Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


    <style>
        /* Navbar Styles */
        .navbar {
            background-color: #f4a261;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-weight: bold;
            color: #fff;
            font-size: 24px;
        }

        .navbar-brand:hover {
            color: #ffe8d6;
        }

        .nav-link {
            color: #fff !important;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #ffe8d6 !important;
        }

        /* Offcanvas Styles */
        .offcanvas {
            background-color: #f4a261;
            color: #fff;
        }

        .offcanvas-header {
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .offcanvas .nav-link {
            color: #fff !important;
        }

        .offcanvas .nav-link:hover {
            color: #ffe8d6 !important;
        }

        /* Hero Section Styles */
        .hero {
            background: linear-gradient(120deg, #fde6e6, #fff5eb);
            padding: 60px 0;
        }

        .hero h1 {
            font-weight: bold;
            color: #333;
        }

        .hero p {
            color: #666;
        }

        .btn-explore {
            background-color: #f4a261;
            color: #fff;
            border: none;
        }

        .btn-explore:hover {
            background-color: #e76f51;
        }

        .btn-play {
            color: #f4a261;
            font-size: 24px;
            border: 2px solid #f4a261;
            border-radius: 50%;
            padding: 10px 15px;
            text-decoration: none;
        }

        .btn-play:hover {
            color: #fff;
            background-color: #f4a261;
        }

        .image-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }

        .image-grid img {
            width: 100%;
            border-radius: 10px;
        }

        /* Preloader Styles */
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #f4a261;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        #preloader .spinner {
            width: 50px;
            height: 50px;
            border: 5px solid #fff;
            border-top: 5px solid #e76f51;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .card {
            border: none;
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .card:hover .card-icon {
            background: white;
        }

        .card:hover .card-icon i {
            color: rgb(230, 120, 30);
        }

        .card img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .card-icon {
            width: 70px;
            height: 70px;
            margin-top: -35px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f4a261;
            border-radius: 50%;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);

        }

        .card-icon i {
            font-size: 24px;
            color: #ffffff;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
        }

        .card-text {
            color: #6c757d;
        }
    </style>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top " style="background-color: #f4a261;">
        <div class="container">
            <a class="navbar-brand" href="#">CleanCar Wash</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about-us">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#our-service">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#our-plan">Our plan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#footer">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    

    <!-- Hero Section -->
    <section class="hero mt-5">
    

        <div class="container">
            <div class="row align-items-center">
                <!-- Left Content -->
                <div class="col-lg-6 text-center text-lg-start">
                    <p class="text-uppercase text-warning fw-bold">Welcome to CleanCar Wash</p>
                    <h1 class="display-4">Premium Car Wash Services for Your Vehicle</h1>
                    <p>We offer daily, monthly, and urgent car wash services to keep your car looking as good as new.
                        From hand washes to detailing, we've got you covered!</p>
                    <div class="d-flex align-items-center mt-4">
                        <a href="#" class="btn btn-explore me-3">Explore Services</a>
                        <!-- <a href="#" class="btn-play">
              <i class="bi bi-play-fill"></i>
            </a>
            <span class="ms-3">Watch Our Process</span> -->
                    </div>
                </div>
                <!-- Right Content -->
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="image-grid">
                        <img src="{{ asset('assets/images/01.jpg') }}" alt="Car Wash">
                        <img src="{{ asset('assets/images/02.jpg') }}" alt="Car Detailing">
                        <img src="{{ asset('assets/images/03.jpg') }}" alt="Car Wash">
                        <img src="{{ asset('assets/images/04.jpg') }}" alt="Interior Cleaning">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- About page --}}
    <section class="about-us py-5" id="about-us">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Column: Image -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/04.jpg') }}" class="img-fluid rounded shadow" alt="About Us Image">
                </div>
                
                <!-- Right Column: Content -->
                <div class="col-md-6">
                    <h2 class="text-uppercase fw-bold mb-3">About Us</h2>
                    <p class="mb-4">
                        At <strong>PaiCar</strong>, we are dedicated to delivering exceptional services that exceed expectations. 
                        With years of experience, a passionate team, and a commitment to innovation, we ensure that every client 
                        receives personalized attention and the highest quality solutions tailored to their needs.
                    </p>
                    <p class="mb-4">
                        Our journey began with a vision to create meaningful impacts in our community through service excellence. 
                        Today, we stand as a trusted partner for hundreds of satisfied clients, continuously pushing the boundaries of 
                        what's possible.
                    </p>
                    <a href="#services" class="btn btn-explore">Learn More About Our Services</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Cards Section -->
    <section id="our-service">
        <h1 class="text-center ">Our Services</h1>

        <div class="container py-3">
            <div class="row g-4">
                <!-- Daily Cleaning Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="card text-center">
                        <img src="{{ asset('assets/images/05.jpg') }}" class="card-img-top" alt="Daily Cleaning">
                        <div class="card-body">
                            <div class="card-icon mx-auto">
                                <i class="fas fa-car"></i>
                            </div>
                            <h5 class="card-title">Daily Cleaning</h5>
                            <p class="card-text">Keep your car spotless every day with our regular cleaning services.
                                Perfect for busy schedules!</p>
                               
                        </div>
                    </div>
                </div>

                <!-- Monthly Cleaning Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="card text-center">
                        <img src="{{ asset('assets/images/06.jpg') }}" class="card-img-top" alt="Monthly Cleaning">
                        <div class="card-body">
                            <div class="card-icon mx-auto">
                                <i class="fas fa-broom"></i>
                            </div>
                            <h5 class="card-title">Monthly Cleaning</h5>
                            <p class="card-text">Maintain your car's shine with our monthly service package. Great for
                                regular upkeep.</p>
                                
                        </div>
                    </div>
                </div>

                <!-- Urgent Cleaning Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="card text-center">
                        <img src="{{ asset('assets/images/03.jpg') }}" class="card-img-top" alt="Urgent Cleaning">
                        <div class="card-body">
                            <div class="card-icon mx-auto">
                                <i class="fas fa-water"></i>
                            </div>
                            <h5 class="card-title">Urgent Cleaning</h5>
                            <p class="card-text">Need a quick cleaning? Our urgent service guarantees fast and thorough
                                cleaning when you need it the most.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="our-plan">
        <div class="container pb-5">
            <h1 class="text-center mb-5">Our Plans</h1>
            <div class="row g-4">
        
                <!-- Basic Plan -->
                <div class="col-md-4">
                    <div class="card plan-card text-center border-primary">
                        <div class="card-header bg-primary text-white">
                            {{ucfirst($getPlan[0]->plan_name)}}
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">₹ {{$getPlan[0]->plan_price}}</h3>
                            <p class="card-text">A basic plan offering essential features for individuals.</p>
                        </div>
                        <div class="card-footer">
                            <form action="{{ url('selected-plan/'.$getPlan[0]->id) }}" method="get">
                                @csrf
                                <button class="btn btn-primary me-3" id="select-palan-3"
                                    type="submit">Choose Plan</button>
                            </form>
                        </div>
                    </div>
                </div>
        
                <!-- Standard Plan -->
                <div class="col-md-4">
                    <div class="card plan-card text-center border-success">
                        <div class="card-header bg-success text-white">
                            {{ucfirst($getPlan[1]->plan_name)}}
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">₹ {{$getPlan[1]->plan_price}}</h3>
                            <p class="card-text">A balanced plan offering great value for families.</p>
                        </div>
                        <div class="card-footer">
                            <form action="{{ url('selected-plan/'.$getPlan[1]->id) }}" method="get">
                                @csrf
                                <button class="btn btn-success me-3" id="select-palan-3"
                                    type="submit">Choose Plan</button>
                            </form>                        
                        </div>
                    </div>
                </div>
        
                <!-- Premium Plan -->
                <div class="col-md-4">
                    <div class="card plan-card text-center border-danger">
                        <div class="card-header bg-danger text-white">
                            {{ucfirst($getPlan[2]->plan_name)}}
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">₹ {{$getPlan[2]->plan_price}}</h3>
                            <p class="card-text">An all-inclusive plan offering premium features.</p>
                        </div>
                        <div class="card-footer">
                            <form action="{{ url('selected-plan/'.$getPlan[2]->id) }}" method="get">
                                @csrf
                                <button class="btn btn-danger me-3" id="select-palan-3"
                                    type="submit">Choose Plan</button>
                            </form>
                        </div>
                    </div>
                </div>
        
            </div>
        </div>
    </section>
    <section id="footer">
        <footer style="background-color: #2a2a2a; color: #f4f4f4;" class="py-5">
            <div class="container">
                <div class="row">
                    <!-- Logo and About Section -->
                    <div class="col-md-4 mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <img src="path/to/logo.png" alt="Site Logo" style="height: 50px; margin-right: 10px;">
                            <h6 class="text-uppercase fw-bold mb-0" style="color: #f4a261;">PaiCar</h6>
                        </div>
                        <p class="small">
                            We specialize in delivering top-notch services that cater to your unique needs. Our mission is to ensure quality, trust, and reliability in every interaction.
                        </p>
                    </div>
        
                    <!-- Quick Links -->
                    <div class="col-md-4 mb-4">
                        <h6 class="text-uppercase fw-bold mb-3" style="color: #f4a261;">Quick Links</h6>
                        <ul class="list-unstyled small">
                            <li><a href="#" class="text-decoration-none text-light">Home</a></li>
                            <li><a href="#" class="text-decoration-none text-light">About</a></li>
                            <li><a href="#" class="text-decoration-none text-light">Services</a></li>
                            <li><a href="#" class="text-decoration-none text-light">Contact</a></li>
                        </ul>
                    </div>
        
                    <!-- Contact Section -->
                    <div class="col-md-4 mb-4">
                        <h6 class="text-uppercase fw-bold mb-3" style="color: #f4a261;">Get in Touch</h6>
                        <ul class="list-unstyled small">
                            <li><i class="bi bi-geo-alt-fill me-2"></i>456 Corporate Ave, Suite 300</li>
                            <li><i class="bi bi-envelope-fill me-2"></i>hello@yourcompany.com</li>
                            <li><i class="bi bi-telephone-fill me-2"></i>+1 (800) 123-4567</li>
                        </ul>
                        <div>
                            <a href="https://facebook.com" target="_blank" class="me-3 text-light"><i class="bi bi-facebook fs-5"></i></a>
                            <a href="https://twitter.com" target="_blank" class="me-3 text-light"><i class="bi bi-twitter fs-5"></i></a>
                            <a href="https://instagram.com" target="_blank" class="me-3 text-light"><i class="bi bi-instagram fs-5"></i></a>
                            <a href="https://linkedin.com" target="_blank" class="text-light"><i class="bi bi-linkedin fs-5"></i></a>
                        </div>
                    </div>
                </div>
    
                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <p class="small mb-0" style="color: #bbbbbb;">&copy; 2025 Paicar. Designed with ❤️ by Star Team.</p>
                    </div>
                </div>
            </div>
        </footer>
        
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.addEventListener('load', () => {
            const preloader = document.getElementById('preloader');
            preloader.style.display = 'none'; 
        });
    </script>

</body>

</html>

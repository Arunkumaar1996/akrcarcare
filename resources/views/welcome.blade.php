<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Car Wash Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

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
    <nav class="navbar navbar-expand-lg">
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
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
    

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

    <!-- Service Cards Section -->
    <section>
        <div class="container py-5">
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
                                <form action="{{ url('selected-plan/1') }}" method="get">
                                  @csrf
                                  <button class="btn btn-explore me-3" id="select-palan-3"
                                      type="submit">select</button>
                              </form>
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
                                <form action="{{ url('selected-plan/2') }}" method="get">
                                  @csrf
                                  <button class="btn btn-explore me-3" id="select-palan-3"
                                      type="submit">select</button>
                              </form>
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
                            <form action="{{ url('selected-plan/3') }}" method="get">
                                @csrf
                                <button class="btn btn-explore me-3" id="select-palan-3"
                                    type="submit">select</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Preloader functionality
        window.addEventListener('load', () => {
            const preloader = document.getElementById('preloader');
            preloader.style.display = 'none'; // Hide preloader after images are loaded
        });
    </script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paicar || Car Wash Service</title>
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
    <style>
        /* Background Gradient or Image */
        .background-section {
            background: linear-gradient(to right, #ff7e5f, #feb47b); /* Gradient background */
            /* OR use background image like below */
            /* background: url('path/to/your-image.jpg') no-repeat center center fixed; */
            background-size: cover;
            /* min-height: 100vh; */
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
        }

        .comment-form-container {
            background-color: rgba(255, 255, 255, 0.85); /* Slightly transparent background for form */
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 100%;
            max-width: 500px; /* Compact width */
            padding: 20px;
        }

        h1 {
            font-size: 22px;
            margin-bottom: 20px;
        }

        .form-control {
            padding: 8px 12px; /* Reduced padding for compact design */
            font-size: 14px; /* Smaller font size */
            border-radius: 4px;
        }

        .btn-primary {
            padding: 10px 20px;
            font-size: 14px;
            width: 100%;
            border-radius: 4px;
        }

        .alert {
            margin-bottom: 15px;
        }

        /* Form label styling */
        .form-label {
            font-weight: bold;
        }

        /* Error message styling */
        .text-danger {
            font-size: 12px;
        }

        /* Success message styling */
        .alert-success {
            font-size: 14px;
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
                    <img src="{{ asset('assets/images/04.jpg') }}" class="img-fluid rounded shadow"
                        alt="About Us Image">
                </div>

                <!-- Right Column: Content -->
                <div class="col-md-6">
                    <h2 class="text-uppercase fw-bold mb-3">About Us</h2>
                    <p class="mb-4">
                        At <strong>PaiCar</strong>, we are dedicated to delivering exceptional services that exceed
                        expectations.
                        With years of experience, a passionate team, and a commitment to innovation, we ensure that
                        every client
                        receives personalized attention and the highest quality solutions tailored to their needs.
                    </p>
                    <p class="mb-4">
                        Our journey began with a vision to create meaningful impacts in our community through service
                        excellence.
                        Today, we stand as a trusted partner for hundreds of satisfied clients, continuously pushing the
                        boundaries of
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
                    <div class="card plan-card text-center border-primary"
                        data-default-price="{{ $getPlan[0]->plan_price }}">
                        <div class="card-header bg-primary text-white">
                            {{ ucfirst($getPlan[0]->plan_name) }}
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">₹ <span class="plan-price">{{ $getPlan[0]->plan_price }}</span>
                            </h3>
                            <p class="card-text">A basic plan offering essential features for individuals.</p>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-12 col-md-5 p-0">
                                <label for="carType" class="form-label form-label-sm">Car Type</label>
                            </div>
                            <div class="col-12 col-md-7">
                                <select class="form-select form-select-sm carType" name="car_type" required>
                                    <option value="Basic plan" data-type-price="0" selected>Basic plan</option>
                                    @foreach ($carPrices as $carPrice)
                                        <option data-type-price ="{{ $carPrice->price }}"
                                            value="{{ strtoUpper($carPrice->car_type) }}"
                                            {{ old('carType') == strtoUpper($carPrice->car_type) ? 'selected' : '' }}>
                                            {{ strtoUpper($carPrice->car_type) }}</option>
                                    @endforeach

                                </select>
                                <div class="invalid-feedback">Select car type.</div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary me-3 select-plan" id="select-plan-0" type="button"
                                data-plan-name="{{ $getPlan[0]->plan_name }}" data-plan-id="{{ $getPlan[0]->id }}"
                                data-bs-toggle="offcanvas" data-bs-target="#serviceFormOffcanvas"
                                aria-controls="serviceFormOffcanvas">Choose
                                Plan</button>
                        </div>
                    </div>
                </div>

                <!-- Standard Plan -->
                <div class="col-md-4">
                    <div class="card plan-card text-center border-success"
                        data-default-price="{{ $getPlan[1]->plan_price }}">
                        <div class="card-header bg-success text-white">
                            {{ ucfirst($getPlan[1]->plan_name) }}
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">₹ <span class="plan-price">{{ $getPlan[1]->plan_price }}</span>
                            </h3>
                            <p class="card-text">A balanced plan offering great value for families.</p>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-12 col-md-5 p-0">
                                <label for="carType" class="form-label form-label-sm">Car Type</label>
                            </div>
                            <div class="col-12 col-md-7">
                                <select class="form-select form-select-sm carType" name="car_type" required>
                                    <option value="Basic plan" data-type-price="0" selected>Basic plan</option>
                                    @foreach ($carPrices as $carPrice)
                                        <option data-type-price ="{{ $carPrice->price }}"
                                            value="{{ strtoUpper($carPrice->car_type) }}"
                                            {{ old('carType') == strtoUpper($carPrice->car_type) ? 'selected' : '' }}>
                                            {{ strtoUpper($carPrice->car_type) }}</option>
                                    @endforeach

                                </select>
                                <div class="invalid-feedback">Select car type.</div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success me-3 select-plan" id="select-plan-1" type="button"
                                data-plan-name="{{ $getPlan[1]->plan_name }}" data-plan-id="{{ $getPlan[1]->id }}"
                                data-bs-toggle="offcanvas" data-bs-target="#serviceFormOffcanvas"
                                aria-controls="serviceFormOffcanvas">Choose
                                Plan</button>
                        </div>
                    </div>
                </div>

                <!-- Premium Plan -->
                <div class="col-md-4">
                    <div class="card plan-card text-center border-danger"
                        data-default-price="{{ $getPlan[2]->plan_price }}">
                        <div class="card-header bg-danger text-white">
                            {{ ucfirst($getPlan[2]->plan_name) }}
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">₹ <span class="plan-price">{{ $getPlan[2]->plan_price }}</span>
                            </h3>
                            <p class="card-text">An all-inclusive plan offering premium features.</p>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-12 col-md-5 p-0">
                                <label for="carType" class="form-label form-label-sm">Car Type</label>
                            </div>
                            <div class="col-12 col-md-7">
                                <select class="form-select form-select-sm carType" name="car_type" required>
                                    <option value="Basic plan" data-type-price="0" selected>Basic plan</option>
                                    @foreach ($carPrices as $carPrice)
                                        <option data-type-price ="{{ $carPrice->price }}"
                                            value="{{ strtoUpper($carPrice->car_type) }}"
                                            {{ old('carType') == strtoUpper($carPrice->car_type) ? 'selected' : '' }}>
                                            {{ strtoUpper($carPrice->car_type) }}</option>
                                    @endforeach

                                </select>
                                <div class="invalid-feedback">Select car type.</div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-danger me-3 select-plan" data-plan-id="{{ $getPlan[2]->id }}"
                                data-plan-name="{{ $getPlan[2]->plan_name }}" id="select-plan-2" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#serviceFormOffcanvas"
                                aria-controls="serviceFormOffcanvas">Choose
                                Plan</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- Commands section --}}
    <section>
        <style>
            .contact-info {
              margin-bottom: 20px;
            }
            .contact-info i {
              font-size: 1.5rem;
              margin-right: 10px;
              color: #28a745;
              border-radius: 50%;
              padding: 10px;
              transition: background-color 0.3s ease, color 0.3s ease;
            }
            .contact-info i:hover {
              background-color: #28a745;
              color: #fff;
            }
            .contact-map iframe {
              width: 100%;
              height: 250px;
              border: 0;
            }
            @media (max-width: 768px) {
              .contact-section {
                flex-direction: column;
              }
              .contact-map iframe {
                height: 200px;
              }
            }
          </style>
         <div class="container py-5">
            <h1 class="text-center ">Contact</h1>
            <div class="row contact-section d-flex align-items-start">
              <!-- Contact Info Section -->
              <div class="col-lg-5 mb-4">
                <div class="contact-info">
                  <i class="bi bi-geo-alt"></i>
                  <span><strong>Address:</strong>no.34, new street, chennai, TN-600001</span>
                </div>
                <div class="contact-info">
                  <i class="bi bi-telephone"></i>
                  <span><strong>Call Us:</strong> +91 7418191487</span>
                </div>
                <div class="contact-info">
                  <i class="bi bi-envelope"></i>
                  <span><strong>Email Us:</strong> pai@gmail.com</span>
                </div>
                <div class="contact-map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021.9065476040427!2d-74.00601528459563!3d40.71277597933061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQyJzQ2LjAiTiA3NMKwMDAnMTIuMCJX!5e0!3m2!1sen!2sus!4v1617972967842!5m2!1sen!2sus"></iframe>
                </div>
              </div>
        
              <!-- Contact Form Section -->
              <div class="col-lg-7">
                <form action="{{ route('contact.store') }}" method="POST" class="p-4 border rounded">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Write your message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Send Message</button>
                </form>
              </div>
            </div>
          </div>
    </section>

    {{-- Footer section --}}
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
                            We specialize in delivering top-notch services that cater to your unique needs. Our mission
                            is to ensure quality, trust, and reliability in every interaction.
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
                            <a href="https://facebook.com" target="_blank" class="me-3 text-light"><i
                                    class="bi bi-facebook fs-5"></i></a>
                            <a href="https://twitter.com" target="_blank" class="me-3 text-light"><i
                                    class="bi bi-twitter fs-5"></i></a>
                            <a href="https://instagram.com" target="_blank" class="me-3 text-light"><i
                                    class="bi bi-instagram fs-5"></i></a>
                            <a href="https://linkedin.com" target="_blank" class="text-light"><i
                                    class="bi bi-linkedin fs-5"></i></a>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <p class="small mb-0" style="color: #bbbbbb;">&copy; 2025 Paicar. Designed with ❤️ by Star
                            Team.</p>
                    </div>
                </div>
            </div>
        </footer>

    </section>

    {{-- offcanvas --}}
    {{-- offcanvas --}}
    {{-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#serviceFormOffcanvas"
        aria-controls="serviceFormOffcanvas">
        Open Form
    </button> --}}

    <!-- Offcanvas -->
    <div class="offcanvas offcanvas-start w-100" tabindex="-1" id="serviceFormOffcanvas"
        aria-labelledby="serviceFormOffcanvasLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="serviceFormOffcanvasLabel">Service Form</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body" style="background-color: saddlebrown;">
            <!-- Your Form Goes Here -->
            <form action="{{ route('serviceForm.store') }}" method="POST" id="serviceForm"
                class="needs-validation" novalidate>
                @csrf

                <!-- Service Type & Price Fieldset -->
                <fieldset class="mb-4">
                    <legend class="fw-bold">Service Details</legend>

                    <div class="row g-2">
                        <!-- Service Type -->
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label for="serviceType" class="form-label">Service Type *</label>
                                <select class="form-select" id="serviceType" name="service_type" required disabled>

                                </select>

                                <div class="invalid-feedback">Select a service type.</div>
                            </div>
                        </div>

                        <!-- Service Price -->
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label for="servicePrice" class="form-label">Service Price *</label>
                                <input type="number" class="form-control" value="" id="servicePrice"
                                    name="servicePrice" placeholder="Enter price" required disabled>
                                <input type="hidden" id="service_type" name="service_type_name" value="">
                                <input type="hidden" id="service_type_price" name="service_type_price"
                                    value="">
                                <input type="hidden" id="car_type" name="car_type" value="">
                                <div class="invalid-feedback">Enter service price.</div>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <!-- Client Details Fieldset -->
                <fieldset class="mb-4">
                    <legend class="fw-bold">Client Details</legend>

                    <div class="row g-2">
                        <!-- Client Name -->
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label for="clientName" class="form-label">Client Name *</label>
                                <input type="text" class="form-control" id="clientName"
                                    value="{{ old('clientName') }}" name="client_name" placeholder="Enter name"
                                    required>
                                <div class="invalid-feedback">Enter client's name.</div>
                            </div>
                        </div>

                        <!-- Client Email -->
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label for="clientEmail" class="form-label">Client Email *</label>
                                <input type="email" class="form-control" id="client_email"
                                    value="{{ old('clientEmail') }}" name="client_email" placeholder="Enter email"
                                    required>
                                <div class="invalid-feedback">Enter valid email.</div>
                            </div>
                        </div>

                        <!-- Client Phone -->
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label for="clientPhone" class="form-label">Phone No *</label>
                                <input type="tel" class="form-control" id="client_phone"
                                    value="{{ old('clientPhone') }}" name="client_phone" placeholder="Enter phone"
                                    pattern="[0-9]{10}" required>
                                <div class="invalid-feedback">Enter valid phone number.</div>
                            </div>
                        </div>

                        <!-- Door/Flat No -->
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label for="doorNo" class="form-label">Door/Flat No *</label>
                                <input type="text" class="form-control" id="doorNo"
                                    value="{{ old('doorNo') }}" name="door_no" placeholder="Enter number" required>
                                <div class="invalid-feedback">Enter door/flat no.</div>
                            </div>
                        </div>

                        <!-- Address Line 1 -->
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="address1" class="form-label">Address Line 1 *</label>
                                <input type="text" class="form-control" id="address1"
                                    value="{{ old('address1') }}" name="address1" placeholder="Enter address"
                                    required>
                                <div class="invalid-feedback">Enter address.</div>
                            </div>
                        </div>

                        <!-- City -->
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label for="city" class="form-label">City *</label>
                                <input type="text" class="form-control" id="city"
                                    value="{{ old('city') }}" name="city" placeholder="Enter city" required>
                                <div class="invalid-feedback">Enter city.</div>
                            </div>
                        </div>

                        <!-- State -->
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label for="state" class="form-label">State *</label>
                                <select class="form-control" id="state" name="state" required>
                                    <option value="" disabled selected>Select a state</option>
                                    @foreach ($states as $state)
                                        <option value="{{ $state }}"
                                            {{ old('state') == $state ? 'selected' : '' }}>
                                            {{ $state }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">Please select a state.</div>
                            </div>
                        </div>

                        <!-- Pincode -->
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label for="pin_code" class="form-label">Pincode *</label>
                                <input type="text" class="form-control" id="pin_code"
                                    value="{{ old('pin_code') }}" name="pin_code" placeholder="Enter pincode"
                                    required>
                                <div class="invalid-feedback">Enter valid pincode.</div>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <!-- Car Details Fieldset -->
                <fieldset class="mb-4">
                    <legend class="fw-bold">Car Details</legend>

                    <div class="row g-2">
                        <!-- Car No -->
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="carNo" class="form-label">Car No (TN 00 AA 0000) *</label>
                                <div class="d-flex gap-2">
                                    <!-- State Code -->
                                    <input type="text" class="form-control" value="{{ old('stateCode') }}"
                                        id="stateCode" name="state_code" maxlength="2" pattern="[A-Za-z]{2}"
                                        placeholder="TN" oninput="this.value = this.value.toUpperCase()" required>
                                    <!-- District Code -->
                                    <input type="text" class="form-control" value="{{ old('districtCode') }}"
                                        id="district_code" name="district_code" maxlength="2" pattern="[0-9]{2}"
                                        placeholder="00" oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                        required>
                                    <!-- Series Code -->
                                    <input type="text" class="form-control" value="{{ old('seriesCode') }}"
                                        id="seriesCode" name="series_code" maxlength="2" pattern="[A-Za-z]{2}"
                                        placeholder="AA" oninput="this.value = this.value.toUpperCase()" required>
                                    <!-- Number Code -->
                                    <input type="text" class="form-control" value="{{ old('numberCode') }}"
                                        id="numberCode" name="number_code" maxlength="4" pattern="[0-9]{4}"
                                        placeholder="0000" oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                        required>
                                </div>
                                <div class="invalid-feedback">Enter a valid car number in the format TN 00 AA 0000.
                                </div>
                            </div>
                        </div>

                        <!-- Car Type -->
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label for="carType" class="form-label">Car Type *</label>
                                <select class="form-select" id="selectedCarType" name="car_type" required>
                                    <option value="">Choose</option>
                                    <option value="SUV" {{ old('carType') == 'SUV' ? 'selected' : '' }}>SUV
                                    </option>
                                    <option value="Sedan" {{ old('carType') == 'Sedan' ? 'selected' : '' }}>Sedan
                                    </option>
                                    <option value="Hatchback" {{ old('carType') == 'Hatchback' ? 'selected' : '' }}>
                                        Hatchback</option>
                                    <option value="Foreign" {{ old('carType') == 'Foreign' ? 'selected' : '' }}>
                                        Foreign</option>
                                </select>
                                <div class="invalid-feedback">Select car type.</div>
                            </div>
                        </div>

                        <!-- Car Name -->
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label for="carName" class="form-label">Car Name *</label>
                                <input type="text" class="form-control" id="carName"
                                    value="{{ old('carName') }}" name="car_name" placeholder="Enter car name"
                                    required>
                                <div class="invalid-feedback">Enter car name.</div>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <!-- Submit Button -->
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-explore">Submit</button>
                </div>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.addEventListener('load', () => {
            const preloader = document.getElementById('preloader');
            preloader.style.display = 'none';
        });
    </script>
    <script>
        (() => {
            'use strict';
            const forms = document.querySelectorAll('.needs-validation');
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        // JavaScript code to populate form fields when the edit button is clicked
        document.addEventListener('DOMContentLoaded', function() {
            const editButtons = document.querySelectorAll('.select-plan');

            editButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const card = this.closest('.card');
                    const selectedOption = card.querySelector('.plan-price');
                    const careTypeSelect = card.querySelector('.carType').value;
                    console.log(careTypeSelect, 'careTypeSelect');

                    const planPrice = selectedOption.textContent.trim();

                    // Get the data attributes from the clicked button
                    const planId = button.getAttribute('data-plan-id');
                    const planName = button.getAttribute('data-plan-name').toUpperCase();
                    // const planPrice = button.getAttribute('data-plan-price');

                    console.log(Option, '    ', planId, planName, 'test');
                    // // Set the form values
                    // document.getElementById('plan_type').value = planName;
                    // document.getElementById('plan_price').value = planPrice;

                    // // Optionally, set the hidden input for the plan ID if you are updating it
                    // document.getElementById('plan_id_edit').value = planId;
                    $.ajax({
                        url: "{{ route('find.plan.data') }}",
                        type: 'POST', // or GET if you're just retrieving data
                        data: {
                            _token: '{{ csrf_token() }}', // CSRF token for security
                            id: planId // Passing the id in the request
                        },
                        success: function(response) {
                            console.log(response);

                            $('#serviceType').prop('disabled', true).empty()
                                .append(
                                    `<option value="${planName}">${planName}</option>`
                                ); // Add default option
                            // $('#service_type').value()
                            $('#selectedCarType').prop('disabled', true).empty()
                                .append(
                                    `<option value="${careTypeSelect}">${careTypeSelect}</option>`
                                );

                            document.getElementById('servicePrice').value = planPrice;
                            document.getElementById('service_type_price').value =
                                planPrice;
                            document.getElementById('service_type').value = planName;
                            document.getElementById('car_type').value = careTypeSelect;
                        },
                        error: function(xhr, status, error) {
                            console.log('Error:', error); // Handle errors here
                            var offcanvas = new bootstrap.Offcanvas($(
                                '#serviceFormOffcanvas')[0]);
                            offcanvas.hide();
                        }
                    });

                });
            });
        });
    </script>
    <script>
        // Function to update plan price
        function updatePlanPrice(card, selectedOption) {
            const planPriceElement = card.querySelector('.plan-price');
            const carPrice = parseFloat(selectedOption.getAttribute('data-type-price'));
            const planBasePrice = parseFloat(card.getAttribute('data-default-price'));

            const updatedPrice = planBasePrice + carPrice;
            planPriceElement.textContent = updatedPrice.toFixed(2); // Format the price to 2 decimal places
        }

        // Initialize the page with default selected car type and price
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.carType').forEach(function(selectElement) {
                const selectedOption = selectElement.querySelector('option:checked');
                if (selectedOption && selectedOption.value !== '0') {
                    const card = selectElement.closest('.card');
                    updatePlanPrice(card, selectedOption);
                }
            });
        });

        // Update plan price when car type is selected
        document.querySelectorAll('.carType').forEach(function(selectElement) {
            selectElement.addEventListener('change', function() {
                const selectedOption = this.options[this.selectedIndex];
                const card = this.closest('.card');
                updatePlanPrice(card, selectedOption);
            });
        });
    </script>
</body>

</html>
